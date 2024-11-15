<?php
$image_folder = 'img/';  // Define the path to your images folder

// Get all image files in the folder (you can add more extensions here)
$images = array_values(array_filter(scandir($image_folder), function($file) use ($image_folder) {
    return preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file);
}));

// Encode the filenames as JSON and return them
echo json_encode($images);
?>
