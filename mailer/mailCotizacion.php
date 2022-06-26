


<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <script src="jquery-2.1.4.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <body>
    <div class="content">
      <img src="https://picsum.photos/300/300/?random" />
    </div>

    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>
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
        'cc' => array('user3@example.com','user4@example.com'),
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
    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
  </body>
</html>
