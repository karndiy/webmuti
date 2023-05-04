<?php

//session_start();
//print_r($_SESSION);
require_once 'app/models/Captcha.php';
$character  = "ABCDEF0123456789";
$chalength =  6;

 $captcha = new Captcha($chalength ,$character);
 $imageData = $captcha->generateCaptcha();


echo '<img src="data:image/png;base64,' . base64_encode($imageData) . '">';
echo '<hr>';
print_r($_SESSION);

?>