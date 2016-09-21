<?php
$pass = '52662699';
$hash = password_hash($pass, PASSWORD_BCRYPT);
//echo $hash;

if(password_verify($pass,$hash)){
    echo 'Dobro posalovat';
}
else{
    echo 'osibka';
}








