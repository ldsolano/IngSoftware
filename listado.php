<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contenedor_body menu">  
        <h1>Rescatado y Saludable</h1>
        <a href="index.html">Home</a>
        <h1>Listado de Pasientes</h1>
    </div>
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
</html>