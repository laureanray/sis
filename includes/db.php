<?php 
//DATABASE CONNECTION
session_start();
$connection = mysqli_connect('localhost','root','','pupsis');

if(!$connection){
    die("Error " . mysqli_error($connection));
}


GLOBAL $connection;


?>