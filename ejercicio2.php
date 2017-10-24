<html>
 <head>
  <title>Ejercicio 2</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" type="text/css" href="css/Style.css">
 </head>
 <body>
 <div id="encabezado">
  <h1>PROGRAMACION DE APLICACIONES WEB</h1>
  <h4>Mostrar En Pantalla Una Tabla De 10 Por 10 Con Los Numeros Del 1 Al 100.</h4>
 </div>
   <?php
    echo "<table border=1>";
    $n=1;
    for($n1=1; $n1<=10; $n1++)
     {
	   echo "<tr>";
       for($n2=1; $n2<=10; $n2++)
	   {
		   echo "<td>", "<p>$n</p>", "</td>";
		   $n=$n+1;
	   }		   
	   echo "</tr>";
     }
	 echo "</table>";
   ?>
   <div id="piedepagina">
    <p align="right">NOMBRE DEL ALUMNO: jorge arturo morales herrera</p>
    <p align="right"><a href="index.php">Regresar a Menu</a></p>
   </div>
 </body>
</html>