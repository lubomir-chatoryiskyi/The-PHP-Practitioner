<?php

require 'core/bootstrap.php';
//require 'trash/arrays.php';

require Router::load('routes.php')->direct(Request::uri(), Request::method());
