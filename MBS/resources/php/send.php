<?php
if (isset($_POST['token']) && isset($_POST['action'])) {
  $captcha_token = $_POST['token'];
  $captcha_action = $_POST['action'];
} else {
  die('The captcha doesn\'t work correctly.');
}

$url = 'https://www.google.com/recaptcha/api/siteverify';
$params = [
  'secret' => '6LffswIaAAAAANTc9Wd-zZQeV4lBgvXbbZ2eWLu8',
  'response' => $captcha_token,
  'remoteip' => $_SERVER['REMOTE_ADDR']
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
if (!empty($response)) $decoded_response = json_decode($response);

$success = false;

if(isset($_POST['submit'])){
  $to         = "contact@maximbusinesssolutions.com";

  $name       = $_POST['name'];
  $email      = $_POST['email'];
  $company    = $_POST['company'];
  $message    = $_POST['message'];
  $provide    = $_POST['select_provided'];
  $project    = $_POST['select_project'];
  $rating     = $_POST['rating'];

  $subject    = "Contact US Form | MBS";
  $subject    = '=?utf-8?b?'. base64_encode($subject) .'?=';

  $date       = date(DATE_RFC2822);
  $messageId  ='<'.time().'-'.md5($email.$to).'@'.$_SERVER['SERVER_NAME'].'>';

  /* Variable that will be sent to the mail with the values entered in the fields */
  $body = "<table bgcolor='#f5f5f5' cellpadding='5' width='600px' style='margin: 0 auto;'>
            <tr valign='top'>
              <td width='100%' bgcolor='#033351' align='center' style='color: #ffffff;'>
                <p>name:<br><span style='text-transform: uppercase; font-weight: 700;'>$name</span></p>
              </td>
            </tr>
          </table>
          <table bgcolor='#f5f5f5' cellpadding='5' width='600px' style='margin: 0 auto;'>
            <tr valign='top'>
              <td width='40%' align='center' bgcolor='#ff5722' style='color: #ffffff;'><p><strong>EMAIL:</strong><br><a href='mailto:$email' style='color: #ffffff; text-decoration: underline;'>$email</a></p></td>
              <td width='60%' align='center' bgcolor='#ff5722' style='color: #ffffff;'><p><strong>COMPANY:</strong><br>$company</p></td>
            </tr>
          </table>
          <table bgcolor='#f5f5f5' cellpadding='5' width='600px' style='margin: 0 auto;'>
            <tr valign='top'>
              <td width='40%' bgcolor='#e8e8e8' style='color: #2f2f2f;'>
                <p><strong>Service Provided:</strong><br>$provide</p>
                <p><strong>Length of Project:</strong><br>$project</p>
              </td>
              <td><p>$message</p></td>
            </tr>
          </table>
          <table bgcolor='#f5f5f5' cellpadding='5' width='600px' style='margin: 0 auto;'>
            <tr valign='top'>
              <td width='100%' bgcolor='#033351' align='center' valign='center' style='color: #ffffff;'><p>$name rated MBS: <strong>$rating Stars</strong></p></td>
             </tr>
          </table>";

  $headers  = "From: $email \r\n";
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= "Content-type: text/html; charset=utf-8". "\r\n";
  $headers .= "From: ". $name ." <". $email ."> \r\n";
  $headers .= "Date: ". $date ." \r\n";
  $headers .= "Message-ID: ". $messageId ." \r\n";

  /* Send mail() */
  mail($to, $subject, $body, $headers);

  $sparams = array(
    'name' => $_POST['name']
  );

  header('Location: success-respond');
  exit;
} else {
  exit;
}


?>
