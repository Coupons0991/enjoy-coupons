<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db1";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){

    die("failed to connect!");
}
?>