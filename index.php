<?php

    $file = "README.md";

    if(file_exists($file)){

        echo readFile($file);

        copy($file, "Brian.md");

    }else{

        echo "File does not exist";
        
    }

?>