<html>
 <head>
  <title>Ejercicio 1</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
 </head>
 <body>
  <div id="encabezado">
  <h1>PROGRAMACION DE APLICACIONES WEB</h1>
  <h4>Hacer Un Programa Que Sume, Reste, Multiplique y divida Dos Variables.</h4>
  </div>
   <?php
    $numero1=10;
	$numero2=12;
	//SUMAR
	$suma=$numero1+$numero2;
	echo "$numero1+$numero2"."<br>";
	echo "suma = ".$suma. "<br>";
	//RESTAR
	$resta=$numero1-$numero2;
	echo "$numero1-$numero2"."<br>";
	echo "resta = ".$resta. "<br>";
	//MULTIPLICAR
	$multiplicacion=$numero1*$numero2;
	echo "$numero1*$numero2"."<br>";
	echo "Multiplicacion = ".$multiplicacion. "<br>";
	//DIVIDIR
	$divicion=$numero1/$numero2;
	echo "$numero1/$numero2"."<br>";
	echo "Divicion = ".$divicion. "<br>";
   ?>
   <div id="piedepagina">
    <p align="right">NOMBRE DEL ALUMNO: jorge arturo morales herrera</p>
    <p align="right"><a href="index.php">Regresar a Menu</a></p>
   </div>
 </body>
</html>