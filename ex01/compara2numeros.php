<html> 
<head> 
   <title>Comparando Números</title> 
</head> 
<body> 
<h1>Compardor</h1> 
<form action="compara2numeros.php" method="POST"> 
   Introduzca el primer número:<br>
    <input type="text" name="numero1"><br> 
   Introduzca el segundo número:<br>
   <input type="text" name="numero2"><br> 
   <br>
   <input type="submit" value="Comparar"> 
</form> 


<?php 
	if (!empty($_POST)){
		$n1 = ($_POST['numero1']);
		$n2 = ($_POST['numero2']);
	
		if ($n1 > $n2){
			echo "El número ".$n1." es mayor que el ".$n2."";
		}
		elseif ($n1 == $n2){
			echo "El número ".$n1." es igual al ".$n2."";
		}
		else{
			echo "El número ".$n1." es menor que ".$n2."";
		}
	}
	 ?>

</body> 
</html>