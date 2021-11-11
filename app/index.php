<?php

use Framework\App;

$tasks = App::get('database')->selectAll('tasks');
//$tasks = Task::selctAll('tasks'); -> Laravel Eloquent

$greeting = greet();

