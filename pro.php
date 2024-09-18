<?php

include "databaseConnection.php";
session_start();

$email= $_SESSION['email'];
$answer= 'pro';
$table= 'pro_version';


$pub= "UPDATE $table SET pro = '$answer' WHERE email = '$email' ";

mysqli_query($conn, $pub);

   header("Location: logout.php");

?>
