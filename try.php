<p><a href="./index.php">index</a></p>
<P><a href="./14LESSON.php">14 урок</a></P>
<p><a href="./homework14.php">дз14</a></p>
<p><a href="./lesson15.php">урок 15</a></p>
<?php

//echo 'dump';
//echo 'hello php,';

//print_r('hello,');

//var_dump('hi,');
// ЧУСТВИТЕЛЕН К РЕГИСТРУ $number И $Number - разные переменные

$number = 20;//целые числа int
var_dump($number);

$my_weight = 110.5;//не целые числа с остатком float
var_dump($my_weight);

$my_name = 'yakov';//строка string
var_dump($my_name);

$web_developer = true;// (bool)булевые значения имеют варианты только true или false
var_dump($web_developer);

// от $my_name до $web_developer - скалярные значения, то есть те, которые помещаются в одну строку
// далее идут массивы

//$my_skills = array('html', "css"); старый вариант написания; можно вносить данные как в '' так и в ""$
$my_skills = ['html', 'css'];// простой массив; новое написание с []
var_dump($my_skills);

 echo $my_skills[0];// выводит данные по ключу

 $my_family = [
'father' => 'Yakov',
'mother' => 'Natalia',
'dother' => 'Vera'
 ];
 var_dump($my_family);
 echo $my_family[dother];// массив с данными, которые можно вывести внеся прописав определенное значение

 $my_family1 = [
    'adults'=> [
    'father' => 'Yakov',
    'mother' => 'Natalia',
    ],
    'dother' => 'Vera'
     ];
     var_dump($my_family1);
     echo $my_family1 ['adults']['mother'];// массив в массиве(многомерный массив), чтобы вытащить данные из adults необходимо указать надо построить такую форму. так же можно писать вместо adults или father - '0' так как имеется числовой эквивалент данным

// операции

$price = 10;
$discount = 4;

echo 'price' . ($price - $discount) . 'rub';//арифметические выражения, с тем же успехом можно было 10-4
// можно умножать, делить так же делить с остатком чере знак %

//инкремент "+1" дикремент "-1"
$Price = 12;
$Price++;// читай +1
$Price--;// читай -1
//конец первого урока по php

?>


