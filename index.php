<?php

    // connect to database
    $conn = mysqli_connect("localhost", "brian", "brian", "ninja_pizza");

    // check connection

    if(!$conn) echo 'Connection error: ' . mysqli_connect_error();


    // write query for all pizzas
    $sql = "SELECT title, ingredients, ID FROM pizzas";

    // make query and get result
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array

    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result from memory
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);

    print_r($pizzas);

?>

<!DOCTYPE html>
<html lang="en">

    <?php 
    
        include "templates/header.php"; 

        include "templates/footer.php";
        
    ?>
    
</html>