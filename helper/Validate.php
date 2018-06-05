<?php
class Validate
{
    public static function getData($name){
        return  isset($_GET[$name])? trim($_GET[$name]):null;
    }

    public static function postData($name){
        return  isset($_POST[$name])? trim($_POST[$name]):null;
    }

    public static function isInteger($integer){
        if(filter_var($entero,FILTER_VALIDATE_INT)== false){
            return false;
        }else{
           return true;
        }
    }

    public static  function isFLoat($float){
        if(filter_var($float,FILTER_VALIDATE_FLOAT)== false){
            return false;
        }else{
            return true;
        }
    }

    public static function isEmail($email){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)== false){
            return false;
        }else{
            return true;
        }
    }

    public static function arraySerialize($array){
        $array = serialize($array);
        $array = urlencode($array);
        return $array;
    }
    
    public static function arrayUnserialize($array){
        return unserialize($array);
    }
}
