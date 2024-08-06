<?php

    $peopleOne = ['Kelvin', 'John', 'Jane'];
    // echo $peopleOne[0];

    $peopleTwo = array('John', 'Jane', 'Mark');
    // echo $peopleTwo[2];

    $ages = array(20, 30, 40, 50);
    // print_r($ages);

    $ages[1] = 25;
    // print_r($ages);

    $ages[] = 60;
    // print_r($ages);

    array_push($ages, 70);
    // print_r($ages);

    unset($ages[1]);
    // print_r($ages);

    // echo count($ages);

    $peopleThree = array_merge($peopleOne, $peopleTwo);
    print_r($peopleThree);

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