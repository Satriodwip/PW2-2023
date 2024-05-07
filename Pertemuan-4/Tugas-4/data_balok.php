<?php
require_once "class_balok.php";

// Membuat objek pertama dengan nilai panjang, lebar, dan tinggi yang diberikan
$balok1 = new Balok(29, 16, 7);
echo "Balok 1:\n";
echo "Luas permukaan : " . $balok1->getLuas() . "cm _". "\n";
echo "Keliling : " . $balok1->getKeliling() . "cm _". "\n";
echo "Volume : " . $balok1->getVolume() . "cm.". "\n";
echo "<br>";

// Membuat objek kedua dengan nilai panjang, lebar, dan tinggi yang sama seperti objek pertama
$balok2 = new Balok(29, 16, 7);
echo "Balok 2:\n";
echo "Luas permukaan : " . $balok2->getLuas() . "cm _". "\n";
echo "Keliling : " . $balok2->getKeliling() . "cm _". "\n";
echo "Volume : " . $balok2->getVolume() . "cm.". "\n";
echo "<br>";

// Membuat objek ketiga dengan nilai panjang, lebar, dan tinggi yang berbeda
$balok3 = new Balok(10, 5, 3);
echo "Balok 3:\n";
echo "Luas permukaan : " . $balok3->getLuas() . "cm _". "\n";
echo "Keliling : " . $balok3->getKeliling() . "cm _"."\n";
echo "Volume : " . $balok3->getVolume() . "cm."."\n";
echo "<br>";

// Membuat objek keempat dengan nilai panjang, lebar, dan tinggi yang berbeda
$balok4 = new Balok(15, 8, 6);
echo "Balok 4:\n";
echo "Luas permukaan : " . $balok4->getLuas() . "cm _". "\n";
echo "Keliling : " . $balok4->getKeliling() . "cm _". "\n";
echo "Volume : " . $balok4->getVolume() . "cm."."\n";
?>
