<?php
require_once '../vendor/autoload.php';

use PK\PkId\PkIdFactory;

if (!empty($argv[1])) {
    $inputId = (int)$argv[1];

    $pkId = PkIdFactory::createFromInteger($inputId);

    echo "\n" . $pkId->getId() . "\n";
}