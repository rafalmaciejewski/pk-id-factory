<?php

namespace PK\PkId;

use PK\Tests\PkId\PkId;

/**
 * Class PkIdFactory
 * @package PK\PkId
 */
class PkIdFactory
{
    /**
     * @param int $id
     * @return PkId
     */
    public static function createFromInteger(int $id): PkId
    {
        return new PkId($id);
    }
}