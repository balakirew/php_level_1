<?php

$title = "Название страницы";
$heading = "Добро пожаловать";
$year = date ( 'Y' ) . " " . "год";

$a = 1;
$b = 2;

$a=$a+$b; 
$b=$a-$b; 
$a=$a-$b;

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title . " " . $year;?></title>
</head>
<body>
	<h1 style="color: blue;"><?php echo $heading;?></h1>
	<hr>
	<h2>Задача 5</h2>
	<p>A:<?php echo $a;?></p>
	<p>B:<?php echo $b;?></p>
</body>
</html>