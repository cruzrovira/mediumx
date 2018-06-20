<?php
class Session
{
    public function __construct(){
        session_start();
    }

    public static function logout(){
        session_destroy();
        header('location:.');
    }
    public static function validateUser(){
        if(!isset( $_SESSION['user'])){
            header("location:.");
        }
    }
     public static function validateAdmin(){
        if(!isset( $_SESSION['user'])  || $_SESSION['user']['id_role']!=1){
            header("location:.");
        }
    }
}
