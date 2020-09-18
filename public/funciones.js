$(document).ready(function(){

  ingresarNumeros()
  limpiarImput()

  ingresarPin()
  ingresarMonto()

// evitamos ir hacia atras
if(history.forward(1)){
history.replace(history.forward(1));
}

});


//Funcion para el imput del ingreso
function ingresarNumeros() {
  $(".num").click(function(e){
		//Validacion de longitud de datos
		if(Digitos.value.length > 18) { return false }
		//Valor del boton
	teclado = $(this).val();
	//generamos valor nuevo de input
	Digitos.value = Digitos.value + teclado;
		//Validamos si alcanzo el Max de numeros y activamos el submit
		if(Digitos.value.length == 19) { send.disabled = false };
	//Separamos cada 4 digitos por un guion si es menor de 16
		if(Digitos.value.length < 16) {
		Digitos.value = Digitos.value.replace(/-/g, '').replace(/([0-9]{4})/g, '$1-');
		} ;
  });
}

//Funcion para el imput del ingreso
function ingresarPin() {
  $(".pin").click(function(e){
	//Validacion de longitud de datos
	if(Digitos.value.length > 3) { return false }
	//Valor del boton
	teclado = $(this).val();
	//generamos valor nuevo de input
	Digitos.value = Digitos.value + teclado;
	//Validamos si alcanzo el Max de numeros y activamos el submit
	if(Digitos.value.length == 4) { send.disabled = false };
  });
}

//Funcion para el imput del ingreso
function ingresarMonto() {
  $(".valor").click(function(e){
	//Valor del boton
	teclado = $(this).val();
	//generamos valor nuevo de input
	Digitos.value = Digitos.value + teclado;
  });
}

//Funcion para limpiar input
function limpiarImput() {
	$("#clear").click(function(){
    	Digitos.value = null;
  		send.disabled = true;
  	});
}