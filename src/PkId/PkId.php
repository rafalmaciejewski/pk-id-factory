<?php

declare(strict_types=1);

namespace PK\PkId;

class PkId
{
    /** @phpstan-ignore-next-line */
    private int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return md5((string)rand(0, 1000000));
    }
}