function validar(){
	var nombre, correo, hora, fecha, comensales, telefono, expresion;
	nombre = document.getElementById("nombre").value;
	correo = document.getElementById("correo").value;
	hora = document.getElementById("hora").value;
	fecha = document.getElementById("fecha").value;
	comensales = document.getElementById("n_comensales").value;
	telefono = document.getElementById("telefono").value;
 
/*  El simbolo  | se crea en codigo asccii con alt+124 */

	expresion = /\w+@\w+\.+[a-z]/;


	if(nombre === "" || correo === "" || hora === "" || fecha === "" || comensales === "" || telefono === ""){
		alert("Todos los campos son obligatorios");
		return false;
	}

	else if(nombre.length>50){
		alert("El nombre es muy largo");
		return false;		
	}

	else if(correo.length>100){
		alert("El correo es muy largo");
		return false;		
	}

	else if(!expresion.test(correo)){
		alert('El correo no es valido');
		return false;
	}

	else if(isNaN(comensales)) {
		alert("El Numero de comensales no es un numero");
		return false;		
	}

	else if(telefono.length>11){
		alert("El teléfono es muy largo");
		return false;		
	}

	else if(isNaN(telefono)) {
		alert("El teléfono ingresado no es un numero");
		return false;		
	}
	else if(isNaN(hora)) {
		alert("La hora ingresada no es un numero");
		return false;		
	}

}