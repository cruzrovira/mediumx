<?php
class LogoutController 
{
    public function __construct(){
        
        Session::logout();
    }
}
