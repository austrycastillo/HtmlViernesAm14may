<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$comentarios = $_POST['comentarios'];
$para = "castilloaustry@gmail.com";
$asunto = "Contacto web";
$cuerpo = "<h1>Hola, recibiste un contacto</h1>Nombre: ".$nombre."<br>Correo electrónico: ".$correo."<br>Edad: ".$edad."<br>Comentarios: ".$comentarios."<br>Chaito";
$cabecera = "From:" . $para . "\r\n";
$cabecera.= "MIME-Version: 1.0\r\n";
$cabecera.= "Content-Type: text/html; charset=UTF-8\r\n";

if ( !mail($para,$asunto,$cuerpo, $cabecera)) {
    echo "E-Mail no enviado";
     
} else {
    echo "E-Mail  enviado";
    
}
?>