<?php

//var_dump($GLOBALS);//суперглобальная переменная
//var_dump($_SERVER); //полная информация о сервере
//var_dump($_GET);// url запросы , _POST-запрос отправляется скрытно
//var_dump($_FILES);//файлы, отправляемые по HTTP
//var_dump($_REQUEST);//http запросы
//var_dump($_ENV);
//var_dump($_COOKIE);//временные данные сохраненные в браузере

//операторы сравнения
$my_age = 31;
$vera_age = 2;
var_dump($my_age == $vera_age);//равенство
var_dump($my_age != $vera_age); //неравенство 
// остальное курить в доументации php

//управляющие кострукции

if($my_age != $vera_age) {
echo 'я старше своей дочери';

};
if($my_age == $vera_age) {
echo '[p';
} else {
    echo 'мы с дочерью одного возраста';
}//if(если) при введении операторов сравнения(например) и их исполнении(true) выдает то, что написано в фигурных скобках. если нет(false) то пропускет строчку кода
//else вывод в значении false
echo '<br>';

$skills = ['php', 'html', 'css', 'js'];
foreach ($skills as $key => $skill) {
    echo $skill;
    echo '<br>';
};//выведение данных по ключам

//обход значения for

for ($i=0; $i < 10; $i++) { 
    echo '<br>' . $i;
};

$a = 0;

//while ($a <= 10) {
    echo '<br>' . $a;
//echo 'end';}

echo '<br>';
//логическе операторы

show_my_skills($skills);

function show_my_skills ($skills = []) {
if ($skills){
    echo 'навыки есть';
    echo '<br>';

    foreach ($skills as $skill) {
        echo '$skill';
        echo '<br>';
    }
} else {
    echo 'навыков нет';
 
    }
}



//echo 'hello im function';
// 58:06

// числовые функции
echo '<br>';
//$float = 4.5614341351463161;

// ceil($float);// округление в большую сторону
// floor($float);// округление в меньшую сторону
// round($float);// округляет в ближайшую сторону
// min(1,2,3,4,5,6,7,8,9);// выдает минимальное значение
// max(1,2,3,4,5,6,7,8,9);// выдает максимальное значение
// mt_rand(1, 1000); // генератор случайных чисел в рамках заданных



//строки

//trim('   lfjkgkfjgk   ldgkjkldjgkj  ldjgldj    ');// обрезает с двух строн лишние пробелы
//strlen('idfhdvkdhvuhflkuv');// выводит количество символов
//substr('i love you',2, 4);// обрезает сиволы 1число - с какого символа, 2число-сколько выводить
//strtolower();//все буквы маленькие
//strtoupper();//все буквы большие

//explode(); // делает из строчки массив         
$array = explode (' ', 'I love you');

var_dump($array[1]);//почему-то не вывелась

echo '<br>';
//массивы

function showMeArrayValue($a) {
echo $a; //если прибавть, например, 1 то к каждому члену массива прибавится 1};
}

$a = [1,2,3,4];
$b = [5,6,7,8];
$d = [5,87,5,46,12,3,65,99];
//echo count($a); //количество единиц в массиве

//$c = array_merge($a, $b);// соединяет массивы в один
//var_dump($c);

//array_map('showMeArrayValue', $a);//функция для вызова функций для каждого значения

//sort($d);//несмотря на то, что в массиве числа идут вразнобой sort сортирует их от меньшего к большему
//var_dump($d); 

//$e = array_slice($d, 5);//показывает куски массива(в данном случае с 5 номера)
//var_dump($e);

//$deleted = array_pop($a);//выкидывает из массива последнее значение(в массиве $a это 4)
//var_dump($a);

array_shift();// в отличии от array_pop выкидывает 1 элемент из массива



//время

echo time();//время в секундах прошедшее от 1.01.1970
echo '<br>';

echo date('d.m.Y H:i:s'); // показывает дату и время. более подробные обозначения смотри в документации

$date = strtotime('+2 day');//преобразование строки в дату
echo date('d.m.Y H:i:s', $date);
date_default_timezone_set('Europe/Moscow');//часовые пояса
date_default_timezone_get();
mktime();


?>