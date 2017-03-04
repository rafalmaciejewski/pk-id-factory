<?php

namespace PK\PkId;

/**
 * Class PkId
 * @package PK\PkId
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
     * @return string
     */
    public function getId(): string
    {
        return md5(rand(0, 1000000));
    }
}