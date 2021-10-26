<?php
require 'app/helpers.php';
require 'app/Task.php';
require 'config.php';

try {
    $dbh = new PDO(
        $config['database']['databasetype'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'],
        $config['database']['user'],
        $config['database']['password']);
} catch (\Exception $e) {
    echo 'Error de connexio a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

$greeting = greet();


