<?php
class Report{
    private $invoices=[];
    private $cheque=[];
    public function addInvoice($invoice){
        $this->invoices[]=$invoice;
    }
    public function generateReport(){
         ?>
<table style="width:100%;border:solid 1px black;text-align:center">
    <tr style="border:solid 1pc black">
        <th style="border:solid 1px black">Invoice </th>
        <th style="border:solid 1px black">Invoice value </th>
        <th style="border:solid 1px black">Balance </th>
        <th style="border:solid 1px black">Cheques</th>

    </tr>
    <?php
        foreach ($this->invoices as $invoice) {
           
            ?>
    <tr style="border:solid 1px black">
        <td style="border:solid 1px black"><?=$invoice->getInvoiceNumber()?></td>
        <td style="border:solid 1px black"><?=$invoice->getAmount()?></td>
        <td style="border:solid 1px black"><?=$invoice->getBalance()?></td>
        <td style="border:solid 1px black">
            <?php
                 foreach ($invoice->getCheques() as $ch) {
                    if(!in_array($ch,$this->cheque)){
                
                        $this->cheque[]=$ch;
                    }
                    echo "id : ".$ch->getChequeNumber().",  Value : ".$ch->getAmount().",   Balance : ".$ch->getBalance()."<br/>";
                 }
                ?>

        </td>





    </tr>

    <?php

        }
        ?>
</table>
<?php




?>
<h1>Cheque Report</h1>
<table style="width:100%;border:solid 1px black;text-align:center">
    <tr style="border:solid 1pc black">
        <th style="border:solid 1px black">Cheque </th>
        <th style="border:solid 1px black">Cheque value </th>
        <th style="border:solid 1px black">Balance </th>


    </tr>
    <?php
foreach ($this->cheque as $cheque) {
   
    ?>
    <tr style="border:solid 1px black">
        <td style="border:solid 1px black"><?=$cheque->getChequeNumber()?></td>
        <td style="border:solid 1px black"><?=$cheque->getAmount()?></td>
        <td style="border:solid 1px black"><?=$cheque->getBalance()?></td>







    </tr>

    <?php

}
?>
</table>
<?php
    }
}

?>