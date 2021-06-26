<?php


class LopController
{
    //CRUD
    function DanhSach()
    {
        $mysqli = new mysqli('localhost', 'root', '', 'quanlysinhvien');
        $query = 'SELECT lop.MaLop, lop.TenLop, khoa.TenKhoa FROM lop, khoa
WHERE lop.MaKhoa = khoa.MaKhoa';
        $result = $mysqli->query($query);
        $data = $result->fetch_all();
        require_once ROOT . '/Views/Lop/danhsach.php';
    }

    function ThemMoi()
    {
        $mysqli = new mysqli('localhost', 'root', '', 'quanlysinhvien');
        $query = 'SELECT * FROM khoa';
        $result = $mysqli->query($query);
        $data = $result->fetch_all();
        require_once ROOT . '/Views/Lop/themmoi.php';
    }
    function Luu()
    {
        if (isset($_POST)) {
            $malop = $_POST['MaLop'];
            $tenlop = $_POST['TenLop'];
            $makhoa = $_POST['MaKhoa'];
            $mysqli = new mysqli('localhost', 'root', '', 'quanlysinhvien');
            $query = "INSERT INTO lop VALUES('$malop', '$tenlop', '$makhoa')";
            // echo $query;
            $result = $mysqli->query($query);
            header('location: index.php?c=Lop&a=DanhSach');
        }
    }

    function ChinhSua()
    {
        if (!isset($_GET['malop'])) {
            header('location: index.php?c=Lop&a=DanhSach');
        } else {
            $malop = $_GET['malop'];
            $mysqli = new mysqli('localhost', 'root', '', 'quanlysinhvien');
            $query = "SELECT * FROM lop WHERE MaLop='$malop'";
            $result = $mysqli->query($query);
            $data = $result->fetch_all();
            if (count($data) == 0) {
                header('location: index.php?c=Lop&a=DanhSach');
            } else {
                $lop = $data[0];
                $query = 'SELECT * FROM khoa';
                $result = $mysqli->query($query);
                $data = $result->fetch_all();
                require_once ROOT . '/Views/Lop/chinhsua.php';
            }
        }
    }

    function LuuSua()
    {
        if (isset($_POST)) {
            $malop = $_POST['MaLop'];
            $tenlop = $_POST['TenLop'];
            $makhoa = $_POST['MaKhoa'];
            $mysqli = new mysqli('localhost', 'root', '', 'quanlysinhvien');
            $query = "UPDATE lop
                        SET TenLop ='$tenlop' , MaKhoa =  '$makhoa'
                        WHERE MaLop ='$malop' ";
            $result = $mysqli->query($query);
            header('location: index.php?c=Lop&a=DanhSach');
        }
    }

    function Xoa()
    {
        if (!isset($_GET['malop'])) {
            header('location: index.php?c=Lop&a=DanhSach');
        } else {
            $malop = $_GET['malop'];
            $mysqli = new mysqli('localhost', 'root', '', 'quanlysinhvien');
            $query = "DELETE FROM lop WHERE MaLop='$malop'";
            $mysqli->query($query);
            header('location: index.php?c=Lop&a=DanhSach');
        }
    }
}