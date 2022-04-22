<?php
require_once "class_persegipanjang.php";
$pp1 = new PersegiPanjang(10,5);
$pp2 = new PersegiPanjang(7,12);
echo "<br/>Luas Persegi Panjang I " . $pp1->getLuas();
echo "<br>Luas Persegi Panjang II " . $pp2->getLuas();
echo "Keliling Persegi Panjang I " . $pp1->getKeliling();
echo "<br>Keliling Persegi Panjang II " . $pp2->getKeliling();