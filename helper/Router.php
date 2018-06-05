<?php
class Router
{
    public function __construct(){
        if(!isset($_GET['url']) || empty($_GET['url'])){
            $home = new HomeController();
        }
        else{
            $controller_name = ucwords($_GET['url']).'Controller';

            if(class_exists($controller_name)){
                $ClassController = new $controller_name;
            }else{
                View::load('404');
            }

        }
    }

}
