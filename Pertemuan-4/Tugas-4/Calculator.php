<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */

class Kalkulator {
    private $number1;
    private $number2;

    public function __construct($num1, $num2) {
        $this->number1 = $num1;
        $this->number2 = $num2;
}

    public function penjumlahan() {
        return $this->number1 + $this->number2;
    }

    public function pengurangan() {
        return $this->number1 - $this->number2;
    }

    public function pembagian() {
        if ($this-> number2 !=0) {
            return $this->number1 / $this->number2;
        } else {
            return "Tidak bisa melakukan pembagian dengan 0.";
        }
    }

    public function perkalian() {
        return $this->number1 * $this->number2;
    }
}
 // Buat object dan tampilkan masing-masing method

$kalkulator1 = new Kalkulator(10, 5);
$kalkulator2 = new Kalkulator(7, 5);

echo "Hasil Penjumlahan: " . $kalkulator1->penjumlahan() . "\n";
echo "Hasil Pengurangan: " . $kalkulator1->pengurangan() . "\n";
echo "Hasil Pembagian: " . $kalkulator1->pembagian() . "\n";
echo "Hasil Perkalian: " . $kalkulator1->perkalian() . "\n";

echo '<br>';

echo "Hasil Penjumlahan: " . $kalkulator2->penjumlahan() . "\n";
echo "Hasil Pengurangan: " . $kalkulator2->pengurangan() . "\n";
echo "Hasil Pembagian: " . $kalkulator2->pembagian() . "\n";
echo "Hasil Perkalian: " . $kalkulator2->perkalian() . "\n";

?>