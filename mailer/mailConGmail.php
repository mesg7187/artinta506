<!DOCTYPE html>
<html>
    <head>
        <title>Gmail Sender</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="wrapper">
            <form method="post" action="mail2.php">
                <h2>Gmail Sender App</h2><br>
                Email To :<br>
                <input type="text" name="email"><br>
                Subject :<br>
                <input type="text" name="subject"><br>
                Body :<br>
                <textarea name="body"></textarea><br>
                <input type="submit" value="SEND" name="submit">            
            </form>
            <?php
            if (isset($_POST['submit'])) {
                //$url = "https://script.google.com/macros/s/AKfycbzNSVCZqTEcoB5nlEmv2RamPL5LKdI-4e00c2at4FFWDKclJqb-QNrhXWQOiehkK4nM-A/exec";
                $url = "https://script.google.com/macros/s/AKfycbzFV26f7jZnR7iNLAY24SdZyrhCFmuIt5lFJOeI2OxNB3ipczdE3e9ld8sAs_UjZmBS/exec";

                $ch = curl_init($url);
                curl_setopt_array($ch, [
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_POSTFIELDS => http_build_query([
                        "recipient" => $_POST['email'],
                        "subject" => $_POST['subject'],
                        "body" => $_POST['body']
                    ])
                ]);
                $result = curl_exec($ch);
                echo $result;
            }

            //para quitar acccesso https://myaccount.google.com/security-checkup/3?rfn=325&rfnc=1&et=0&pli=1&continue=https%3A%2F%2Fmyaccount.google.com%2Fsecurity%3Fauthuser%3D0
            //App scripts https://script.google.com/home/projects/1zzC9zObCosdrAAqCb7a3latydPS65cwbxrmwODEh_G3bC8TiDU83p-kF/edit
            ?>
        </div>

    </body>
</html>