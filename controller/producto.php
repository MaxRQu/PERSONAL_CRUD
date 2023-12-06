<?php

    require_once ("../config/conexion.php");
    require_once("../models/Producto.php");

    $producto = new Producto();

    switch($_GET["op"]){

      /*  case "listar":
            $datos = $producto->get_producto();
            $data = Array();

            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["prod_nom"];
                $sub_array[] = '<button type="button" onClick=>"editar('.$row["prod_id"].');" id ="'.$row["prod_id"].'" class ="btn btn-outline-primary btn-icon"> <div><i class="fa fa-edit"></i></div></button> ';
                $sub_array[] = '<button type="button" onClick=>"eliminar('.$row["prod_id"].');" id ="'.$row["prod_id"].'" class = "btn btn-outline-danger btn-icon"> <div><i class="fa fa-trash"></i></div></button> ';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho" =>1,
                "iTotalRecords" =>count($data),//La función "count" devuelve el número de elementos que hay en el array. Es decir para un array de 4 elementos, 
                //la función count devolverá el número 4. Recuerda que si se trata de valores numéricos de índices, los cuatro valores numéricos serán normalmente 0, 1, 2 y 3 en lugar de 1, 2, 3 y 4.
                "iTotalDisplayRecords" =>count($data),
                "aaData" => $data
            );
            echo json_encode($results);
            break;*/


            case "listar":
                $datos=$producto->get_producto();
                $data= Array();
                foreach($datos as $row){
                    $sub_array = array();
                    $sub_array[] = $row["prod_nom"];
                    $sub_array[] = $row["prod_desc"];
                    $sub_array[] = '<button type="button" onClick="editar('.$row["prod_id"].');"  id="'.$row["prod_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
                    $sub_array[] = '<button type="button" onClick="eliminar('.$row["prod_id"].');"  id="'.$row["prod_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
                    $data[]=$sub_array;
                }
    
                $results = array(
                    "sEcho"=>1,
                    "iTotalRecords"=>count($data),
                    "iTotalDisplayRecords"=>count($data),
                    "aaData"=>$data);
                echo json_encode($results);
    
                break;



         /*   case "guardaryeditar":
                $datos=$producto->get_producto_x_id($_POST["prod_id"]);
                if(empty($_POST["prod_id"])){
                    if(is_array($datos)==true and count($datos)==0){
                        $producto->insert_producto($_POST["prod_nom"]);
                    }
                }else{
                    $producto->update_producto($_POST["prod_id"],$_POST["prod_nom"]);
                }
                break;*/

                case "guardaryeditar":
                    $datos=$producto->get_producto_x_id($_POST["prod_id"]);
                    if(empty($_POST["prod_id"])){
                        if(is_array($datos)==true and count($datos)==0){
                            $producto->insert_producto($_POST["prod_nom"],$_POST["prod_desc"]);
                        }
                    }else{
                        $producto->update_producto($_POST["prod_id"],$_POST["prod_nom"],$_POST["prod_desc"]);
                    }
                    break;



            case "mostrar":
                $datos=$producto->get_producto_x_id($_POST["prod_id"]);
                if(is_array($datos)==true and count($datos)>0){
                    foreach($datos as $row){
                        $ouput["prod_id"] = $row["prod_id"];
                        $ouput["prod_nom"] = $row["prod_nom"];
                        $ouput["prod_desc"] = $row["prod_desc"];
                    }
                    echo json_encode($ouput);
                }
                break;


            case "eliminar":
                $producto->delete_producto($_POST["prod_id"]);
                break;
    }

?>