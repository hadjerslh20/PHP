<?php 
    class Person {
        public $firstName;
        public $lastname;
        public $age;
        public $country;
        function __construct($n1,$n2,$age,$country) {
            $this-> firstName = $n1;
            $this-> lastname = $n2;
            $this-> age = $age;
            $this-> country = $country;
        }
    }
    $personOne= new Person("Hadjer","Si Salah",20,"Algeria");
    echo "Hello Im {$personOne->firstName} {$personOne->lastname} Im {$personOne->age} years old and Im from {$personOne->country}";
?>
