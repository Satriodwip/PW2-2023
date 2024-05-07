<?php

    require_once 'class_kendaraan.php';

    //objek
    $motor = new Motor("Motor", "Bensin", 2);
    $submarine = new Submarine("Kapal Selam", "Solar", 900);

    //echo
    echo 'Info Motor : <br>';
    $motor->getinfoMotor();
    echo '<br>';

    echo 'Info Submarine : <br>';
    $submarine->getinfoSubmarine();



?>