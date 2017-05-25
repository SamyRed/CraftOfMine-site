<?php
$dataSet = $_POST;

unset($dataSet['ik_sign']); //удаляем из данных строку подписи
ksort($dataSet, SORT_STRING); // сортируем по ключам в алфавитном порядке элементы массива
array_push($dataSet, '5925776a3d1eaf72128b4568'); // добавляем в конец массива "секретный ключ"
$signString = implode(':', $dataSet); // конкатенируем значения через символ ":"
$sign = base64_encode(md5($signString, true)); // берем MD5 хэш в бинарном виде по сформированной строке и кодируем в BASE64

if ($sign != $_POST['ik_sign']) {
    file_put_contents('stats.txt', 'Ошибка подписи');
}