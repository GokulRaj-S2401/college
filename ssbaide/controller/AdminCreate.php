<?php

include('../model/databaseConnection.php');
header("Content-Type: application/json; charset=UTF-8");

if(isset($_POST['signup'])){
    $data = json_decode($_POST['data'],true);
    $user_name = $data['data']['user_name'];
    $user_email = $data['data']['user_email'];
    $user_password = md5($data['data']['user_password']);
    $secret_key = $data['data']['secret_key'];
    $check_qry = "SELECT * FROM admin WHERE user_email='$user_email'";
    $result = $connection->query($check_qry);
    
    if($result->num_rows==0){
        if($secret_key == md5("hellossb")){
            $qry = "INSERT INTO admin(user_name,user_email,user_password) VALUES('$user_name','$user_email','$user_password')";
            if($connection->query($qry)){
                echo json_encode(["status"=>200]);
            }
        }
        else{
            echo json_encode(["status"=>300]);
        }
    }
    else{
        echo json_encode(["status"=>100]);
    }
}
else{
    echo json_encode(["status"=>"bad request"]);
}

?>