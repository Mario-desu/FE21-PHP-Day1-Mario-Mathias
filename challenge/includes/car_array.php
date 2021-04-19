<?php

$cars = [
    "Ford Raptor" => [
        "hp" => "350 HP",
        "price" => "€ 53.000",
        "color" => "Red",
        "fuelType" => "Gasoline",
        "yearOfConst" => "2019",
        "image" => "https://i.pinimg.com/originals/64/11/fe/6411fef43317d7e924720155f8aa864b.jpg"
    ],
    "Nissan Skyline GTR 34" => [
        "hp" => "450 HP",
        "price" => "€ 50.000",
        "color" => "Marine Blue",
        "fuelType" => "Gasoline",
        "yearOfConst" => "2002",
        "image" => "https://i.pinimg.com/originals/64/11/fe/6411fef43317d7e924720155f8aa864b.jpg"
    ],
    "Dodge Charger RT" => [
        "hp" => "380 HP",
        "price" => "€ 45.000",
        "color" => "Matt Black",
        "fuelType" => "Gasoline",
        "yearOfConst" => "1969",
        "image" => "https://i.pinimg.com/originals/1f/20/6b/1f206b1060e2bd87618a8ee458a572a7.jpg"
    ],
    "Ford Sierra" => [
        "hp" => "120 HP",
        "price" => "€ 300",
        "color" => "Red",
        "fuelType" => "Gasoline",
        "yearOfConst" => "1995",
        "image" => "https://i.ytimg.com/vi/zNIOFk45rfk/maxresdefault.jpg"
    ]


  

];


foreach($cars['Ford Raptor'] AS $key => $value){
            echo "$key:  $value <br>";
}
