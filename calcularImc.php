<?php
	
	$sexo = filter_input(INPUT_POST, 'sexo');
	$altura = filter_input(INPUT_POST, 'altura');
    $peso = filter_input(INPUT_POST, 'peso');
	$edad = filter_input(INPUT_POST, 'edad');
	
	//$imc =  (float)$peso / ((float)$altura ** 2);
	$imc = (float)$peso / (($altura ** 2) / 10000);
	
    echo "IMC: ".intval($imc); 
	
	if($sexo == 'm' || $sexo == 'M') {
		if($imc < 20) {
			echo " Falta peso";
		} else if($imc >= 20 && $imc <=25) {
			echo " Peso normal";
		} else if($imc >=26 && $imc <=30) {
			echo " Sobrepeso";
		} else if($imc >=31 && $imc <=40) {
			echo " Obesidad";
		} else if($imc > 40) {
			echo " Fuerte obesidad";
		}
	} else if($sexo == 'f' || $sexo == 'F') {
		if($imc < 19) {
			echo " Falta peso";
		} else if($imc >= 19 && $imc <=24) {
			echo " Peso normal";
		} else if($imc >=25 && $imc <=30) {
			echo " Sobrepeso";
		} else if($imc >=31 && $imc <=40) {
			echo " Obesidad";
		} else if($imc > 40) {
			echo " Fuerte obesidad";
		}
	}
		
	$tmbHombres = 66.473 + (13.751 * $peso) + (5.0033 * $altura) - (6.7550 * $edad);
	$tmbMujeres = 655.1 + (9.463 * $peso) + (1.8 * $altura) - (4.6756 * $edad);
	
	switch($sexo) {
		case "m":
			echo "<br>Metabolismo basal: ".$tmbHombres;
			break;
		case "f":
			echo "<br>Metabolismo basal: ".$tmbMujeres;
			break;
		default:
			echo "<br>Error";
	}
	
?>