<?php
/*
var_dump($_GET);//Запрос отображается в url
var_dump($_POST);//Запрос на сервер(клиент не видит)
var_dump($_REQUEST);//все вместе _GET _POST
*/

$news_array = "«Хулиганы те, кто бьет палками»: фанаты ответили РПЛ
Чемпиона UFC обвинили в домогательствах
«Зидан — позорник!»: Скандал в «Реале»
Скандал на ЧМ: пловец отказался встать на подиум с китайцем
КХЛ утвердила дресс-код для хоккеистов
«За что им платить?»: Кокорин и Мамаев устроились на…
Кейн забил ударом с центра поля. Роналду тоже забил
Футболист поцеловал одноклубника и забил с его паса";

$news = explode("\n", $news_array);    
//var_dump($news);
echo '<br>';
var_dump($_GET);
//echo $news_array[0]($_GET);

?>

<form action="./lesson15.php" method="GET"  >

    <input type="number" name="news" class="input" min="1" max="8">
    <button >получить новость</button>
</form>


<style>
    form{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .input{
        padding: 10px;
    }
