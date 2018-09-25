<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba PHP con BOOTSTRAP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color: #666">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center" style="color:white">EJEMPLO INICIO SESION</h2>
                </div>
                <div class="col-4">
                </div>
                <div class="col-4">
                    <form action="index2.php">
                        <input id="cajanombre" class="form-control" type="text" placeholder="Usuario" required="required">
                        <br>
                        <input id="cajaPassword" class="form-control" type="password" placeholder="Contraseña" required="required">
                        <br>
                        <button id="boton1" class="btn btn-primary btn-block" type="submit">PATATAAA</button>
                        <br>
                        Year<input data-validation="date" data-validation-format="dd-mm-yyyy" required="required" placeholder="dd-mm-yyyy">
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
        //Document ready se ejecuta cuando la pagina se ha cargado entera, pero
        //aun no ha renderizado
        $(document).ready(function () {
            $('#cajanombre').hide(); //VAmos a ocultar la caja
        });

        $('#boton1').click(function () {
            console.log("He llegao");//Prueba para saber si entra aqui
            $('#cajanombre').show(200);//Muestra la caja(Aqui va el tiempo que tarda)
            $("input[name=usuario_nombre]").val("Why you running?");
            //$('#cajanombre').val("Why you running?"); //Otra forma de hacer lo mismo
        });
        $.validate({
            lang: 'es'
        });
    </script>
</html>
