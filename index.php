<?php

require 'helpers/functions.php';
require 'vendor/autoload.php';
require 'core/bootstrap.php';
//require 'trash/arrays.php';

Router::load("core/routes.php")->direct(Request::uri(), Request::method());