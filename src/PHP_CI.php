<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mars
 * Date: 10/10/13
 * Time: 6:30 AM
 * To change this template use File | Settings | File Templates.
 */

/**
 * Class PHP_CI
 * @package xmp
 */
class PHP_CI {

    /**
     * @param $a
     * @param $b
     * @return $a + $b
     */
    public static function sum($a, $b) {
        return $a + $b;
    }

    /**
     * @param $a
     * @param $b
     * @return $a - $b
     */
    public static  function sub($a, $b) {
        return $a - $b;
    }

    /**
     * @param $a
     * @param $b
     * @return $a * $b
     */
    public static function mul($a, $b) {
        return $a * $b;
    }

    /**
     * @param $a
     * @param $b
     * @return float
     */
    public static function div($a, $b) {
        return $a / $b;
    }
}

switch (@$_POST['submit']) {
    case "Plus": echo ('<a style="font-size:320px; text-decoration: none;" href="javascript:history.back()" >' . PHP_CI::sum($_POST['number1'], $_POST['number2']) . '</a>');
        break;
    case "Minus": echo ('<a style="font-size:320px; text-decoration: none;" href="javascript:history.back()">' . PHP_CI::sub($_POST['number1'], $_POST['number2']) . '</a>');
        break;
    case "Multiply": echo ('<a style="font-size:320px; text-decoration: none;" href="javascript:history.back()">' . PHP_CI::mul($_POST['number1'], $_POST['number2']) . '</a>');
        break;
    case "Divide": echo ('<a style="font-size:320px; text-decoration: none;" href="javascript:history.back()">' . PHP_CI::div($_POST['number1'], $_POST['number2']) . '</a>');
        break;
}
