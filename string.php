<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 28.09.2016
 * Time: 1:45
 * Работа со строками
 */
$word = 'word';
$words = 'word1 word2, word3';

//echo mb_substr($words, 6); // вырезает первые 6 символов в строке
//echo substr($words, 6, 5); // вырезает первые 6 символов в строке и длинною в 5 символов // w
// сколько идет параметров в функцию
// сколько обязательных и необязательных параметров
// 1 пример без параметров(если возможно)
// 1 пример с одним параметром(если обязательных параметров более одного, то со всеми обязательными параметрами) и по примеру с необязательными

//Вывести 3 случайных числа от 0 до 100, без повторений.
function echoThree()
{
    return random_int(0, 33) . random_int(34, 66) . random_int(67, 100);
}

/*
  Вывести на экран все шестизначные счастливые билеты.
 * Билет называется счастливым, если сумма первых трех цифр в номере билета равна сумме последних трех цифр.
 * Найдите количество счастливых билетов и процент от общего числа билетов
 * разбить 6-ти значное число, на две пары по три числа
 *
 */

function bilet()
{
    return random_int(100000, 999999);
}

function funBilet()
{
    $bilet = (string) bilet(); // (string) 7120947
    $bilet1chast = $bilet{0} + $bilet{1} + $bilet{2};
    $bilet2chast = $bilet{3} + $bilet{4} + $bilet{5};

    if($bilet1chast === $bilet2chast) {
//        echo 'Это счастливый билет';
        return (int) $bilet;
    }
    else {
//        echo 'Это не счастливый билет';
        return false;
    }



    return $symbols;
}

$bilet = funBilet();

while(!$bilet)
{

    if(!$bilet){
        echo 'Билет дерьмовенький', PHP_EOL;
    }

    $bilet = funBilet();
}

echo "$bilet - Билет счачтливый", PHP_EOL;
