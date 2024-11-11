<?php
//Получение предпоследнего символа строки
function showWord(string $stringword): ?string 
{
    //Проверка строки на более одного символа
    if (mb_strlen($stringword) > 1) //Используем mb_strlen для корректного подсчета длины строки
    {
        //Предпоследний символ строки
        $predlastsymbol = mb_substr($stringword, -2, 1); //Используем mb_substr для многобайтовых строк
        return $predlastsymbol; //Возвращает предпоследний символ
    } 
    else 
    {
        return null; // Возвращаем null, если строка содержит менее двух символов
    }
}

//Использование функции
$stringword = "Seven7"; 
$predLastChar = showWord($stringword); //Сохраняет результат в переменной

if ($predLastChar !== null) 
{
    echo "Предпоследний символ строки '$stringword': '$predLastChar'"; //Выводит результат
} 
else 
{
    echo "Строка должна содержать более одного символа"; //Сообщение об ошибке
}
?>
