<?php

class Cheque
{
    private $chequeNumber;
    private $amount;
    private $balance;

    public function __construct($chequeNumber, $amount)
    {
        $this->chequeNumber = $chequeNumber;
        $this->amount = $amount;
        $this->balance = $amount;
    }

    public function getChequeNumber()
    {
        return $this->chequeNumber;
    }

    public function getAmount()
    {
        return $this->amount;
    }
    public function setAmount($amount){
        $this->amount=$amount;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function setBalance($amount){
        $this->balance=$amount;
    }
}

?>


