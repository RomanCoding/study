<?php

defined('BASEPATH')
|| define('BASEPATH', realpath(dirname(__FILE__) . '/../../'));

if (!array_key_exists('hash', $_POST) || $_POST['hash'] == '') {
    echo json_encode([
        'success' => false,
        'error' => 'Укажите hash'
    ]);
    exit(1);
}

$correctAnswers = [
    'are', 'has', 'are', 'from', 'can', 'what/which', 'older', 'to', 'did',
    'watches', 'is', 'ever', 'look', 'did', 'who/that', 'worst', 'why',
    'much', 'should', 'has', 'c', 'b', 'c', 'c', 'd', 'a', 'b', 'd', 'c',
    'd', 'c', 'b', 'c', 'c', 'c', 'b', 'c', 'b', 'b', 'c', 'a', 'a', 'b',
    'a', 'a', 'c', 'a', 'b', 'b', 'a'
];

$score = 0;

foreach ($correctAnswers as $number => $answer) {
    if (array_key_exists('q'.($number+1), $_POST)) {
        $correct = explode('/', $answer);
        foreach ($correct as $value) {
            $score += (strtolower($_POST['q'.($number+1)]) === strtolower($value));
        }
    }
}
if ($score < 15) {
    $group = 'Elementary';
}
else if ($score < 25) {
    $group = 'Pre-Intermediate';
}
else if ($score < 32) {
    $group = 'Intermediate';
}
else if ($score < 45) {
    $group = 'Upper-Intermediate';
}
else {
    $group = 'Advanced';
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

$statement = $pdo->prepare('select id from users where hash = :hash');
$statement->execute(['hash' => $_POST['hash']]);
$result = $statement->fetch();
if (!$result) {
    echo json_encode([
        'success' => false,
        'error' => 'Пользователь не найден'
    ]);
    exit(1);
}
$id = $result['id'];

$date = date("Y-m-d H:i:s", time());

$statement = $pdo->prepare('update users SET level = :level where hash = :hash');
$statement->execute([
    'level' => $group,
    'hash' => $_POST['hash']
]);

$statement = $pdo->prepare('update tests SET finished = :finished, result = :result where user_id = :id');
$statement->execute([
    'finished' => $date,
    'result' => $score,
    'id' => $id
]);


echo json_encode([
    'success' => true,
    'group' => $group,
]);

exit(0);

?>