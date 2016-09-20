<?php
$a = $_REQUEST["a"];
$b = $_REQUEST["b"];
$radio = $_REQUEST["operator"];

var_dump($_REQUEST);
switch ($radio) {
    case '+':
        echo $a + $b;
    break;
    case '-':
        echo $a - $b;
    break;
    case '/':
        echo $a / $b;
    break;
}
