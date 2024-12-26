<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "user_management";

$connection =  mysqli_connect($servername, $username, $password, $database);


if (!$connection) {
    echo 'connection not working';
}
