<?php
$events = [
    ['title' => 'Farmers Market', 'date' => '2024-06-10', 'description' => 'Join us for the monthly farmers market.'],
    ['title' => 'Sustainable Farming Workshop', 'date' => '2024-06-15', 'description' => 'Learn about sustainable farming practices.']
];

// Return JSON response
header('Content-Type: application/json');
echo json_encode($events);
?>
