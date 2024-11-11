<?php
//Проверка совпадения первых букв двух слов
function checkWords(string $word1, string $word2): string 
{
    $firstword = substr($word1, 0, 1);
    $secondword = substr($word2, 0, 1);

    //Сравнение первых букв
    if (strtolower($firstword) == strtolower($secondword)) //strtolower — Приводит строку к нижнему регистру
    {
        return "Первые буквы слов '$word1' и '$word2' совпадают: '$firstword'";
    } 
    else 
    {
        return "Первые буквы слов '$word1' и '$word2' не совпадают: '$firstword' и '$secondword'";
    }
}

//Использование функции
$word1 = "Hello"; 
$word2 = "Henry";
$result = checkWords($word1, $word2); //Сохраняет результат в переменной
echo $result; //Выводит результат
?>
