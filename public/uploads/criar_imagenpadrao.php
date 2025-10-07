<?php
// Imagem padrão para perfil
$img = imagecreatetruecolor(200, 200);
$bg = imagecolorallocate($img, 240, 240, 240);
$circle = imagecolorallocate($img, 200, 200, 200);
imagefilledrectangle($img, 0, 0, 200, 200, $bg);
imagefilledellipse($img, 100, 100, 160, 160, $circle);
$textColor = imagecolorallocate($img, 180, 180, 180);
imagestring($img, 5, 60, 90, '?', $textColor);
header('Content-Type: image/png');
imagepng($img, __DIR__ . '/padrao.png');
imagedestroy($img);
?>
