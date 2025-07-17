<?php 
    class User {
        public $name;
        public $email;
        public $password;
        public function __construct($name,$email,$password) {
            $this-> name = $name;
            $this-> email = $email;
            $this-> password = $password;
        }
        public function __sleep() {
            return ['name' ,'email'];
        }
        /*public function __serialize() {
            return [
                'name' => base64_encode($this->name),
                'email' => base64_encode($this->email),
                'password' => base64_encode($this->password)
            ];
        }*/
    }
    $user = new User("Ali", "ali@example.com", "123456");
    $serialized = serialize($user);
    echo $serialized;
    /*$unserialized = unserialize($serialized);
    var_dump($unserialized);
    print_r($user->__serialize());*/
?>
