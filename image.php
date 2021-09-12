<?php
header('Content-Type: image/jpeg');
$raw=$_GET['text'];
$text = strlen($raw) > 26 ? substr($raw,0,26)."..." : $raw;

$rawc=$_GET['comment'];
$textc1 = strlen($rawc) > 25 ? substr($rawc,0,25)."..." : $rawc;
$textc = wordwrap($textc1, 25, "\n");
// Create Image From Existing File
$jpg_image = imagecreatefromjpeg('bg.jpg');

// Allocate A Color For The Text
$white = imagecolorallocate($jpg_image, 115, 115, 115);
$grey = imagecolorallocate($jpg_image, 115, 115, 115);


// Set Path to Font File
$font_path = 'assets/font.otf';
$size = 40;
$box = imagettfbbox($size, 0, $font_path, $text);
$text_width = abs($box[2]) - abs($box[0]);
$text_height = abs($box[5]) - abs($box[3]);
$image_width = imagesx($jpg_image);
$image_height = imagesy($jpg_image);
$x = 50;
$y = 280;
// Set Text to Be Printed On Image

// Print Text On Image
imagettftext($jpg_image, $size, 0, $x, $y, $white, $font_path, $text);
imagettftext($jpg_image, 30, 0, $x, 370, $grey, $font_path, $textc);

// Send Image to Browser
imagejpeg($jpg_image);

// Clear Memory
imagedestroy($jpg_image);
?>
