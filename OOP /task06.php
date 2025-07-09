<?php 
    class User {
        public $name;
        public $email;
        public function __construct($name,$email) {
            $this-> name = $name;
            $this-> email = $email;
            echo "New user was creacted: {$this-> name} - {$this-> email}"."<br>";
        }
        public function displayInfo(){
            echo "User Information : Name: {$this-> name} , Email: {$this-> email}"."<br>";
        }
    }
    class Student extends User {
        public $level;
        public function __construct($name,$email,$level) {
            parent:: __construct($name,$email);
            $this->level = $level;
            echo "A new student was created in {$this->level}."."<br>";
        }
        public function showAllDetails() {
            $this->displayInfo();
            echo "The education level: {$this->level} ."."<br>";
        }
    }
    $stendeOne= new Student("Hadjer","hadjersisalah2004@gmail.com","3rd year");
    $stendeOne->showAllDetails();
?>
