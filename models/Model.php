<?php

abstract class Model 
{
   private static  $db_host="localhost"; // ip = 117.0.0.1
   private static  $db_user="root"; 
   private static  $db_pass="admin"; 
   private static  $db_port="3306"; 
   private static  $db_charset="utf8mb4"; 
   protected $db_name="";
   private $conn; // conecion a la base de datos 
   protected $query ; // la consulta  a la base de datos 
   protected $rows =array();

   private function db_open(){
       $this->conn =new  mysqli(self::$db_host,self::$db_user,self::$db_pass, $this->db_name,self::$db_port);
       $this->conn->set_charset(self::$db_charset);
   }

   private function db_close(){
       $this->conn->close();
   }

   // consultas a la base de datos : INSERT, UPDATE, DELETE
   protected function set_query(){
      
       $this->db_open();
       $this->conn->query($this->query);
       $this->db_close();
     
   }

   // para consultas de tipo: SELECT 

    protected function get_query(){
    
        $this->db_open();
        $result = $this->conn->query($this->query);
        while($this->rows[] =$result->fetch_assoc());
        array_pop($this->rows);
        $result->close();
        $this->db_close();
        return $this->rows;

    }
    
    abstract protected function set();
    abstract protected function get();
    abstract protected function delete();
    abstract protected function update();

}
