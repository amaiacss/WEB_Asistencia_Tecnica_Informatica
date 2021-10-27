let z;
z = $(document);
z.ready(iniciar);

function iniciar(){
	/*Para la funcionalidad del botón arriba*/
	flecha_arriba();
	$('[data-toggle="tooltip"]').tooltip(); 
}

function flecha_arriba() {
	let btn;
	btn = $("#button");

	$(window).scroll(function(){
		if($(window).scrollTop()>300){
			btn.addClass('show');
		}else {
			btn.removeClass('show');
		}
	});

	btn.on('click', function(e){
		e.preventDefault();
		/*esto es lo que hace el truco de subir arriba*/
		$('html, body').animate({scrollTop:0}, '300');
	});

}