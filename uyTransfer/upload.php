<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
</head>
<body>
	<header><?php include 'header.php'; ?></header>
	<?php 

	if (isset($_POST['submit'])) {
		$nom = $_POST['element_1'];
		$directorio = 'files/';
		$array = explode('.', $_FILES['element_2']['name']);
		$extension = end($array);
		$newFileName = date('y').date('m').date('d').rand ( 10000 , 99999 ).'.'.$extension;
		$fileSize = $_FILES['element_2']['size'];

		$subir_archivo = $directorio.$newFileName;
		if ($fileSize < 10000000) {
			if ($extension == 'pdf' || $extension == 'png' || $extension == 'jpg' || $extension == 'rar' || $extension == 'zip') {
				if (move_uploaded_file($_FILES['element_2']['tmp_name'], $subir_archivo)) {
						if ($_POST['element_1']) {
							echo "Hola ".$nom.", usa éste link para compartir tu archivo";
							echo '<a>'.$subir_archivo.'</a>';
						} else {
							echo "Oye tu!! Usa éste link para compartir tu archivo";
							echo '<p> <a href="'.$subir_archivo.'">'.$subir_archivo.'</a></p>';
						}
			    } else {
			       	echo "La subida ha fallado";
			    }
			} else {
				echo 'Extension no soportada.';
			}
		} else {
			echo "Has superado el tamaño maximo de 10MB.";
		}

	}	
		
	?>

</body>
</html>