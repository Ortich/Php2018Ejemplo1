<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba PHP con BOOTSTRAP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <button id="boton1" class="btn btn-primary">Primary</button>
                </div>
                <div class="col-4">
                    <input id="cajanombre" name="usuario_nombre" type="text" placeholder="Usuario">
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script>
        //Document ready se ejecuta cuando la pagina se ha cargado entera, pero
        //aun no ha renderizado
        $(document).ready(function(){
            $('#cajanombre').hide(); //VAmos a ocultar la caja
        });
        
        $('#boton1').click(function(){
            console.log("He llegao");//Prueba para saber si entra aqui
             $('#cajanombre').show(200);//Muestra la caja(Aqui va el tiempo que tarda)
            $("input[name=usuario_nombre]").val("Why you running?");
            //$('#cajanombre').val("Why you running?"); //Otra forma de hacer lo mismo
        });
    </script>
</html>
