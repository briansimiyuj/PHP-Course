<?php

   $ninjasOne = ['shaun'=> 'black', 'mario'=> 'orange', 'peach'=> 'pink'];

//    echo $ninjasOne['mario'];

   $ninjasTwo = array('browser'=> 'chrome', 'os'=> 'windows');

   $ninjasTwo['textEditor'] = 'vscode';

//    print_r($ninjasTwo);

    // echo count($ninjasTwo);

    $ninjasThree = array_merge($ninjasOne, $ninjasTwo);

    print_r($ninjasThree);

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