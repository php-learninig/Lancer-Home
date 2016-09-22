<?php
$visitCounter = 0;

if(isset($_COOKIE['visitCounter'])) {
    $visitCounter = (int)$_COOKIE['visitCounter'];
}

$visitCounter++;

$_COOKIE['visitCounter'] = $visitCounter;

if($visitCounter > 1){
    setcookie('visitCounter', $visitCounter);
    echo 'Вы были у нас ', $visitCounter, "раз \n";
}elseif($visitCounter === 1){
    setcookie('visitCounter', $visitCounter);
    echo 'добро пожаловать';
}






