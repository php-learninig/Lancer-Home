<?php
echo '!!!!!!!!!!kjfdagklerugvfe';
exit();
include_once __DIR__ . '/../config/config.php'; //инициализация настроек
include_once __DIR__ . '/../library/manFunctions.php';//основные функции

$ControllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'index';

$actionName = isset($_GET['action']) ? $_GET['action'] : 'test';


LoadPage($smarty,$ControllerName,$actionName);

