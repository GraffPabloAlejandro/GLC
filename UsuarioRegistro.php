<?php Include("template/cabecera.php"); ?>
     
<?php $servidor="localhost";
      $usuario="root";
      $password="retrumicultameconox";
      $db="bdglcweb";
    
    /*$conexion=mysqli_connect($servidor,$usuario,$password,$db) or die(mysqli_error());*/

    $conexion = new mysqli($servidor, $usuario, $password, $db);

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    } ?>

</br>

  <div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Registro [Todos los datos son requeridos]
                </div>
                <div class="card-body">
                    
                <form method="POST">

                    <div class = "form-group">
                    <label>Nombre/s</label>
                    <input type="text" class="form-control" name="txtNombres" id="txtNombres" placeholder="Escriba aqui su/s nombre/s">
                    </div>

                    <div class = "form-group">
                    <label>Apellido</label>
                    <input type="text" class="form-control" name="txtApellido" id="txtApellido" placeholder="Escriba aqui su apellido">
                    </div>

                    <div class = "form-group">
                    <label>DNI/CUIT/CUIL</label>
                    <input type="text" class="form-control" name="txtDNI" id="txtDNI" placeholder="Escriba aqui su DNI/CUIT/CUIl (solo números)">
                    </div>

                    <div class = "form-group">
                    <label>Correo Electrónico [Este será su Usuario en el sitio]</label>
                    <input type="email" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo electrónico">
                    </div>
                    
                    <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control" name="contrasenia1" id="txtContrasenia1" placeholder="Ingrese su contraseña">
                    </div>
                    
                    <div class="form-group">
                    <label>Confirmar Contraseña:</label>
                    <input type="password" class="form-control" name="contrasenia2" id="txtContrasenia2" placeholder="Reingrese su contraseña">
                    </div>

                    <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="mostrarContrasenia" value="mostrarContrasenia">
                    <label class="form-check-label" for="mostrarContrasenia">Mostrar contraseña</label>
                    </div>

                    </br>

                    <div class = "form-group">
                    <label>Telefono/Celular</label>
                    <input type="text" class="form-control" name="txtTelefono" id="txtTelefono" placeholder="Escriba aqui su telefono y/o celular de contacto">
                    </div>
                    
                    <div class = "form-group">
                    <label>Dirección completa (Calle + Nro + Localidad + Provincia)</label>
                    <input type="text" class="form-control" name="txtDirección" id="txtDireción" placeholder="Escriba aqui su dirección">
                    </div>
                    
                    <button type="submit" Style=Background-color:Green;border-color:green class="btn btn-primary">REGISTRARSE</button>                 
                    </form>
                    </form>
                </div>  
            </div>
        </div>   
    </div>
  </div>  
</div>

</br>
</br>
</br>

</div>
  
<script>
document.addEventListener("DOMContentLoaded", function() {
    const mostrarContraseniaCheckbox = document.getElementById('mostrarContrasenia');
    const contraseniaInput1 = document.getElementById('txtContrasenia1');
    const contraseniaInput2 = document.getElementById('txtContrasenia2');

    mostrarContraseniaCheckbox.addEventListener('change', function() {
        if (mostrarContraseniaCheckbox.checked) {
            contraseniaInput1.type = 'text';
            contraseniaInput2.type = 'text';
        } else {
            contraseniaInput1.type = 'password';
            contraseniaInput2.type = 'password';
        }
    });
});
</script>

<!-- A CONTINUACIÓN SE INCLUYE EL CODIGO PARA CORROBORAR LOS DATOS E INGRESAR LOS DATOS A LA BASE DE DATOS. LEER Y MODIFCAR LOS PARAMETROS
     SEGÚN CORRESPNDA -->

<?php
if ($_POST) {
    $nombres = $_POST['txtNombres'];
    $apellido = $_POST['txtApellido'];
    $dni = $_POST['txtDNI'];    
    $correo = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia1'];
    $telefono = $_POST['txtTelefono'];
    $direccion = $_POST['txtDirección'];

    // Verificar si el correo ya está registrado
    $verificar_correo = "SELECT * FROM t_usuarios WHERE CorreoElectronico = '$correo'";
    $resultado_correo = $conexion->query($verificar_correo);

    if ($resultado_correo->num_rows > 0) {
        echo "El usuario ya existe con este correo electrónico.";
    } else {
        // Verificar si las contraseñas coinciden
        if ($_POST['contrasenia1'] == $_POST['contrasenia2']) {
            // Insertar datos en la tabla
            $insertar_usuario = "INSERT INTO tu_tabla (Nombres, Apellidos, DNICUITCUIL, CorreoElectronico, Contrasenia, Telefonos, Dirección)
                                 VALUES ('$nombres', '$apellido', '$dni', '$correo', '$contrasenia', '$telefono', '$direccion')"; 

            if ($conexion->query($insertar_usuario) === TRUE) {
                echo "Usuario registrado con éxito.";
                header('Location: inicio.php');
            } else {
                echo "Error al registrar el usuario: " . $conexion->error;
            }
        } else {
            echo "Las contraseñas no coinciden.";
        }
    }
}
?>


<?php 
$conexion->close();
Include("template/pie.php"); ?>
