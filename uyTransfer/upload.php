<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
</head>
<body>
	<header><?php include 'header.php'; ?></header>
	<?php 

	if (isset($_POST['submit'])) {
		$directorio = 'files/';
		$array = explode('.', $_FILES['element_2']['name']);
		$extension = end($array);
		$newFileName = date('y').date('m').date('d').rand ( 10000 , 99999 ).'.'.$extension;

		$subir_archivo = $directorio.$newFileName;

		if (move_uploaded_file($_FILES['element_2']['tmp_name'], $subir_archivo)) {

      		echo "El archivo es válido y se cargó correctamente.";
	    } else {
	       	echo "La subida ha fallado";
	    }

	}
		
		
	?>

</body>
</html>