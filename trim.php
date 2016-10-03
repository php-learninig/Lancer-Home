<?php
$ControllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'mops';

echo 'Подключаемый php файл(Контроллер)= ' . $ControllerName . '<br/>';

$actionName = isset($_GET['action']) ? $_GET['action'] : 'test';

echo 'Функция формирующая страницу = ' . $actionName . '<br/>';


define('PasthPrefix','../controllers/');
define('PastPostfix','Controller.php');

function LoadPage($ControllerName, $actionName = 'index'){
    include_once PasthPrefix . $ControllerName . PastPostfix;

    $function = $actionName . 'Action';
    $function();
}

LoadPage($ControllerName,$actionName);








