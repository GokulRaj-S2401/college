<?php

include('../model/databaseConnection.php');
header("Content-Type: application/json; charset=UTF-8");


if(isset($_POST['signin'])){
    $data = json_decode($_POST['data'],true);
    $user_email = $data['data']['user_email'];
    $user_password = md5($data['data']['user_password']);
    $qry = "SELECT * FROM admin WHERE user_email='$user_email' AND user_password='$user_password'";
    $sessionData = array("user_name"=>"","user_email"=>"");
    $result = $connection->query($qry);
    if($result->num_rows>=1){
        while($row=$result->fetch_assoc()){
            $sessionData["user_name"] = $row["user_name"];
            $sessionData["user_email"] = $row["user_email"];
        }
        setcookie("admin",json_encode($sessionData),time()+(86400*3),'/');
        echo json_encode(["status"=>200]);
    }
    else{
        echo json_encode(["status"=>100]);
    }
}
else{
    echo json_encode(["status"=>400]);
}

?>