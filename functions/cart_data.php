<?php

include("../config/db_con.php");
session_start();
ob_start(); 
$user =new crud();

// print_r($_POST);
$user_id=$_POST["user_id"];
$count=0;
$data=array();
// $data=$cart->select('cart_item', '*', $where="pro_id=$pro_id", $debug=false);
$qry="SELECT * FROM `cart_item` JOIN `products` ON `cart_item`.`pro_for_id`=`products`.`pro_id` WHERE `cart_item`.`user_for_id`='$user_id'";
$exc=$db->query($qry);




while($row = $exc->fetch_assoc()){
    $data[]=$row;
}
if($_POST["type"]=="count"){
    echo count($data);
}
if($_POST["type"]=="data"){
   
    echo json_encode($data);
}


// if($check>0){
//     $fetch_data=$user->select("users","*","`email`='$email' AND `password`='$password'", $debug=false);

//     $_SESSION['user_id']=$fetch_data['user_id'];
//     // echo json_encode($fetch_data);
//     echo true;
// }else{
//     echo false;
// }
