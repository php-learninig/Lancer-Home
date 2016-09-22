<?php declare(strict_types = 1);
/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 22.09.2016
 * Time: 20:58
 */

$arg1 = $_REQUEST['arg1'];
$arg2 = $_REQUEST['arg2'];

$a = 'a';
$b = 'b';
$n = "\n";

$x = 5;
$y = 15;
$z = 123;

$empty = [];

$null = null;

$array = [
    'Anna' => [
        'name',
        'login',
        'roles' => 'Female',
        'years',
    ],
    'Lancer' => [
        'name',
        'login',
        'roles' => 'Male',
        'years',
    ],
    'Admin' => [
        'name',
        'login',
        'roles' => 'admin',
        'years',
    ],
    'Guest' => [
        'name',
        'login',
        'roles' => 'guest',
        'years',
    ],
];

///////////////////////////////////////////////////////////////////////////////////

/*if($x > $y) {
    echo '$x';
}
elseif($x < $y) {
    echo '$y';
}
else {
    echo 'равны';
}*/

/*switch($x) {
    case 1:
        echo '$x';
    break;

    case false:
        echo '$y';
    break;

    default:
        echo 'равны';
}*/

/**
 * isset - проверка на существование переменной
 * unset - удаляет переменную
 * empty - проверка переменной на пустоту
 */

/*if(isset($x)) {
    echo '$x is isset!', "\n";
}

unset($x);

if(isset($x)) {
    echo '$xx is isset!';
}
else {
    echo '$x is not isset!';
}*/

/*if(isset($_REQUEST['arg2']) && !empty($_REQUEST['arg2'])) {

    print_r($_REQUEST['arg2']);

}*/

/**
 * напиши функцию которая на вход будет принимать один обязательный аргумент,
 * проверять, если строка, то возвращать длину этой строки,
 * если массив, то возвращать длинну его (количество ключей массива)
 * 1. если $arg - string то 1.1
 *      1.1 return strlen($arg)
 * 2. в противном случае если $arg - array то 2.1
 *      2.1 return count($arg)
 * 3. в противном случае 3.1
 *      3.1 Вернуть сообщение об ошибке

 */

/*function Anna($argument)
{

    if(is_string($argument)) {
        return strlen($argument);
    }

    elseif(is_array($argument)) {
        return count($argument);
    }

    else {
        return 'Osibka';
    }
}*/

/**
 * для того чтобы проверить переменную на тип (строка,массив,число и тд) нужно открыть яндекс и ввести как проверить
 * типпеременной пхп
 */
//echo print_r($array);

//echo Anna('1354');

/**
 * Напиши функцию которая будет на вход принимать два аргумента
 * первый аргумент обязательный, второй необязательный
 * В первом аргументе должна приходить строка (string)
 *      //если это строчка, то продолжаем с этой переменной работать
 *      //в противном случае выбросить исключение с сообщением что это не строчка
 * //Во втором (не обязательном параметре) будет приходить целое число (int)
 *
 * //Если был передан 1 аргумент то вернуть должен что то подобное
 *      Lancer - 6 букв
 * Если было передано два параметра то следующее
 *      Привет Lancer! Тебе 24 года!
 */
/**
 * @param      $name
 * @param null $year
 *
 * @return string
 */
/*function hello($name, $year = null) {

    if(!is_string($name)){
        return print 'Это не строчка';
    }

    if($year === null){
        return print $name . ' - ' . mb_strlen($name). ' букв';
    }

    if(isset($name, $year) && !empty($name) && !empty($year) && is_numeric($year)){
        return print 'Привет ' . $name . ' Тебе ' . $year . ' года!';
    }

    return 'Сбой системы!';
}

hello('Lancer'); // Lancer - 6 букв
hello('Lancer', 24); // Привет Lancer Тебе 24 года!*/
