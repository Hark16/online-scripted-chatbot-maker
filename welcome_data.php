<?php
include "databaseConnection.php";
session_start();

$email= $_SESSION['email'];
$answer= $_SESSION['ans'];
$table= $_SESSION['table'];


$pub= "UPDATE $table SET welcome_note = '$answer' WHERE email = '$email' ";

mysqli_query($conn, $pub);

   header("Location: welcome.php");

?>
