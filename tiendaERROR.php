<!--$sql = $con->prepare("SELECT IdProducto, Producto, PrecioVentaPesos FROM t_productos WHERE Visible = 1")--> 
<!--$sql -> execute();-->

<?php Include("template/cabecera.php"); ?>
<?php
require 'config/database.php'; 
$db = new DataBase();
$con = $db->conectar();


$resultado = $sql->fetchAll(PDO::FETCH_ASSOC); 

?>

<main>
    <div clas="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach($resultado as $row) { ?>
            <div class ="Col">
                <div class="card shadow-sm">
                    <?php
                    $id = $row['IdProducto']; 
                    $imagen = "IMG/Productos/" . $IdProducto . "/1.jpg";
                    if (!file:_exists($imagen)){
                        $imagen = "IMG/ImagenNoDisponible.jpg"
                    }
                    ?>
                    <img src="<?php echo $imagen; ?>">
                    <div class="Card-body">
                        <h5 class ="Card-Title"><?php echo $row['Producto']; ?></h5>
                        <p class="Card-text"> $ <?php echo $row['PrecioVentaPesos']; ?></p>
                        <div class="d-flex Justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="#" class="btn btn-primary">Detalles</a>
                            </div>          
                            <a href="#" class="btn btn-success">Agregar</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>    
    </div>
            }
<br/>

<div class="col-md-3">
    <div class="card">
        <img class="card-img-top" src="IMG/ImagenNoDisponible.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title">Nombre Producto</h4>
            <p class="card-text">Precio</p>
            <a name="" id="" class="btn btn-primary" href="#" role="button"> + Info. </a>
            
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="card">
        <img class="card-img-top" src="IMG/ImagenNoDisponible.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title">Nombre Producto</h4>
            <p class="card-text">Precio</p>
            <a name="" id="" class="btn btn-primary" href="#" role="button"> + Info. </a>
            
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="card">
        <img class="card-img-top" src="IMG/ImagenNoDisponible.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title">Nombre Producto</h4>
            <p class="card-text">Precio</p>
            <a name="" id="" class="btn btn-primary" href="#" role="button"> + Info. </a>
            
        </div>
    </div>
</div>

<div class="col-md-3">
    <div class="card">
        <img class="card-img-top" src="IMG/ImagenNoDisponible.jpg" alt="">
        <div class="card-body">
            <h4 class="card-title">Nombre Producto</h4>
            <p class="card-text">Precio</p>
            <a name="" id="" class="btn btn-primary" href="#" role="button"> + Info. </a>
            
        </div>
    </div>
</div>

<?php Include("template/pie.php"); ?>

