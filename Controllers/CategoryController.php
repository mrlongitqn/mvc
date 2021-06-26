<?php

class CategoryController
{
    //Hiển thị danh sách danh mục
    function Index()
    {
        //truy vấn dữ liệu từ database
        $categories = [
            [1, 'Truy nã', 'Pháp luật', ''],
            [2, 'Hình sự', 'Pháp luật', ''],
            [3, 'Nghi vấn', 'Pháp luật', ''],
            [4, 'Hài Kịch', 'Giải trí', ''],
            [5, 'Nghe nhạc', 'Giải trí', ''],
            [6, 'Hình ảnh', 'Giải trí', ''],
        ];
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
        echo $_POST['name'] . '<br/>';
        echo $_POST['parent'] . '<br/>';
        echo $_POST['desc'] . '<br/>';
        //Thêm dữ liệu vào csdl
        header('Location: index.php?c=Category');
        exit;
    }

    //Chỉnh sửa danh mục
    function Update()
    {
        //Lấy id được gởi từ client
        //truy xuất dữ liệu từ id

        //Lấy thông tin cần sửa
        $name = $_GET['name'];
        $parent = $_GET['parent'];
        $desc = $_GET['desc'];
        //Hiển thị lên view
        require_once 'Views/Category/Update.php';
    }

    function SaveUpdate()
    {
        //Nhận dữ liệu cần sửa
        echo $_POST['name'] . '<br/>';
        echo $_POST['parent'] . '<br/>';
        echo $_POST['desc'] . '<br/>';

        //Sửa và lưu vào CSDL
        header('Location: index.php?c=Category');
        exit;
    }

    function Delete()
    {
        $name = $_GET['name'];
        //Thực hiện việc xóa theo giá trị gởi lên
        //Quay lại danh sách
        header('Location: index.php?c=Category');
        //echo "Dữ liệu cần xóa là $name";
    }

    //Xóa danh mục
}