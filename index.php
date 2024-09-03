<?php

    $file = "README.md";

    if(file_exists($file)){

        echo readFile($file);

    }else{

        echo "File does not exist";
        
    }

?>