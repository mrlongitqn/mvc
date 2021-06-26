<?php
define('ROOT', __DIR__); //Lấy đường dẫn đến thư mục hiện tại
//Controller nào? Action
//Thêm nhân viên: => Controller=Nhân Viên, Action: Thêm
$get_controller = isset($_GET['c'])?$_GET['c']:'Home'; //Kiểm tra controller
$get_action = isset($_GET['a'])?$_GET['a']:'Index'; //Kiem tra Action

$controller = $get_controller.'Controller';
$file_controller = 'Controllers/'.$controller.'.php';

if(!file_exists($file_controller)){ //Kiểm tra file controller có tồn tại không
   //Xử lý nếu không tồn tại Controller
    echo 'File: '.$file_controller.' không tồn tại';
    die();
}
//else{
//    echo 'File: '.$file_controller. ' tồn tại';
//    die();
//}
require_once $file_controller;//Chèn file controller vào index

//Khởi tạo đối tượng.
$controllerObject = new $controller();
//Kiểm tra action có tồn tại không
if(!method_exists($controllerObject,$get_action)){
    echo '404 - trang không tồn tại. Action k ton tai';
    die();
}
//Gọi đến action mà người dùng yêu cầu
$controllerObject->{$get_action}();