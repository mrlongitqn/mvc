<?php


class UserModel
{
    public $id;
    public $name;
    public $email;
    public $age;
    public $address;
    public $password;

    function StoreDb(UserModel $userModel){
        $query = "INSERT INTO User VALUES('')";
        //lưu vào csdl
    }

    function ToList(){
        $query = 'SELECT * FROM User';
        //Truy vấn đến csdl
        $u1 = new UserModel();
        $u1->id = 1;
        $u1->name = 'Nguyễn Văn A';
        $u1->age = 20;

        $u2 = new UserModel();
        $u2->id = 2;
        $u2->name = 'Nguyễn Văn B';
        $u2->age = 20;
        $u3 = new UserModel();
        $u3->id = 3;
        $u3->name = 'Nguyễn Văn C';
        $u3->age = 20;
        $u4 = new UserModel();
        $u4->id = 4;
        $u4->name = 'Nguyễn Văn D';
        $u4->age = 20;
        $u5 = new UserModel();
        $u5->id = 5;
        $u5->name = 'Nguyễn Văn E';
        $u5->age = 20;
        $data = [
            $u1, $u2, $u3, $u4, $u5
        ];
        return $data;
    }
}