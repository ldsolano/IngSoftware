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

    </div>
    <div class="contenedor-boton">
        <input type="submit" value="Editar" class="boton">
    </div>
    <?php
           /**include_once "logica/crud.php";
            $registro = crud::getById(101);
            $registro->delete();**/
        ?>
    <?php
    include_once "logica/crud.php";
    $listado = crud::read();
    ?>
    <table>
        <thead>
            <tr>
                <th>Ingreso #</th>
                <th>Raza</th>
                <th>Peso</th>
                <th>Situación Actual</th>
                <th>Diagnostico</th>
                <th>Medicamentos</th>
                <th>Indicaciones</th>
                <th>Esterilización</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listado as $reporte){?>
            <tr>
                <td><?php echo $reporte->idingreso;?></td>
                <td><?php echo $reporte->raza;?></td>
                <td><?php echo $reporte->peso;?></td>
                <td><?php echo $reporte->sitActual;?></td>
                <td><?php echo $reporte->diagnostico;?></td>
                <td><?php echo $reporte->medicamentos;?></td>
                <td><?php echo $reporte->indicaciones;?></td>
                <td><?php echo $reporte->esterilizacion?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
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