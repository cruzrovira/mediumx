<?php
class Favorite extends Model
{
    public function __construct(){
        $this->db_name="mediumx";
    }
    public function set($datos = array()){
        foreach ($datos as $key => $value) {
            $$key  = $value;
        }
        $this->query = "INSERT INTO favorite(id_favorite,id_user,id_publication) VALUES($id_favorite,$id_user,$id_publication)";
        
        $this->set_query();
    }
    public function get($id=''){
        $this->query= "SELECT
                    favorite.id_favorite,
                    publication.id_publication,
                    publication.title,
                    publication.publication,
                    publication.date,
                    publication.id_user
                FROM
	                    favorite INNER JOIN publication on (favorite.id_publication = publication.id_publication)
                    WHERE favorite.id_user =$id";
        $this->get_query();
        return $this->rows; 
    }
    public function delete($id=''){
        $this->query ="DELETE FROM favorite WHERE id_favorite = $id";
        $this->set_query();
    }
    public function update(){}
}
