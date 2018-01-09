<?php
// Define base path
defined('BASEPATH')
|| define('BASEPATH', realpath(dirname(__FILE__) . '/../../'));

header('Content-Type: text/html; charset=utf-8');

$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfPJT0UAAAAAF6nuGqETbbie8MTT2tQaZLN0YaM&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
$captcha = json_decode($response);

if(!$captcha->success) {
    echo json_encode([
        'success' => false,
        'error' => 'Ошибка капчи, обновите страниц и повторите попытку',
    ]);
    exit(1);
}


$name = 'Клиент: ' . (isset($_POST['name'])? $_POST['name']: 'Не назвался');
$number = 'Телефон: ' . (isset($_POST['phone'])? $_POST['phone']: 'Не указал');
$email = 'E-mail: ' . (isset($_POST['email'])? $_POST['email']: 'Не указал');
$message = 'Сообщение: ' . (isset($_POST['message'])? $_POST['message']: '');

$message = $name."<br>".$number."<br>".$email."<br>".$message."<br>";



require_once 'class.phpmailer.php';

$mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch
$mail->CharSet = 'UTF-8';
$mail->AddAddress('work.stpnnk@gmail.com', 'Менеджеру');
try {
    $mail->SetFrom('work.stpnnk@gmail.com', 'Academic Start');
} catch (phpmailerException $e) {
    echo json_encode([
        'success' => false,
        'error' => 'Неизвестная ошибка. Попробуйте позже или обратитесь в поддержку.',
    ]);
    exit(1);
}

$mail->AddReplyTo('work.stpnnk@gmail.com', 'First Last');
$mail->Subject = "Регистрация";
$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
$mail->MsgHTML($message);

try {
    $mail->Send();
} catch (phpmailerException $e) {
    echo json_encode([
        'success' => false,
        'error' => 'Ошибка с отправкой почты. Попробуйте позже или обратитесь в поддержку.',
    ]);
    exit(1);
}

echo json_encode([
    'success' => true,
]);