<?php
    class Connection {
        protected $database;

        protected function Conexion(){
            try{
                $conectar = $this->databse = new PDO("mysql:loca=localhost;dbname=crud","root","")
                return $conectar;
            }catch(Exception $e){
                print "¡Error BD!: " .$e->getMessage(). "<br/>";
                die();
            }
        }
    }
?>