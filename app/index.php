<?php
require 'app/helpers.php';
require 'app/Task.php';


//$task = new Task(1,'comprar pa','a la panaderia',0);
//var_dump($task);
$user = 'debian-sys-maint';
$pass = '9oMHFn0BQY1eixgg';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);
} catch (\Exception $e){
    echo 'Error de connexio a la base de dades';
    echo $e;
}

$statement = $dbh->prepare('SELECT * FROM tasks;');
$statement ->execute();

$tasks= $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($tasks);

//QUERY STRING
//var_dump ($_GET[name]);
//$name = 'Axel';

// API

$greeting = greet();

//$greeting = 'Hola '.$_GET['nom'].' '.$_GET['cognom'].'!';

