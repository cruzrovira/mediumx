<?php
class Autoload
{
    public function __construct(){

        spl_autoload_register(function ($class_name){
            $models_path = './models/'.$class_name.'.php';
            $controller_path = './controller/'.$class_name.'.php';
            $helper_path = './helper/'.$class_name.'.php';

            if(file_exists($models_path)) require_once($models_path);
            if(file_exists($controller_path)) require_once($controller_path);
            if(file_exists($helper_path)) require_once($helper_path);
        });
    }

    
}
