<?php
$categories=[
        0 => [
            "id" => 1,
            "name" => "fantastic"
        ],
        1 => [
            "id" => 2,
            "name" => "Horror"
        ],
        10 => [
            "id" => 3,
            "name" => "Romantic"
        ]        
    ];
    echo $categories[0]['name'];
    foreach ( $categories as $category   ){
        echo  "<hr>Titre du livre n°  : ".$category['name'];
   }
/*
for ($i=0;$i<count($categories);$i++){
    echo '<hr>'.$categories[$i]['name'];
}*/