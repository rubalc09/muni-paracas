<?php ; 
//datos para establecer la conexion con la base de mysql.
  mysql_connect('localhost','root','')or die ('Ha fallado la conexi&oacute;n: '.mysql_error());
mysql_select_db('caja_chica1')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
function quitar($mensaje)
{
    $nopermitidos = array("'",'\\','<','>',"\"");
    $mensaje = str_replace($nopermitidos, "", $mensaje);
    return $mensaje;
}      
if(trim(["login"]) != "" && trim(["Password"]) != "")
{
    // Puedes utilizar la funcion para eliminar algun caracter en especifico
    //$logeo = strtolower(quitar($HTTP_POST_VARS["login"]));
   //$Password = $HTTP_POST_VARS["Password"];
    
    // o puedes convertir los a su entidad HTML aplicable con htmlentities
    $login = strtolower(htmlentities(["login"], ENT_QUOTES));    
    $Password = ["Password"];
    $result = mysql_query('SELECT login, Password FROM usuario WHERE login=\''.$login.'\'');
    if($row = mysql_fetch_array($result)){
        if($row["Password"] == $Password){
            	$_SESSION["k_username"] = $row['login'];
            	echo "Has sido logueado correctamente ".$_SESSION['k_username'].' <p>';
           		echo"<script type=\"text/javascript\">alert('Ingreso Correctamnente); location.href='index.php'; </script>".mysql_error();
            }else{
           		echo "<script type=\"text/javascript\">alert('Password Incorrecto'); location.href='Open_Sesion.php'; </script>".mysql_error();
				exit;
        }
   }mysql_free_result($result);
}else{
    echo 'Debe especificar un usuario y password';
}
mysql_close();
?>