<?php
if (isset($_POST['token']) && isset($_POST['action'])) {
  $captcha_token = $_POST['token'];
  $captcha_action = $_POST['action'];
} else {
  die('The captcha doesn\'t work correctly.');
}

$url = 'https://www.google.com/recaptcha/api/siteverify';
$params = [
  'secret' => '6LfKNOIZAAAAAGbuFcjnczE3uXbU8gTE_ykX_kCQ',
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
  $to       = "info@remonterra24.ru";

  $name     = "Ремонтерра24";
  $phone    = $_POST['phone'];
  $email    = $_POST['email'];

  $subject  = "Обратный звонок";
  $subject  = '=?utf-8?b?'. base64_encode($subject) .'?=';

  $date = date(DATE_RFC2822);
  $messageId='<'.time().'-'.md5($email.$to).'@'.$_SERVER['SERVER_NAME'].'>';

  /* Variable that will be sent to the mail with the values entered in the fields */
  $body = "<table bgcolor='#f5f5f5' cellpadding='5' width='600px' style='margin: 0 auto;'>
            <tr valign='top' align='center'>
              <td bgcolor='#FC6F21' style='color: #ffffff;'>
                <p><strong>Обратный звонок, отправленный из формы в футере.</strong></p>
              </td>
            </tr>
            <tr valign='top' align='center'>
              <td>
                <p><strong>Телефон:</strong> <a href='tel:$phone' style='color: #FC6F21;'>$phone</a></p>
              </td>
            </tr>
          </table>";

  $headers  = "From: $email \r\n";
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= "Content-type: text/html; charset=utf-8". "\r\n";
  $headers .= "From: ". $name ." <". $email ."> \r\n";
  $headers .= "Date: ". $date ." \r\n";
  $headers .= "Message-ID: ". $messageId ." \r\n";
  $headers .= 'Cc: 5702174@mail.ru' . "\r\n";

  /* Send mail() */
  mail($to, $subject, $body, $headers);

  header('Location: success_footer.php?' . http_build_query($sparams));
  exit;
} else {
  exit;
}


?>
