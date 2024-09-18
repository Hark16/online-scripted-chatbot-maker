
<?php
include "databaseConnection.php";
error_reporting(0);


$idnum= $_GET['idnum'];
$table= $_GET['table'];


$sql = "DELETE FROM $table WHERE id=$idnum ";


if (mysqli_query($conn, $sql)) {

   header("Location: browse.php");
}


?>