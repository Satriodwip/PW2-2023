<?php
    // Multidimensional array
$m_fruits = [
    ["id" => 1, "name" => "Anggur", "color" => "Ungu", "stock" => 150, "price" => "Rp. 45.000", "description" => "Anggur adalah buah berukuran kecil dan berwarna ungu serta memiliki rasa yang manis dan juga memiliki biji yang sedikit."],
    ["id" => 2, "name" => "Melon", "color" => "Hijau", "stock" => 120, "price" => "Rp. 35.000", "description" => "Melon adalah buah berukuran besar, berwarna hijau serta memiiki rasa yang manis buah ini biasanya dijadika topping es buah saat bulan Ramadan."],
    ["id" => 3, "name" => "Kurma", "color" => "Coklat", "stock" => 200, "price" => "Rp. 40.000", "description" => "Kurma adalah buah yang berukuran kecil, berwarna coklat serta memiliki rasa yang manis dan juga menyegarkan, buah ini banyak dicari saat bulan puasa."],
    ["id" => 4, "name" => "Apel", "color" => "Merah/Hijau", "stock" => 150, "price" => "Rp. 40.000", "description" => " Buah apel biasanya berwarna merah kulitnya jika masak dan siap dimakan, tetapi bisa juga kulitnya berwarna hijau. Kulit buahnya agak lembek dan daging buahnya keras."],
    ["id" => 5, "name" => "Semangka", "color" => "Hijau", "stock" => 300, "price" => "Rp. 40.000", "description" => "Semangka adalah buah yang berukuran besa, kulit bauhnya berwarna hijau dan daging buahnya berwarna merah serta memiliki biji yang lumayan banyak, buah ini memliki banyak kadungan air yang membuatnya sangat cocok dinikmati saat dehidrasi ."],
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Array Table Buah</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-hover table-bordered">
        <thead class="thead-dark text-center">
        <tr class="text-center">
            <th class="table-primary">ID</th>
            <th class="table-primary">Nama</th>
            <th class="table-primary">Warna</th>
            <th class="table-primary">Stok</th>
            <th class="table-primary">Harga</th>
            <th class="table-primary">Deskripsi</th>
        </tr>
        </thead>

        <tbody class="text-center">
        <?php
        foreach ($m_fruits as $fruit) {
            echo '<tr>';
            echo '<td>'.$fruit["id"].'</td>';
            echo '<td>'.$fruit["name"].'</td>';
            echo '<td>'.$fruit["color"].'</td>';
            echo '<td>'.$fruit["stock"].'</td>';
            echo '<td>'.$fruit["price"].'</td>';
            echo '<td>'.$fruit["description"].'</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
    </div>
</body>
</html>