<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "mahasiswa" && $password == 12345){
	$_SESSION["username"] = $username;
	header("Location: form.php");
}else{
	header("Location: login.php");
}
?>