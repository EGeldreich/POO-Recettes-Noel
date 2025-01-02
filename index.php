<h1>My Recipes</h1>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name.'.php';
});

$tomatoSalad = new Recipe (
    "Starter",
    "Tomato Salad",
    10,
    "Mix tomatoes and lettuce",
    ["Tomato" => 2]
);

$chickenSoup = new Recipe (
    "Starter",
    "Chicken Soup",
    20,
    "Boil chicken and add vegetables",
    ["Chicken" => 1,
    "Tomato" => 2,
    "Lettuce" =>1,
    "Onion" => 1]
);