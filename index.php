<?php

// GET params
$greeting = 'Hello, ' . htmlspecialchars($_GET['name']); // Get URL get params

// Arrays
$animals = ['Cat', 'Parrot'];
$animals[] = 'Dog'; // Add item to array

// Associative array
$person = [
    'age' => 32,
    'hair' => 'blond',
    'position' => 'developer'
];
$person['name'] = 'Liubomyr'; // Add item to associative array
unset($person['age']); // Remove item to associative array

$task = [
    'title' => 'Finish Home Work',
    'assigned_to' => 'Liubomyr',
    'due_date' => 'Today',
    'completed' => true
];

require 'index.view.php';