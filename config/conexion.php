<?php

    class Conectar{
        protected$ddh;
        
        public function conexion(){
                try{
                    
                    $this->dbh = new PDO(
                    "mysql:host=localhost;dbname=ventas;charset=utf8",
                    "root",
                    "",
                    [
                    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION
                    ]
                    
    
                );
            echo"Conexion exitosa a la bd";
            return $this->dbh;
        }catch(Exception $e){
            echo"Error DB: ".$e->getMessage();
            die();
        }

    }
    public function set_names(){
        return $this->dbh->query("SET NAMES 'UTF8'");
    }
}
$conexion = new Conectar();
$conexion->Conexion();
?>