<?php
session_start();    

$username = "root" ; 
$servername = "localhost";
$password = "";
$db_name = "f_g_club";
$conn = mysqli_connect($servername, $username, $password, $db_name);

if(!$conn){
    echo "Connection Failed !"; 
}