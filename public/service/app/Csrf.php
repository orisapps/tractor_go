<?php

namespace app;

/**
 * Description of Csrf
 *
 * @author KingStuffy
 */
class Csrf
{
    public function generate()
    {
        if (!isset($_SESSION['_csrf'])) {
            $_SESSION['_csrf'] = $this->generateRandomString();
        }
        
        return $_SESSION['_csrf'];
    }
    
    
    public function verify($csrf)
    {
        if (isset($_SESSION['_csrf'])) {
            return ($_SESSION['_csrf'] == $csrf);
        }
        
        return false;
    }
    

    private function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        
        return md5($randomString . time());
    }

}
