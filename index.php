<?php

    $file = "Brian.md";

    $handle = fopen($file, "r+");

    fwrite($handle, "Brian is the best");

    
?>