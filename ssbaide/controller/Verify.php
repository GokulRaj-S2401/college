<?php
if(!isset($_COOKIE['user'])){
    header('Location:/college/ssbaide');
}
$user = json_decode($_COOKIE['user']);
