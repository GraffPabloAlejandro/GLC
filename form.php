<html>
<head>
<script type="text/javascript">
function setpreview(id)
{
	form=eval("document.form"+id);
	form.target='iframe_null'; 
	form.action='uploader.php?id='+id;
	form.submit();
}
</script>
</head>

<body>
	<form name="form1" action="" method="post" enctype="multipart/form-data">
		<div><span>Selecciona Image: </span><span><input name="archivo" type="file" size="35" onChange="setpreview(1)"/></span></div>
		<div><img src="" id="picture1" alt="vista previa" height="200" width="200"/> </div>
	</form>
	<form name="form2" action="" method="post" enctype="multipart/form-data">
		<div><span>Selecciona Image: </span><span><input name="archivo" type="file" size="35" onChange="setpreview(2)"/></span></div>
		<div><img src="" id="picture2" alt="vista previa" height="200" width="200"/> </div>
	</form>
	<form name="form3" action="" method="post" enctype="multipart/form-data">
		<div><span>Selecciona Image: </span><span><input name="archivo" type="file" size="35" onChange="setpreview(3)"/></span></div>
		<div><img src="" id="picture3" alt="vista previa" height="200" width="200"/> </div>
	</form>
	
	<!-- iframe donde se envia el contenido del formulario -->
	<iframe src="about:blank" name="iframe_null" style="display:none">
</body>
</html>
