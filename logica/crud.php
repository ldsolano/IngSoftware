<?php
include_once "Conexion.php";
class crud extends Conexion {
    public $idingreso;
    public $raza;
    public $peso;
    public $sitActual;
    public $diagnostico;
    public $medicamentos;
    public $indicaciones;
    public $esterilizacion;
    //Create
    public function create(){
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO ingreso(idingreso,raza,peso,sitActual,diagnostico,medicamentos,indicaciones,esterilizacion) VALUES (?,?,?,?,?,?,?,?)");
        $pre->bind_param("isisssss", $this->idingreso, $this->raza, $this->peso, $this->sitActual, $this->diagnostico, $this->medicamentos, $this->indicaciones, $this->esterilizacion);
        $pre->execute();
    }
    //Read
    public static function read(){
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM ingreso");
        $pre->execute();
        $res = $pre->get_result();
        $listado = [];
        while($reporte = $res->fetch_object(crud::class))
            array_push($listado, $reporte);
        return $listado;
    }
    //Update
    public function update(){
        $this->conectar();
        $pre = mysqli_prepare($this->con,"UPDATE ingreso SET sitActual=?, diagnostico=?, medicamentos=?, indicaciones=? WHERE idingreso=?");
        $pre->bind_param("ssssi",$this->sitActual, $this->diagnostico, $this->medicamentos, $this->indicaciones, $this->idingreso);
        $pre->execute();
    }

    //Obtener los datos por medio del Id del registr (idingreso PK)
    public static function getById($idingreso){
        $conexion = new Conexion();
        $conexion->conectar();
        $pre = mysqli_prepare($conexion->con, "SELECT * FROM ingreso WHERE idingreso = ?");
        $pre->bind_param("i", $idingreso);
        $pre->execute();
        $res = $pre->get_result();
        return $res->fetch_object(crud::class);
    }

    //Delete
    public function delete() {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM ingreso WHERE idingreso = ?");
        $pre->bind_param("i", $this->idingreso);
        $pre->execute();
    }
}