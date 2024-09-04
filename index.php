<?php

    $file = "Brian.md";

    $handle = fopen($file, "r");

    echo fgets($handle);

    echo fgetc($handle);

?>