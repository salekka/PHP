<?php
//Получение первой цифры числа
function firstNumber(int $number) 
{
    //Преобразуем число в строку
    $numberstring = (string)$number;//Преобразование в строку позволяет легко удалить знак минус и извлечь первую цифру

    //Знак минус для отрицательных чисел
    if ($numberstring[0] == '-') 
    {
        $numberstring = substr($numberstring, 1);
    }

    //Первая цифра
    $firstnumber = $numberstring[0];
    echo "Первая цифра числа $number: $firstnumber";
}

//Использование функции
$number = -7952812; 
firstNumber($number);
?>
