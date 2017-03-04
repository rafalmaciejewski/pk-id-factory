<?php
require_once '../vendor/autoload.php';

use PK\PkId\PkIdFactory;

if (!empty($_GET['id'])) {
    $inputId = (int)$_GET['id'];
    $pkId = PkIdFactory::createFromInteger($inputId);

    echo $pkId->getId();
}