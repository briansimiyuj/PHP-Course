<?php

    if(isset($_POST["submit"])){

        // Check Email
        if(empty($_POST["email"])){

            echo "An email is required <br />";
            
        }else{
            
            echo htmlspecialchars($_POST["email"]) . "<br />";

        }


        // Check Title

        if(empty($_POST["title"])){

            echo "A title is required <br />";

        }else{

            echo htmlspecialchars($_POST["title"]) . "<br />";

        }


        // Check Ingredients

        if(empty($_POST["ingredients"])){

            echo "At least one ingredient is required <br />";

        }else{

            echo htmlspecialchars($_POST["ingredients"]) . "<br />";

        }

        // End of POST check

    }

?>


<!DOCTYPE html>
<html lang="en">

    <?php include "templates/header.php"; ?>

    <section class="container grey-text">
        
        <h4 class="center">Add a Pizza</h4>


        <form class="white" action="add.php" method="POST">

            <label for="email">Your Email:</label>

            <input type="text" name="email">

            <label for="title">Pizza Title:</label>

            <input type="text" name="title">
            
            <label for="ingredients">Ingredients (comma separated):</label>

            <input type="text" name="ingredients">


            <div class="center">

                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">

            </div>

        </form>
    
    </section>

    <?php include "templates/footer.php"; ?>
    
</html>