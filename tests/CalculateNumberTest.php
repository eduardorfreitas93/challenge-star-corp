<?php
/**
 * Created by PhpStorm.
 * User: eduardoramosdefreitas
 * Date: 2019-01-25
 * Time: 11:26
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use Src\CalculateNumber;
use Src\Service\IT;
use Src\Service\StarCorp;
use Src\Service\StarCorpianos;


/**
 * Class CalculateNumber
 * @package Src
 */
class CalculateNumberTest extends TestCase
{
    public function emptyReplaceProvider()
    {
        return [
            [1, null],
            [2, null],
            [4, null],
            [7, null],
        ];
    }

    /**
     * @dataProvider emptyReplaceProvider
     */
    public function testVerifyCalculateEmpty($val, $expected)
    {
        $calculateNumber = new CalculateNumber();
        $this->assertEquals($expected, $calculateNumber->verifyCalculate($val));
    }

    public function replaceProviderStarCorp()
    {
        return [
            [3, StarCorp::getNameClass()],
            [9, StarCorp::getNameClass()]
        ];
    }

    /**
     * @dataProvider replaceProviderStarCorp
     */
    public function testVerifyCalculateStarCorp($val, $expected)
    {
        $calculateNumber = new CalculateNumber();
        $this->assertEquals($expected, $calculateNumber->verifyCalculate($val));
    }

    public function replaceProviderIT()
    {
        return [
            [5, IT::getNameClass()],
            [10, IT::getNameClass()]
        ];
    }

    /**
     * @dataProvider replaceProviderIT
     */
    public function testVerifyCalculateIT($val, $expected)
    {
        $calculateNumber = new CalculateNumber();
        $this->assertEquals($expected, $calculateNumber->verifyCalculate($val));
    }

    public function replaceProviderStarCorpianos()
    {
        return [
            [15, StarCorpianos::getNameClass()],
            [30, StarCorpianos::getNameClass()]
        ];
    }

    /**
     * @dataProvider replaceProviderStarCorpianos
     */
    public function testVerifyCalculateStarCorpianos($val, $expected)
    {
        $calculateNumber = new CalculateNumber();
        $this->assertEquals($expected, $calculateNumber->verifyCalculate($val));
    }

    public function replaceProviderNumberArray()
    {
        return [
            [
                1,
                10,
                [
                    0 => StarCorp::getNameClass(),
                    1 => IT::getNameClass(),
                    2 => StarCorp::getNameClass(),
                    3 => StarCorp::getNameClass(),
                    4 => IT::getNameClass()
                ]
            ]
        ];
    }

    /**
     * @dataProvider replaceProviderNumberArray
     *
     * @param $expected
     */
    public function testStartNumberArray($from, $to, $expected)
    {
        $calculateNumber = new CalculateNumber();
        $this->assertEquals($expected, $calculateNumber->start($from, $to));
    }

    public function replaceProviderRangeArray()
    {
        return [
            [
                range(1, 10),
                [
                    0 => null,
                    1 => null,
                    2 => StarCorp::getNameClass(),
                    3 => null,
                    4 => IT::getNameClass(),
                    5 => StarCorp::getNameClass(),
                    6 => null,
                    7 => null,
                    8 => StarCorp::getNameClass(),
                    9 => IT::getNameClass()
                ]
            ]
        ];
    }

    /**
     * @dataProvider replaceProviderRangeArray
     */
    public function testNumberCalculateArray($val, $expected)
    {
        $calculateNumber = new CalculateNumber();
        $this->assertEquals($expected, $calculateNumber->mapNumberCalculate($val));
    }
}
