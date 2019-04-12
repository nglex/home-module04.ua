<!-- Задачи по учебнику Златопольского.
https://drive.google.com/file/d/0B6696ckkWj_zV1NsUHoxQzhOX1k/view?fbclid=IwAR2xqfLhiPuglwhqxZgugnO1VjqgrOqii7JK8AI-o5OYVsDWYxsGeFofxgk

10.1-10.5,10.26, 10.41,10.42
 -->
<!-- --------------------------------------------------- -->
<?php
echo 'ДЗ№4: Нагний А.:'.'<br/>'; 
echo 'Решение задач 10.1-10.5,10.26, 10.41,10.42.'.'<br/>';
echo 'Источник: https://drive.google.com/file/d/0B6696ckkWj_zV1NsUHoxQzhOX1k/view?fbclid=IwAR1qkWFvq_y4aMCOoayYXs2AJvQPiooz-iq1PeCOKgCsNI4j4tDFEA72E8I'.'<br/>'; 
echo '<br/>'; 
?>

<html lang="ru">
<body>
<table border="1">
<?php
echo '<b>'.'10.1.'.'</b>'.' Рассчитать значение x, определив и использовав необходимую функцию: '.'<br/>';
echo 'а) x = <sup>(&radic;6 + 6)</sup> / <sub>2</sub> + <sup>(&radic;13 + 13)</sup> / <sub>2</sub> + <sup>(&radic;21 + 21)</sup> / <sub>2</sub>'.'<br/>';
echo 'б) x = <sup>(5 + &radic;5)</sup> / <sub>(&radic;7 + 7)</sub>  +  <sup>(12 + &radic;12)</sup> / <sub>(&radic;8 + 8)</sub>  +  <sup>(31 + &radic;31)</sup> / <sub>(&radic;2 + 2)</sub>'.'<br/>';
// а)
$x = funcTen_one_a(6);
function funcTen_one_a($n){
	$j = $n;
	for ($i=$n; $i <= 21; $i = $i + $j) { 
		$x[$i] += round((sqrt($i) + $i)/2,2);
		$j++;
	}
	echo '<tr><td><pre> а) ';
	print_r($x);
	$x = array_sum($x);
	return $x;
}
echo 'x = '.$x;
echo '</td><td>';

// б)
$x = funcTen_one_b();
function funcTen_one_b(){
	for ($i=1; $i <= 3; $i++) { 
		switch ($i) {
			case 1: $x[1] = round((5 + sqrt(5))/(sqrt(7) + 7),2);
			case 2: $x[2] = round((12 + sqrt(12))/(sqrt(8) + 8),2);
			case 3: $x[3] = round((31 + sqrt(31))/(sqrt(2) + 2),2);
		}
	}
	echo '<pre> б) ';
	print_r($x);
	$x = array_sum($x);
	return $x;
}
echo 'x = '.$x;
echo '</td><td>';
// в)
echo '<pre>в) решение аналогично 10.1 б)'.'<br/></td><td>';
// г)
echo '<pre>г) решение аналогично 10.1 б)'.'<br/></td></tr>';
	
?>
</table>
</body>
</html>

<br> 

<html lang="ru">
<body>
<table border="1">
<?php
echo '<b>'.'10.2.'.'</b>'.' Рассчитать значение у, определив и использовав необходимую функцию: '.'<br/>';
echo 'а) y = <sup>(1 + sin1)</sup> / <sub>3</sub> + <sup>(5 + sin5)</sup> / <sub>3</sub> + <sup>(3 + sin3)</sup> / <sub>3</sub>'.'<br/>';
echo 'б) y = <sup>(2 + sin2)</sup> / <sub>(sin5 + 5)</sub> + <sup>(6 + sin6)</sup> / <sub>(sin3 + 3)</sub> + <sup>(1 + sin1)</sup> / <sub>(sin4 + 4)</sub>'.'<br/>';


// а)
$y = funcTen_two_a(5);
function funcTen_two_a($n){
	for ($i=1; $i <= $n; $i += 2) { 
		$y[$i] += round(($i+sin($i))/3,2);
	}
	echo '<tr><td><pre> а) ';
	print_r($y);
	$y = array_sum($y);
	return $y;
}
echo 'y = '.$y;

// б)
$y = funcTen_two_b();
function funcTen_two_b(){
	for ($i=1; $i <= 3; $i++) { 
		switch ($i) {
			case 1: $y[1] = round((2+sin(2))/(sin(5)+5),2);
			case 2: $y[2] = round((6+sin(6))/(sin(3)+3),2);
			case 3: $y[3] = round((1+sin(1))/(sin(4)+4),2);
		}
	}
	echo '</td><td><pre> б) ';
	print_r($y);
	$y = array_sum($y);
	return $y;
}
echo 'y = '.$y;
echo '</td><td>';
// в)
echo '<pre>в) решение аналогично 10.1 б)'.'<br/></td><td>';
// г)
echo '<pre>г) решение аналогично 10.1 б)'.'<br/></td></tr>';

?>
</table>
</body>
</html>
<br> 
<html lang="ru">
<body>
<table border="1">
<?php
echo '<b>'.'10.3.'.'</b>'.' Определить значение z max a, 2b max 2a b, b , где max x, y — максимальное из чисел х, у. Задачу решить двумя способами:
 '.'<br/>';
echo '1) не используя функцию max;'.'<br/>';
echo '2) определив и использовав функцию max.'.'<br/>';

$a = rand(7,10);
$b = rand(1,7);
$z = funcMax($a,$b);
function funcMax($a,$b){ // определение и использование функции 
	if ($a > 2*$b) { // решение без исп. ф-ции max - внутри ф-ции
		$z = $a;
	}else{
		if ($a < 2*$b) {
			$z = 2*$b;
		}else{
			echo $z = 'a и b равны'.'<br/>';
		}
	}
	return $z;
}

echo '<tr><td><pre> ';
echo '1)'.'<br/>';
echo 'a = '.$a.'</br>';
echo '2b = '.(2*$b).'</br>';
echo 'z = '.$z;
echo '</td></tr>';
?>
</table>
</body>
</html>
<?php
echo '<br/><b>10.4.</b>'.' Решение аналогично 10.3'.'<br/>';
?>

<html lang="ru">
<body>
<table border="1">
<?php
echo '<b>10.5.</b>'.' Определить значение z = sign x + sign y, где'.'<br/>';
echo 'sign a = <br/>';
echo '- 1 при a < 0,<br/>';
echo '0 при a = 0,<br/>';
echo '1 при a > 0<br/>';

$x = rand(-5,5);
$y = rand(-5,5);
$z = (funcSign($x)) + (funcSign($y));
// 2)
function funcSign($a){
	if ($a < 0) {
		$a = -1;
	}else{
		if ($a > 0) {
			$a = 1;
		}else{
			$a = 0;
		}
	}
	return $a;
}
// 1)

echo '<tr><td><pre> ';
echo '1)'.'<br/>';
echo 'x = '.$x.', y = '.$y.'</br>';
echo 'z = '.$z.'</br>';
echo '</td></tr>';
?>
</table>
</body>
</html>

 <br> 

<html lang="ru">
<body>
<table border="1">
<?php
echo '<b>10.26.</b> Найти наибольший общий делитель трех натуральных чисел, имея в виду, что НОД(a, b, c) = НОД(НОД(a, b), c). (Определить функцию для расчета наибольшего общего делителя двух натуральных чисел, используя алгоритм Евклида.)'.'<br/>';

$a = rand(1,100);
$b = rand(1,100);
$c = rand(1,100);
//1-й вариант 
function gcd($a, $b){
	if ($b > 0){
		return gcd($b, $a%$b);
	}else{
		return $a; 
	}
}
$x = gcd($a, $b);
$y = gcd($x, $c);
echo '<tr><td><pre>Вариант 1: ';
echo 'a = '.$a.', b = '.$b.', c = '.$c.'</br>';
echo 'наиб. больший делитель y = '.$y.'</br>';
echo '</td></tr>';
//2-й вариант 
function gcd1($a, $b){
	while (true) {
		if ($a == $b) {
			return $b;
		}
		if ($a > $b){
			$a = $a - $b;
		}else{
			$b =$b - $a;
		}
	}
}
$x = gcd1($a, $b);
$y = gcd1($x, $c);
echo '<tr><td><pre>Вариант 2: ';
echo 'a = '.$a.', b = '.$b.', c = '.$c.'</br>';
echo 'наиб. больший делитель y = '.$y.'</br>';
echo '</td></tr>';

?>
</table>
</body>
</html>

<br> 

<html lang="ru">
<body>
<table border="1">
<?php
echo '<b>10.41.</b> Написать рекурсивную функцию для вычисления факториала натурального числа <i>n</i>.'.'<br/>';
$n = rand(-5,10);
$f1 = funcFactorial($n);
$f2 = funcFact($n);
//1-й вариант
function funcFactorial($n){
	if ($n == 0) {
		return 1;
	}else{
		if ($n < 0) {
			return 0;
		}else{
			$x = $n;
			for ($i=1; $i < $n; $i++) {
				$x = $x*$i;
			}
			return $x;
		}
	}
}
//2-й вариант
function funcFact($n){
	if ($n == 0){
		return 1;
	}else{
		if ($n > 0){
			$x = $n*funcFact($n-1);
			return $x;
		}else{
			return 0;
		}
	}
}
echo '<tr><td><pre> ';
echo 'Дано число:'.$n.'</br>';
echo ' 1 вариант. Факториал числа: '.$f1.'</br>';
echo ' 2 вариант. Факториал числа: '.$f2.'</br>';
echo '</td></tr>';
?>
</table>
</body>
</html>

<br>

<html lang="ru">
<body>
<table border="1">
<?php
echo '<b>10.42.</b> В некоторых языках программирования (например, в Паскале) не предусмотрена операция возведения в степень. Написать рекурсивную функцию для расчета степени <i>n</i> вещественного числа <i>a</i> (<i>n</i> — натуральное число). <i>n</i>.'.'<br/>';

$x = rand(1,5);
$n = rand(-5,5);
$y = powNum($x,$n);

function powNum($x, $n){
	if ($n == 0){
		return 1;
	}else{
		if ($n > 0){
			$x = $x*powNum($x, $n-1);
			return $x;
		}else{
			$x = 1/($x*powNum(abs($x), abs($n)-1));
			return $x;
		}
	}
}
echo '<tr><td><pre> ';
echo 'Дано число:'.$x.'</br>';
echo ' Степень числа: '.$n.'</br>';
echo ' Результат: '.$y.'</br>';
echo '</td></tr>';
?>
</table>
</body>
</html>
