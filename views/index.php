<!doctype html>

<?php
session_start();
require_once 'controllers/entradaController.php';
require_once 'controllers/salidaController.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>robotchat con php y mysql </title>
        <link rel="stylesheet" href="assets/css/style.css"/>
    </head>
    <body>
        <div id="contend">
            <div id="caja">
                

                    <div id="datos">
                        <span style="color:blue;">User</span>
                        <span>hola cdfljsdhflkdjhlkjha df;osh dlkajsdhf ksjdh fakjsdh faklsdjhf askd f</span>
                    </div>
                    <div id="datos_bot">
                        <span style="color:blue;">bot</span>
                        <span>bien y tuhjhshfkahs j hkasjhdg lskdjhg skdjfhg sldkfjhg slkdjfgh skdjfgh jhsikjkjhkjhkj</span>
                    </div> 
                
            </div>
            <form action="?controller=entrada&action=limpiar" method="POST"  autocomplete="off" >
                <input type="text" name="pregunta" placeholder="Escribe aqui"  />
                <input type="submit" value="Enviar"/>

            </form>
        </div>   
    </body>
</html>

