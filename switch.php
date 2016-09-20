<?php
// http://anna.dev/switch.php?login=Lancer&password=52662699

/*

$login = $_GET['login'];
$password = $_GET['password'];
var_export($login);
var_export($password);*/

$day = random_int(1, 7);

/*if($day == 1) {
    echo 'Понедельник \n $day';
}elseif($day == 2) {
    echo "Понедельник \n $day";
}elseif($day == 3) {
    echo "Понедельник \n $day";
}elseif($day == 4) {
    echo "Понедельник \n $day";
}elseif($day == 5) {
    echo "Понедельник \n $day";
}elseif($day == 6) {
    echo "Понедельник \n $day";
}elseif($day == 7) {
    echo "Понедельник \n $day";
}else{
    echo "Неизвестный день недели";
} */


switch($day){
    case 1 :
        echo 'day равно понедельник';
    break;

    case 2 :
        echo 'day равно вторник';
    break;

    case 3 :
        echo 'day равно среда';
    break;

    case 4 :
        echo 'day равно четверг';
    break;

    case 5 :
        echo 'day равно пятница';
    break;

    case 6 :
        echo 'day равно суббота';
    break;

    case 7 :
        echo 'day равно воскресенье';
    break;

    default: echo 'Неизвестный день недели';
}

//echo "\n";