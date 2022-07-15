<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">Gracias</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Analizaremos su informacion y le estaremos contactando proximamente para gestionar su cotizacionn. Porfavor revise su correo para confirmar que se genero un numero de cotizacion.</p>
	</div>

	<footer class="site-footer" id="footer">
            <p><a href="http://localhost:8000">Retornar a Artinta506.com</a></p>
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2022 | Todos los derechos reservados</p>
	</footer>
</body>
</html>

<?php

$url = "https://script.google.com/macros/s/AKfycbzFV26f7jZnR7iNLAY24SdZyrhCFmuIt5lFJOeI2OxNB3ipczdE3e9ld8sAs_UjZmBS/exec";
$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_POSTFIELDS => http_build_query([
        "recipient" => $_GET['email'],
        "subject" => $_GET['subject'],
        "body" => $_GET['body'],
        'cc' => array('mario.solano7187@gmail.com','user4@example.com'),
        'from'      => 'info@artinta506.com',
        'text'      => 'done',
        'file'      => '@foobar.txt'
    ])
]);
$result = curl_exec($ch);
echo $result; 


///////////////envia segundo email
/*
echo "email2 es" .$_GET['email2'];
echo "subject2 es".$_GET['subject2'];
echo "body2 es". $_GET['body2'];
*/
$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_POSTFIELDS => http_build_query([
        "recipient" => $_GET['email2'],
        "subject" => $_GET['subject2'],
        "body" => $_GET['body2'],
        'cc' => array('mario.solano7187@gmail.com','user4@example.com'),
        'from'      => 'info@artinta506.com',
        'text'      => 'done',
        'file'      => '@foobar.txt'
    ])
]);
$result = curl_exec($ch);
echo $result;

/*

Deployment successfully updated.
Version 5 on Jun 25, 4:01 PM
Deployment ID
AKfycbz5XbQVI1YpVX1sht6GYTzMY6eK8Cx-wWAmC9ixyELrnxzmnhfLA_vsjBsOb9zwJSSP
Web app
URL
https://script.google.com/macros/s/AKfycbz5XbQVI1YpVX1sht6GYTzMY6eK8Cx-wWAmC9ixyELrnxzmnhfLA_vsjBsOb9zwJSSP/exec

 *  */
?>
   