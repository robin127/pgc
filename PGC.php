<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	#cen{
		text-align: center;
		
	}
	#span{
		background-color: #2EFE9A;
	}
</style>
	<title></title>
</head>
<body>
<?php
echo "<div id='cen'>";
echo "<div id='span'>";
echo "SU NOMBRE ES: ".$_REQUEST['nombre'];
echo "<br><br>";
	
if($_REQUEST['sexo']=='hombre'){

	$hom=((int)((495/(1.0324-0.19077*(log10($_REQUEST['cintura']-$_REQUEST['cuello']))+0.15456*log10($_REQUEST['altura'])))-450));
		//$hom=round($hombre,2);
		echo "SU GRASA CORPORAL ES: ".$hom;
 		echo "<br><br>";
			if($_REQUEST['edad']<=19){
		switch ($hom) {
			case (($hom>=0) && ($hom<=2)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($hom>=2) && ($hom<=6)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($hom>=6) && ($hom<=9)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($hom>=9) && ($hom<=15)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($hom>=15) && ($hom<=19)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($hom>=19) && ($hom<=23)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($hom>=23):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=25 && $_REQUEST['edad']<=29){
		switch ($hom) {
			case (($hom>=0) && ($hom<=2)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($hom>=2) && ($hom<=6)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($hom>=6) && ($hom<=10)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($hom>=10) && ($hom<=16)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($hom>=16) && ($hom<=19)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($hom>=19) && ($hom<=24)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($hom>=24):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=30 && $_REQUEST['edad']<=34){
		switch ($hom) {
			case (($hom>=0) && ($hom<=2)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($hom>=2) && ($hom<=6)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($hom>=6) && ($hom<=11)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($hom>=11) && ($hom<=17)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($hom>=17) && ($hom<=19)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($hom>=19) && ($hom<=25)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($hom>=25):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=35 && $_REQUEST['edad']<=39){
		switch ($hom) {
			case (($hom>=0) && ($hom<=2)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($hom>=2) && ($hom<=6)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($hom>=6) && ($hom<=12)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($hom>=12) && ($hom<=18)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($hom>=18) && ($hom<=19)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($hom>=19) && ($hom<=26)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($hom>=26):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=40 && $_REQUEST['edad']<=44){
		switch ($hom) {
			case (($hom>=0) && ($hom<=2)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($hom>=2) && ($hom<=6)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($hom>=6) && ($hom<=13)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($hom>=13) && ($hom<=19)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($hom>=19) && ($hom<=19)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($hom>=19) && ($hom<=27)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($hom>=27):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=45 && $_REQUEST['edad']<=49){
		switch ($hom) {
			case (($hom>=0) && ($hom<=2)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($hom>=2) && ($hom<=6)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($hom>=6) && ($hom<=15)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($hom>=15) && ($hom<=21)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($hom>=21) && ($hom<=25)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($hom>=25) && ($hom<=28)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($hom>=28):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=50 && $_REQUEST['edad']<=54){
		switch ($hom) {
			case (($hom>=0) && ($hom<=2)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($hom>=2) && ($hom<=6)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($hom>=6) && ($hom<=17)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($hom>=17) && ($hom<=23)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($hom>=23) && ($hom<=26)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($hom>=26) && ($hom<=29)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($hom>=29):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=55 && $_REQUEST['edad']<=59){
		switch ($hom) {
			case (($hom>=0) && ($hom<=2)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($hom>=2) && ($hom<=6)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($hom>=6) && ($hom<=19)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($hom>=19) && ($hom<=24)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($hom>=24) && ($hom<=28)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($hom>=28) && ($hom<=30)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($hom>=30):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=60){
		switch ($hom) {
			case (($hom>=0) && ($hom<=2)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($hom>=2) && ($hom<=6)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($hom>=6) && ($hom<=20)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($hom>=20) && ($hom<=25)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($hom>=25) && ($hom<=29)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($hom>=29) && ($hom<=31)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($hom>=31):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
	}
	if($_REQUEST['sexo']=='mujer'){
	
	$muj=((int)((495/(1.29579-0.35004*(log10($_REQUEST['cintura']+$_REQUEST['cadera']-$_REQUEST['cuello']))+0.221*log10(($_REQUEST['altura']))))-450));
		//$muj=round($mujer,2);
		echo "SU GRASA CORPORAL ES: ".$muj;
		echo "<br><br>";
		if($_REQUEST['edad']<=19){
		switch ($muj) {
			case (($muj>=0) && ($muj<=7)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($muj>=7) && ($muj<=12)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($muj>=12) && ($muj<=15)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($muj>=15) && ($muj<=20)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($muj>=20) && ($muj<=25)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($muj>=25) && ($muj<=30)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($muj>=30):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=19 && $_REQUEST['edad']<=24){
		switch ($muj) {
			case (($muj>=0) && ($muj<=7)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($muj>=7) && ($muj<=12)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($muj>=12) && ($muj<=15)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($muj>=15) && ($muj<=20)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($muj>=20) && ($muj<=25)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($muj>=25) && ($muj<=30)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($muj>=30):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=25 && $_REQUEST['edad']<=29){
		switch ($muj) {
			case (($muj>=0) && ($muj<=7)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($muj>=7) && ($muj<=12)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($muj>=12) && ($muj<=16)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($muj>=16) && ($muj<=21)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($muj>=21) && ($muj<=26)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($muj>=26) && ($muj<=31)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($muj>=31):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=30 && $_REQUEST['edad']<=34){
		switch ($muj) {
			case (($muj>=0) && ($muj<=7)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($muj>=7) && ($muj<=12)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($muj>=12) && ($muj<=17)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($muj>=17) && ($muj<=22)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($muj>=22) && ($muj<=27)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($muj>=27) && ($muj<=32)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($muj>=32):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=35 && $_REQUEST['edad']<=39){
		switch ($muj) {
			case (($muj>=0) && ($muj<=7)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($muj>=7) && ($muj<=12)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($muj>=12) && ($muj<=19)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($muj>=19) && ($muj<=23)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($muj>=23) && ($muj<=28)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($muj>=28) && ($muj<=33)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($muj>=33):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=40 && $_REQUEST['edad']<=44){
		switch ($muj) {
			case (($muj>=0) && ($muj<=7)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($muj>=7) && ($muj<=12)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($muj>=12) && ($muj<=21)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($muj>=21) && ($muj<=24)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($muj>=24) && ($muj<=29)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($muj>=29) && ($muj<=34)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($muj>=34):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=45 && $_REQUEST['edad']<=49){
		switch ($muj) {
			case (($muj>=0) && ($muj<=7)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($muj>=7) && ($muj<=12)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($muj>=12) && ($muj<=23)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($muj>=23) && ($muj<=26)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($muj>=26) && ($muj<=31)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($muj>=31) && ($muj<=36)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($muj>=36):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=50 && $_REQUEST['edad']<=54){
		switch ($muj) {
			case (($muj>=0) && ($muj<=7)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($muj>=7) && ($muj<=12)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($muj>=12) && ($muj<=25)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($muj>=25) && ($muj<=28)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($muj>=28) && ($muj<=33)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($muj>=33) && ($muj<=37)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($muj>=37):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=55 && $_REQUEST['edad']<=59){
		switch ($muj) {
			case (($muj>=0) && ($muj<=7)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($muj>=7) && ($muj<=12)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($muj>=12) && ($muj<=26)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($muj>=26) && ($muj<=29)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($muj>=29) && ($muj<=34)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($muj>=34) && ($muj<=38)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($muj>=38):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
if($_REQUEST['edad']>=60){
		switch ($muj) {
			case (($muj>=0) && ($muj<=7)):
				echo "ESTA EN EL RANGO: Esencial";
				break;
			case (($muj>=7) && ($muj<=12)):
				echo "ESTA EN EL RANGO: Atetla";
				break;
			case (($muj>=12) && ($muj<=27)):
				echo "ESTA EN EL RANGO: Excelente";
				break;
			case (($muj>=27) && ($muj<=30)):
				echo "ESTA EN EL RANGO: Bueno";
				break;
			case (($muj>=30) && ($muj<=35)):
				echo "ESTA EN EL RANGO: Estandar";
				break;
			case (($muj>=35) && ($muj<=39)):
				echo "ESTA EN EL RANGO: Sobrepeso";
				break;
			case ($muj>=39):
				echo "ESTA EN EL RANGO: Obesidad";
				break;
		}
}
	}


echo "</div>";
echo "</div>";
?>


</body>
</html>

