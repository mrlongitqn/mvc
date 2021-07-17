<?php


class HomeController
{

    public function Index()
    {
        // Mở kết nối tới cơ sở dữ liệu
        $mysqli = new mysqli('localhost', 'root', '', 'mvc');
        //Chọn csdl cần xử lý
        //$mysqli->select_db('mvc');
        //Chọn charset=utf8
        //$mysqli->query("SET NAMES 'utf8'") ;
        //Xử lý dữ liệu
        //Truy xuất dữ liệu
      //  $query = "SELECT * FROM categories";
        //Thêm dữ liệu
        $query = "INSERT INTO categories(`name`, `desc`) VALUES('Pháp luật', 'pháp luật Việt Nam')";
        //Cập nhật dữ liệu

        $result = $mysqli->query($query);
        var_dump($result);
        die();
//         $row = $result->fetch_row()  ;
//        echo  $row[1]."<br/>";
//
//        $row1 = $result->fetch_row()  ;
//        echo  $row1[1];
//        die();
//        while($row = $result->fetch_row())
//        {
//            echo $row[0] . " " . $row[1]; echo "<br />";
//        }
       // die();
        // $row = $result->fetch_assoc();
        //MYSQLI_NUM, MYSQLI_ASSOC, or MYSQLI_BOTH
        //$row = $result->fetch_array(MYSQLI_BOTH);
        $row = $result->fetch_all();
        //Dọn dẹp
        $result->close();
        //Đóng kết nối
        $mysqli->close();



        var_dump($row);
    }

    public function Add()
    {
        echo 'day la action add';
    }
    function Edit(){
        echo 'Đây là function edit';
    }
}