<?php

include("../config/db_con.php");
session_start();
ob_start(); 
$user =new crud();

// print_r($_POST);
extract($_POST);
$password=md5($password);
$check=$user->count("users","`email`='$email' AND `password`='$password'");
$test=$user->select("users","*","`email`='$email' AND `password`='$password'", $debug=true);
// print_r($check);
// print_r($test);
// print_r($check);
if($check>0){
    $fetch_data=$user->select("users","*","`email`='$email' AND `password`='$password'", $debug=false);

    $_SESSION['user_id']=$fetch_data['user_id'];
    // echo json_encode($fetch_data);
    echo true;
}else{
    echo false;
}
