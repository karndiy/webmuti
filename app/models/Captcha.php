<?php

class Captcha {

    private $captchaString;    
    private $captchaImage;
    private $characters;
    private $length;

    public function __construct($length=6,$characters=null)
    {
        $this->characters = $characters;
        $this->length =$length;
    }

    public function generateCaptcha() {
        $this->captchaString = $this->generateRandomCaptcha($this->length,$this->characters);
        $_SESSION['captcha'] = $this->captchaString;
    
        $captchaImage = imagecreate(100, 50);
        $bgColor = imagecolorallocate($captchaImage, 255, 255, 255);
        $textColor = imagecolorallocate($captchaImage, 0, 0, 0);
        imagestring($captchaImage, 5, 20, 15, $this->captchaString, $textColor);
    
        ob_start();
        imagepng($captchaImage);
        $imageData = ob_get_clean();
        imagedestroy($captchaImage);
    
        return $imageData;
    }    

    public function validateCaptcha($captcha) {
        if ($_SESSION['captcha'] == $captcha) {
            unset($_SESSION['captcha']);
            return true;
        } else {
            return false;
        }
    }

    private function generateRandomCaptcha($length = 6, $characters = null) {
        if (!$characters) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        $captcha = '';
        $charCount = strlen($characters);
        for ($i = 0; $i < $length; $i++) {
            $captcha .= $characters[rand(0, $charCount - 1)];
        }
        return $captcha;
    }

}
