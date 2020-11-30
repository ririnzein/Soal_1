<!DOCTYPE html>
<html>
<head>
	<title>CETAK PERPUSTAKAAN</title>
</head>
<body>
<center>
	<?php

	$Npm = $_POST["npm"];
	$Nama = $_POST["nama"];
	$Tempat_Tanggal_lahir = $_POST["temapt_tanggal_lahir"];
	$alamat = $_POST["alamat"];
	$email = $_POST["email"];
	$no_hp = $_POST["no_hp"];

	$sql="insert into anggota (npm,nama,tempat_tanggal_lahir,alamat,email,no_hp) values
		('$npm','$nama','$tempat_tanggal_lahir ','$alamat','$email','$no_hp',')";

	  if ($hasil) {
		echo "Berhasil simpan data anggota";
		exit;
  		
  		}

  	else {
		echo "Gagal simpan data anggota";
		exit;
		
		}  
	?>
</center>

</body>
</html>