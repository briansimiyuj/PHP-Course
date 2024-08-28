<?php

    include "config/db_connect.php";

    // Check for GET request ID param

    if(isset($_GET["id"])){

        $id = mysqli_real_escape_string($conn, $_GET["id"]);

        $sql = "SELECT * FROM pizzas WHERE ID = $id";

        $result = mysqli_query($conn, $sql);

        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);

        mysqli_close($conn);    

        print_r($pizza);

    }

?>

<html lang="en">

    <?php include "templates/header.php"; ?>

    <h2>Details</h2>

    <?php include "templates/footer.php"; ?>

</html>