<?php

    $name = 'Brian';

    function sayBye(&$name){

        $name = 'Juma';

    }

    sayBye($name);
    echo $name;

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