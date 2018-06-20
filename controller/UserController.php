<?php
class UserController
{
    public function __construct(){
        $action = Validate::getData('action');
        Session::validateAdmin();
        if($action =='view'){
            self::view();
        }
        elseif ($action=='delete') {
            self::delete();
        }
    }
    public static function view(){
        
        $user = new User();
        $datosUser = $user->get();
        $datos = array('datos' => $datosUser);
        
        $datosHeader = array('title' => 'User');
        View::load('header',$datosHeader);
        View::load('user',$datos);
    }

    public static function delete(){
        $id = Validate::getData('id');
        $user = new User();
        $user->delete($id);
        header("location:?url=user&action=view");

    }
}
