<?php

    function formatProduct($product){

        echo "{$product['name']} costs $ {$product['price']} to buy <br />";

    }

    formatProduct(['name' => 'gold star', 'price' => 20]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course</title>
</head>
<body>

</body>
</html>