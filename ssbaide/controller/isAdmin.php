<?php
if(!isset($_COOKIE['admin'])){
    header('Location:/college/ssbaide');
}
$admin = json_decode($_COOKIE['admin']);
