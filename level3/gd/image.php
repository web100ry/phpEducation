<?php
$img=imagecreatefromjpeg("images/sunset.jpg");

//$img=imageCreate(500,300); //256 colors
//$img=imagecreatetruecolor(500,300);
//imageAntiAlias($img,true); // Зглажування зображення - працює тільки з ImageCreateTrueColor

$silver = imagecolorallocate($img,192,192,192);
$red = imagecolorallocate($img,255,0,0);
$green = imagecolorallocate($img,0,255,0);
$blue = imagecolorallocate($img,0,0,255);
$white = imagecolorallocate($img,255,255,255);
$black = imagecolorallocate($img,0,0,0);

//imageFilledrectangle($img,1,1,498,298,$silver);// фон - заливка прямокутника (border)

imageline($img,0,0,100,150,$white);

imageFilledrectangle($img,100,150,200,290,$black);

imageRectangle($img,100,150,200,290,$green);

    $points=array(350,250,350,220,330,220,300,250); //масив точок
imagefilledpolygon($img,$points,4,$red);

imagefilledEllipse($img,250,250,50,50,$blue);
imageEllipse($img,250,250,100,100,$blue);


//дуги, сектора
imageArc($img,100,100,200,200,0,40,$white);
imageFilledArc($img,120,120,200,200,0,40,$white,IMG_ARC_PIE);
imageFilledArc($img,100,100,180,200,200,280,$blue,IMG_ARC_NOFILL | IMG_ARC_EDGED);//не залитий сектор
imageFilledArc($img,130,130,210,210,20,60,$blue,IMG_ARC_EDGED);
imageFilledArc($img,90,90,180,180,290,350,$blue,IMG_ARC_CHORD); // трикутник (зрізано по хорді)

//тексти

imagestring($img,5 ,30,160,"Hello!", $red); // OLD SCHOOL :)

imagettftext($img,10,10,20,20, $black,"fonts/georgia.ttf","ПРИВІТ!!");


//header("Content-Type: image/gif");
header("Content-Type: image/png");
//header("Content-Type: image/jpg");
//imageGIF($img);
imagePNG($img);
//imageJPEG($img,"test.jpg",80);
//imageGif($img,"test.gif");

?>