// JavaScript Document

function pulsar(e) {
	tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) return false;
}

$(document).ready(function(){
   
});

function agregarFila(obj){
        $("#cant_campos").val(parseInt($("#cant_campos").val()) + 1);
		var oId = $("#cant_campos").val();
        var curso = $("#asignatura").val();

	var nombreAsignatura = $("#asignatura option:selected").html()


        var strHtml1 = "<td>" + curso + '<input type="hidden" id="asignatura_' + oId + '" name="asignatura[]" value="' + curso + '"/></td>' ;
		
		var strHtml2 = "<td>" + nombreAsignatura + '<input type="hidden" id="hdnEdad_' + oId + '" name="nombreAsignatura[]" value="' + nombreAsignatura + '"/></td>' ;
	
		
    	var strHtml8 = '<td><img src="../images/eliminar.png" width="70" height="20" alt="Eliminar" onclick="if(confirm(\'Realmente desea eliminar este detalle?\')){eliminarFila(' + oId + ');}"/>';
        strHtml8 += '<input type="hidden" id="hdnIdCampos_' + oId +'" name="hdnIdCampos[]" value="' + oId + '" /></td>';
        var strHtmlTr = "<tr id='rowDetalle_" + oId + "'></tr>";
        var strHtmlFinal = strHtml1 + strHtml2 +strHtml8;
        //tambien se puede agregar todo el HTML de una sola vez.
        //var strHtmlTr = "<tr id='rowDetalle_" + oId + "'>" + strHtml1 + strHtml2 + strHtml3 + strHtml4 + strHtml5 + strHtml6 +"</tr>";
        $("#tbDetalle").append(strHtmlTr);
        //si se agrega el HTML de una sola vez se debe comentar la linea siguiente.
        $("#rowDetalle_" + oId).html(strHtmlFinal);
        return false;
	}
	function eliminarFila(oId){
	    $("#rowDetalle_" + oId).remove();	
		return false;
	}

	function cancelar(){
	    $("#tbDetalle").html("");	
		return false;
	}
	
   var peticion = false;
   var  testPasado = false;
    try {
      peticion = new XMLHttpRequest();
      }
	  catch (trymicrosoft) {
      try {
      peticion = new ActiveXObject("Msxml2.XMLHTTP");
      } 
	  catch (othermicrosoft) {
    try {
     peticion = new ActiveXObject("Microsoft.XMLHTTP");
     }
	 catch (failed) {
     peticion = false;
     }
     }
   }
   if (!peticion)
   alert("ERROR AL INICIALIZAR!");
    
   function cargarCombo (url, comboAnterior, element_id) {
       //Obtenemos el contenido del div   donde se cargaran los resultados
       var element =  document.getElementById(element_id);
       //Obtenemos el valor seleccionado del combo anterior
       var valordepende = document.getElementById(comboAnterior)
       var x = valordepende.value
       //construimos la url definitiva  pasando como parametro el valor seleccionado
       var fragment_url = url+'?Id='+x;
       element.innerHTML = '<img src="../imagenes/loading.gif" mce_src="../images/loading.gif" />';
      //abrimos la url
       peticion.open("GET", fragment_url);
       peticion.onreadystatechange = function() {
           if (peticion.readyState == 4) {
   //escribimos la respuesta
   element.innerHTML = peticion.responseText;
           }
      }
      peticion.send(null);
   }
/*   
function asigna(){
    form1.codoficina.value=form1.Actividades.options[form1.Actividades.selectedIndex].value;
}    */

	function asigna4(){
	    document.form1.idalumno.value=document.form1.SubActividades3.options[document.form1.SubActividades3.selectedIndex].value;
	}  
	function asigna2(){
	    document.form1.idasignatura.value=document.form1.SubActividades.options[document.form1.SubActividades.selectedIndex].value;
	}   
  
	function asigna3(){
	    document.form1.codprov.value=document.form1.Actividades.options[document.form1.Actividades.selectedIndex].value;
	}    

 function validar(form){
 form.submit();
 }
