

function pulsar(e) {
	tecla=(document.all) ? e.keyCode : e.which;
  if(tecla==13) return false;
}
$(document).ready(function(){
   
});

function agregarFila(obj){


        $("#cant_campos").val(parseInt($("#cant_campos").val()) + 1);
		var oId = $("#cant_campos").val();
		var idasignatura = $("#idasignatura").val();
        var nombre = $("#nombre").val();
		var creditos = $("#creditos").val();
		var tipo = $("#tipo").val();
		var docente = $("#docente").val();
		var ciclo = $("#ciclo").val();
        var nombreDocente= $("#docente option:selected").html();
         
	    


        var strHtml1 = "<td>" + idasignatura + '<input type="hidden" id="hdnNombre_' + oId + '" name="idasignatura[]" value="' + idasignatura + '"/></td>';
		var strHtml2 = "<td>" + nombre + '<input type="hidden" id="hdnEdad_' + oId + '" name="nombre[]" value="' + nombre + '"/></td>' ;
		var strHtml3 = "<td>" + creditos + '<input type="hidden" id="hdnDireccion_' + oId + '" name="creditos[]" value="' + creditos + '"/></td>' ;
		var strHtml4 = "<td>" + tipo + '<input type="hidden" id="hdnSexo_' + oId + '" name="tipo[]" value="' + tipo + '"/></td>' ;
		var strHtml5 = "<td>" + nombreDocente + '<input type="hidden" id="hdnSexo_' + oId + '" name="docente[]" value="' + docente + '"/></td>' ;
		var strHtml6 = "<td>" + ciclo + '<input type="hidden" id="hdnSexo_' + oId + '" name="ciclo[]" value="' + ciclo + '"/></td>' ;

    
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
	

