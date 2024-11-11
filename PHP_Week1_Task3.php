<?php
//Получение последнего символа строки
function lastSymbol(string $string) 
{
    //Получаем длину строки 
    $length = strlen($string);
    
    //Проверка на пустую строку
    if ($length > 0) 
    {
        //Получаем последний символ
        $lastsymbol = substr($string, -1);//substr — Возвращает подстроку
        echo "Последний символ строки '$string': '$lastsymbol'"; //Результат
    } 
    else 
    {
        echo "Строка пуста";
    }
}

//Использование функции
$string = "Hello";
lastSymbol($string);
?>
//можно также использовать mb_substr и mb_strlen для более точного ответа 
