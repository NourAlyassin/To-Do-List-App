<?php


// Connection
$conn = mysqli_connect("localhost","root","");

if(!$conn) {
    echo "Connect Error" . mysqli_connect_error();
}

// to make a query

$sql = "CREATE DATABASE IF NOT EXISTS todoapp";
$result = mysqli_query($conn,$sql);

mysqli_close($conn);



//*********************************************************

// Create Tables

$conn = mysqli_connect("localhost","root","","todoapp");

if(!$conn) {
    echo "Connect Error" . mysqli_connect_error();
}

// to make a query

$sql = "CREATE TABLE IF NOT EXISTS tasks(

    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR (200) NOT NULL

)";
$result = mysqli_query($conn,$sql);



echo mysqli_error($conn);
mysqli_close($conn);


echo "<pre>";
var_dump($conn);