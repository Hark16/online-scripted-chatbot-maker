<?php
include "databaseConnection.php";
session_start();

$question= $_SESSION['qus'];
$answer= $_SESSION['ans'];
$table= $_SESSION['table'];


$inswork= "INSERT INTO $table (question, answer) VALUES('$question', '$answer')";

mysqli_query($conn, $inswork);
   header("Location: create.php");

?>
