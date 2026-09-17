<?php
// La clase pruducto hereda las funciones de la clase conectar
class producto extends conectar
{
    //Obtiene todos los pruductos de la base de datos
    public function get_producto(){

        // Establece la conexion de la base de datos

    $conectar = parent::conexion();

   //Codificacion de caracterrs

    parent::set_name();
   //Consulta SQL para obtener todos los productos

    $sql = "SELECT * FROM producto WHERE est= 1";

   //Prepara la consulta

    $sql = $conectar->prepare($sql);

    //Ejecuta la consulta
    
    $sql=execute();

    //Obtiene y retorna todos los registros encontrados

    $resulatado = $sql->fetchAll();

    }
}

>¿