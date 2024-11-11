<?php
//Проверка на отрицательное число
function checkNegative($number) 
{
    if ($number < 0) 
    {
        echo "Число $number является отрицательным";
    } 
    else 
    {
        echo "Число $number не является отрицательным";
    }

}
//Проверка функции
$number = -5;
checkNegative($number);
?>