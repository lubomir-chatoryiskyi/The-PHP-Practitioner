<?php

require 'Item.php';

$list = $app['database']->selectAll('list', 'Item');

require 'views/index.view.php';