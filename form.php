<?php
session_start();
if (isset($_SESSION)){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<center> <h1> DATA MAHASISWA </h1></center> 
	<h3> Silahkan isi data-data dibawah ini! </h3>
	<table>
	<form method="post" action="kondisi.php" enctype="multipart/form-data">
	<tr>
		<td> Nama User &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>
		<td> : </td>
		<td> <input type="text" name="nama"> </td>
	</tr>

	<tr>
		<td> NIM</td>
		<td> : </td>
		<td> <input type="text" name="nim"> </td>
	</tr>

	<tr>
		<td> Fakultas </td>
		<td> : </td>
		<td> <select name="fakultas" id="fakultas">
			<option value="FEB"> FEB </option>
			<option value="FKB"> FKB </option>
			<option value="FIF"> FIF </option>
			<option value="FIK"> FIK </option>
			<option value="FIT"> FIT </option>
			<option value="FTE"> FTE </option>
			</select>
		</td>
	</tr>

	<tr>
		<td> Jenis Kelamin </td>
		<td> : </td>
		<td> <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki <br>
			<input type="radio" name="jk" value="Perempuan"> Perempuan
		</td>
	</tr>

	<tr>
		<td> Foto </td>
		<td> : </td>
		<td> <input type="file" name="foto" id="foto"> </td>
	</tr>

	<tr>
		<td> </td>
		<td> </td>
		<td> <input type="submit" name="simpan" value="Simpan"></td>
	</tr>
	</form>
	</table>
</body>
</html>

<?php
}else{
	header("Location: login.php");
}
?>