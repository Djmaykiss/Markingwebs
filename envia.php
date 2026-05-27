<?php
$remitente = $_POST['correo'];
$destinatario = 'megaempresa.02@gmail.com';
$asunto = 'Nueva solicitud desde Markingwebs';
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Teléfono: " . $_POST["telefono"] . "\r\n";
    $cuerpo .= "Correo: " . $_POST["correo"] . "\r\n";
    $cuerpo .= "Servicio: " . $_POST["servicio"] . "\r\n";
    $cuerpo .= "Mensaje: " . $_POST["mensaje"] . "\r\n";
    
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'index.html'; //se debe crear un html que confirma el envío
}
?>
