<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
  <h1>Ejercicio 3</h1>
  <p>Sumamos 2 arrays random de tamaño a elegir</p>

  <p>
    <form method="get" action="ej03.php">
      <p><strong>Tamaño de los arrays:</strong></br>
        <input type="number" name="tamArray" value="<?php
          if (isset($_GET['tamArray'])){echo $_GET['tamArray'];} ?>">
      </p>
      <p>
        <input type="submit" value="Enviar">
      </p>
      </form>
    </p>
<?php
/*
Crea un script en PHP que sume dos arrays de igual tamaño que pedirá por pantalla
y muestre su valor en una tabla vertical de tres columnas: la primera con los datos
del primer array, la segunda con los datos del segundo y la tercera con la suma.
*/

define("MIN", 0);
define("MAX", 99);

  function genArray($tam){
    $generatedArray = array();
    for ($i=0; $i<$tam; $i++){
      $generatedArray[$i] = rand(MIN, MAX);
    }
    return $generatedArray;
  }

  function sumaArrays($a, $b){
    $arraySuma = array();
    for ($i=0; $i<count($a); $i++){
      $arraySuma[$i] = $a[$i] + $b[$i];
    }
    return $arraySuma;
  }

  if (isset($_GET["tamArray"])){
    $tam=$_GET["tamArray"];
    /* tenemos que generar arrays, sumarlos y enseñarlos */
    $array1 = genArray($tam);
    $array2 = genArray($tam);
    $suma = sumaArrays($array1, $array2);

      echo '
        <p>
          <table border=1>
      ';
      for ($i=0; $i<$tam; $i++){
		//Para poner la cabecera cada 20 números  
        if ($i % 20 == 0){
          echo "
            <tr>
                <th>i</th>
                <th>Array 1</th>
                <th>Array 2</th>
                <th>Suma</th>
             </tr>
          ";
        }
        echo "
          <tr>
            <td> $i </td>
            <td> $array1[$i] </td>
            <td> $array2[$i] </td>
            <td> $suma[$i] </td>
          </tr>
        ";
      }
      echo '
        </table>
      </p>
      ';
    }
?>

</body>
</html>
