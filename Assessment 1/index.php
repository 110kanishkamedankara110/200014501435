<?php
require "check.php";
require "invoice.php";
require "Report.php";

// Create Invoices
$invoice1 = new Invoice('IN001', 1000);
$invoice2 = new Invoice('IN002', 1500);
$invoice3 = new Invoice('IN003', 2000);
$invoice4 = new Invoice('IN004', 2000);

$cheque1=new Cheque("178456",500);
$cheque2=new Cheque("197456",1500);
$cheque3=new Cheque("124545",1500);
$cheque4=new Cheque("657866",1500);













$invoice1->addCheque($cheque1);
$invoice1->addCheque($cheque2);

$invoice2->addCheque($cheque3);
$invoice3->addCheque($cheque4);
$invoice4->addCheque($cheque4);
$report=new Report();

$report->addInvoice($invoice1);
$report->addInvoice($invoice2);
$report->addInvoice($invoice3);

$report->generateReport();

?>