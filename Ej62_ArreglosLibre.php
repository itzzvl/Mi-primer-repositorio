<!DOCTYPE html>
<html lang="es">
<body>
    <meta charset="UTF-8">
    <title>Arreglo libre para practica</title>
</head>
</body> 
     <h2>Paletería - Ventas de la semana</h2>

     <?php
        // Arreglo undimensional (vector)
        $sabores = array("Fresa", "Oreo", "Zarzamora");
        $precios = array(12, 17, 20);

        //Arreglo Multidimensionales (Matriz)
        $ventas = array();
        $total = array();
        $valor = 3;

        // Llenar Matriz
        for ($f=0; $f < 3 ; $f++) { 
            for ($c=0; $c < 3 ; $c++) { 
                $ventas[$f][$c] = $valor;
                $valor += 2;
            }
        }

        //Llenar el vector
        for ($f=0; $f < 3 ; $f++) { 
            $total[$f] = $ventas[$f][0] + $ventas[$f][1] + $ventas[$f][2];
        }

        //Imprimir todo
        echo "<h3>Sabores y Precios</h3>";
        for ($f=0; $f < 3; $f++) { 
            echo $sabores[$f] . "-$" . $precios[$f] . "<br>";
        }

        echo