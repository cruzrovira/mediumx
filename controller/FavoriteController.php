<?php
class FavoriteController
{
    public function __construct(){
        $action= Validate::getData('action');
        Session::validateUser();

        if($action =='add'){    
           self::add(); 
        }
        elseif ($action =='view') {
            self::view();
        }
        elseif ($action =='delete') {
            self::delete();
        }
    } 
    
    public static function add(){
     $id_publication = Validate::getData('id');
     $id_user =$_SESSION['user']['id_user'];
     $datos = array('id_favorite' =>0,
                    'id_user'=>$id_user,
                    'id_publication'=>$id_publication
                 );
     $favorite = new Favorite();
     $favorite->set($datos);
     header("location:?url=detalle&action=view&id=$id_publication");

    }

    public static function view(){
        $favorite = new Favorite();
        $datosFavorite = $favorite->get($_SESSION['user']['id_user']);
        $datos = array('datos' => $datosFavorite);
        
        $datosHeader = array('title' => 'Favorite');
        View::load('header',$datosHeader);
        View::load('favorite',$datos);

    }
    public static function delete(){
        $id = Validate::getData('id');
        
        $favorite = new Favorite();
        $favorite->delete($id);
        header("location:?url=favorite&action=view");
    }
}
