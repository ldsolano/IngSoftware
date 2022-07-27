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
    <link rel="stylesheet" href="/css/stilos_seguimiento.css">
</head>
<body class="fondo_index">
    <div class="contenedor_body menu">
        <h1>Rescatado y Saludable</h1>
        <a href="index.html">Home</a>
        <h1>Seguimiento</h1>
    </div>
    <div class="contenedor2">
        <form class="contenedor_formulario" method="POST" action="">
            <fieldset class="formulario">
                <div>
                    <label for="número">Ingrese el número del perro:</legend>
                    <input type="text" placeholder="Número de registro" name="idingreso">
                </div>
                <div class="new">
                    <input type="submit" value="Busqueda" class="boton">
                </div>
                <div>
                    <label for="número">El perro se encuentra esterelizado:</legend>
                    <div class="despliegue1">
                        <?php
                        /**$registro = crud::getById($_POST["idingreso"]);
                        echo "<pre>";
                        echo "Esterelizado: ", ($registro->esterilizacion);
                        echo "<pre>";**/
                        ?>
                    </div>
                </div>          
            </fieldset>
        </form>
        <div class="despliegue2">
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
        </div>
    </div>
    <div>
        <a class="boton" href="actualizar.php">Editar</a>
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