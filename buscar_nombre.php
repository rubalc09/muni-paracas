<link rel="stylesheet" type="text/css" href="style.css" /></link>

<?php
	// You can do anything with the data. Just think of the possibilities!
	include("../conexion/conexion.php");
	//recibimos la variable content que se envia desde el index que est declarado en el javascript
	//content = document.getElementById(content_id_personal).value;
	$strlen = strlen($_GET['content']);
	//es la varible que recibe y va a contar la cantidad de datos que se encuentran con lo que vas escribiendo en la caja de texto
	$display_count = $_GET['count'];
	//enlazamos las dos tablas
	$select = "select * from personal inner join area on personal.area_id=area.area_id where personal.nombre like '%".$_GET['content']."%'";
	$res = mysql_query($select);
	$rec_count = mysql_num_rows($res);
    if($display_count)
	{
	  echo "Hay <font color='red' size='3'>".$rec_count."</font> Registros Encontrados.";
	}
	else
	{
?>
    <center>   
	<table class="sofT" cellspacing="0" border="1">
	<tr>
		<td colspan="8" class="helpHed" align="center">Resultado de Busqueda</td>
	</tr>
	<tr>
	   <td class='helpHed'>Id</td>
	   <td class='helpHed'>Nombre</td>
	   <td class='helpHed'>Paterno</td>
	   <td class='helpHed'>Materno</td>
	   <td class='helpHed'>DNI</td>
       <td class='helpHed'>Area</td>
       <td class='helpHed'>Editar</td>
       <td class='helpHed'>Eliminar</td>
       
       
    </tr>
<?php
	if($rec_count > 0)
	{
		while($data=mysql_fetch_array($res))
		{ 
			echo "<tr>".
				  "<td class='sup'>".$data['id_personal']."</td>".
				  "<td class='sup'>".$data['nombre']."</td>".
				  "<td class='sup'>".$data['paterno']."</td>".
				  "<td class='sup'>".$data['materno']."</td>".
				  "<td class='sup'>".$data['ndoc']."</td>".
				  "<td class='sup'>".$data['area_descripcion']."</td>".
				  // Establecemos un hipervínculo para cada fila de datos si lo hubiera
      // que apunte al archivo modificar.php, pasando el número de cédula en su
      // dirección a través de la variable Cedula
				  "<td class='sup'><a href=./Actualizar_persona.php?id_personal=".$data["id_personal"].">Editar</a></td>".
				  "<td class='sup'><a href=./Eliminar.php?id_personal=".$data["id_personal"].">Eliminar</a></td>".
				  "</tr>";
		}
	}
	else
		echo '<td colspan="5" align="center"><FONT SIZE="2" COLOR="red">No hay Registros Encontrados....!</FONT></td>';
  }
  mysql_close($conexion);
?>
</table>
</center>