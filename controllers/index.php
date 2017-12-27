<?php

require 'Item.php';

$list = $app['database']->selectAll('list', 'Item');

require 'public/views/index.view.php';