<?php

use Framework\App;
require 'app/helpers.php';

$tasks = App::get('database')->selectAll('tasks');
//$tasks = Task::selctAll('tasks'); -> Laravel Eloquent

$greeting = greet();

