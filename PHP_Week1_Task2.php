<?php
//Получение длины строки
function stringLength(string $string) : int 
{
    $length = mb_strlen($string); //Используем mb_strlen для корректного подсчета длины строки с учетом многобайтовых символов
    return $length; //Возвращаем длину строки
}

//Использование функции
$string = "Task22"; 
$length = stringLength($string); //Сохраняем результат в переменной
echo "Длина строки '$string' составляет $length символов."; //Выводим результат
?>
