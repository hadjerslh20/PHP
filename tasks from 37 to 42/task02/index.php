<?php 
    // using while
    $index = 0;
    while($index <= 20) {
        echo $index;
        echo '<br>';
        $index+=2;
    }
    echo '#####################################';
    echo '<br>';
    // using for 
    for($index = 0;$index<=20;$index+=2) {
        echo $index;
        echo '<br>';
    }
    echo '#####################################';
    echo '<br>';
    // using foreach
    $arrayNum = [0,2,4,6,8,10,12,14,16,18,20];
    foreach($arrayNum as $number) {
        echo $number;
        echo '<br>';
    }
    echo '#####################################';
    echo '<br>';
    // using do while
    $index = 0;
    do {
        echo $index;
        $index+=2;
        echo '<br>';
    } while($index <= 20)
?>
