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
        <form class="contenedor_formulario">
            <fieldset class="formulario">
                <div>
                    <label for="número">Ingrese el número del perro:</legend>
                    <input type="text" placeholder="Número de registro" id="numRegistro">
                </div>
                <div class="new">
                    <input type="submit" value="Nueva Busqueda" class="boton">
                </div>
                <div>
                    <label for="número">El perro se encuentra esterelizado:</legend>
                    <input type="text" placeholder="Número de registro" id="numRegistro">
                </div>          
            </fieldset>
        </form>
        <div>
            <?php
            include_once "logica/crud.php";
                $registro = crud::getById(101);
                echo "<pre>";
                echo ($registro->raza);
                echo "</pre>";
                echo "<pre>";
                print_r ($registro->peso);
                echo "</pre>";
                print_r ($registro->sitActual);
                echo "</pre>";
                echo "<pre>";
                print_r ($registro->diagnostico);
                echo "</pre>";
                echo "<pre>";
                print_r ($registro->medicamentos);
                echo "</pre>";
                echo "<pre>";
                print_r ($registro->indicaciones);
                echo "</pre>";
                echo "<pre>";
                print_r ($registro->esterilizacion);
                echo "</pre>";
            ?>
        </div>
    </div>
    <div>
        <input type="submit" value="Editar" class="boton">
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