<?php

    class Producto extends Conectar{

        public function get_producto(){
            $conectar = parent::Conexion();//"parent" recordar que para acceder a una constante o metodo de una clase padre, la palabra reservada es "parent" este nos sirve
            //para llmarla desde una clase extendida
            parent::set_names();//este es para que no tengamos problemas con tildes o "ñ"
            $sql = " SELECT * FROM tm_producto WHERE est = 1"; //hacemos la sentencia
            $sql = $conectar->prepare($sql);//preparamos la sentencia, pero antes ddeclaramos un variable para que se almacene dicho sentencia y conectamos medient la variable que conecta con la BD
            $sql->execute();//que se ejecute dicha variable con sus metodos o funciones
            return $resultado = $sql->fetchAll();  //y que nos retome dicha data en este caso todo en una variable
        }

  /*      public function get_producto(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_producto WHERE est=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }*/



        public function get_producto_x_id($prod_id){
            $conectar = parent::Conexion();//"parent" recordar que para acceder a una constante o metodo de una clase padre, la palabra reservada es "parent" este nos sirve
            //para llmarla desde una clase extendida
            parent::set_names();//este es para que no tengamos problemas con tildes o "ñ"
            $sql = " SELECT * FROM tm_producto WHERE prod_id = ?"; //hacemos la sentencia
            $sql = $conectar->prepare($sql);//preparamos la sentencia, pero antes ddeclaramos un variable para que se almacene dicho sentencia y conectamos medient la variable que conecta con la BD
            $sql->bindValue(1, $prod_id);//este es para obtener el parametro que se esta pidiendo para luego almacenarlo en 1 y que se muestre como una condicion  
            $sql->execute();//que se ejecute dicha variable con sus metodos o funciones
            return $resultado = $sql->fetchAll();  //y que nos retome dicha data en este caso todo en una variable
        }



        public function  delete_producto($prod_id){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = " UPDATE tm_producto
            SET
            est = 0,
            fech_elim = now()
            WHERE
                prod_id = ?";//con "now()" extraemos la fecha en el momento que se esta realizando dicha funcion
            $sql = $conectar->prepare($sql);
            $sql -> bindValue(1, $prod_id);
            $sql -> execute();
            return $resultado = $sql->fetchAll();
            
        }



        public function insert_producto($prod_nom){

            $conectar = parent::Conexion();
            parent::set_names();
            $sql = " INSERT INTO tm_producto (prod_id, prod_nom, fech_crea, fech_modi, fech_elim, est) VALUES (NULL, ? , now(), NULL, NULL, 1) ";
            $sql = $conectar->prepare($sql);
            $sql ->bindValue(1, $prod_nom);
            $sql ->execute();
            return $resultado = $sql->fetchAll();
            
        }


        public function update_producto($prod_id, $prod_nom){
            $conectar = parent::Conexion();
            parent::set_names();
            $sql = "UPDATE tm_prodcto
                SET 
                prod_nom = ?,
                fech_modi = now()
                WHERE
                    prod_id = ?    ";
            $sql = $conectar->prepare($sql);
            $sql ->bindValue(1, $prod_nom);
            $sql ->bindValue(2, $prod_id);
            $sql ->execute();
            return $resultado = $sql->fetchAll();
            
        }
    }


?>