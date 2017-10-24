$("#state").change(funcion(event){
	$.get("municipios/"+event.target.value+"",function(response,state){
		console.log(response);
	});

});
