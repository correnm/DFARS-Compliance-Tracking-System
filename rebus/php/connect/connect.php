<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "mysql";
$db_name = "rebus";

$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name) or die(mysqli_connect_error());
?>