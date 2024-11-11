<?php
//Проверка числа на четность
function checkChet(int $number): string
{
    if ($number % 2 == 0) 
    {
        return "Число $number является четным"; //Число четное
    } 
    else
    {
        return "Число $number является нечетным"; //Число нечетное
    }
}

//Использование функции
$number = 4;
$result = checkChet($number); //Сохраняем результат в переменной
echo $result; //Выводит результат
?>
