<?php
    $angka_a='10';
    $angka_b='12';

    $kali = $angka_a * $angka_b;
    $bagi = $angka_a / $angka_b;
    $tambah = $angka_a + $angka_b;
    $kurang = $angka_a - $angka_b;
    $modulus = $angka_a % $angka_b;

    echo "<h3>Kalkulator Simple</h3>";
    echo "Perkalian ".$angka_a." X ".$angka_b." = ".$kali;
    echo "<br>";
    echo "Pambagian ".$angka_a." / ".$angka_b." = ".$bagi;
    echo "<br>";
    echo "Penjumlahan ".$angka_a." + ".$angka_b." = ".$tambah;
    echo "<br>";
    echo "Pengurangan ".$angka_a." - ".$angka_b." = ".$kurang;
    echo "<br>";
    echo "Modulus ".$angka_a." % ".$angka_b." = ".$modulus;
?>