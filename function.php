<?php declare(strict_types = 1);
header('Content-Type: text/html; charset=utf-8');
//include __DIR__ . '/lib/lib.php';
//require __DIR__ . '/lib/lib.php';
//include_once __DIR__ . '/lib/lib.php';
require_once __DIR__ . '/lib/lib.php';


/**
 * = присваивание
 * == равно
 * === тождественное равно
 */
define('VAL_1', random_int(0, 10), true); // a
define('VAL_2', random_int(0, 5), true);  // b
define('VAL_3', -5);

$a = VAL_1;
$b = VAL_2;
$c = VAL_3;

/**
 * Составьте функцию, которая на вход будет принимать имя человека,
 * а возвращать его пол, пытаясь угадать по имени
 * (null - если угадать не удалось).
 * Вам придется самостоятельно найти нужные вам строковые функции.
 */

