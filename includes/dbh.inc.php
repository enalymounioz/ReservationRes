<?php

$dbServername = "127.0.0.1";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

