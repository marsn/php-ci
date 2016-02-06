<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mars
 * Date: 10/10/13
 * Time: 6:41 AM
 * To change this template use File | Settings | File Templates.
 */

require_once '../../src/PHP_CI.php';

/**
 * @class PHP_CI_Test
 * @package xmp
 */
class PHP_CI_Test extends PHPUnit_Framework_TestCase {

/*  private $calculator;
    public function setUp() {
    $this->calculator = new PHP_CI();
    }*/

    /**
     * Data provider
     * @return array
     */
    public function dataSumProvider() {
        return [[0, -1, -1],
            [7, 8, 15],
            [3, 15, 18],
            [5, 200, 205]
        ];
    }

    /**
     * @param $a
     * @param $b
     * @param $c
     * @dataProvider dataSumProvider
     */
    public function testSum($a, $b, $c) {
        $this->assertEquals(PHP_CI::sum($a, $b), $c, 'Addition is not correct');
    }


    /**
     * Data provider
     * @return array
     */
    public function dataSubProvider() {
        return [[0, -1, 1],
            [7, 8, -1],
            [3, 15, -12],
            [200, 5, 195]
        ];
    }

    /**
     * @param $a
     * @param $b
     * @param $c
     * @dataProvider dataSubProvider
     */
    public function testSub($a, $b, $c) {
        $this->assertEquals(PHP_CI::sub($a, $b), $c, 'Subtraction is not correct');
    }

    /**
     * Data provider
     * @return array
     */
    public function dataMulProvider() {
        return [[0, -1, 0],
            [7, 8, 56],
            [3, -15, -45],
            [-200, -5, 1000]
        ];
    }

    /**
     * @param $a
     * @param $b
     * @param $c
     * @dataProvider dataMulProvider
     */
    public function testMul($a, $b, $c) {
        $this->assertEquals(PHP_CI::mul($a, $b), $c, 'Multiplication is not correct');
    }

    /**
     * Data provider
     * @return array
     */
    public function dataDivProvider() {
        return [[0, -1, 0],
            [7, 7, 1],
            [45, -15, -3],
            [-200, -5, 40],
            [222, 111, 2]
        ];
    }

    /**
     * @param $a
     * @param $b
     * @param $c
     * @dataProvider dataDivProvider
     */
    public function testDiv($a, $b, $c) {
        $this->assertEquals(PHP_CI::div($a, $b), $c, 'Dividing is not correct');
    }

}