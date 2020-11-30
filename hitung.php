<!DOCTYPE html>
<html>
<head>
	<title>Ririn Darmayanti Zein 19100032</title>
</head>
<body>
<center>
	<?php

	$input1 = $_POST['input1'];
	$input2 = $_POST['input2'];
	$input3 = $_POST['input3'];
	$input4 = $_POST['input4'];
	$input5 = $_POST['input5'];

	$hasil = (($input1 + $input2) / ($input3 * $input4)) - $input5;

	echo "Hasil Dari  (($input1 + $input2) / ($input3 * $input4)) - $input5 adalah : $hasil";

	?>
		
</center>

</body>
</html>