<?php 
echo "even numbers:"."<br>";
$i=1;
while($i <=10 ) {
    if($i%2==0){
        echo $i;
        echo "<br>";
    }
    $i++;
}
echo "odd numbers:"."<br>";
$j=1;
while($j <=10) {
    if($j%2!=0){
        echo $j;
        echo "<br>";
    }
    $j++;
}
?>
