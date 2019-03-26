<?php
echo '<img src="' . str_replace('/index.php/', '', $_SERVER['REQUEST_URI'] ) . '"/>';

try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=chat',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ]
    );
} catch(PDOException $e) {
    echo 'Error :'. $e -> getMessage();
}


