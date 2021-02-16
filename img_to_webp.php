<?php

/*$old_path = 'covers/';
$new_path = 'cov_new/';*/
$old_image = 'testimonial-1.jpg';
$new_image = 'testimonial-1.webp';

$img = imagecreatefromjpeg($old_image);
imagepalettetotruecolor($img);
imagealphablending($img, true);
imagesavealpha($img, true);

imagewebp($img, $new_image, 30);
imagedestroy($img);
