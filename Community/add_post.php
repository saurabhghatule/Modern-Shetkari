<?php
// Get the POST data
$data = json_decode(file_get_contents('php://input'), true);

$title = $data['title'];
$content = $data['content'];

// Here you would typically insert the new post into a database
// For simplicity, we just create a new post array
$newPost = ['title' => $title, 'content' => $content];

// Return the new post as JSON
header('Content-Type: application/json');
echo json_encode($newPost);
?>
