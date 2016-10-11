<?php
function utf8_str_split($str)
{
    // place each character of the string into and array
    $split = 1;
    $array = [];
    for($i = 0; $i < strlen($str);) {
        $value = ord($str[$i]);
        if($value > 127) {
            if($value >= 192 && $value <= 223) {
                $split = 2;
            }
            elseif($value >= 224 && $value <= 239) {
                $split = 3;
            }
            elseif($value >= 240 && $value <= 247) {
                $split = 4;
            }
        }
        else {
            $split = 1;
        }
        $key = null;
        for($j = 0; $j < $split; $j++, $i++) {
            $key .= $str[$i];
        }
        array_push($array, $key);
    }

    return $array;
}

/**
 * Функция вырезки
 *
 * @param  <string> $str
 *
 * @return <string>
 */
function clearstr($str)
{
    $sru = 'ёйцукенгшщзхъфывапролджэячсмитьбю';
    $s1 = array_merge(
        utf8_str_split($sru),
        utf8_str_split(strtoupper($sru)),
        range('A', 'Z'),
        range('a', 'z'),
        range('0', '9'),
        [
            '&',
            ' ',
            '#',
            ';',
            '%',
            '?',
            ':',
            '(',
            ')',
            '-',
            '_',
            '=',
            '+',
            '[',
            ']',
            ',',
            '.',
            '/',
            '\\'
        ]
    );
    $codes = [];
    for($i = 0; $i < count($s1); $i++) {
        $codes[] = ord($s1[$i]);
    }
    $str_s = utf8_str_split($str);
    for($i = 0; $i < count($str_s); $i++) {
        if(!in_array(ord($str_s[$i]), $codes)) {
            $str = str_replace($str_s[$i], '', $str);
        }
    }

    return $str;
}

?>