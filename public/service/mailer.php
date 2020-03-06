<?php
require('PHPMailer-master/PHPMailerAutoload.php');

function started($email, $password, $first_name, $user_type)
{
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'pctravelsng.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hello@pctravelsng.com';
    $mail->Password = 'sun*3*shine';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;


    $mail->From = 'hello@pctravelsng.com';
    $mail->FromName = 'TractorOnTheGo';
    $mail->addAddress($email);

    $mail->addReplyTo('hello@pctravelsng.com', 'Support');

    $mail->WordWrap = 50;
    $mail->isHTML(true);

    $mail->Subject = $first_name . ', you have successfully been registered on TractorOnTheGo!';

    $mail->Body = '<html xmlns=\'http://www.w3.org/1999/xhtml\' lang=\'en\' xml:lang=\'en\'>
  <head>
    <title>' . $first_name . ', you have successfully been registered on TractorOnTheGo!</title>
  </head>
  <body>
  <div style=\'width: 600px; height: 700px; padding: 40px; background-color: #eee;\'>
    <div style=\'width: 100%; height: 650px; position: relative;\'>
        <a href=\'https://pctravelsng.com\'><div style=\'width: 100%; height: 100px;margin: 20px;\'><img src="https://pctravelsng.com/togdev/app/img/logo.png" width="186px" height="19x"/></div></a>
        <div style=\'width: 95%; height: 50px; padding: 10px; font-family: "Arial", sans-serif;\'><p style=\'color: #222; font-size:14px; float:left; margin:20px;\'>Hi, ' . $first_name . '<br><br>You have been successfully registered on TractorOnTheGo as a ' . $user_type . '.<br><br>Here are your login details in case you forget them.<br><br>Username: <strong>' . $email . '</strong><br>Password: ' . $password . '<br><br>To login to your dashboard at anytime, please click <a target="_blank" href="https://pctravelsng.com/togdev/app/home/login.php">here</a>. Looking forward to doing business with you!</p></div>
    </div>
    <div style=\'width: 100%; height: auto; text-align: center; font-size: 12px; color: #222; font-family: "Arial", sans-serif; margin-top: 10px;\'><span>&copy; 2019 TractorOnTheGo (TOG)</span> | <span><a href=\'https://pctravelsng.com/togdev/app/home/login.php\'>Login</a></span> / <span><a href=\'https://pctravelsng.com/togdev/app/home/privacy\'>Privacy</a></span></div>
</div>
    
  </body>
  </html>';


    $mail->send();
}

