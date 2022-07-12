<?php


require("class.phpmailer.php");
require("class.smtp.php");

$destinatario = "artinta506@gmail.com";


// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "mail.artinta506.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "info@artinta506.com";  // Mi cuenta de correo
//$smtpClave = "M456ario";  // Mi contraseña
$smtpClave = "M741ario";  // Mi contraseña




$mail = new PHPMailer();


$mail->IsSMTP();

$mail->SMTPAuth = true;
$mail->Port = 465;  
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";


// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;


 
$nombre = 'Buen Mario';
$mail->From = $smtpUsuario; // Email  donde envío el correo.
$mail->FromName = $nombre;
$mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario

$mail->Subject = "Respuesta a cotizacion con Artinta506"; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);



$mail->Body = "
<html> 

<body> 

<h1>Hello {$nombre} </h1>

<p>Email sent by:</p>

<p>email: {$email}</p>

<h3>Instruction: {$messaje}</h3>	


</body> 

</html>

<br />"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
// FIN - VALORES A MODIFICAR //

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

if ($mail->Send() ){
    echo "emailsent";
}else
{echo "email not sent";

}

echo "VOY";
/*
//$estadoEnvio = $mail->Send(); 
//header('location:assessmentsManager.php');
//echo "emailsent";
//echo $estadoEnvio;
 

 *  */

?>

