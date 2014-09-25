<?php

//$idioma = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
$idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0,2);

	if(empty($idioma)){ //Se consulta si la variable que va a contener el lenguage del visitante está vacía.
          //$idioma = getenv("HTTP_ACCEPT_LANGUAGE"); //De esta forma muestra los datos completos
		$idioma = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0,2); // si está vacía sacamos el lenguage del visitante y lo ponemos en la variable $idioma
	}
    switch($idioma) { //Se carga el archivo que contiene el idioma según la varible obtenida antes
		case "es" : //es = español
			include("path/lang-es.php"); //Se incluye el archivo en español.
		break;
		case "en" : //en = ingles
			include("path/lang-en.php");
		break;
		default :
			include("path/lang-es.php"); //Se incluye el archivo en inglés.
		break;
	}
//print($idioma); //Acá se puede ver el valor obtenido.
//echo "Hola!";
?>
