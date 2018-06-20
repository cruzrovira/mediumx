<?php
class RegisterController 
{
    public function __construct(){
        $action =Validate::getData('action');
        
            
        if ($action == 'add') {
           self::add();
        }
        else{
            View::load('header', array('title' =>'Register'));
            View::load('register', array('errores' => []));
        }
        
    }

    private static function add(){
        $email = Validate::postData('email');
        $password =Validate::postData('password');
        $password2=Validate::postData('password2');
       
        $error = false;
        $errores = [];
        $user = new User();
        $user->email($email);

        if(!Validate::isEmail($email)){
            $error = true;
            $errores[]='el dato no es de tipo Email';
        }

        if($password == null || strlen($password)<=0 ){
            $error = true;
            $errores[]='El password es obligatorio';
        }
        if($password != $password2 ){
            $error = true;
            $errores[]='El password no coincide';
        }
        
        if($user->email != null){
            $error = true;
            $errores[]='El correo ya esta en uso';
        }
        
        if($error == true){
            View::load('header', array('title' =>'Register'));
            View::load('register', array('errores' =>  $errores));
        }
        else{
            $datos = array('id_user' =>0,'email'=>$email,'password'=>$password,'img'=>'default.jpg','id_role'=>2);
            $user->set($datos);
            /*Crear variable de session de usuario logueado */

            $datosUser = $user->login( array('email' =>$email ,'password'=>$password));
            $_SESSION['user'] = $datosUser[0];
           header('location: .');
           

        }

    }

}
