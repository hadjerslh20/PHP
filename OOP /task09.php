<?php
    // interface
    interface Greeter {
        public function greet();
    }
    // abstract class
    abstract class User {
        public $name;
        public function __construct($name) {
            $this -> name = $name;
        }
        public function displayInfo() {
            echo "Name: {$this -> name}"."<br>";
        }
        abstract public function greet();
    }
    // trait
    trait LoggerTrait {
        public function log($msg) {
            echo "[LOG]: $msg <br>";
        }
    }
    trait NotifierTrait {
        public function notify() {
            echo "Notifying User.."."<br>";
        }
    }
    trait HelperTrait {
        use LoggerTrait , NotifierTrait {
            NotifierTrait::notify as sendNotification;
        }
    }
    // users class
    class EnglishUser extends User implements Greeter {
        use HelperTrait;
        public function greet() {
            echo "Hello !"."<br>";
        }
    }
    class FrenchUser extends User implements Greeter {
        use HelperTrait;
        public function greet() {
            echo "Bonjour !"."<br>";
        }
    }
    class GermanUser extends User implements Greeter {
        use HelperTrait;
        public function greet() {
            echo "Hallo !"."<br>";
        }
    }
    $users = [new EnglishUser("Hadjer"), new FrenchUser("Akram"), new GermanUser("Mohamed")];
    function greeting($users) {
        foreach($users as $user) {
            $user->displayInfo();
            $user->greet();
            $user->sendNotification();
            $user->log("coco");
        }
    }
    greeting($users);
?>
