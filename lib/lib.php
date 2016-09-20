<?php

/**
 * @param        $num1
 * @param        $num2
 * @param string $operator
 */
function calculator($num1, $num2, $operator = '+')
{
    if(!isset($num1, $num2, $operator)) {
        exit ('Ошибка: Передайте все параметры в функцию!');
    }
    else {
        $num1 = (int) $num1;
        $num2 = (int) $num2;
        $operator = (string) $operator[0];
    }

    if($operator === '+') {
        echo $num1 + $num2;
    }

    elseif($operator === '-') {
        echo $num1 - $num2;
    }

    elseif($operator === '%') {
        echo $num1 % $num2;
    }

    elseif($operator === '*') {
        echo $num1 * $num2;
    }

    elseif($operator === '/') {
        echo $num1 / $num2;
    }
}

/**
 * @param $a
 * @param $b
 *
 * @return string
 */
function summ($a, $b)
{
    if($a > 0) {
        if($b > 0) {
            return $a + $b;
        }

        return 'Ошибка: $b < 0';
    }

    return 'Ошибка: $a < 0';
}

/**
 * @param $a
 * @param $b
 *
 * @return string
 */
function raznost($a, $b)
{
    if($a < 0) {
        if($b < 0) {
            return $a - $b;
        }

        return 'Ошибка: $b < 0';
    }

    return 'Ошибка: $a < 0';
}

/**
 * @param $a
 * @param $b
 *
 * @return string
 */
function la($a, $b)
{
    if($a > 0 && $b < 0) {
        return $a * $b;
    }

    if($a < 0 && $b > 0) {
        return $a * $b;
    }

    return 'Ошибка: $a > 0';
}

/**
 * @param $x
 * @param $y
 *
 * @return int
 */
function sravnenie($x, $y): int
{
    if(is_int($x) && is_int($y)) {
        if($x > $y) {
            return $x;
        }

        if($y > $x) {
            return $y;
        }

        if($x === $y) {
            return 0;
        }
    }

    return 0;
}

/**
 * @param $val
 * @param $pow
 *
 * @return int
 */
function stepen($val, $pow): int
{ // 10. 5
    $newVal = $val;

    for($i = 0; $i < $pow; $i++) {
        $newVal *= $val;
    }

    return $newVal;
}

/**
 * @param $a
 * @param $b
 * @param $c
 *
 * @return string
 */
function diskriminant($a, $b, $c)
{
    if($a !== 0) {
        return $b ** 2 - 4 * $a * $c;
    }

    return 'Osibka';
}

/**
 * @param $name
 *
 * @return string
 */
function IMA($name): string
{
    $count = mb_strlen($name) - 1;


    if($name{$count} === 'a' || $name{$count} === 'y') {
        return 'Женское Имя';
    }

    return 'Мужское имя';
}
