<?php

namespace PK\Tests\PkId;

use PK\PkId\PkIdFactory;

/**
 * Class PkIdFactoryTest
 * @package PK\Tests\PkId
 */
class PkIdFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldCreatePkIdInstance()
    {
        $pkId = PkIdFactory::createFromInteger(1);
        $this->assertInstanceOf(PkIdFactory::class, $pkId);
    }

    /**
     * @test
     * @param int $inputId
     * @dataProvider getInputIds
     */
    public function shouldReturnRandomId(int $inputId)
    {
        $pkId = PkIdFactory::createFromInteger($inputId);
        $this->assertNotEquals(md5($inputId), $pkId->getId());
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