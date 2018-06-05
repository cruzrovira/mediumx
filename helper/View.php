<?php
class View{
    public static function load($view_name,$array = array()){
        foreach ($array as $key => $value) {
            $$key = $value;
        }

        $view_path = "views/$view_name.php";
        if(file_exists($view_path)){
            include($view_path);
        }else{
            echo "la carga de la vista $view_name a fracasado";
        }

    }
    
}
