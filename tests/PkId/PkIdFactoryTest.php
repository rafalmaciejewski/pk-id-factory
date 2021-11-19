<?php

declare(strict_types=1);

namespace PK\Tests\PkId;

use PHPUnit\Framework\TestCase;
use PK\PkId\PkId;
use PK\PkId\PkIdFactory;

class PkIdFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreatePkIdInstance(): void
    {
        $pkId = PkIdFactory::createFromInteger(1);
        $this->assertInstanceOf(PkId::class, $pkId);
    }

    /**
     * @test
     * @param int $inputId
     * @dataProvider getInputIds
     */
    public function shouldReturnRandomId(int $inputId): void
    {
        $pkId = PkIdFactory::createFromInteger($inputId);
        $this->assertNotEquals(md5((string)$inputId), $pkId->getId());
    }

    /**
     * @return int[][]
     */
    public function getInputIds(): array
    {
        return [
            [2314132],
            [0],
            [3254132],
            [234],
            [12343],
        ];
    }
}