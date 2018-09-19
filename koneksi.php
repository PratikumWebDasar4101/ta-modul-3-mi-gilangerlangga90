<?php
$servername		= "localhost";
$username		= "root";
$password		= "";
$database		= "datamahasiswa";

$conn = mysqli_connect($servername, $username, $password);
$database_select = mysqli_select_db($conn, $database);

if (!$conn) {
    die("Connection failed ");
}
if (!$database_select)
	die("Selected failed: ");
?>