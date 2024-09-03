<?php

    $file = "README.md";

    if(file_exists($file)){

        echo readFile($file) . "<br>" . "<br>";

        copy($file, "Brian.md");

        echo realPath($file) . "<br>";

    }else{

        echo "File does not exist";
        
    }

?>