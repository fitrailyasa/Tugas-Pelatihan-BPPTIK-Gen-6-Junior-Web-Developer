<html> // Tag pembuka HTML
<body> // Tag body (badan)

// Form HTML
<form action="Tugas4_FitraIlyasa.php" method="POST">
Jumlah Bintang = <input type="number" name="jumlah"><br>
<input type="submit" value="kirim">
</form>

</body>
</html> // Tag penutup HTML

<?php

// Program Input Segitiga Bintang
// Fitra Ilyasa

	for($a = $_POST["jumlah"]; $a > 0; $a--){ // for baris bintang
	for($b = $_POST["jumlah"]; $b >= $a; $b--){ // for kolom bintang
		echo "*";
	}
	echo "<br>";
	}
?>