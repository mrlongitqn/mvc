<html>
<form action="?c=Lop&a=LuuSua" method="post">
    <p>Mã lớp: <input readonly name="MaLop" value="<?=$lop[0]?>" type="text"></p>
    <p>Tên lớp: <input name="TenLop" value="<?=$lop[1]?>" type="text"></p>
    <p>Tên Khoa:
        <select name="MaKhoa">
            <?php
            foreach ($data as $khoa){
                ?>
                <option <?php if($khoa[0]==$lop[2]) echo 'selected';?>
                    value="<?=$khoa[0]?>"><?=$khoa[1]?></option>
                <?php
            }
            ?>
        </select>
    </p>
    <input type="submit" value="Lưu lại">
</form>
</html>
