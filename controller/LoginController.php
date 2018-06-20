<?php
class LoginController 
{
    public function __construct(){
        $action =Validate::getData('action');
        
            
        if ($action == 'login') {
           self::login();
          
        }
        else{
            View::load('header', array('title' =>'login'));
            View::load('login', array('errores' => []));
        }
        
    }

    private static function login(){
        $email = Validate::postData('email');
        $password =Validate::postData('password');
        
        $error = false;
        $errores = [];
        $user = new User();
        $datosUser = $user->login( array('email' =>$email ,'password'=>$password));

        if(!Validate::isEmail($email)){
            $error = true;
            $errores[]='el dato no es de tipo Email';
        }

        if($password == null || strlen($password)<=0 ){
            $error = true;
            $errores[]='El password es obligatorio';
        }
        if($user->email == null){
            $error = true;
            $errores[]='el email o password son incorectos';
        }
           
        if($error == true){
            View::load('header', array('title' =>'Login'));
            View::load('login', array('errores' =>  $errores));
        }
        else{
            
            $_SESSION['user'] = $datosUser[0];
           header('location: .');

        }

    }

}
