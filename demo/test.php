<?
function printr($noname, $password, $arg3)
{
    echo '<pre>';
    print_r($noname);
    echo '</pre>';
}

function calk($_1, $_2, $_3)
{
    echo $_1 + $_2 * $_3;
}

/*$data = '<?php ?> <br> <div>dfgfdgdfg</div>';
$i = 0;
$string = '123';
$string = (string) $string;


  echo strip_tags($data), "\n"; //  dfgfdgdfg
echo strip_tags($data, '<div>'), "\n\n"; //  <div>dfgfdgdfg</div>


for($i = 0; $i <= strlen($string); $i++){
    echo $string{$i}, "\n";
}


$i = 0;
while($i <= 10){
        echo $i, "\n";
    $i++;
}

for($I = 0; $I < 3; $I++) {
    include("var.php");
    echo $a++;
}

echo '<hr><hr><hr>';

for($j = 1; ;) {
    $i = round(9 / $j);
    switch($i) {
        case 5:
            echo "+";
        break;

        case 9:
            echo "-";
        break;

        case 3:
            echo "!";
        break 2;

        default:
            echo $i;
        break;
    }
    $j++;
}

while ($a < $b){
    echo $a;
    $a++;
}

while ($a < $b):
    echo $a;
    $a++;
endwhile;

$a = 0;
$file = 'vars.php';
for ($I=0; $I < 3; $I++)
{
    if (file_exists($file)) require_once($file);
    echo $a;
}*/

$users = [
    'Anna' => [
        'name' => 'anna',
        'year' => 18,
    ],

    'array' => [
        /*0 =>*/
        'gdfghjhdgfj',
        /*1 =>*/
        'dhgjhdgj',
        /*2 =>*/
        'hgdjdghjdhg',
        /*3 =>*/
        'hdgjdghj',
        /*4 =>*/
        'ghdjhdgj',
        /*5 =>*/
        'hdgjghdj',
        /*6 =>*/
        'dyjdhgjhg',
    ],

    'Lancer' => [
        'name' => 'Lancer',
        'year' => 24,
        'phone' => [
            'tele2' => [
                '0' => 'num1',
                'num2',
            ],
            'megafon' => 'mega1',
            'mts' => 'm1',
        ]
    ],

    'Vasya' => [
        'name' => 'Vasiliy',
        'year' => 86,
    ],
];

printr(2, 3, 4); // 2 + 3 * 4 // 14

calk(8.8663861442066E+198,8.8663861442066E+198,8.8663861442066E+198);

/*echo '<pre>';
print_r($noname);
echo '</pre>';

echo '<pre>';
print_r($non);
echo '</pre>';

echo '<pre>';
print_r($noe);
echo '</pre>';*/
// _3 '_3' 3