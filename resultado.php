<?php
//We've included ../Includes/FusionCharts.php, which contains functions
//to help us easily embed the charts.
include("Includes/FusionCharts.php");
require_once("class/class.php");


?>
<HTML>
<HEAD>
	<TITLE>
sistema experto
	</TITLE>
	<?php
	//You need to include the following JS file, if you intend to embed the chart using JavaScript.
	//Embedding using JavaScripts avoids the "Click to Activate..." issue in Internet Explorer
	//When you make your own charts, make sure that the path to this JS file is correct. Else, you would get JavaScript errors.
	?>	
	<SCRIPT LANGUAGE="Javascript" SRC="FusionCharts/FusionCharts.js"></SCRIPT>
	<style type="text/css">
	<!--
	body {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 12px;
	}
	-->
	</style>
</HEAD>
<BODY>

<CENTER>
<h1>RESULTADO
<h4>sistema experto orientacion vocacional</h4>
<?php
	
	//This page demonstrates how you can show multiple charts on the same page.
	//For this example, all the charts use the pre-built Data.xml (contained in /Data/ folder)
	//However, you can very easily change the data source for any chart. 
	
	//IMPORTANT NOTE: Each chart necessarily needs to have a unique ID on the page.
	//If you do not provide a unique Id, only the last chart might be visible.
	//Here, we've used the ID chart1, chart2 and chart3 for the 3 charts on page.
	
	//Create the chart - Column 3D Chart with data from Data/Data.xml
$contador1=0;
$contador2=0;
$contador3=0;
$contador4=0;
$contador5=0;

for($i=1;$i<count($_POST);$i++){


       if($i>0 && $i<17){
          
            if($_POST["pregunta_".$i]=="si"){
        	$contador1++;
       }
	      }else if($i>=17 && $i<33){

            if($_POST["pregunta_".$i]=="si"){
         	$contador2++;
       }

		}else if($i>=34 && $i<49){
             if($_POST["pregunta_".$i]=="si"){
         	 $contador3++;   
       }  	 
		}else if($i>49 && $i<65){
              if($_POST["pregunta_".$i]=="si"){
         	  $contador4++;
       }
		}else if($i>65 && $i<81){
              if($_POST["pregunta_".$i]=="si"){
               $contador5++;
	}	
    
	}



}
    

	$arrData[0][1] = "AREA 1";
	$arrData[1][1] = "AREA 2";
	$arrData[2][1] = "AREA 3";
	$arrData[3][1] = "AREA 4";
	$arrData[4][1] = "AREA 5";
	//Store revenue data
	$arrData[0][2] = $contador1;
	$arrData[1][2] = $contador2;
	$arrData[2][2] = $contador3;
	$arrData[3][2] = $contador4;
	$arrData[4][2] = $contador5;		
	//Store Quantity
	$arrData[0][3] = $contador1;
	$arrData[1][3] = $contador2;
	$arrData[2][3] = $contador3;
	$arrData[3][3] = $contador4;
    	$arrData[4][3] = $contador5;
	//Now, we need to convert this data into combination XML. 
	//We convert using string concatenation.
	// $strXML - Stores the entire XML
	// $strCategories - Stores XML for the <categories> and child <category> elements
	// $strDataRev - Stores XML for current year's sales
	// $strDataQty - Stores XML for previous year's sales
	
	//Initialize <graph> element
	$strXML = "<graph caption='Test Vocacional' PYAxisName='Revenue' SYAxisName='Quantity (in Units)' numberPrefix='$' formatNumberScale='0' showValues='0' decimalPrecision='0' anchorSides='10' anchorRadius='3' anchorBorderColor='FF8000'>";
	
	//Initialize <categories> element - necessary to generate a multi-series chart
	$strCategories = "<categories>";
	
	//Initiate <dataset> elements
	$strDataRev = "<dataset seriesName='Revenue' color='AFD8F8' >";
	$strDataQty = "<dataset seriesName='Quantity' parentYAxis='S' color='FF8000'>";
	
	//Iterate through the data	
	foreach ($arrData as $arSubData) {
        //Append <category name='...' /> to strCategories
        $strCategories .= "<category name='" . $arSubData[1] . "' />";
        //Add <set value='...' /> to both the datasets
        $strDataRev .= "<set value='" . $arSubData[2] . "' />";
        $strDataQty .= "<set value='" . $arSubData[3] . "' />";		
	}
	
	//Close <categories> element
	$strCategories .= "</categories>";
	
	//Close <dataset> elements
	$strDataRev .= "</dataset>";
	$strDataQty .= "</dataset>";
	
	//Assemble the entire XML now
	$strXML .= $strCategories . $strDataRev . $strDataQty . "</graph>";



	echo renderChart("FusionCharts/FCF_MSColumn3DLineDY.swf", "", $strXML, "productSales", 600, 300);

$mayor = $contador1; /* asumimos primero es mayor */



$obj= new Trabajo();

 for($i=1;$i<=5;$i++){

 	$datos=$obj->get_especialidades($i);
?><hr><?php
    echo "AREA".$i;
    ?><hr><?php
        for($j=0;$j<sizeof($datos);$j++)
        {   ?>
     <div id="nombre">
      <?php
          echo $datos[$j]["especialidad"];

         ?>
       </div>
  <?php
 }

}

?>
	<BR><BR>




<?php	
	//Now, create a Line 2D Chart figura que aparece debajo del resultado del test
	//echo renderChart("FusionCharts/FCF_Line.swf", "Data/Data.xml", "", "chart3", 600, 300);
?>


</CENTER>
</BODY>
</HTML>