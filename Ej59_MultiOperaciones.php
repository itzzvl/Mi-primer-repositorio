<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="UTF-8">
     <title>Registro de productos</title>
</head>
<body>

 <h2>REGISTRO DE TRES PRODUCTOS</h2>
 <!-- Formulario de captura -->
 <form method="POST" action="">
 <?php

 for ($i = 0; $i < 3; $i++) {
 echo "Numeros1:";
 echo "<input type='number' name='Numeros1[]'>" . " ";

 echo "Numeros2:";
 echo "<input type='number' name='Numeros2[]'>" . " ";
 echo "<br><br>";
 }
 ?>

 <button type="submit" name="guardar" value="guardar">
 Guardar y calcular </button>

 <?php
 if (isset($_POST['guardar'])) {

 $Numeros1 = $_POST['Numeros1'];
 $Numeros2 = $_POST['Numeros2'];

 // Variable para el error
$error = "";

// Validar las condiciones
for ($i = 0; $i < 3; $i++) {
if ($Numeros1[$i] < 51 || $Numeros1[$i] > 99) {
$error = "Error: En Numeros1 solo se pueden teclear del 51 al 99";
}
if ($Numeros2[$i] < -50 || $Numeros2[$i] > -1) {
$error = "Error: En Numeros2 solo se pueden teclear del -50 al -1";
}
}

// Si hay error, mostrarlo y no calcular
if ($error != "") { 
echo "<br><p style='color:red'><b>" . $error . "</b></p>";
} else {

// Aquí van los calculos y tus tablitas

 $suma = array();
 $resta = array();
 $multiplicacion = array();
 $division = array();
 
 for ($i = 0; $i < 3; $i++) {
 //calcular suma
     $suma[$i] = $Numeros1[$i] + $Numeros2[$i];
//calcular resta
     $resta[$i] = $Numeros1[$i] - $Numeros2[$i];
//calcular multiplicacion
     $multiplicacion[$i] = $Numeros1[$i] * $Numeros2[$i];
//calcular division 
     $division[$i] = round($Numeros1[$i] / $Numeros2[$i],2);
 }

// Mostrar cada arreglo en su propia tablita, una al lado de la otra
echo "<br>";
echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>Numeros1</th></tr>";

for ($i = 0; $i < 3; $i++) { 
     echo "<tr><td>" . $Numeros1[$i] . "</td></tr>"; }
     echo "</table>";

echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>Numeros2</th></tr>";

for ($i = 0; $i < 3; $i++) { 
     echo "<tr><td>" . $Numeros2[$i] . "</td></tr>"; }
     echo "</table>";

echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>Suma</th></tr>";

for ($i = 0; $i < 3; $i++) { 
     echo "<tr><td>" . $suma[$i] . "</td></tr>"; }
     echo "</table>";

echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>Resta</th></tr>";

for ($i = 0; $i < 3; $i++) { 
     echo "<tr><td>" . $resta[$i] . "</td></tr>"; }
     echo "</table>";

echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>Multiplicacion</th></tr>";

for ($i = 0; $i < 3; $i++) { 
     echo "<tr><td>" . $multiplicacion[$i] . "</td></tr>"; }
     echo "</table>";

echo "<table border='1' cellpadding='5' style='display:inline-table; vertical-align:top;'><tr><th>Division</th></tr>"; 

for ($i = 0; $i < 3; $i++) { 
     echo "<tr><td>" . $division[$i] . "</td></tr>"; }
     echo "</table>";
}
}
?>
</body>
</html>