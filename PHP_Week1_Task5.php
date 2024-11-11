<?php
//Проверка совпадения первых букв двух слов
function checkWords(string $word1, string $word2) 
{
    $firstword = substr($word1, 0, 1);
    $secondword = substr($word2, 0, 1);

    //Сравнение первых буквв
    if (strtolower($firstword) == strtolower($secondword)) //strtolower — Приводит строку к нижнему регистру(преобразуются в строчную букву, которая соответствует заглавной)
    {
        echo "Первые буквы слов '$word1' и '$word2' совпадают: '$firstword'";
    } 
    else 
    {
        echo "Первые буквы слов '$word1' и '$word2' не совпадают: '$firstword' и '$secondword'";
    }
}

//Использование функции
$word1 = "Hello"; 
$word2 = "Henry";
checkWords($word1, $word2);
?>
