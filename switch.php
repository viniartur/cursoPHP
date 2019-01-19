<?php

$numero_dia_da_semana = (int) $_GET['dia'];


switch ($numero_dia_da_semana) {
	case 1:
		echo "Domingo";
		break;
	case 2:
		echo "segunda";
		break;
	case 3:
		echo "terça";
		break;
	case 4:
		echo "quarta";
		break;
	case 5:
		echo "quinta";
		break;
	case 6:
		echo "sexta";
		break;
	case 7:
		echo "sexta";
		break;
	default:
		echo "Invalido";
		break;
}