<?php
//Получение первой цифры числа
function firstNumber(int $number): ?string //?string означает, что функция может вернуть строку или null. 
{
    //Преобразует число в строку
    $numberstring = (string)$number; //Преобразование в строку позволяет легко удалить знак минус и извлечь первую цифру

    //Знак - для отрицательных чисел
    if ($numberstring[0] == '-') 
    {
        $numberstring = substr($numberstring, 1); //substr — Возвращает подстроку
    }

    //Первая цифра
    $firstnumber = $numberstring[0];
    return $firstnumber; //Возвращает первую цифру
}

//Использование функции
$number = -7952812; 
$firstDigit = firstNumber($number); //Сохраняет результат в переменной

if ($firstDigit != null) 
{
    echo "Первая цифра числа $number: $firstDigit"; //Выводит результат
} 
else 
{
    echo "Число не содержит цифр"; //Ошибка если это случится
}
?>
