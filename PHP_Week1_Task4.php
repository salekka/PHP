<?php
//Проверка числа на четность
function checkChet(int $number)
{
    if ($number % 2 == 0) 
    {
        echo "Число $number является четным"; //Число четное
    } 
    else
    {
        echo "Число $number является нечетным"; //Число нечетное
    }
}
//Использование функции
$number = 4;
checkChet($number);
?>
