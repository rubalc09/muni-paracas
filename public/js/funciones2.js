function valida_correo(correo) {
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(correo)){
			
		   return (true)
		  } else {
		   
		   return (false);
		  }
		 }


function validar_logueo()
{
	var form=document.form;
	if (form.usuario.value==0)
	{
		//alert("Ingrese su Login");
		document.getElementById("error").innerHTML="<font color='red'>El nombre de Usuario está vacío</font><hr>";
		form.usuario.value="";
		form.usuario.focus();
		return false;
	}else
	{
		document.getElementById("error").innerHTML="";
	}
	
	if (form.pass.value==0)
	{
		//alert("Ingrese su Login");
		document.getElementById("error").innerHTML="<font color='red'>El Password está vacío</font><hr>";
		form.pass.value="";
		form.pass.focus();
		return false;
	}else
	{
		document.getElementById("error").innerHTML="";
	}
	
	form.pass.value=calcMD5(form.pass.value);
	form.submit();
}
function registro()
{
	var form=document.form;
	
	if (form.nom.value==0)
	{
		//alert("Ingrese su Login");
		document.getElementById("error").innerHTML="<font color='red'>El Nombre está vacío</font><hr>";
		form.nom.value="";
		form.nom.focus();
		return false;
	}else
	{
		document.getElementById("error").innerHTML="";
	}
	
	if (form.correo.value==0)
	{
		//alert("Ingrese su Login");
		document.getElementById("error").innerHTML="<font color='red'>El E-Mail está vacío</font><hr>";
		form.correo.value="";
		form.correo.focus();
		return false;
	}else
	{
		document.getElementById("error").innerHTML="";
	}
	if (valida_correo(form.correo.value)==false)
	{
		//alert("Ingrese su Login");
		document.getElementById("error").innerHTML="<font color='red'>El E-Mail ingresado no es válido</font><hr>";
		form.correo.value="";
		form.correo.focus();
		return false;
	}else
	{
		document.getElementById("error").innerHTML="";
	}
	if (form.pass.value==0)
	{
		//alert("Ingrese su Login");
		document.getElementById("error").innerHTML="<font color='red'>El Password está vacío</font><hr>";
		form.pass.value="";
		form.pass.focus();
		return false;
	}else
	{
		document.getElementById("error").innerHTML="";
	}
	
	if (form.pass.value != form.pass_2.value)
	{
		//alert("Ingrese su Login");
		document.getElementById("error").innerHTML="<font color='red'>Los Password ingresados no coinciden</font><hr>";
		form.pass.value="";
		form.pass_2.value="";
		form.pass.focus();
		return false;
	}else
	{
		document.getElementById("error").innerHTML="";
	}
	
	form.pass.value=calcMD5(form.pass.value);
	form.pass_2.value=calcMD5(form.pass.value);
	form.submit();
	
}