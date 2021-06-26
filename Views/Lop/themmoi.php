<html>
<form action="?c=Lop&a=Luu" method="post">
    <p>Mã lớp: <input name="MaLop" type="text"></p>
    <p>Tên lớp: <input name="TenLop" type="text"></p>
    <p>Tên Khoa: <select name="MaKhoa">
            <?php
            foreach ($data as $khoa){
                ?>
                <option value="<?=$khoa[0]?>"><?=$khoa[1]?></option>
            <?php
            }
            ?>

        </select>
    </p>
    <input type="submit" value="Lưu lại">
</form>
</html>
