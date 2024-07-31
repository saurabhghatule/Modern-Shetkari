<?php
$farmers = [
    ['name' => 'John Doe'],
    ['name' => 'Jane Smith'],
    ['name' => 'Ethan Johnson'],
    ['name' => 'Olivia Brown'],
    ['name' => 'Liam Davis'],
    ['name' => 'Emma Wilson'],
    ['name' => 'Noah Martinez']
];

// Return JSON response
header('Content-Type: application/json');
echo json_encode($farmers);
?>
