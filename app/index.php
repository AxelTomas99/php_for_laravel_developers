<?php
require 'app/helpers.php';
require 'app/Task.php';
require 'config.php';

//$user = 'debian-sys-maint';
//$pass = '9oMHFn0BQY1eixgg';
//$dsn = 'mysql:host=localhost;dbname=phplaraveldevs';

$user = $config['database']['user'];
$pass = $config['database']['password'];
$type=$config['database']['databasetype'];
$host = $config['database']['host'];
$name = $config['datbase']['name'];
$dsn = "$type:host=$host;dbname=$name";
try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (\Exception $e){
    echo 'Error de connexio a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement ->execute();

$tasks= $statement->fetchAll(PDO::FETCH_CLASS,'Task');

$greeting = greet();


