<?php 
    abstract class Person {
        abstract public function greet();
    }
    class English extends Person {
        public function greet() {
            echo "Hello".'<br>';
        }
    }
    class German extends Person {
        public function greet() {
            echo "Hallo".'<br>';
        }
    }
    class French extends Person {
        public function greet() {
            echo "Bonjour".'<br>';
        }
    }
    $persons=[new English() , new German() , new French()];
    foreach($persons as $person) {
        $person->greet();
    }
?>
