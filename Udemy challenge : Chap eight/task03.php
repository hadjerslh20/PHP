<?php 
echo "even numbers:"."<br>";
$i=1;
do{
    if($i%2==0){
        echo $i;
        echo "<br>";
    }
    $i++;
}while($i <=10 );
echo "odd numbers:"."<br>";
$j=1;
do {
    if($j%2!=0){
        echo $j;
        echo "<br>";
    }
    $j++;
}while($j <=10);
?>
