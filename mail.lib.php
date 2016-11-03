<?php
/**
* Отправка HTML писем При инициализации передать массив с ключами to, subject, massage, nameto, namefrom, mailfrom
*/
class sendMail
{
  function __construct($data)
  {
    $to  = $data['to'];
    $subject = $data['subject'];
    $message = $data['massage'];
    $name = $data['nameto'];
    $from = $data['namefrom'];
    $mailfrom = $data['mailfrom'];

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'To: '.$name.' <'.$data['to'].'>' . "\r\n";
    $headers .= 'From: '.$from.' <'.$mailfrom.'>' . "\r\n";

    // Отправляем
    mail($to, $subject, $message, $headers);
  }
}

?>
