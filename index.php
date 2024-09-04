<?php

    $file = "Brian.md";

    $handle = fopen($file, "r");

    // echo fread($handle, filesize($file));

    echo fread($handle, 12); 

?>