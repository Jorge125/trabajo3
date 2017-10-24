<html>
 <head>
  <title>Ejercicio 4</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
 </head>
 <body>
 <div id="encabezado">
  <h1>PROGRAMACION DE APLICACIONES WEB</h1>
  <h4>Mostrar En Pantalla Cual Es El Mayor De Tres Numeros.</h4>
 </div>
   <?php
    $n1=54;
	$n2=10;
	$n3=36;
	if($n1>$n2){
		if($n1>$n3){
		 echo "El Primer Numero (".$n1.") Es Mayor Que El Segundo (".$n2.") Y El Tercero (".$n3.")";	
		}
		else{
			echo "El Tercer Numero (".$n3.") Es Mayor Que El Primer (".$n1.") Y El Segundo (".$n2.")";
		}
	}
	elseif($n2>$n3){
		echo "El Segundo Numero (".$n2.") Es Mayor Que El Primer (".$n1.") Y El Tercero (".$n3.")";
	}
	else{
		echo "El Tercer Numero (".$n3.") Es Mayor Que El Primer (".$n1.") Y El Segundo (".$n2.")";
	}
   ?>
   <div id="piedepagina">
    <p align="right">NOMBRE DEL ALUMNO: jorge arturo morales herrera</p>
    <p align="right"><a href="index.php">Regresar a Menu</a></p>
   </div>
 </body>
</html>