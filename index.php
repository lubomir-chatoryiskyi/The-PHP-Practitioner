<?php

require 'functions.php';
require 'Item.php';
$query = require 'bootstrap.php';

$list = $query->selectAll('list', 'Item');

require 'public/views/index.view.php';