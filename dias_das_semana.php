<?php

$numero_dia_da_semana = (int) $_GET['dia'];

if ($numero_dia_da_semana <= 5) {
	echo "dia util";
}else {

	echo "Final de semana";
}