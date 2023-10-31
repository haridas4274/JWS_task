<?php

include("../config/db_con.php");
session_start();
ob_start();
// print_r($db);
$user =new crud();

unset($_POST['c_password']);

// $isset=$user->select()  //already user there or not part pending.

$register=$user->insert('users',$_POST);

if(is_numeric($register)){

    $_SESSION['user_id']=$register;

    echo 1;
}else{
    echo 0;
}


// echo json_encode($register);

?>