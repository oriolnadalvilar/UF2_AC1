
<!DOCTYPE html>
<html lang="es">
<head>
	 <link rel="stylesheet" type="text/css" href="estilos.css">
	<title>uyTransfer</title>
</head>
<body>
	<header><?php include 'header.php'; ?></header>
	<div id="form">
		<form enctype="multipart/form-data" method="post" action="upload.php">
			<div>
				<label for="element_1">Tu nombre:</label>
				<input id="element_1" name="element_1" type="text"/> 
			</div> 

			<div>
				<input id="element_2" name="element_2" type="file"/> 
			</div>  

			<span>
				<input id="element_5_1" name="element_5_1" type="checkbox"/>
			<label class="choice" for="element_5_1">Deseo enviar el enlace por correo electrónico</label>

			</span> 

			<div>
				<label for="element_3">Correo Electrónico:</label>
				<input id="element_3" name="element_3" type="text" /> 
			</div> 

			<label class="description" for="element_4">Mensaje: </label>
			<div>
				<textarea id="element_4" name="element_4"></textarea> 
			</div>
			<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</form>	
	</div>
</body>
</html>