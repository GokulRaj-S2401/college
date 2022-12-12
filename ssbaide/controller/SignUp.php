<?php

include('../model/databaseConnection.php');
header("Content-Type: application/json; charset=UTF-8");

if(isset($_POST['signup'])){
    $data = json_decode($_POST['data'],true);
    $user_name = $data['data']['user_name'];
    $user_email = $data['data']['user_email'];
    $user_password = md5($data['data']['user_password']);
    $check_qry = "SELECT * FROM users WHERE user_email='$user_email'";
    $result = $connection->query($check_qry);

    if($result->num_rows >=1){
        echo json_encode(["status"=>100]);
    }
    else{
         $qry = "INSERT INTO users (user_name,user_email,user_password,user_destination,user_department,user_role) VALUES('$user_name','$user_email','$user_password','NONE','NONE','NONE')";
        if($connection->query($qry)){
        echo json_encode(["status"=>200]);
        }
    }
}
else{
    echo json_encode(["status"=>"bad request"]);
}




?>