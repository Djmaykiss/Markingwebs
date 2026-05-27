<?php
$remitente = $_POST['correo'];
$destinatario = 'megaempresa.02@gmail.com';
$asunto = 'New request from Markingwebs';
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Name: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Phone: " . $_POST["telefono"] . "\r\n";
    $cuerpo .= "Email: " . $_POST["correo"] . "\r\n";
    $cuerpo .= "Service: " . $_POST["servicio"] . "\r\n";
    $cuerpo .= "Message: " . $_POST["mensaje"] . "\r\n";
    
	// The lines above define the email content. The keys inside $_POST[""] must match each field's name attribute.
	// If a new form field is added, include it here.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'index.html'; // Replace with a confirmation page if needed.
}
?>
