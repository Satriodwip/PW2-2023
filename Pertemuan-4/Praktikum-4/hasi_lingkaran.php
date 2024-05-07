<?php
    require_once "data_lingkaran.php";
    echo 'Nilai PHI =' .Lingkaran::PHI;

    $lingkaran1 = new Lingkaran(8);
    $lingkaran2 = new Lingkaran(27);

    echo '<br>Luas Lingkaran adalah = ' .$lingkaran1->getLuas() . 'cm';
    echo '<br>Luas Lingkaran adalah = ' .$lingkaran2->getLuas() . 'cm';
    echo '<br>';
    echo '<br>Keliling Lingkaran adalah = ' .$lingkaran1->getKel() . 'cm';
    echo '<br>Keliling Lingkaran adalah = ' .$lingkaran2->getKel() . 'cm';

?>
