<?php
include_once 'models/UserModel.php';
if( empty($_GET['id']) ){
    header("location:index.php");
}
$id = $_GET['id'] ;
$userModel = new  UserModel();

if($_SERVER["REQUEST_METHOD"] === 'POST'){
    $data = [
        'id' =>$id ,
        'fullName' => trim($_POST['fullName']),
        'email' => trim($_POST['email']),
    ];
    if($userModel->updataUser($data)){
        header("location:index.php");
    }else{
        header("location:index.php?error=somthing_worng");
    }
}else{
    $user = $userModel->getUserById($id );
    include_once 'views/edit_view.php';


}



