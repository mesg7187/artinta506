
<?php

$url = "https://script.google.com/macros/s/AKfycbzFV26f7jZnR7iNLAY24SdZyrhCFmuIt5lFJOeI2OxNB3ipczdE3e9ld8sAs_UjZmBS/exec";
$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_POSTFIELDS => http_build_query([
        "recipient" => $_POST['email'],
        "subject" => $_POST['subject'],
        "body" => $_POST['body'],
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
