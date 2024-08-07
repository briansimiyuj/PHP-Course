<?php

    $products =[

        ['name' => 'shiny star', 'price' => 20],
        ['name' => 'green shell', 'price' => 10],
        ['name' => 'red shell', 'price' => 15],
        ['name' => 'gold coin', 'price' => 5],
        ['name' => 'lightning bolt', 'price' => 40],
        ['name' => 'banana skin', 'price' => 2]

    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course</title>
</head>
<body>

    <div>

        <?php
        
            foreach($products as $product){

                if($product['price'] > 15){
                    
                    echo "<li>" . $product['name'] . "</li>";

                }
            }            
            
        ?>

    </div>
    
</body>
</html>