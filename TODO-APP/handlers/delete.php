<?php
session_start();

if(isset($_GET['id'])){
    $conn = mysqli_connect("localhost", "root", "", "todoapp");
if (!$conn) {
    echo "Connect Error" . mysqli_connect_error();
}

$id = $_GET['id'];
$sql = "DELETE FROM `tasks` WHERE `id` = '$id' ";
mysqli_query($conn, $sql);


if(mysqli_affected_rows($conn) == 1) {
    $_SESSION['success'] = "Data Deleted Successfully";
}


//redirection
header("location: ../index.php");


}