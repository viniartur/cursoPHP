<?php
echo "<pre>";
$dias = ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'];
//print_r($dias);
//echo = "<br>";
//var_dump($dias);

//echo $dias[6];
//echo "</pre>";

foreach ($dias as $dia) {
	echo "$dia<br>";
}

foreach ($dias as $chave => $dia) {
	echo "<br>"."$dia";
}

foreach ($dias as $chave => $dia) {
	echo "<br><br>"."$chave $dia";
}
?>
