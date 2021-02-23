<?php 
$productos = array(
    array(
        "nombre" => "Cafe",
        "marca" => "Cabrales",
        "precio" => 300,
        "stock" => 300,
        "presentacion" => array(
            "chica" => "125grs",
            "mediana" => "250grs",
            "grande" => "500grs",
            "max" => "1kg"
        )
    ),
    array(
        "nombre" => "Cafe",
        "marca" => "Morenita",
        "precio" => 350,
        "stock" => 133,
        "presentacion" => array(
            "chica" => "125grs",
            "mediana" => "250grs",
            "grande" => "500grs",
            "max" => "1kg"
        )
    ),
);

header("Content-Type: application/json");
echo json_encode($productos);