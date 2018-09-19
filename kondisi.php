<?php
session_start();
if (isset($_SESSION["username"])) {
	include("koneksi.php");
		$nama 		= $_POST["nama"];
		$nim 		= $_POST["nim"];
		$fakultas 	= $_POST["fakultas"];
		$jk 		= $_POST["jk"];

		$dir		= "datamahasiswa/";
		$foto 		= $_FILES["foto"]["name"];
		$tmp_name 	= $_FILES["foto"]["tmp_name"];
		$target_file= $dir . $foto;  


		$query = "INSERT INTO mahasiswa SET nim='$nim',nama='$nama',fakultas='$fakultas',jk='$jk',foto='$foto'";

		if (mysqlI_query($conn, $query) and move_uploaded_file($tmp_name, $target_file)) {
			echo "Terima Kasih! Data telah berhasil tersimpan!";
		}else{
			echo "Maaf, Data tidak tersimpan!";
		}
	}else {
		header("Location: login.php");
	}
?>


