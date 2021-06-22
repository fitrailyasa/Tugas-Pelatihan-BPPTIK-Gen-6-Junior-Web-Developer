<?php

// Program Ganjil Genap 
// Fitra Ilyasa

echo "=============== CETAK BILANGAN GANJIL GENAP 1-100 ===============";
echo "<br>";

for ($bil = 1; $bil <= 100; $bil++) { // Perulangan For
	if ($bil % 2 == 0){ //Kondisi
	    echo "$bil Merupakan Bilangan Genap"; // Kondisi if
	}else {
	    echo "$bil Merupakan Bilangan Ganjil"; // Kondisi else
	}
	echo "<br>";
}
?>