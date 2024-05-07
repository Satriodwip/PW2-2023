<?php
    // $fruits = array();
    // Defalult
    // Associative Array
    // Multidimesional Array 

    // $fruits = ["mangga", "berry", "kiwi"];

    // foreach ($fruits as $fruit) {
    //     echo $fruit;
    //     echo '<br>';
    // }

    // $dinos = [
    //     "dinoName" => "Rex",
    //     "dinoAge" => 500,
    //     "isMarried" => "false"
    // ];

    // foreach ($dinos as $dino) {
    //     echo $dino;
    //     echo '<br>';
    // }

    $dinos = [
        [
            "dinoName" => "Rex",
            "dinoAge" => 500
            
        ],
        [
            "dinoName" => "Brancio",
            "dinoAge" => 900
            
        ],
        [
            "dinoName" => "Ptera",
            "dinoAge" => 1000
            
        ]
    ];

    foreach ($dinos as $dino){
        echo $dino["dinoName"];
        echo $dino["dinoAge"];
        echo '<br>';
    }

    echo $dinos[0]
?>