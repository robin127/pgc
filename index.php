<!DOCTYPE html>
<html>
<head>
	<title>PROMEDIO DE GRASA CORPORAL</title>
<script type="text/javascript" src="javascript.js"></script>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
<style>
body{
        background-image: url(img/gym3.jpg); 
		background-repeat: no-repeat ;
		 background-color: #464646;
		background-size: cover;
		 background-attachment: fixed;
		  background-position: center ;

}
		#cen{
	background:#C90;
  	text-align: center;
  	border-style:hidden;
  	margin-left:30%;
  	margin-right:30%;
	float:none;
	}
	h1{
		color:#666;
	}
	#enviar{
		text-align:center;
	}
	p{
		font-size:18px;
	}
		</style>
</head>
<body background="img/gym3.jpg">
<div id="cen">
<h1>PROMEDIO GRASA CORPORAL</h1>
	<form action="PGC.php" method="post">
	<p>Ingrese su nombre:
		<input type="text" name="nombre" required style="background-color:#6C9;font-size:20px">
        </p>
		<br><br>
    <p>Ingrese su peso:
        <input type="text" name="peso" required style="background-color:#6C9;font-size:20px">
        </p>
		<br><br>
        	<p>sexo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  	<input type="radio" name="sexo" value="hombre" onClick="ocultar()" required>
		hombre
		<input type="radio" name="sexo" value="mujer" onclick="mostrar()" checked="checked" required>
        
		mujer
		<br><br>
        </p>
   	<p>Ingrese su edad:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="edad" required style="background-color:#6C9;font-size:20px">
    <br>
        <br>
	
	<h4>MEDIDAS REQUERIDAS</h4>
    
<div>
  	<p>Ingrese las medidas de su altura:
    <input type="text" name="altura" required style="background-color:#6C9;font-size:20px">
    </p>
</div>
    <br><br>
<div>
    <p>Ingrese las medias de su cuello:
    <input type="text" name="cuello" required style="background-color:#6C9;font-size:20px">
    </p>
</div>
    <br><br>
<div id="enviar">
   <p> Ingrese las mediads de su cintura:      
      <input type="text" name="cintura" required style="background-color:#6C9;font-size:20px">
      </p>
</div>
    <br><br>
<div id="cadera" style="display:block">
    <p>Ingrese las mediads de su cadera:
      <input type="text" name="cadera" style="background-color:#6C9;font-size:20px">
      </p>
</div>
    <br>
    <br>
   <input style="background-color:#F0F; font-size:20px; font-family:'Times New Roman', Times, serif; color:#0F0" type="submit" name="Enviar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input style="background-color:#F0F; font-size:20px; font-family:'Times New Roman', Times, serif; color:#0F0"  type="reset" value="Borrar">
    <br><br>
	</div>
</form>
</body>
</html>