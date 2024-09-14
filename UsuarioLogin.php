<?php Include("template/cabecera.php"); ?>

<?php
if($_POST){
    header ('Location:inicio.php');
} 
?>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    
                    <form method="POST">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="email" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico">
                        </div>
                    
                        <div class="form-group">
                            <label>Contraseña:</label>
                            <input type="password" class="form-control" name="contrasenia" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
                        </div>
                    
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="mostrarContrasenia">
                            <label class="form-check-label" for="mostrarContrasenia">Mostrar contraseña</label>
                        </div>
                    
                        <br>

                        <button type="submit" style="background-color: Green; border-color: Green" class="btn btn-primary">INGRESAR</button>
                        <button type="submit" style="background-color: Green; border-color: Green" class="btn btn-primary">Recuperar Usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function() {
    const mostrarContraseniaCheckbox = document.getElementById('mostrarContrasenia');
    const contraseniaInput = document.getElementById('exampleInputPassword1');

    mostrarContraseniaCheckbox.addEventListener('change', function() {
        if (mostrarContraseniaCheckbox.checked) {
            contraseniaInput.type = 'text';
        } else {
            contraseniaInput.type = 'password';
        }
    });
});
</script>

  <?php Include("template/pie.php"); ?>
