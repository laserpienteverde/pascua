<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hemos recibido tus datos</title>
    <style>
        body {
            background-color: #FAE6CD;
        }
        h1 {
            color: #A33D00;;        
        }
        a {
            color: #415C01;
            font-size: 1.5rem;
            text-decoration: none;
        }
        a:hover {
            color: #A1CC3A;
        }
    </style>
</head>
<body>
<!--Aquí el php vivirá en el host OJO Mayusculas-->
<?php
    $cfg['DefaultCharset'] = 'UTF-8';
    $cuerpo = "Mensaje enviado desde tu formulario: " . PHP_EOL ;
    foreach ($_POST as $casilla =>$rellenado)
    {
        $cuerpo = $cuerpo . $casilla . ":" .utf8_decode($rellenado) . PHP_EOL;
    }
    mail("mauro@quieresu.com" , "Datos recibidos desde la web" , $cuerpo)
?>
<!--Aquí acaba el PHP y viene el código HTML que da las gracias-->
<h1>Gracias. Te contactaremos en breve.</h1>
<a href="index.html"><strong><em>Volver...</em></strong></a>   
</body>
</html>