<?php
class PublicationController 
{
    public function __construct(){
        $action =Validate::getData('action');
        
            
        if ($action == 'add') {
            Session::validateUser();
            self::add();
        }
        elseif ($action=="publicationUser") {
            Session::validateUser();
            self::publicationUser();    
        }

        else{
           Session::validateUser();
            View::load('header', array('title' =>'add publication'));
            View::load('publicationAdd', array('errores' => []));
        }
        
    }

    private static function publicationUser(){
        $publication = new Publication();
        $datosPublication = $publication->getUser($_SESSION['user']['id_user']);
        $datos = array('datos' => $datosPublication);
        
        $datosHeader = array('title' => 'Publication User');
        View::load('header',$datosHeader);
        View::load('home',$datos);
    }

    private static function add(){
        $title = Validate::postData('title');
        $publicationText =Validate::postData('publication');
        
        $error = false;
        $errores = [];
        
        if($title == null || strlen($title)<=0 ){
            $error = true;
            $errores[]='El titulo es obligatorio';
        }
        if($publicationText == null || strlen($publicationText)<=0 ){
            $error = true;
            $errores[]='La bublicasion no puede estar bacia';
        }

           
        if($error == true){
            
            View::load('header', array('title' =>'add publication'));
            View::load('publicationAdd',  array('errores' =>  $errores));
        }
        else{
            $publication = new Publication();
            $datos = array('id_publication'=>0,
                            'title'=>$title,
                            'publication'=>$publicationText,
                            'id_user'=>$_SESSION['user']['id_user']
                        );
            $publication->set($datos);
           header('location: .');

        }

    }

}