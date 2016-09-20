<?php
/*
$integer = 0x1A;

echo is_int($integer), $integer;

echo "Hello! My like number - {$integer} \n\r";
echo 'Hello! My like number - {$integer}' . PHP_EOL;*/

$str = 'STRING';
//echo strlen($str);// 6

$name = 'Лавре'; // Lancer
$length = strlen($name); // 6
$length = $length - 1;
$position = $name{$length};

['name'=>'Lancer', 'year'=>'1992'];

$lancer = [
    'name' => 'Сергей',
    'lastName' => 'Lancer',
    'year' => '1992',
    'city' => 'Губкин',
];

$anna = [
    'name' => 'Anna',
    'lastName' => 'AnnaPC',
    'year' => '1997',
    'city' => 'Gubkin',
];

$users = [
    'lancer' => $lancer,
    'anna' => $anna,
];

/*
 * string  (str)         Строка                             'Произвольная строка'
 * integer (int)         Число                              8254
 * float                 Число с плавающей точкой           545.5464
 * boolean               Булев тип                          (true, false)
 * array                 Массив                             ['name'=>'Lancer', 'year'=>'1992']
 *
 * object   (obj)        Объект
 * resources             Некий ресурс
 *
 *
 *
 *
 * Необходимые функции
 */

print_r($x);           //  Распечатывает сущность (аналог <pre>)
var_dump($x);           // Распечатывает сущность (аналог <pre>, print_r())
isset($x);
gettype($x);
htmlspecialchars($x);
count($x);
strlen($x);
substr($x);
ini_get("post_max_size");
strip_tags($x);
