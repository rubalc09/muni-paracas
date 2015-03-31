<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="../css/styles.css"/>
<title>SAT-ICA</title>
<script language="JavaScript">
function acceso(){
    window.location = document.formPassword.Password.value + ".htm"
}
</script>
</head>
</head>

<body>
<div id="encabezado">

</div>
<center>

<div id="center">
<form action="validar_logeo.php" method="post" class="registro" name="formclave" onsubmit="return validar(this)">
  <div><label>Logeo:</label> 
<input type="text" name="login" required="required" placeholder="Ingrese su Usuario"></div>
<div><label>Contraseña:</label> 
<input type="password" name="Password" required="required" placeholder="Ingrese su Contraseña"></div> 
<div> 
<input type="submit" name="enviar" value="Ingresar" onclick="acceso()"></div>
<b>Ingresar a Caja_Chica</b>
</form> 
 </div>

<div id="floot"></div>
             
</body>
</html>
