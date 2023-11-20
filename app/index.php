<?php

use framework\App;
$task = App::get("database")->selectAll("tasks");

$greeting = "hello world!";

require  "../resources/views/index.blade.php";