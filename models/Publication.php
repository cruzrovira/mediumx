<?php
class Publication extends Model
{
    public $id_publication;
    public $title;
    public $publication;
    public $date;
    public $id_user;
    public function __construct(){
        $this->db_name="mediumx";
    }
    public function set($datos = array()){
        foreach ($datos as $key => $value) {
            $$key = $value;
        }
        $this->query="INSERT INTO publication(id_publication,title,publication,date,id_user) VALUES($id_publication,'$title','$publication',NOW(),$id_user)";
        $this->set_query();
    }
    public function get($id=''){
        $this->query = ($id=='')?"SELECT * FROM publication order by id_publication desc":"SELECT * FROM publication WHERE id_publication =$id";
        $this->get_query();

        if(count($this->rows) ==1){
            foreach ($this->rows[0] as $key => $value) {
                $this->$key=$value;
            }
        }

        return $this->rows;
    }

    public function getUser($id=''){
        $this->query= "SELECT * FROM publication where id_user = $id";
        $this->get_query();
        return $this->rows;
    }

    public function delete($id=''){
        $this->query= "DELETE  FROM publication where id_publication = $id";
        $this->set_query();
    }
    public function update($datos= array()){

        foreach ($datos as $key => $value) {
            $$key = $value;
        }

        $this->query="UPDATE  publication SET title = '$title', publication = '$publication' WHERE id_publication = $id_publication ";
        
        $this->set_query();
    }
}
