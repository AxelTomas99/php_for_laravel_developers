<?php

use Framework\Database\Database;

require 'config.php';
require 'app/helpers.php';
require 'app/Models/Task.php';
require 'framework/Database/Database.php';
require 'framework/Database/Connection.php';


//WISHFUL PROGRAMMING
$database = new Database($config);
$tasks = $database->selectAll('tasks');
//$tasks = Database::selctAll('tasks'); // Crida estatica -> sense new
//$tasks = Task::selctAll('tasks'); -> Laravel Eloquent


$greeting = greet();

