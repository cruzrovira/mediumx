<?php
class  HomeController
{
    public function __construct(){
       // locahost/mediumx/index.php?url=controlador&action="" 
        self::view();    
    }
    public static function view(){
        $publication = new Publication();
        $datosPublication = $publication->get();
        $datos = array('datos' => $datosPublication);
        
        $datosHeader = array('title' => 'home');
        View::load('header',$datosHeader);
        View::load('home',$datos);
    }
}
