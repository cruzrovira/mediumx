<?php
class User extends Model
{
    public $id_user;
    public $email;
    public $password;
    public $img;
    public $id_role;

    public function __construct(){
        $this->db_name="mediumx";
    }
    public function set($datos = array()){
        foreach ($datos as $key => $value) {
            $$key = $value;
        }
        $this->query ="INSERT INTO user(id_user,email,password,img,id_role) VALUES($id_user,'$email',MD5('$password'),'$img',$id_role)";
        $this->set_query();
        
    
    }
    public function get($id=''){
        $this->query=($id=='')?"SELECT * FROM user": "SELECT * FROM user where id_user = $id";
        $this->get_query();
        if(count($this->rows)==1){
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }
        }
        return $this->rows;
    }

    public function delete($id=''){
        $this->query= "DELETE FROM user WHERE id_user = $id";
        $this->set_query();
    }
    public function update($datos = array()){
          foreach ($datos as $key => $value) {
            $$key = $value;
        }
        $this->query ="UPDATE user SET  email='$email' ,password= MD5('$password'),img='$img',id_role= $id_role WHERE id_user = $id_user"; 
        $this->set_query();
    }
    
    public function login($datos = array( )){
        foreach ($datos as $key => $value) {
            $$key = $value;
        }

        $this->query = "SELECT * FROM user WHERE email = '$email' and password = MD5('$password')";

         $this->get_query();
        if(count($this->rows)==1){
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }
        }
        return $this->rows;
    }


    public function email($email=''){
    
        $this->query = "SELECT * FROM user WHERE email = '$email'";
         $this->get_query();
        if(count($this->rows)==1){
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }
        }
        return $this->rows;
    }
}
