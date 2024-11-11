<?php
//Получение последнего символа строки
function LastSymbol($string) 
{
    //Получаем длину строки 
    $length = strlen($string);
    
    //Проверка на пустую строку
    if ($length > 0) 
    {
        //Получаем последний символ
        $lastSymbol = substr($string, -1);//substr — Возвращает подстроку
        echo "Последний символ строки '$string': '$lastSymbol'"; //Результат
    } 
    else 
    {
        echo "Строка пуста";
    }
}

//Использование функции
$string = "Hello";
LastSymbol($string);
?>
//можно также использовать mb_substr и mb_strlen для более точного ответа 