<html>
<head>

</head>
<body>
<h1>
    Cập nhật danh mục bài viết
</h1>
<form action="index.php?c=Category&a=SaveUpdate" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <p>Tên danh mục: <input type="text" name="name" value="<?=$name?>"/></p>
    <p>Mô tả: <input type="text" name="desc" value="<?=$desc?>"/></p>
    <p>
        <input type="submit" value="Lưu lại">
    </p>
</form>
</body>
</html>