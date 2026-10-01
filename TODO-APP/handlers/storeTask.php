<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "todoapp");
if (!$conn) {
    echo "Connect Error" . mysqli_connect_error();
}



if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['title'])) {


    $title = trim(htmlspecialchars(htmlentities($_POST['title'])));

    if (strlen($title) < 3) {
        $_SESSION['errors'] = "Title of task must be greater than 3 chars!";
    } else {

        $sql = "INSERT INTO `tasks`(`title`) VALUES('$title')";
        $result = mysqli_query($conn, $sql);

        if (mysqli_affected_rows($conn) == 1) {
            $_SESSION['success'] = "Data Inserted Successfully";
        }
    }
    //redirection
    header("location: ../index.php");
}
