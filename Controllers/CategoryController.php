<?php

class CategoryController
{
    //Hiển thị danh sách danh mục
    function Index(){
        //truy vấn dữ liệu từ database
        $categories =[
            [1, 'Truy nã', 'Pháp luật',''],
            [2, 'Hình sự', 'Pháp luật',''],
            [3, 'Nghi vấn', 'Pháp luật',''],
            [4, 'Hài Kịch', 'Giải trí',''],
            [5, 'Nghe nhạc', 'Giải trí',''],
            [6, 'Hình ảnh', 'Giải trí',''],
        ];
        //Hiển thị lên view
        require_once 'Views/Category/Index.php';
    }
    //Thêm danh mục mới

    //Chỉnh sửa danh mục

    //Xóa danh mục
}