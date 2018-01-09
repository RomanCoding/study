<?php

defined('BASEPATH')
|| define('BASEPATH', realpath(dirname(__FILE__) . '/../../'));

header('Content-Type: text/html; charset=utf-8');

if (is_null($_GET['hash']) || $_GET['hash'] == '') {
    return header('Location: /ua/register.html');
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

$user = $pdo->prepare('select * from users where hash = :hash');

$user->execute(['hash' => $_GET['hash']]);

$result = $user->fetch();

// если нет юзера с таких hash, перекидываем на страницу с регистрацией
if (!$result) {
    return header('Location: /ua/register.html');
}

$tests = $pdo->prepare('select * from tests where user_id = :id');
$test = $tests->execute([
    'id' => $result['id']
]);
$test = $tests->fetch();

// если у пользователя уже заполнено поле "Уровень английского", отдаём страницу с результатом
if ($result['level']) {
    $level = $result['level'];
    return require 'result.view.php';
}

// если для юзера нет записей про тестирование, отдаём страницу с кнопкой "Старт"
if (!$test) {
    return require 'start.view.php';
}
if (!$test['finished']) {
    $now = new DateTime();
    $since_start = date_diff($now, new DateTime($test['time_start']));
    $minutes = ($since_start->d * 1440) + ($since_start->h * 60) + $since_start->i;
    if ($minutes < 30) {
        return require('questions.view.php');
    } else {
        $statement = $pdo->prepare('delete from tests where id = :id');
        $statement->execute([
            'id' => $test['id']
        ]);
        return require 'start.view.php';
    }
}

?>
