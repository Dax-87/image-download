<?php
header("Content-type: image/jpeg");
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=tilllate-world.jpg'); 
header('Content-Transfer-Encoding: binary');
header('Connection: Keep-Alive');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');

$image = imagecreatefromjpeg($_GET['img']);

imagejpeg($image);
?>



