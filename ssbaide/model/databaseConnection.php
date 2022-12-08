<?php

$servername = "localhost";
$username = "username";
$password = "";
$database = "ssbaide";

$connection = new mysqli($servername, $username, $password,$database);

if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

?>