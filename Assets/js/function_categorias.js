$("#f_categoria").on("submit", function (e) {
	e.preventDefault();
	let categoria = document.getElementById("nombre_categoria").value
	console.log(categoria);
	let descripcion = document.getElementById("descripcion").value
	console.log(descripcion);
     
	localStorage.clear();

	if (categoria.length == 0 || descripcion.length == 0 ) {
		Message("los campos no pueden quedar vacios", "warning");
		return false;
	}  else {
		$.ajax({
			data: {
                categoria: categoria,
				descripcion: descripcion,
				op: 'guardar'
			},
			method: "POST",
			url: base_url + "categorias/InsertCategoria",
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