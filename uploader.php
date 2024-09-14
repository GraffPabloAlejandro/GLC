<?php
/**
 * Codigo que recibe los valores del formulario y guarda el archivo en la carpeta
 * especificada
 */

# Obtenemos la información de la imagen
$infoFile=getimagesize($_FILES['archivo']['tmp_name']);
if($infoFile)
{

	# Podemos especificar una carpeta donde copiar la imagen
	$carpeta="";
	$name=$carpeta.basename($_FILES['archivo']['name']);
	# Coopiamos la imagen a nuestra carpeta con el nombre real
	move_uploaded_file($_FILES['archivo']['tmp_name'],$name);

	# Mostramos la imagen
	?>
	<script type="text/javascript">
	// Enviamos el nombre de la imagen al id picture de la pantalla de donde es llamado
	parent.document.getElementById('picture<?php echo $_GET["id"];?>').src='<?php echo $name; ?>';
	parent.document.getElementById('picture<?php echo $_GET["id"];?>').style.width='200';
	parent.document.getElementById('picture<?php echo $_GET["id"];?>').style.height='200x';
	</script>
	<?php
}
?>
