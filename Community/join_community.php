<?php
// Get the POST data
$data = json_decode(file_get_contents('php://input'), true);

$name = $data['name'];
$email = $data['email'];

// Here you would typically insert the new member into a database
// For simplicity, we just return a success message
$message = 'Thank you for joining the community, ' . $name . '!';

// Return the success message as JSON
header('Content-Type: application/json');
echo json_encode($message);
?>
