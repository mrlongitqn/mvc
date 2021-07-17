<?php

class CategoryController
{
    //Hiển thị danh sách danh mục
    function Index()
    {
        $mysqli = new mysqli('localhost', 'root', '', 'mvc');
        $query = "SELECT * FROM categories";
        $result = $mysqli->query($query);
        $categories = $result->fetch_all();
        $result->close();
        $mysqli->close();
        //Hiển thị lên view
        require_once 'Views/Category/Index.php';
    }

    //Thêm danh mục mới
    function Add()
    {
        require_once 'Views/Category/Add.php';
    }

    function Save()
    {
        //Nhận và xử lý dữ liệu
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        //Thêm dữ liệu vào csdl
        $mysqli = new mysqli('localhost', 'root', '', 'mvc');
        $query = "INSERT INTO categories(`name`, `desc`) VALUES('$name', '$desc')";
        $result = $mysqli->query($query);
        $mysqli->close();
        if($result)
            header('Location: index.php?c=Category');
        else echo  'Thêm lỗi';
        exit;
    }

    //Chỉnh sửa danh mục
    function Update()
    {
        //Lấy id được gởi từ client
        $id = $_GET['id'];
        //truy xuất dữ liệu từ id
        $mysqli = new mysqli('localhost', 'root', '', 'mvc');
        $query = "SELECT * FROM categories WHERE id=$id";
        $result = $mysqli->query($query);
        $category = $result->fetch_row();
        $result->close();
        $mysqli->close();
        //Lấy thông tin cần sửa
        $name = $category[1];
        $desc =  $category[2];
        //Hiển thị lên view
        require_once 'Views/Category/Update.php';
    }

    function SaveUpdate()
    {
        //Nhận dữ liệu cần sửa
        $id = $_POST['id'];
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        //mở kết nối
        $mysqli = new mysqli('localhost', 'root', '', 'mvc');
        //query update
        $query = "UPDATE categories SET `name`='$name', `desc`='$desc' WHERE id=$id";
        $result = $mysqli->query($query);
        $mysqli->close();
        if($result)
            header('Location: index.php?c=Category');
        else echo  'Cập nhật lỗi';
        exit;
    }

    function Delete()
    {
        $id = $_GET['id'];
        //mở kết nối
        $mysqli = new mysqli('localhost', 'root', '', 'mvc');
        //query update
        $query = "DELETE FROM categories WHERE id=$id";
        $result = $mysqli->query($query);
        $mysqli->close();
        if($result)
            header('Location: index.php?c=Category');
        else echo  'Xóa lỗi';
    }
}