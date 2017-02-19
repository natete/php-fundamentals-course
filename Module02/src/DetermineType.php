<?php
/**
 * Created by PhpStorm.
 * User: natete
 * Date: 19/02/17
 * Time: 16:22
 */

define("CHEK_CONSTANT", "Yes, I am a constant!");

$intVar = 1234;
$stringVar = "I'm a String";
$boolVar = false;
$floatVar = 12.34;

echo is_int($intVar);
echo is_int($floatVar);

echo is_string($stringVar);
echo is_string($boolVar);

echo is_bool($boolVar);
echo is_bool($floatVar);

echo is_float($floatVar);
echo is_float($intVar);

echo defined('CHEK_CONSTANT');
echo defined('NEW_CONSTANT');