<?php
include_once "logica/crud.php";
/**$registro = new crud();
$registro->idingreso = 101;
$registro->raza = "Chiguagua";
$registro->peso = 2;
$registro->sitActual = "Quemadura en la cola";
$registro->diagnostico = "Proteger el área quemada";
$registro->medicamentos = "Pasasetamol, antiflamatorios";
$registro->indicaciones = "Revisar 2 veces al día";
$registro->esterilizacion = "Si";
$registro->create();**/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/stilos_generales.css">
    <link rel="stylesheet" href="/css/stilos_registro.css">
</head>
<body class="fondo_index">
    <div class="contenedor_body menu">
        <h1>Rescatado y Saludable</h1>
        <a href="index.html">Home</a>
        <h1>Registro</h1>
    </div>
    <form class="contenedor_formulario" method="POST" action="">
        
        <fieldset class="formulario">
            <legend>Información del perro</legend>
            <div>
                <div>
                <label for="número">Número del perro:</label>
                <input type="text" placeholder="Número de registro" name="idingreso" require>
                </div>
                <div>
                    <label for="raza">Raza:</label>
                    <input type="text" placeholder="Raza" name="raza" require>
                </div>
                <div>
                    <label for="peso">Peso:</label>
                    <input type="number" placeholder="Peso" name="peso"require>
                    <label for="kg">KG</label>
                </div>
                <div>
                    <label for="situacion">Situación Actual:</label>
                    <textarea name="sitActual" require></textarea>
                </div>
            </div>
            <div>
                <div>
                <label for="diagnostico">Diagnostico:</label>
                <textarea name="diagnostico" require></textarea>
                </div>
                <div>
                    <label for="Medicamentos">Medicamentos:</label>
                    <textarea name="medicamentos" require></textarea>
                </div>
                <div>
                    <label for="indicaciones">Indicaciones:</label>
                    <textarea name="indicaciones" require></textarea>
                </div>
                <div>
                    <label for="esterilizacion">Esterilización:</label>
                    <label for="checkbox1">Si</label>
                    <input type="checkbox" name="esterilizacion" value= "si" id="si">
                    <label for="checkbox2">No</label>
                    <input type="checkbox" name="esterilizacion" value= "no" id="no">
                </div>
            </div>
        <?php
        if($_POST){
            $registro = new crud();
            $registro->idingreso = $_POST["idingreso"];
            $registro->raza = $_POST["raza"];
            $registro->peso = $_POST["peso"];
            $registro->sitActual = $_POST["sitActual"];
            $registro->diagnostico = $_POST["diagnostico"];
            $registro->medicamentos = $_POST["medicamentos"];
            $registro->indicaciones = $_POST["indicaciones"];
            $registro->esterilizacion = $_POST["esterilizacion"];
            $registro->create();
        }
        ?>
        </fieldset>
        <div class="contenedor-boton">
            <input type="submit" value="Guardar" class="boton">
        </div>
    </form>
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