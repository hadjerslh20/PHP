<?php 
    class Customer {
        // property
        private $name;
        // methods
        public function setName($name) {
            $this->name = $name;
        }
        public function getName(){
            return "This is my Name: {$this->name }";
        }
    }
    $customerOne = new Customer();
    $customerOne->setName("Hadjer");
    echo $customerOne->getName();
?>
