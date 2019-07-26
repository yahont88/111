<?php


$dates = [];

while ($dates < 10) {
 mt_rand(0, time() );
  if ($dates) {
  echo date ('d.m.Y H:i:s', $dates);
 }
}
  
echo '<br>';
echo '<br>';

show_date($dates);
function show_date ($dates = []) {
  if ($dates) {
  echo date ('d.m.Y H:i:s', $dates);
}
  foreach ($dates as $key => $date ) { 
  echo date ('d.m.Y H:i:s',$date);
  echo '<br>';
 }
}

echo '<br>','<br>';


$mindate = min($dates);
  echo date('d.m.Y H:i:s', $mindate);
echo '<br>';
echo 'самая ранняя дата!';

echo '<br>';
echo '<br>';


sort($dates); 
var_dump($dates);
echo '<br>';
echo 'отсортированы';

echo '<br>';
echo '<br>';

$last_date = max($dates);
echo date('d.m.Y H:i:s', $last_date);
echo '<br>';
echo 'самая поздняя дата!';

echo '<br>';
echo '<br>';

date_default_timezone_set('America/New_York');
echo date('d.m.Y H:i:s', $last_date);
echo '<br>';
echo "самая поздняя дата в майами(часовой пояс нью-йорка)";

echo '<br>';
echo '<br>';

echo ($_SERVER ["SERVER_ADDR"]);

echo '<br>';
echo ($_SERVER ["SERVER_NAME"]);

echo '<br>';

date_default_timezone_set('Europe/Moscow');
echo ($_SERVER ["REQUEST_TIME"]);

echo '<br>';

echo date ('d.m.Y H:i:s');
?>