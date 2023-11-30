<?php

    class Conectar{
        protected $dbh;

        protected function Conexion(){

            try{

                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=crud2","root","");//es para poder conectarnos a la base de datos mediante su local, nombre de la bd , usuario de la bd y contraseña
                return $conectar;//para que nos devuelva dicha variable
            }catch(Exception $e){
                print " !Error BD! : " . $e->getMessage() . " </br>";//si es que nos manda un mensaje de error
            }

        }


        public function set_names(){    

            return $this->dbh->query("SET NAMES 'utf8' ");//es para que nos reconosca las "ñ" y las mayusculas
            
        }
    }

?>