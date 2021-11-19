<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use PK\PkId\PkIdFactory;

if (!empty($argv[1])) {
    $inputId = (int)$argv[1];

    $pkId = PkIdFactory::createFromInteger($inputId);

    echo PHP_EOL . $pkId->getId() . PHP_EOL;
}