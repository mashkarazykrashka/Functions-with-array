<!DOCTYPE >
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Array</title>
  
</head>

<body>

<h1>Array_product</h1>

<?php

include("Functions.php");

$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		my_product_for($new);
	}

$time_end = microtime (1);
$time1 = $time_end - $time_start;

echo "Произведение массива из 10 элементов c помощью пользовательской функции с циклом for, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";

$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		my_product_foreach($new);
	}

$time_end = microtime (1);
$time3 = $time_end - $time_start;

echo "Произведение массива из 10 элементов c помощью пользовательской функции с циклом foreach, выполненная 10000 раз занимает $time3 секунд.\n";
echo "<br>";

$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);

for ($f=1; $f<=10000; $f++)
	{
		$sum2=array_product($new);
	}

$time_end = microtime (1);
$time2 = $time_end - $time_start;

echo "Произведение массива из 10 элементов с помощью встроенной функции array_product, выполненная 10000 раз занимает $time2 секунд.\n";
echo "<br>";
echo "<br>";
$rez=round($time3/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.\n";

$rez=round($time3/$time1, 0);
echo "<br>"; 
echo "Этот пример показывает, что пользовательская функция с циклом foreach по сравнению с циклом for работает приблизительно в $rez раз быстрее.";
?>

<h1>Array_sum</h1>

<?php

$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		my_sum_for($new);
	}

$time_end = microtime (1);
$time1 = $time_end - $time_start;

echo "Сложение массива из 10 элементов c помощью пользовательской функции с циклом for, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";

$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		my_sum_foreach($new);
	}

$time_end = microtime (1);
$time3 = $time_end - $time_start;

echo "Сложение массива из 10 элементов c помощью пользовательской функции с циклом foreach, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";

$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);

for ($f=1; $f<=10000; $f++)
	{
		$sum2=array_sum($new);
	}

$time_end = microtime (1);
$time2 = $time_end - $time_start;

echo "Сложение массива из 10 элементов с помощью встроенной функции array_sum, выполненная 10000 раз занимает $time2 секунд.\n";
echo "<br>";
echo "<br>";

$rez=round($time1/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.";

$rez=round($time3/$time1, 0);
echo "<br>"; 
echo "Этот пример показывает, что встроенная функция с циклом foreach по сравнению с for работает приблизительно в $rez раз быстрее.";
?>

<h1>Array_reverse</h1>

<?php
$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		my_reverse($new);
	}

$time_end = microtime (1);
$time1 = $time_end - $time_start;

echo "Пользовательская функция для возвращения массива в обратном порядке, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";

$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);

for ($f=1; $f<=10000; $f++)
	{
		$new=array_reverse($new);
	}

$time_end = microtime (1);
$time2 = $time_end - $time_start;

echo "Возвращение массива в обратном порядке с помощью встроенной функции array_reverse, выполненная 10000 раз занимает $time2 секунд.\n";
echo "<br>";
echo "<br>";

$rez=round($time1/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.";
echo "<br>";
?>

<h1>Array_search</h1>

<?php
$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		my_search($new,8);
	}

$time_end = microtime (1);
$time1 = $time_end - $time_start;

echo "Пользовательская функция для поиска элемента в массиве, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";

$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);

for ($f=1; $f<=10000; $f++)
	{
		$rez=array_search("8", $new);
	}

$time_end = microtime (1);
$time2 = $time_end - $time_start;

echo "Встроенная функции array_search, выполненная 10000 раз занимает $time2 секунд.\n";
echo "<br>";
echo "<br>";

$rez=round($time1/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.";
echo "<br>";
?>

<h1>In_array</h1>

<?php
$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		my_in($new,"8");
	}

$time_end = microtime (1);
$time1 = $time_end - $time_start;

echo "Пользовательская функция для проверки присутствия элемента в массиве, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";
$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);

for ($f=1; $f<=10000; $f++)
	{
		$rez=in_array(8,$new);
	}

$time_end = microtime (1);
$time2 = $time_end - $time_start;

echo "Встроенная функции in_array, выполненная 10000 раз занимает $time2 секунд.\n";
echo "<br>";
echo "<br>";

$rez=round($time1/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.";
echo "<br>";
?>

<h1>Array_key_exists</h1>

<?php
$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		my_array_key_exists($new,"8");
	}

$time_end = microtime (1);
$time1 = $time_end - $time_start;

echo "Пользовательская функция для проверки присутствия ключа в массиве, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";
$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);

for ($f=1; $f<=10000; $f++)
	{
		$rez=array_key_exists(8,$new);
	}

$time_end = microtime (1);
$time2 = $time_end - $time_start;

echo "Встроенная функции array_key_exists, выполненная 10000 раз занимает $time2 секунд.\n";
echo "<br>";
echo "<br>";

$rez=round($time1/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.";
echo "<br>";
?>

<h1>Array_flip</h1>

<?php
$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		my_flip($new);
	}

$time_end = microtime (1);
$time1 = $time_end - $time_start;

echo "Пользовательская функция для перемены мест ключей с элементами массива, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";

$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);

for ($f=1; $f<=10000; $f++)
	{
		$new=array_flip($new);
	}

$time_end = microtime (1);
$time2 = $time_end - $time_start;

echo "Встроенная функция array_reverse, выполненная 10000 раз занимает $time2 секунд.\n";
echo "<br>";
echo "<br>";

$rez=round($time1/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.";
echo "<br>";
?>

<h1>Array_keys</h1>

<?php
$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		my_keys($new);
	}

$time_end = microtime (1);
$time1 = $time_end - $time_start;

echo "Пользовательская функция для возвращения массива со всеми ключами первоначального массива, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";

$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);

for ($f=1; $f<=10000; $f++)
	{
		$new=array_keys($new);
	}

$time_end = microtime (1);
$time2 = $time_end - $time_start;

echo "Встроенная функция array_keys, выполненная 10000 раз занимает $time2 секунд.\n";
echo "<br>";
echo "<br>";

$rez=round($time1/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.";
echo "<br>";
?>




</body>

</html>