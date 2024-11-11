<?php
//Проверка на отрицательное число
function checkNegative(float $number) : string 
{
    if ($number < 0) 
    {
        return "Число $number является отрицательным";
    } 
    else 
    {
        return "Число $number не является отрицательным";
    }

}
//Проверка функции
$number = -5;
$result = checkNegative($number);
echo $result; //Вывод результата
?>
