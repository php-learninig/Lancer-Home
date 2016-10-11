<?php


/**
 * Created by PhpStorm.
 * User: Anna
 * Date: 11.10.2016
 * Time: 23:26
 */
class Calculate
{
    public $arg1;
    public $arg2;

    public function __construct($arg)
    {
        echo 'Объект Создан!' . PHP_EOL;

        if(!empty($arg)) {
            echo 'Hello ', $arg;
        }
    }

    public function sum() // +
    {
        return $this->arg1 + $this->arg2;
    }

    public function subtraction() // -
    {
        return $this->arg1 - $this->arg2;
    }

    public function multiplication() // *
    {
        return $this->arg1 * $this->arg2;
    }

    public function division() // /
    {
        if($this->arg2 == 0) {
            return 'Error: Division by zero!';
        }

        return $this->arg1 / $this->arg2;
    }
}


//$calculate = new Calculate('Lancer');
//var_dump($calculate);
//
//$calculate->arg1 = 10;
//$calculate->arg2 = 0;
//var_dump($calculate);
//
//echo $calculate->division();
//
///* Подключение к БД */
//$conn = mysqli_connect('localhost', 'Anna', '1234', 'anna.dev');
//$connPDO = new PDO('mysql:host=localhost;dbname=anna.dev', 'Anna', '1234');
//var_dump($conn);
//
///*  */
//$sql = "SELECT * FROM `product`";
//$result = $connPDO->query($sql);
//print_r($result);
//
//echo PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL . PHP_EOL;
//
//foreach($result->fetch() as $item) {
//    echo $item, PHP_EOL;
//};

$calc = new Calculate('Anna');
