<?php
//Получение последнего символа строки
function lastSymbol(string $string): ?string 
{
    //Используем mb_strlen для корректного подсчета длины строки
    $length = mb_strlen($string);
    
    //Проверка на пустую строку
    if ($length > 0) 
    {
        //Получаем последний символ, используя mb_substr для многобайтовых строк
        $lastsymbol = mb_substr($string, -1); //mb_substr — Возвращает подстроку
        return $lastsymbol; //Возвращает последний символ
    } 
    else 
    {
        return null; //Возвращает null, если строка пуста
    }
}

// Использование функции
$string = "Hello";
$lastChar = lastSymbol($string); //Сохраняет результат в переменной

if ($lastChar !== null) {
    echo "Последний символ строки '$string': '$lastChar'"; //Вывод результата
} else {
    echo "Строка пуста"; //Ошибка, если строка пуста
}
?>
