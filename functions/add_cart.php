<?php

include("../config/db_con.php");
session_start();
ob_start(); 
$cart =new crud();

// print_r($_POST);
extract($_POST); //pro_id


$data=$cart->select('products', '*', $where="pro_id=$pro_id", $debug=false);

$ins=array(
    'pro_for_id'=>$pro_id,
    'user_for_id'=>$_SESSION['user_id'],
    'pro_quantity'=>1
);
$ins_data=$cart->insert('cart_item',$ins);


// $amount=

// echo json_encode($ins_data);

if($ins_data==true){
    // $fetch_data=$user->select("users","*","`email`='$email' AND `password`='$password'", $debug=false);
    // $_SESSION['user_id']=$fetch_data['user_id'];
    echo true;
}else{
    echo false;
}