<?php

function greet(){
    $nom=htmlspecialchars($_GET['nom']);
    $cognom=$_GET['cognom'];

    return "Hola Mon $nom $cognom!";
}