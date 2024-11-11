<?php
//Получение длины строки
function StringLength($string) 
{
    $length = strlen($string); //strlen — Получает длину строки, но лучше использовать mb_strlen так как он считает кириллицу более корреткно 
    echo "Длина строки '$string' составляет $length символов."; //Выводит результат
}
//Использования функции
$string = "Task_2"; 
StringLength($string);
?>