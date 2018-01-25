<?php
session_start();

// Шрифты TTF
$im = imageCreateFromJPEG ("images/noise.jpg");
$black = imagecolorallocate($im, 64, 64, 64);

// Включаем сглаживание
imageantialias($im, true);

// Число символов
$nChars = 5;

// Случайная строка
$randStr = substr(md5(uniqid()), 0, $nChars);
$_SESSION["randStr"] = $randStr;

// Координаты
$x = 20;
$y = 30;
$deltaX = 40;

for ($i=0; $i<strlen($randStr); $i++)
{
	$size = rand(18, 30);
	$angle = -30 + rand(0,60);
	imageTTFText($im, $size, $angle, $x, $y, $black, "fonts/bellb.ttf", 
		$randStr{$i});
	$x += $deltaX;
}

header("Content-type: image/jpeg");
imageJPEG($im, "", 75);
?>
