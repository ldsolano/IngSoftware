<?php
    include_once "logica/crud.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/stilos_generales.css">
    <link rel="stylesheet" href="/css/stilos_actualizar.css">

</head>
<body class="fondo_index">
    <div class="contenedor_body">
    <h1>Rescatado y Saludable</h1>
        <h1>Actualizar</h1>
        <a href="index.html">Home</a>
        <div class="formulario-actualizar">
            <div>
                <form method="POST" action="">
                    <leyend>Datos Actuales</leyend>
                        <label for="número">Ingrese el número del perro:</legend>
                        <input type="text" placeholder="Número de registro" name="idingreso">
                        <input type="submit" value="Busqueda" class="boton">
                        <?php
                        if($_POST){
                            $registro = crud::getById($_POST["idingreso"]);
                            echo "<pre>";
                            echo "Raza: ", ($registro->raza);
                            echo "<pre>";
                            echo "<pre>";
                            echo "Peso: ", ($registro->peso);
                            echo "</pre>";
                            echo "<pre>";
                            echo "Situación Actual: ", ($registro->sitActual);
                            echo "</pre>";
                            echo "<pre>";
                            echo "Diaganostico: ", ($registro->diagnostico);
                            echo "</pre>";
                            echo "<pre>";
                            echo "Medicamentos: ", ($registro->medicamentos);
                            echo "</pre>";
                            echo "<pre>";
                            echo "Indicaciones: ", ($registro->indicaciones);
                            echo "</pre>";
                            echo "<pre>";
                            echo "Esterilización: ", ($registro->esterilizacion);
                            echo "</pre>";
                        }
                        ?>
                </form>
            </div>
            <div class="form-modif">
                <form method="POST" action="">
                    <div>
                        <label for="número">Ingrese el número del perro para cambiar la información:</label>
                        <input type="text" placeholder="Número de registro" name="idingresoC">
                    </div>
                    <div>
                        <label for="situacion">Situación Actual:</label>
                        <textarea name="sitActualC" require></textarea>
                    </div>
                    <div>
                        <label for="diagnostico">Diagnostico:</label>
                        <textarea name="diagnosticoC" require></textarea>
                    </div>
                    <div>
                        <label for="Medicamentos">Medicamentos:</label>
                        <textarea name="medicamentosC" require></textarea>
                    </div>
                    <div>
                    <label for="indicaciones">Indicaciones:</label>
                    <textarea name="indicacionesC" require></textarea>
                    </div>
                    <?php
                    include_once "logica/crud.php";
                    if($_GET){
                        $registro = crud::getById($_GET["idingresoC"]);
                        $registro->sitActual = $_GET["sitActualC"];
                        $registro->diagnostico = $_GET["diagnosticoC"];
                        $registro->medicamentos = $_GET["medicamentosC"];
                        $registro->indicaciones = $_GET["indicacionesC"];
                        $registro->update();
                    }
                    ?>
                </form>
            </div>
        </div>
        <?php
            /**include_once "logica/crud.php";
            $registro = crud::getById(102);
            $registro->sitActual = "Desnutrición";
            $registro->diagnostico = "Agregar vitaminas a sus alimentos";
            $registro->medicamentos = "Vitaminas";
            $registro->indicaciones = "Suminstrar vitaminas en las 3 comidas";

            $registro->update();**/
        ?>
        <?php
           /**include_once "logica/crud.php";
            $registro = crud::getById(101);
            $registro->delete();**/
        ?>
         <div class="contenedor-boton">
            <input type="submit" value="Modificar" class="boton">
        </div>
    </div>
</body>
<footer>
    <div class="footer-contenedor">
        <div class="derechos">
            <p>Todos los derechos reservados 2022</p>
            <p>By Daniel Solano</p>
        </div>
        <div class="siguenos">
            <p>Síganos en:  
                <img class="img_iconos" src="img/iconos.jpg">
            </p>
        </div>
    </div>
</footer>
</html>