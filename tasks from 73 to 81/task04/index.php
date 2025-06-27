<?php
    $filtName=[];
    $filtID=[];
    foreach(filter_list() as $filter) {
        array_push($filtName,$filter);
        array_push($filtID,filter_id($filter));
    }
    echo "<h1>Filters names which exist in PHP language:</h1>".'<br>';
    echo '<pre>';
    print_r ($filtName);
    echo '</pre>';
    echo "<br>";
    echo "<h1>Filters IDs which exist in PHP language:</h1>".'<br>';
    echo '<pre>';
    print_r ($filtID);
    echo '</pre>';
    echo "<br>";
    echo "<h1>Filters names and IDs :</h1>"."<br>";
    echo '<pre>';
    print_r (array_combine($filtID,$filtName));
    echo '</pre>';
?>
