
<form action="calculadora.php" method="post">
	Numero 1: <input type="text" name="num1"><br>
	Numero 2: <input type="text" name="num1"><br>
	<h3 align="center">Operação</h3>
	<select name="Operador">
		<option value="+"> +
		<option value="-"> -	
		<option value="+"> *
		<option value="+"> /	
		</option>

	</select>
	<input type="submit" value="Calcular">
</form>
<?php
print_r($_POST);
$Operação = null;
$num1 = $_POST['num1'];
$num1 = $_POST['num2'];
$Operação = $_POST['Operador'];
$resultado = null;

if ($Operação == '+') {
	$resultado = $num1 + $num2;

}	elseif ($Operação == '-') {

		$resultado = $num1 - $num2;
}	elseif ($Operação == '/') {
		$resultado = $num1 - $num2;
}	elseif ($Operação == '*') {
		$resultado = $num1 - $num2;{
}
?>
<h1> Resultado operacao <?=$Operação?>: <?=$resultado?></h1>