<?php
/**include_once "logica/crud.php";

$registro = new crud();
$registro->idingreso = 100;
$registro->raza = "Pastor aleman";
$registro->peso = 8;
$registro->sitActual = "Pata delantera quebrada";
$registro->diagnostico = "Enyesar";
$registro->medicamentos = "Pasasetamol, antiflamatorios";
$registro->indicaciones = "Revisar el yeso todos los días";
$registro->esterilizacion = "No";
$registro->create();
$registro = new crud();
$registro->idingreso = 101;
$registro->raza = "Pitbull";
$registro->peso = 4;
$registro->sitActual = "Sarna";
$registro->diagnostico = "Tratamiento para la sarna";
$registro->medicamentos = "Ponadas y unguentos";
$registro->indicaciones = "Linpiar todos los días en la mañana";
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
    <form class="contenedor_formulario">
        <fieldset class="formulario">
            <legend>Información del perro</legend>
            <div>
                <div>
                <label for="número">Número del perro:</legend>
                <input type="text" placeholder="Número de registro" id="numRegistro">
                </div>
                <div>
                    <label for="raza">Raza:</legend>
                    <input type="text" placeholder="Raza" id="raza">
                </div>
                <div>
                    <label for="peso">Peso:</legend>
                    <input type="number" placeholder="Peso" id="peso">
                    <label for="kg">KG</legend>
                </div>
                <div>
                    <label for="situacion">Situación Actual:</label>
                    <textarea id="situación"></textarea>
                </div>
            </div>
            <div>
                <div>
                <label for="diagnostico">Diagnostico:</label>
                <textarea id="diagnostico"></textarea>
                </div>
                <div>
                    <label for="Medicamentos">Medicamentos:</label>
                    <textarea id="medicamentos"></textarea>
                </div>
                <div>
                    <label for="indicaciones">Indicaciones:</label>
                    <textarea id="indicaciones"></textarea>
                </div>
                <div>
                    <label for="esterilizacion">Esterilización:</label>
                    <label for="checkbox1">Si</label>
                    <input type="checkbox" name="checkbox2" id="checkbox1">
                    <label for="checkbox2">No</label>
                    <input type="checkbox" name="checkbox2" id="checkbox2">
                </div>
            </div>

        </fieldset>
    </form>
    <div class="contenedor-boton">
        <input type="submit" value="Guardar" class="boton">
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