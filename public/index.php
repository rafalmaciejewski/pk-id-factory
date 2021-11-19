<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use PK\PkId\PkIdFactory;

if (!empty($_GET['id'])) {
    $inputId = (int)$_GET['id'];
    $pkId = PkIdFactory::createFromInteger($inputId);

    echo $pkId->getId();
}