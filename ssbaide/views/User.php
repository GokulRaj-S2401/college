<?php
if(isset($_COOKIE['user'])){
    $data = json_decode($_COOKIE['user']);
    if($data->user_destination == "HOD" ){
        header('Location:hod.php');
    }
}
else if(isset($_COOKIE['admin'])){
    $data = json_decode($_COOKIE['admin']);
    header('Location:admin.php');
}
else{
    header('Location:/college/ssbaide');
}

?>