<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <title>Document</title>
    <Link rel="stylesheets" href="">
</head>
<body>
    
    <div id="select">
        <label> <select name="">

        <?php 
        include 'conexion.php';

        $consulta="SELECT * FROM t_productosestados";
        $ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));



        ?>
        <?php foreach ($ejecutar as $opciones): ?>


            <option value="<?php echo  $opciones ['Descripcion']?>"><?php echo  $opciones ['Descripcion']?></option>

        <?php endforeach ?>

        </select></label>
    </dvi>


    <div id="select">
        <label> <select name="">

        <?php 
        include 'conexion.php';

        $consulta="SELECT * FROM t_marcas ORDER BY Marca";
        $ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));



        ?>
        <?php foreach ($ejecutar as $opciones): ?>


            <option value="<?php echo  $opciones ['Marca']?>"><?php echo  $opciones ['Marca']?></option>

        <?php endforeach ?>

        </select></label>
    </dvi>


    <div id="select">
        <label> <select name="">

        <?php 
        include 'conexion.php';

        $consulta="SELECT * FROM t_categorias ORDER BY Categoria";
        $ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));



        ?>
        <?php foreach ($ejecutar as $opciones): ?>


            <option value="<?php echo  $opciones ['Categoria']?>"><?php echo  $opciones ['Categoria']?></option>

        <?php endforeach ?>

        </select></label>
    </dvi>

    <input type="date" name="cumpleanios" step="1" min="2013-01-01" max="2013-12-31" value="<?php echo date("Y-m-d");?>">


</body>
</html>