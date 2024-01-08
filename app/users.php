<?php

use framework\App;

$users = App::get('database')->selectAll("taula_users");

require '../resources/views/user.blade.php';