<?php
// Get the POST data
$data = json_decode(file_get_contents('php://input'), true);

$title = $data['title'];
$date = $data['date'];
$description = $data['description'];

// Here you would typically insert the new event into a database
// For simplicity, we just create a new event array
$newEvent = ['title' => $title, 'date' => $date, 'description' => $description];

// Return the new event as JSON
header('Content-Type: application/json');
echo json_encode($newEvent);
?>
