<?php
/**
 * Created by PhpStorm.
 * User: rashu
 * Date: 23-08-19
 * Time: 00.04
 */
session_start();
include_once ('../../vendor/autoload.php');
use App\Utility\Utility;
use App\Message\Message;
use App\UserRegistration\Auth;

$auth = new Auth();

$status = $auth->setData($_POST);
$data = $auth->admin_is_registered();

if($data){
    $_SESSION['email'] = $_POST['email'];
    Utility::redirect("../../index.php");
}else{
//    Utility::redirect("../index.php");
    echo "authentication failed!";
}