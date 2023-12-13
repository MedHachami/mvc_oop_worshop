<?php

require_once 'models/UserModel.php';

//
$userModel = new UserModel();

$usersData = $userModel->getAllUsers();





include_once 'views/home_view.php';