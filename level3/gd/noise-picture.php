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
$img=imagecreatetruecolor(210,39,90);
$img=imagecreatefromjpeg("images/noise.jpg");
$silver = imagecolorallocate($img,90,90,90);
$red = imagecolorallocate($img,255,0,0);
$green = imagecolorallocate($img,0,155,0);
$blue = imagecolorallocate($img,0,0,255);
$orange = imagecolorallocate($img,255,100,0);
$black = imagecolorallocate($img,0,0,0);

for ($i=1; $i<=$nChars; $i++){

    /*
 * random color
 */
    $ii=rand(1,6);
    switch ($ii){
        case 1: $color=$silver; break;
        case 2: $color=$red; break;
        case 3: $color=$green; break;
        case 4: $color=$blue; break;
        case 5: $color=$orange; break;
        case 6: $color=$black; break;
    }
    $angle=rand(-35,35);
    $iii=$i-1;
    imagettftext($img,28,$angle,30*$i,30, $color,"fonts/georgia.ttf","$randStr[$iii]");

}

header("Content-Type: image/jpg");
//imageAntiAlias($img,true);
imageJPEG($img);

	
?>
