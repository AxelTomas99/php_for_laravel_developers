<?php

function greet(){
    $nom=htmlspecialchars($_GET['nom']);
    $cognom=$_GET['cognom'];

    return "Hola Mon $nom $cognom!";
}

function dd($xivato){
    var_dump($xivato);
    die();
}

//API
function connectDB($config) //Dependency Injection
{
    try {
        return new PDO(
            $config['database']['databasetype'] . ':host=' . $config['database']['host'] . ';dbname=' . $config['database']['name'],
            $config['database']['user'],
            $config['database']['password']);
    } catch (\Exception $e) {
        echo 'Error de connexio a la base de dades';
    }
}