<?php
// Define base path

defined('BASEPATH')
|| define('BASEPATH', realpath(dirname(__FILE__) . '/../../'));

header('Content-Type: text/html; charset=utf-8');

//$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfPJT0UAAAAAF6nuGqETbbie8MTT2tQaZLN0YaM&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
//$captcha = json_decode($response);
//
//if(!$captcha->success) {
//    echo json_encode([
//        'success' => false,
//        'error' => 'Ошибка капчи, обновите страниц и повторите попытку',
//    ]);
//    exit(1);
//}

if (is_null($_POST['name']) || is_null($_POST['phone']) || is_null($_POST['email'])
|| $_POST['name'] == '' || $_POST['phone'] == '' || $_POST['email'] == '') {
    echo json_encode([
        'success' => false,
        'error' => 'Заполните все поля и попробуйте ещё раз',
    ]);
    exit(1);
}

$config = require('config.php');
$config = $config['database'];
try {
    $pdo = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['login'], $config['password'],
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (PDOException $e) {
    echo json_encode([
        'success' => false,
        'error' => 'Ошибка подключения, попробуйте позже',
    ]);
    exit(1);
}

$name = $_POST['name'];
$number = $_POST['phone'];
$email = $_POST['email'];
$utm_campaign = $_POST['utm_campaign'];
$utm_medium = $_POST['utm_medium'];
$utm_source = $_POST['utm_source'];

$hash = md5($email . $number);

$sql = 'insert into users (email, name, phone, hash, utm_campaign, utm_medium, utm_source) values (:email, :name, :phone, :hash, :campaign, :medium, :source)';

$statement = $pdo->prepare($sql);
$statement->execute([
    'name' => $name,
    'email' => $email,
    'phone' => $number,
    'hash' => $hash,
    'campaign' => $utm_campaign,
    'medium' => $utm_medium,
    'source' => $utm_source
]);

echo json_encode([
    'success' => true,
    'hash' => $hash
]);