<?php
use popp\ch_3\BookProduct;
use popp\ch_3\CdProduct;
use popp\ch_3\ShopProductWriter;
use popp\ch_4\batch01\Runner;

require_once("vendor/autoload.php");
$book1 = new BookProduct("booktitle", "first", "main", 99, 200);

$book2 =new BookProduct("booktitle", "first", "main", 99, 203);

$cd = new CdProduct("cdtitle", "first", "main", 99.0, 200);
$cd->setDiscount(10);

$writer = new ShopProductWriter();
$writer->addProduct($book1);
$writer->addProduct($book2);
$writer->addProduct($cd);

$writer->write();
     

Runner::run2();



      