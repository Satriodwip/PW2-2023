<?php

    require_once 'class_kasus.php';

    //objek
    $yogyakarta = new Yogyakarta("Yogyakarta", "Jalan Malioboro", "455.535 Ribu Jiwa");
    $bali = new Bali("Bali", "Patung Garuda Wisnu Kencana", "4.29 Juta Jiwa");
    $lombok = new Lombok("Lombok", "Gunung Rinjani", "5.5 Juta Jiwa");

    //echo
    echo 'Info Kota : <br>';
    $yogyakarta->getinfoYogyakarta();
    echo '<br>';

    echo 'Info Kota : <br>';
    $bali->getinfoBali();
    echo '<br>';

    echo 'Info Kota : <br>';
    $lombok->getinfLombok();



?>