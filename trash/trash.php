<?php

// GET params
$greeting = 'Hello, Username!';

if (isset($_GET['name'])) {
    $greeting = 'Hello, ' . htmlspecialchars($_GET['name']); // Get URL get params
}

// Arrays
$animals = ['cat', 'parrot'];
$animals[] = 'dog'; // Add item to array

foreach ($animals as &$animal) {
    $animal = ucwords($animal);
}

// die and dump function
// dd($animals);

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