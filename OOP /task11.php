<?php 
    class Profile {
        // properties
        private $data=[];
        // methods 
        public function __set($key , $value) {
            $this-> data[$key] = $value;
            echo "$value was set to $key <br>";
        }
        public function __get($key) {
            return $this->data[$key] ?? "Not Found<br>";
        }
    }
    $userOne = new Profile();
    echo $userOne->age;
    $userOne->name="Hadjer";
    $userOne->age=21;
    echo $userOne->age;
    echo"<br>";
    echo $userOne->name;
?>
