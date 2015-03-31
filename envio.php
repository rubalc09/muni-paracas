<!doctype html>
<html lang="en">
<head> 
	<meta charset="utf-8">
	<title>Predial-2014</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
	<link rel="stylesheet" href="css/main.css"> 
	<link href="css/contact.css" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
	<script src="js/jquery-latest.js" ></script>
	<script src="js/jquery-ui.min.js" ></script>
	<script src="js/jquery.jigowatt.js"></script> <!-- AJAX Form Submit -->
</head>
<body>
	<section id="contact">
		<fieldset>
				<legend>CALCULO DEL IMPUESTO PREDIAL</legend>		
				<form name="formularioDatos" method="post" action="envio.php">
					<label for="name"><u>Monto A Calcular:</u> </label>
					<input type="text" name="text1" placeholder="Ingrese Monto" required="required" >
					<input value="enviar" type="submit" />
				</form>
		</fieldset>
		
		<?php
		# VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		###################################################################
		$text1 = $_POST['text1']; 
		$IMPUESTO14;
		# CALCULO DEL IMPUESTO PREDIAL 2014
		if ($text1 == " "){
			$IMPUESTO14='Cero Impuesto';
		}elseif ($text1 <= 11400.00) {
			$IMPUESTO14 = 22.80;										# impuesto minimo
		}elseif ($text1 >= 11401.00 and $text1 <= 57000.00){
			$IMPUESTO14=$text1*0.002;									# se calcula el impuesto comprendidas de 15 UIT
		}elseif ($text1 >= 57001.00 and $text1 <= 228000.00){
			$IMPUESTO14=(($text1-57001.00)*0.006) + 114.00;				# se calcula el impuesto comprendidas de 15 a 60 UIT
		}else{
			$IMPUESTO14=(($text1-228001.00)*0.01) + 1140.00;			# se calcula el impuesto comprendidas de 60 a mas UIT
		}					
		?>
		<!-- CAJA DE TEXTO DONDE SE VISUALIZA EL IMPUESTO PREDIAL DEL 2014 -->
		<fieldset><label for="name" accesskey="U">Impuesto 2014</label>
		<input type="text" value="<?php echo $IMPUESTO14 ?>" readonly="">
		</fieldset>
		<?php
		 # VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		####################################################################
		$text2 = $_POST["text1"];
		$IMPUESTO13;
		# CALCULO DEL IMPUESTO PREDIAL 2013
		if ($text2 == " "){
			$IMPUESTO13 = 'Cero Impuesto';
		}elseif ($text2 <= 11100.00) {
			$IMPUESTO13 = 22.20;										# impuesto minimo
		}elseif ($text2 >= 11101.00 and $text2 <= 55500.00){
			$IMPUESTO13 = $text2 * 0.002;								# se calcula el impuesto comprendidas de 15 UIT
		}elseif ($text2 >= 55501.00 and $text2 <= 222000.00) {
			$IMPUESTO13 = (($text2-55501.00) * 0.006) + 111.00;			# se calcula el impuesto comprendidas de 15 a 60 UIT
		}else{
			$IMPUESTO13 = (($text2-222001.00)*0.01) + 1110.00;			# se calcula el impuesto comprendidas de 60 a mas UIT
		}					
		?>
		<fieldset><label for="name" accesskey="U">Impuesto 2013</label>
		<input type="text" value="<?php echo  $IMPUESTO13 ?>">
		</fieldset>
		<?php
		# VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		###################################################################
		$text3 = $_POST["text1"]; 
		$IMPUESTO12;
		# CALCULO DEL IMPUESTO PREDIAL 2012
		if ($text3 == " "){
			$IMPUESTO12 = 'Cero Impuesto';
		}elseif ($text3 <= 10950.00) {
			$IMPUESTO12 = 21.90;										# impuesto minimo
		}elseif ($text3 >= 10951.00 and $text3 <= 54750.00){
			$IMPUESTO12 = $text3 * 0.002;								# se calcula el impuesto comprendidas de 15 UIT
		}elseif ($text3 >= 54751.00 and $text2 <= 219000.00) {
			$IMPUESTO12 = (($text3-54751.00) * 0.006) + 109.50;			# se calcula el impuesto comprendidas de 15 a 60 UIT
		}else{
			$IMPUESTO12 = (($text3-219001.00)*0.01) + 1095.00;			# se calcula el impuesto comprendidas de 60 a mas UIT
		}					
		?>
		<fieldset><label for="name" accesskey="U">Impuesto 2012</label>
		<input type="text" value="<?php echo "".$IMPUESTO12 ?>" readonly="">
		</fieldset>
		<?php
		# VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		###################################################################
		$text4 = $_POST["text1"]; 
		$IMPUESTO11;
		# CALCULO DEL IMPUESTO PREDIAL 2011
		if ($text2 == " "){
			$IMPUESTO11 = 'Cero Impuesto';
		}elseif ($text2 <= 10800.00) {
			$IMPUESTO11 = 21.60;										# impuesto minimo
		}elseif ($text2 >= 10801.00 and $text2 <= 54000.00){
			$IMPUESTO11 = $text2 * 0.002;								# se calcula el impuesto comprendidas de 15 UIT
		}elseif ($text2 >= 54001.00 and $text2 <= 216000.00) {
			$IMPUESTO11 = (($text2-54001.00) * 0.006) + 108.00;			# se calcula el impuesto comprendidas de 15 a 60 UIT
		}else{
			$IMPUESTO11 = (($text2-216001.00)*0.01) + 1080.00;			# se calcula el impuesto comprendidas de 60 a mas UIT
		}					
		?>
		<fieldset><label for="name" accesskey="U">Impuesto 2011</label>
		<input type="text" value="<?php echo "".$IMPUESTO11 ?>" readonly="">
		</fieldset>
		<?php
		# VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		###################################################################
		$text5 = $_POST["text1"]; 
		$IMPUESTO10;
		# CALCULO DEL IMPUESTO PREDIAL 2010
		if ($text5 == " "){
			$IMPUESTO10 = 'Cero Impuesto';
		}elseif ($text5 <= 10800.00) {
			$IMPUESTO10 = 21.60;										# impuesto minimo
		}elseif ($text5 >= 10801.00 and $text5 <= 54000.00){
			$IMPUESTO10 = $text5 * 0.002;								# se calcula el impuesto comprendidas de 15 UIT
		}elseif ($text5 >= 54001.00 and $text5 <= 216000.00) {
			$IMPUESTO10 = (($text5-54001.00) * 0.006) + 108.00;			# se calcula el impuesto comprendidas de 15 a 60 UIT
		}else{
			$IMPUESTO10 = (($text5-216001.00)*0.01) + 1080.00;			# se calcula el impuesto comprendidas de 60 a mas UIT
		}					
		?>
		<fieldset><label for="name" accesskey="U">Impuesto 2010</label>
		<input type="text" value="<?php echo "".$IMPUESTO10 ?>" readonly="">
		</fieldset>
		<?php
		# VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		###################################################################
		$text6 = $_POST["text1"]; # VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		$IMPUESTO09;
		# CALCULO DEL IMPUESTO PREDIAL 2009
		if ($text6 == " "){
			$IMPUESTO09 = 'Cero Impuesto';
		}elseif ($text6 <= 10650.00) {
			$IMPUESTO09 = 21.30;										# impuesto minimo
		}elseif ($text6 >= 10651.00 and $text6 <= 53250.00){
			$IMPUESTO09 = $text6 * 0.002;								# se calcula el impuesto comprendidas de 15 UIT
		}elseif ($text6 >= 53251.00 and $text6 <= 213000.00) {
			$IMPUESTO09 = (($text6-53251.00) * 0.006) + 106.50;			# se calcula el impuesto comprendidas de 15 a 60 UIT
		}else{
			$IMPUESTO09 = (($text6-213001.00)*0.01) + 1065.00;			# se calcula el impuesto comprendidas de 60 a mas UIT
		}					
		?>
		<fieldset><label for="name" accesskey="U">Impuesto 2009</label>
		<input type="text" value="<?php echo "".$IMPUESTO09 ?>" readonly="">
		</fieldset>
		<?php
		# VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		###################################################################
		$text7 = $_POST["text1"]; # VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		$IMPUESTO08;
		# CALCULO DEL IMPUESTO PREDIAL 2008
		if ($text7 == " "){
			$IMPUESTO08 = 'Cero Impuesto';
		}elseif ($text7 <= 10500.00) {
			$IMPUESTO08 = 21.00;										# impuesto minimo
		}elseif ($text7 >= 10501.00 and $text7 <= 52500.00){
			$IMPUESTO08 = $text7 * 0.002;								# se calcula el impuesto comprendidas de 15 UIT
		}elseif ($text7 >= 52501.00 and $text7 <= 210000.00) {
			$IMPUESTO08 = (($text7-52501.00) * 0.006) + 105.00;			# se calcula el impuesto comprendidas de 15 a 60 UIT
		}else{
			$IMPUESTO08 = (($text7-210001.00)*0.01) + 1050.00;			# se calcula el impuesto comprendidas de 60 a mas UIT
		}					
		?>
		<fieldset><label for="name" accesskey="U">Impuesto 2008</label>
		<input type="text" value="<?php echo "".$IMPUESTO08 ?>" readonly="">
		</fieldset>
		<?php
		# VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		###################################################################
		$text8 = $_POST["text1"]; # VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		$IMPUESTO07;
		# CALCULO DEL IMPUESTO PREDIAL 2007
		if ($text8 == " "){
			$IMPUESTO07 = 'Cero Impuesto';
		}elseif ($text8 <= 10350.00) {
			$IMPUESTO07 = 20.70;										# impuesto minimo
		}elseif ($text8 >= 10351.00 and $text8 <= 51750.00){
			$IMPUESTO07 = $text8 * 0.002;								# se calcula el impuesto comprendidas de 15 UIT
		}elseif ($text8 >= 51751.00 and $text8 <= 207000.00) {
			$IMPUESTO07 = (($text8-51751.00) * 0.006) + 103.50;			# se calcula el impuesto comprendidas de 15 a 60 UIT
		}else{
			$IMPUESTO07 = (($text8-207001.00)*0.01) + 1035.00;			# se calcula el impuesto comprendidas de 60 a mas UIT
		}					
		?>
		<fieldset><label for="name" accesskey="U">Impuesto 2007</label>
		<input type="text" value="<?php echo "".$IMPUESTO07 ?>" readonly="">
		</fieldset>
		<?php
		# VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		###################################################################
		$text9 = $_POST["text1"]; # VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		$IMPUESTO08;
		# CALCULO DEL IMPUESTO PREDIAL 2006
		if ($text9 == " "){
			$IMPUESTO08 = 'Cero Impuesto';
		}elseif ($text9 <= 10200.00) {
			$IMPUESTO08 = 20.40;										# impuesto minimo
		}elseif ($text9 >= 10201.00 and $text9 <= 51000.00){
			$IMPUESTO08 = $text9 * 0.002;								# se calcula el impuesto comprendidas de 15 UIT
		}elseif ($text9 >= 51001.00 and $text9 <= 204000.00) {
			$IMPUESTO08 = (($text9-51001.00) * 0.006) + 102.00;			# se calcula el impuesto comprendidas de 15 a 60 UIT
		}else{
			$IMPUESTO08 = (($text9-204001.00)*0.01) + 1020.00;			# se calcula el impuesto comprendidas de 60 a mas UIT
		}					
		?>
		<fieldset><label for="name" accesskey="U">Impuesto 2006</label>
		<input type="text" value="<?php echo "".$IMPUESTO08 ?>" readonly="">
		</fieldset>
		<?php
		# VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		###################################################################
		$text10 = $_POST["text1"]; # VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		$IMPUESTO09;
		# CALCULO DEL IMPUESTO PREDIAL 2005
		if ($text10 == " "){
			$IMPUESTO09 = 'Cero Impuesto';
		}elseif ($text10 <= 9900.00) {
			$IMPUESTO09 = 19.80;										# impuesto minimo
		}elseif ($text10 >= 9901.00 and $text10 <= 49500.00){
			$IMPUESTO09 = $text8 * 0.002;								# se calcula el impuesto comprendidas de 15 UIT
		}elseif ($text10 >= 49501.00 and $text10 <= 198000.00) {
			$IMPUESTO09 = (($text10-49501.00) * 0.006) + 99.00;			# se calcula el impuesto comprendidas de 15 a 60 UIT
		}else{
			$IMPUESTO09 = (($text10-198001.00)*0.01) + 990.00;			# se calcula el impuesto comprendidas de 60 a mas UIT
		}					
		?>
		<fieldset><label for="name" accesskey="U">Impuesto 2005</label>
		<input type="text" value="<?php echo "".$IMPUESTO09 ?>" readonly="">
		</fieldset>
		<?php
		# VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		###################################################################
		$text11 = $_POST["text1"]; # VARIABLE QUE SE JALA DESDE EL ENVIO DE DATOS DESDE LA CAJA DE TEXTO
		$IMPUESTO10;
		# CALCULO DEL IMPUESTO PREDIAL 2004
		if ($text11 == " "){
			$IMPUESTO10 = 'Cero Impuesto';
		}elseif ($text11 <= 9600.00) {
			$IMPUESTO10 = 19.20;										# impuesto minimo
		}elseif ($text11 >= 9601.00 and $text11 <= 48000.00){
			$IMPUESTO10 = $text11 * 0.002;								# se calcula el impuesto comprendidas de 15 UIT
		}elseif ($text11 >= 48001.00 and $text11 <= 192000.00) {
			$IMPUESTO10 = (($text11-48001.00) * 0.006) + 96.00;			# se calcula el impuesto comprendidas de 15 a 60 UIT
		}else{
			$IMPUESTO10 = (($text11-192001.00)*0.01) + 960.00;			# se calcula el impuesto comprendidas de 60 a mas UIT
		}					
		?>
		<fieldset><label for="name" accesskey="U">Impuesto 2004</label>
		<input type="text" value="<?php echo "".$IMPUESTO10 ?>" readonly="">
		</fieldset>
		<!-- boton de regreso  -->
		<!-- ############################################################# -->
		<a href="index.html">
			<input value="Regresar" type="submit" />
		</a>
		<!-- ############################################################# -->
</section>
</body>
</html>