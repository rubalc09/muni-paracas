

function pulsar(e) {
	tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) return false;
}
$(document).ready(function(){
   
});

function agregarFila(obj){


        $("#cant_campos").val(parseInt($("#cant_campos").val()) + 1);
		var oId = $("#cant_campos").val();
        var nombre = $("#txtNombre").val();
		var paterno = $("#paterno").val();
		var materno = $("#materno").val();
		var carnet = $("#carnet").val();
        var ciclo = $("#ciclo").val();
  

        var tipoalumno = $("#tipoalumno").val();
        var nomciclo = $("#ciclo option:selected").html()
        var nombreTipoAlum = $("#tipoalumno option:selected").html()
	    


        var strHtml1 = "<td>" + nombre + '<input type="hidden" id="hdnNombre_' + oId + '" name="nombre[]" value="' + nombre + '"/></td>';
		var strHtml2 = "<td>" + paterno + '<input type="hidden" id="hdnEdad_' + oId + '" name="paterno[]" value="' + paterno + '"/></td>' ;
		var strHtml3 = "<td>" + materno + '<input type="hidden" id="hdnDireccion_' + oId + '" name="materno[]" value="' + materno + '"/></td>' ;
		var strHtml4 = "<td>" + carnet + '<input type="hidden" id="hdnSexo_' + oId + '" name="carnet[]" value="' + carnet + '"/></td>' ;
		var strHtml5 = "<td>" + ciclo + '<input type="hidden" id="hdnSexo_' + oId + '" name="ciclo[]" value="' + ciclo + '"/></td>' ;
		
		var strHtml6 = "<td>" + nombreTipoAlum + '<input type="hidden" id="hdnEstCivil_' + oId + '" name="tipoalumno[]" value="' + tipoalumno + '"/></td>' ;

    	var strHtml8 = '<td><img src="../public/images/delete.png" width="16" height="16" alt="Eliminar" onclick="if(confirm(\'Realmente desea eliminar este detalle?\')){eliminarFila(' + oId + ');}"/>';
        strHtml8 += '<input type="hidden" id="hdnIdCampos_' + oId +'" name="hdnIdCampos[]" value="' + oId + '" /></td>';
        var strHtmlTr = "<tr id='rowDetalle_" + oId + "'></tr>";
        var strHtmlFinal = strHtml1 + strHtml2 + strHtml3 + strHtml4+ strHtml5+strHtml6+strHtml8;
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
	
