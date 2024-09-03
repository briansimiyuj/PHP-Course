<?php

    $file = "Bio.md";

    if(file_exists($file)){

        unlink($file);

    }else{

        echo "File does not exist";
        
    }

    mkdir("src");

    chdir("src");

?>