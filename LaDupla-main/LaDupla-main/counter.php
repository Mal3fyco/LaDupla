<?php
// Path to the JSON file
$filename = 'counter.json';

// Check if the file exists
if (file_exists($filename)) {
    // Get the current data from the file
    $data = json_decode(file_get_contents($filename), true);
    
    // Increment the counter
    $data['visits'] += 1;
    
    // Save the updated data back to the file
    file_put_contents($filename, json_encode($data));
    
    // Return the current count as a JSON response
    echo json_encode($data);
} else {
    echo json_encode(["visits" => 0]);
}
?>
