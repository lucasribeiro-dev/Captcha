<?php
session_start();
header("Content-type: image/jpeg");

$n = $_SESSION['captcha'];

$im = imagecreate(200,100);
imagecolorallocate($im, 255,255,255);


$fontcolor = imagecolorallocate($im, 20,20,20);
imagettftext($im, 50,0,20,70, $fontcolor, __DIR__.'/Phorssa.ttf', $n);

imagejpeg($im, null, 100);


?>