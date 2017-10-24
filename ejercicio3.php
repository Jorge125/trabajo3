<html>
 <head>
  <title>Ejercicio 3</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
 </head>
 <body>
 <div id="encabezado">
  <h1>PROGRAMACION DE APLICACIONES WEB</h1>
  <h4>Mostrar En Pantalla Una Tabla de 1 Por 10.</h4>
 </div>
   <?php
	echo "<h2>BUCLE WHILE</h2><br>";
	echo "<table border=1>";
	for($i=0; $i<10; $i++)
	{
	    echo "<tr>";
		echo "<td>";
		echo "Linea ".$i."<br>";
		echo "</td>";
	    echo "<tr>";
	}
	echo "</table>";
	
   ?>
   <div id="piedepagina">
    <p align="right">NOMBRE DEL ALUMNO: jorge arturo morales herrera</p>
    <p align="right"><a href="index.php">Regresar a Menu</a></p>
   </div>
 </body>
</html>