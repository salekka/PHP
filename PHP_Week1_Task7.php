<?php
//Получение предпослденего символа строки
function showWord(string $stringword) 
{
    //Проверка строки на более одного символа
    if (strlen($stringword) > 1) //strlen — Получает длину строки
    {
        //Предпоследний символ строки
        $predlastsymbol = substr($stringword, -2, 1); //substr — Возвращает подстроку. -2 = предпоследний символ, 1 = один символ
        echo "Предпоследний символ строки '$stringword': '$predlastsymbol'"; 
    } 
    else 
    {
        echo "Строка должна содержать более одного символа"; //Проверка
    }
}

//Использование функции
$stringword = "Seven7"; 
showWord($stringword);
?>
