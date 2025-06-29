<?php
    $lines = file("elzero.txt");
    $lines[0] = str_replace("Osamaa", "Elzero", $lines[0]);
    file_put_contents("elzero.txt", implode("", $lines));
    print_r(file("elzero.txt"));
?>
