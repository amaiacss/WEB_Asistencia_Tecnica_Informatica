<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de datos</title>

    <!--CDN de Bootstrap 4-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- ESTILOS BOOTSTRAP -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=276683c7233957faac03b8dbbc528118">

    <!-- ESTILOS PROPIOS -->
    <link rel="stylesheet" href="css/estilos.css">

     <!--CDN a fuentes de letra de google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">

    <!-- FONT - AWESOME  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- EFECTOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <!--ICONOS DE AWESOME NECESARIOS PARA LA FLECHA ANCLA ARRIBA-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: #354c66;
        }
        h2 {
            color: green;
            padding: 2rem;
            text-align: center;
        }
        button {
            color: black;
        }
    </style>

</head>
<body>
    <div class="container">
        <h2>El mensaje ha sido enviado</h2>
        <?php
            $nom = $_GET['nombre'];
            $email = $_GET['email'];
            $tel = $_GET['tel'];
            $ciudad = $_GET['ciudad'];
            $mensaje = $_GET['mensaje'];
            
        ?>

        <!-- FORMULARIO -->
        <form id="contactForm" name="contactForm" method="" action="procesar_formulario.php">
            <div class="col-md-12">
                <div class="">
                    <div class="form-group ">
                    <!-- NOMBRE  -->
                        <input class="form-control" type="text"  id="name" name="nombre"  value="<?php echo $nom;?>" readonly="">
                    </div>
                    <!-- EMAIL -->
                    <div class="form-group">
                        <input class="form-control" type="email" id="email" name="email"  value="<?php echo $email;?>" readonly="">
                    </div>
                    <!-- TELEFONO -->
                    <div class="form-group">
                        <input class="form-control" type="tel" name="tel" value="<?php echo $tel;?>" readonly="">
                    </div>
                    <!-- CIUDAD -->
                    <div class="form-group ">
                        <input class="form-control" type="tel" name="tel" value="<?php echo $ciudad;?>" readonly="">   
                    </div>
                    <!-- MENSAJE -->
                    <div class="">
                        <div class="form-group">
                            <textarea style="height: 13rem;" class="form-control" name="mensaje" id="message" readonly><?php echo $mensaje?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="clearfix"></div>
                </div>    
            </div>
        </form>
        <a class="btn btn-primary btn-xl js-scroll-trigger" role="button" href="index.html"><i class="fa fa-reply"> VOLVER A INICIO</i></a> 
    </div>
<!--FIN SECTION CONTACTO-->  
       
    
    <!--CDN de la librería JQuery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>