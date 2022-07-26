<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/stilos_generales.css">

</head>
<body class="fondo_index">
    <div class="contenedor_body">
        <h1>Actualizar</h1>
        <a href="index.html">Home</a>
        <?php
            /**include_once "logica/crud.php";
            $registro = crud::getById(100);
            $registro->sitActual = "Dos patas fracturadas";
            $registro->update();**/
        ?>
        <?php
           /**include_once "logica/crud.php";
            $registro = crud::getById(101);
            $registro->delete();**/
        ?>
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