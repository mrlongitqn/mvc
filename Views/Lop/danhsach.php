<?php
require_once ROOT.'/Views/Layout/header.php';
?>
    <div class="container-fluid">

    <div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Danh sách lớp
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>STT</th>
        <th>Mã lớp</th>
        <th>Tên lớp</th>
        <th>Khoa trực thuộc</th>
        <th>Chức năng</th>
    </tr>
    </thead>
        <tbody>
        <?php
        $i = 1;
        foreach ($data as $lop) {
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $lop[0] ?></td>
                <td><?= $lop[1] ?></td>
                <td><?= $lop[2] ?></td>
                <td><a href="?c=Lop&a=ChinhSua&malop=<?= $lop[0] ?>">Chỉnh sửa</a> | <a
                            href="?c=Lop&a=Xoa&malop=<?= $lop[0] ?>">Xóa</a></td>
            </tr>
            <?php
            $i++;
        }
        ?>
        </tbody>
    <tfoot>
<tr>
    <th>STT</th>
    <th>Mã lớp</th>
    <th>Tên lớp</th>
    <th>Khoa trực thuộc</th>
    <th>Chức năng</th>
</tr>
    </tfoot>
    </table>


<?php
require_once ROOT.'/Views/Layout/footer.php';
?>