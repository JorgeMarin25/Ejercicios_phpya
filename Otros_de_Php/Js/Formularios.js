function Verificar() {
	if (document.FormUser.Documento.selectedIndex == 0){
       alert("Por Favor seleccione un Tipo de Documento")
       document.FormUser.Documento.focus()
       return 0;
    }
	if(document.FormUser.Num.value == ""){ 
		alert('Por Favor Ingrese El Numero Del Documento de Identidad');
		FormUser.Num.focus(); ; return false; 
	}
	if(document.FormUser.Nombre.value == ""){ 
		alert('Por Favor Ingrese Un Nombre');
		FormUser.Nombre.focus(); ; return false; 
	}
	if(document.FormUser.Apellido.value == ""){
		alert('Por Favor Ingrese Un Apellido'); 
		FormUser.Apellido.focus(); ; return false;
	}
	if (document.FormUser.Sexo.selectedIndex == 0){
       alert("Por Favor Seleccione Un Genero")
       document.FormUser.Sexo.focus()
       return 0;
    }
    if(document.FormUser.Mail.value == ""){
		alert('Por Favor Ingrese Un Correo'); 
		FormUser.Mail.focus(); ; return false;
	}
	if(document.FormUser.password.value == ""){
		alert('Por Favor Ingrese Una Contraseña'); 
		FormUser.password.focus(); ; return false;
	}
	if (document.FormUser.Roles.selectedIndex == 0){
       alert("Por Favor Ingrese Un Rol")
       document.FormUser.Roles.focus()
       return 0;
    }

}
function Numeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57)|| (key==8)
}

function Contraseña(){
    clave1 = document.FormUser.password.value
    clave2 = document.FormUser.password.value

    if (clave1 != clave2)
       alert("Las Contraseñas deben ser Iguales")
    
}
function Tamano() {
	clave1 = document.FormUser.password.value
	if (clave1.length<=4){
		alert("Su Contraseña Debe Tener Mas de 4 Caracteres")
	}else if(clave1.length>=15){
		alert("Su Contraseña No Debe tener Mas De 15 Caracteres")
	}
}
function letras(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 1 && key <= 45)
}