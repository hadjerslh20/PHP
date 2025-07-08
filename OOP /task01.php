<?php 
    class BankAccount {
        public $accountNum;
        public $balance;
        public function desposit($amount) {
            if($amount > 0) {
                $this ->balance+= $amount;
            }
        }
    }
    $countOne= new BankAccount();
    $countOne-> accountNum =123;
    $countOne-> balance=200;
    $countOne-> desposit(100);
    $countOne-> desposit(200);
    echo "My acount number is {$countOne-> accountNum} and my balance {$countOne-> balance}"
?>

