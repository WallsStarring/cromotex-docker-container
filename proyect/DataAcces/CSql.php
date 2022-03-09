<?php
// Conexion a Base de Datos
class CSql {
   private $url = "host.docker.internal";
   private $dbname = "DBCromotexPreProduccion";
   private $user = "sa";
   private $password = "golft0123";

   
   public function geturl(){
       return $this->url;
   }
   
   public function getuser(){
       return $this->user;
   }
   
   public function getpassword(){
       return $this->password;
   }
   
   public function getdbname(){
       return $this->dbname;
   }
}