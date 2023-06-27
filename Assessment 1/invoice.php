<?php


class Invoice
{
    private $invoiceNumber;
    private $amount;
    private $cheques = [];
    
    private $balance;

    public function __construct($invoiceNumber, $amount)
    {
        $this->invoiceNumber = $invoiceNumber;
        $this->amount = $amount;
        $this->balance = $amount;

    }

    public function addCheque($cheque)
    {
        if($this->balance>0){
            
        if($cheque->getBalance()==$this->balance){
            $this->balance=0;
            $cheque->setBalance(0);
           
        }else if($cheque->getBalance()>$this->balance){
            $cheque->setBalance($cheque->getBalance()-$this->getBalance());
            $this->balance=0;
        
        }else{
            $this->balance=($this->getBalance()-$cheque->getBalance());
            $cheque->setBalance(0);
        }
        
        $this->cheques[] = $cheque;
    }else{
        $this->cheques[] = $cheque;
    }

    }

    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function getCheques()
    {
        return $this->cheques;
    }
}




?>