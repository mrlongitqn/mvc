<?php
require_once ROOT.'/Models/UserModel.php';
class UserController
{
    private $userModel;
    function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function Index(){

//        $listUser = $this->userModel->ToList();
//        require_once ROOT.'/Views/User/index.php';
    }

    public function Add(){
        require_once ROOT.'/Views/User/add.php';
    }
    public function Save(){
        $username = $_POST['name'];
        $pass = $_POST['password'];
        //
        echo 'Bạn đã nhập username='.$username.' và mk: '.$pass;
    }
}