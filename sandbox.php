<?php

    $score = 50;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQL Course</title>
</head>
<body>

    <h1>

        <?php
        
            echo $score > 40 ? "You Passed" : "You Failed";
        
        ?>

    </h1>
    
</body>
</html>