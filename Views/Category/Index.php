<html>
<body>
<h1>Danh sách danh mục</h1>
<table>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên danh mục</th>
        <th>Danh mục cha</th>
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
            <td><?= $category[3] ?></td>
            <td>Sửa | Xóa</td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</body>
</html>

