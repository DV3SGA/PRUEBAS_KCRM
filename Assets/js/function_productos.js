
$("#f_producto").on("submit", function (e) {
	e.preventDefault();
	let nombre = document.getElementById("nombre").value
	console.log(nombre);
	let numero_referencia = document.getElementById("numero_referencia").value
	console.log(numero_referencia);
	let precio = document.getElementById("precio").value
	console.log(precio);
	let peso = document.getElementById("peso").value
	console.log(peso);
	let stock = document.getElementById("stock").value
	console.log(stock);
    let fecha = document.getElementById("fecha").value
	console.log(fecha);
	let categoria = document.getElementById("categoria").value
	console.log(categoria);
     
	localStorage.clear();

	if (nombre.length == 0 || numero_referencia.length == 0 || precio.length == 0 || peso.length ==0 || stock.length == 0 || categoria.length == 0 ) {
		Message("los campos no pueden quedar vacios", "warning");
		return false;
	}  else {
		$.ajax({
			data: {
				nombre:nombre,
				numero_referencia: numero_referencia,
				precio: precio,
				peso:peso,
				stock:stock,
                fecha:fecha,
                categoria: categoria,
				op: 'guardar'
			},
			method: "POST",
			url: base_url + "productos/InsertProducto",
			dataType: "JSON",
			beforeSend: function (){
					
					$("#cover-spin").show();
				
			  },
			
			success: function (data) {
				setTimeout(() => {
					limpiar_registro();
				Message("registro exitoso", "success");
				
					$("#cover-spin").hide();
				}, 1000);
			},
		});
		return true;
	}

	function limpiar_registro() {
		setTimeout(() => {
			$("#nombre_categoria").val("");
			$("#descripcion").val("");
			
		}, 2000);
	}
})