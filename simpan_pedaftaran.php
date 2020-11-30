<!DOCTYPE html>
<html>
<head>
	<title>Simpan Pendaftaran Anggota</title>
</head>
<body>
<center>
	<?php

	$NPM=$_POST["npm"];
	$nama=$_POST["nama"];
	$tempat_tanggal_lahir=$_POST["tempat_tanggal_lahir"];
	$email=$_POST["email"];
	$no_hp=$_POST["no_hp"];
	$alamat=$_POST["alamat"];


  $hasil= ('$npm','$nama','$temapt_tanggal_lahir','$email','$no_hp','$alamat')";


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
