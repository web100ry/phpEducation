<?php
$img=imageCreate(500,300);
//$img=imagecreatetruecolor(500,300);
header("Content-Type: image/gif");
imageGif($img);

?>