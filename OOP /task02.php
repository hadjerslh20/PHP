<?php 

class bankAccount {
    // properties
    public $accountId;
    public $balance;
    // methods 
    public function desposit($amount) {
        if($amount > 0) {
            $this->balance += $amount;
        }
        return $this;
    }
    public function withDraw($amount) {
        if($this->balance >= $amount) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}
// object 
$acountOne = new bankAccount();
$acountOne  -> accountId =123;
$acountOne  -> balance =2000;
$acountOne  -> desposit(2000)
            -> withDraw(1000);
echo "the acount id is {$acountOne  -> accountId} and the balance {$acountOne  -> balance}";
?>
