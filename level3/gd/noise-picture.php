<?php
//- Запустите сессию
session_start();
/*
 Создайте переменную nChars(количество выводимых на картинке символов)
		и присвойте ей произвольное значение(рекомендуемое: 5)
*/
$nChars=5;

/*
 *  випадкова строка nChars символів
 */
for ($i=1; $i<=$nChars; $i++){
    $randChar=rand(48,122);
        if ((90<$randChar and $randChar<97) or (57<$randChar and $randChar<65)){
         $i--;   continue;
    }
    $randStr.= chr($randChar);
}

//	- Создайте сессионную переменную randStr и присвойте ей сгенерированную строку
$_SESSION['randStr']=$randStr;

/*
 * basic config image
 */
$img=imagecreatetruecolor(210,39);
$img=imagecreatefromjpeg("images/noise.jpg");
$silver = imagecolorallocate($img,90,90,90);
$red = imagecolorallocate($img,255,0,0);
$green = imagecolorallocate($img,0,155,0);
$blue = imagecolorallocate($img,0,0,255);
$orange = imagecolorallocate($img,255,100,0);
$black = imagecolorallocate($img,0,0,0);
/*
 * random color
 */
$i=rand(1,6);
switch ($i){
    case 1: $color=$silver; break;
    case 2: $color=$red; break;
    case 3: $color=$green; break;
    case 4: $color=$blue; break;
    case 5: $color=$orange; break;
    case 6: $color=$black; break;
}

imagettftext($img,20,10,50,38, $color,"fonts/georgia.ttf","$randStr");

header("Content-Type: image/jpg");
//imageAntiAlias($img,true);
imageJPEG($img);

	/*
	ЗАДАНИЕ 2
	- Создайте изображение на основе файла "images/noise.jpg"
	- Создайте цвет для рисования
	- Включите сглаживание
	- Задайте начальные координаты x и y для отрисовки строки(рекомендуемые: 20 и 30)
	- Используя цикл for отрисуйте строку посимвольно
	- Для каждого символа используйте случайные значение размера и угла наклона
	- Отдайте полученный результат как jpeg-изображение с 10% сжатием
	*/
	
	
?>
