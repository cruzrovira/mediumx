<?php
class DetalleController
{
    public function __construct(){
        $action = Validate::getData('action');
        if($action == 'view'){
            self::view();
        }
    }

    private static function view(){
        $id = Validate::getData('id');
        $publication = new Publication();
        $user = new User();
        $favoriteInclude = false;

        $favorite = new Favorite();
        $id_user= isset( $_SESSION['user']['id_user'])? $_SESSION['user']['id_user']:0;  
        $datosFavorite = $favorite->get($id_user);
        foreach ($datosFavorite as $key => $value) {
            if($value['id_publication']== $id){
                $favoriteInclude = true;
                break;
            }
        }



        $publication->get($id);
        $user->get($publication->id_user);
        $datosHeader = array('title' => $publication->title );
        $datosDetalle = array('id_publication'=>$publication->id_publication,
                            'title' => $publication->title,
                            'publication'=>$publication->publication,
                            'date'=>$publication->date,
                            'email'=>$user->email,
                            'id_user'=>$publication->id_user,
                            'img'=>$user->img,
                            'favoriteInclude'=>$favoriteInclude
                            );
        View::load('header',$datosHeader);
        View::load('detalle',$datosDetalle);
    }
}
