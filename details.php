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
        
    }

?>

<html lang="en">

    <?php include "templates/header.php"; ?>

    <div class="container center grey-text">

        <?php if($pizza): ?>

            <h4><?php echo htmlspecialchars($pizza["title"]); ?></h4>

            <p>Created by: <?php echo htmlspecialchars($pizza["email"]); ?></p>

            <p><?php echo date($pizza["createdAt"]); ?></p>

            <h5>Ingredients:</h5>

            <p><?php echo htmlspecialchars($pizza["ingredients"]); ?></p>

        <?php else: ?>

            <h5>No such pizza exists!</h5>

        <?php endif; ?>

    </div>

    <?php include "templates/footer.php"; ?>

</html>