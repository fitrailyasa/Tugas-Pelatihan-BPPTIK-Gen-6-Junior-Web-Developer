<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana Lanjutan</title>
	<link rel="stylesheet" type="text/css" href="Tugas6_FitraIlyasa.css">
</head>
<body>
	<?php // Pembuka PHP
	if(isset($_POST['hitung'])){ // Percabangan if dan switch untuk memilih operator
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah': // case 1 jika (+)
				$hasil = $bil1+$bil2;
			break;
			case 'kurang': // case 2 jika (-)
				$hasil = $bil1-$bil2;
			break;
			case 'kali': // case 3 jika (*)
				$hasil = $bil1*$bil2;
			break;
			case 'bagi': // case 4 jika (/)
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">Kalkulator Sederhana</h2>
		<form method="post" action="Tugas6_FitraIlyasa.php">
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Bilangan 1">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Bilangan 2">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>