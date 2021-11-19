<?php

declare(strict_types=1);

namespace PK\PkId;

class PkIdFactory
{
    public static function createFromInteger(int $id): PkId
    {
        return new PkId($id);
    }
}