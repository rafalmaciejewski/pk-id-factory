<?php

namespace PK\Tests\PkId;

/**
 * Class PkId
 * @package PK\Tests\PkId
 */
class PkId
{
    /**
     * @var int
     */
    private $id;

    /**
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return md5(rand(0, 1000000));
    }
}