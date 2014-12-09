<?php
$remitente = $_POST['email'];
$destinatario = 'oscar.alzate@cempo.com.co'; // en esta línea va el mail del destinatario, puede ser una cuenta de hotmail, yahoo, gmail, etc
$asunto = 'formulario sitio web de'. $_POST["name"]; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre: " . $_POST["name"] . "\r \n"; 
    $cuerpo .= "Teléfono fijo: " . $_POST["fijo"] . "\r \n";
	$cuerpo .= "Teléfono celular: " . $_POST["celular"] . "\r \n";
	$cuerpo .= "Ciudad: " . $_POST["ciudad"] . "\r \n";
    $cuerpo .= "País: " . $_POST["pais"] . "\r \n";
	$cuerpo .= "Email: " . $_POST["email"] . "\r \n";
	$cuerpo .= "Consulta: " . $_POST["message"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']."\" <".$remitente.">\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)){
        echo'<html>
            <head>
            <meta http-equiv="REFRESH" content="0;url=contactenos.php?ok=1">
            </head>
            </html>';
    }
}
?>
