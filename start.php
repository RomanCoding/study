<?php

if (is_null($_POST['hash']) || $_POST['hash'] == '') {
    echo json_encode([
        'success' => false,
        'error' => 'Системная ошибка',
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


$statement = $pdo->prepare('select id from users where hash = :hash');
$result = $statement->execute([
    'hash' => $_POST['hash']
]);
$user = $statement->fetch();

// если hash неверный
if (!$user) {
    echo json_encode([
        'success' => false,
        'error' => 'Системная ошибка'
    ]);
    exit(1);
}

$statement = $pdo->prepare('select * from tests where user_id = :id');
$result = $statement->execute([
    'id' => $user['id']
]);
$result = $statement->fetch();

// если записей про тестирование юзера нет, создаём
if (!$result) {
    $statement = $pdo->prepare('insert into tests (user_id) values (:id)');
    $result = $statement->execute([
        'id' => $user['id']
    ]);

    echo json_encode([
        'success' => true,
        'message' => 'Тест начался',
        'hash' => $_POST['hash']
    ]);
    exit(0);
}

$now = new DateTime();
$since_start = date_diff($now, new DateTime($result['time_start']));
$minutes = $since_start->d * 1440 + $since_start->h * 60 + $since_start->i;
$seconds = 1800 - (60 * $minutes + $since_start->s);
echo json_encode([
    'success' => true,
    'difference' => $minutes,
    'seconds' => $seconds
]);
exit(0);



