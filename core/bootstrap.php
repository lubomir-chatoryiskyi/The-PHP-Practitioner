<?php

require 'core/helpers/functions.php';

use App\Core\App;
use App\Core\Database\Connection;
use App\Core\Database\QueryBuilder;

App::bind('config', $config = require 'config.php');
App::bind('database', new QueryBuilder(
    Connection::make($config['database'])
));

