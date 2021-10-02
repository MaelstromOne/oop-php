<?php

use classes\Db;

function load($ClassName)
{
    echo "<pre>";
    echo "\n";

    $file = __DIR__ . "/{$ClassName}.php";
    print_r($file);
    if (file_exists($file)) {
        require_once($file);
    }
}

spl_autoload_register('load');


$host = '127.0.0.1';
$db   = 'gbook';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$db = Db::getInstance($dsn, $user, $pass, $opt);

echo "<pre>";
print_r($db->select('SELECT * FROM users'));
echo "\n";
print_r($db->insert('INSERT INTO users (login, password) VALUES ("user5", "user5")') ? 'true' : 'false');
echo "\n";
print_r($db->update('UPDATE users SET password = "passwd5" WHERE login = "user5";') ? 'true' : 'false');
echo "\n";
print_r($db->delete('DELETE FROM users WHERE login = "user5";') ? 'true' : 'false');