<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /></link>
<title>SAT-ICA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script type="text/javascript" src="ajax.js"></script>
<!---->

<script type="text/javascript">

		function getScriptPage(div_id_personal,content_id_personal,get_count)
		{
			subject_id = div_id_personal;
			content = document.getElementById(content_id_personal).value;
			http.open("GET", "buscar_nombre.php?content=" + escape(content)+"&count="+get_count, true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
		}	

</script>
</head>

<body>
<div class="ajax-div">
	<div class="input-div">
Ingrese nombre :
	<input type="text" id="text_content" size="40" onKeyUp="getScriptPage('count_display','text_content','1')">
	<input type="button" class="button" value="Buscar" onMouseUp="getScriptPage('output_div','text_content','0')">
		<div id="count_display">
		   
		</div>
	</div>
	<div class="output-div-container">
	<div id="output_div">
	</div>
	</div>
	</form>
</div>
</body>
</html>
