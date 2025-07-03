<?php 
echo "even numbers:"."<br>";
for($i=1 ; $i <=10 ; $i++) {
    if($i%2==0){
        echo $i;
        echo "<br>";
    }
}
echo "odd numbers:"."<br>";
for($i=1 ; $i <=10 ; $i++) {
    if($i%2!=0){
        echo $i;
        echo "<br>";
    }
}
?>
