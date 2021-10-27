let y;
y = $(document);
y.ready(inicializar);

function inicializar() {
	y = $("#sendMessageButton"); //botón de envío del formulario
	y.click(validar);  //Llamar a la función JQuery Validate
}

function validar() {
    $("#contactForm").validate({

        rules: {
            nombre: {// aqui van los name
                required:true,
                minlength:3,
                maxlength: 20,
				sololetras: true
            },
            email: {
                required:true,
                email: true
            },
            tel: {
                required:true,
                digits: true
            },
            ciudad: {
                required:true
            },
            mensaje: {
                required:true
            }
        },
/* Al publicar la web, el CDN que traduce los mensajes de error al castellano, no funciona, 
    por lo que he optado por poner yo misma los mensajes*/
        messages: {
			nombre: {
				sololetras: "Por favor, sólo letras",
                minlength: "Por favor, mínimo tres letras",
                maxlength: "Por favor, máximo 20 letras",
                required: "Este dato es obligatorio"
			},

			email: {
				required: "Este dato es obligatorio",
                email: "Por favor ponga una direccion válida"
			},

            tel: {
                required: "Este dato es obligatorio",
                digits: "Por favor sólo dígitos"
            },
            ciudad: {
                required: "Este dato es obligatorio"
            },
            mensaje: {
                required: "Este dato es obligatorio"
            }

		},

        errorPlacement: function(error, element) {
            console.log("form error en :",element.attr("name"));
            error.insertAfter(element);
        }
    })  /*fin del método validate*/

    /*MÉTODOS PERSONALIZADOS*/
	//MÉTODO PARA VALIDAR SÓLO SE ADMITEN LETRAS 
	//Validación para validar sólo letras 
	$.validator.addMethod("sololetras",function(value,element){
		return this.optional(element) || /^[A-Za-z- ]+$/.test(value);  
	});
}



