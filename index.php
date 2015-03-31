<?php
require_once("class/class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta charset="utf-8" />
<link rel="shortcut icon" href="public/images/favicon.ico">
<title>..:: Intranet  - Usuarios ::..</title>
<!-- MASTER STYLESHEET-->
<link href="public/css/styles.css" rel="stylesheet" type="text/css" />

<!-- LOAD JQUERY -->
<script type="text/javascript" src="public/js/jquery.js" language="javascript"></script>


<script language="javascript" type="text/javascript" src="public/js/funciones.js"></script>   


<!-- LOAD POPUP -->
<script type="text/javascript" src="public/js/jquery-1.7.1.min.js" language="javascript"></script>
<script type="text/javascript" src="public/js/jquery.fancybox.pack.js" language="javascript"></script>
<script type="text/javascript" src="public/js/poput.js" language="javascript"></script>
<script type="text/javascript" src="public/js/emergente.js" language="javascript"></script>

<link rel="stylesheet" href="public/js/jquery.fancybox.css" language="javascript"></script>

<!-- LOAD POPUP -->

<!-- CUSTOM JQUERY AND FEATURES LOADER-->
<script src="public/js/scripts.js" type="text/javascript"></script>

<!-- LOAD TABLESORTER -->
<script type="text/javascript" src="public/js/jquery.tablesorter.min.js"></script>
<script type="text/javascript" src="public/js/jquery.tablesorter.pager.js"></script>

<!-- LOAD WYSIWYG EDITOR -->
<script type="text/javascript" src="public/js/jquery.wysiwyg.js"></script>
<link href="public/css/jquery.wysiwyg.css" rel="stylesheet" type="text/css" />

<!-- LOAD FACEBOX -->
<script type="text/javascript" src="public/js/facebox.js"></script>
<link href="public/css/facebox.css" rel="stylesheet" type="text/css" />
<link href="public/css/menu.css" rel="stylesheet" type="text/css" />

<title>PHP Data Objects</title>
</head>

<body>

<hr />
<?php


$obj= new Trabajo();
$datos=$obj->get_preguntas();


?>


<div id="content_wrapper">

      <div id="primary_content">

   <form action="resultado.php" method="post">
        <?php
         for($i=0;$i<sizeof($datos);$i++)
        {   ?>
     <div id="nombre">
      <?php
          echo $datos[$i]["pregunta"];
         ?>
            
 </div>
 
              <div id="accionboton">  
          <input type = "radio"
                 name = "pregunta_<?php echo $datos[$i]["idpregunta"];?>"
                
                 value = "si"
                 checked = "checked" />si
          
          <input type = "radio"
                 name = "pregunta_<?php echo $datos[$i]["idpregunta"];?>"
            
                 value = "no" />no
 
           </div>

        
      <hr>
         
            <?php
        }
        ?>
<input type="submit" value="enviar">

</form>
</div>
</div>


</body>
</html>