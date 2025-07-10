<?php 
    interface  Person {
        public function greet();
    }
    class English implements Person {
        public function greet() {
            echo "Hello".'<br>';
        }
    }
    class German implements Person {
        public function greet() {
            echo "Hallo".'<br>';
        }
    }
    class French implements Person {
        public function greet() {
            echo "Bonjour".'<br>';
        }
    }
    $persons=[new English() , new German() , new French()];
    foreach($persons as $person) {
        $person->greet();
    }
?>
