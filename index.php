<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'.$class_name.'.php';
});

$tomatoSalad = new Recipe (
    "Starter",
    "Tomato Salad",
    10,
    "Mix tomatoes and lettuce",
    ["Tomato" => "2 units"]
);

$chickenSoup = new Recipe (
    "Starter",
    "Chicken Soup",
    20,
    "Boil chicken and add vegetables",
    ["Chicken" => "1 unit",
    "Tomato" => "2 units",
    "Lettuce" => "1 unit",
    "Onion" => "1 unit"]
);
$bruschetta = new Recipe (
    "Starter",
    "Bruschetta",
    15,
    "Toast bread and top with tomatoes",
    ["Tomato" => "2 units",
    "Bread" => "4 slices"]
);

$recipes = [
    $tomatoSalad,
    $chickenSoup,
    $bruschetta
];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="style.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
            rel="stylesheet"
        />
    </head>
    <body>
        <h1>My Recipes</h1>
        <div class="card-container row wrap">
        <?php
            foreach($recipes as $recipe){
                echo $recipe->createRecipeCard();
            }
        ?>
        </div>
    </body>
</html>