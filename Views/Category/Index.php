<html>
<body>
<h1>Danh sách danh mục</h1>
<a href="index.php?c=Category&a=Add">Thêm mới</a>
<table>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th>Hành động</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($categories as $category) {
        ?>
        <tr>
            <td><?= $category[0] ?></td>
            <td><?= $category[1] ?></td>
            <td><?= $category[2] ?></td>
            <td>
                <a href="index.php?c=Category&a=Update&id=<?= $category[0] ?>">Sửa</a>
                <a href="index.php?c=Category&a=Delete&id=<?= $category[0] ?>">Xóa</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>

