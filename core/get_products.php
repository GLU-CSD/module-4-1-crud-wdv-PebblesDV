<?php

// Getting data from database
$result = $con->query("
    SELECT products.*, 
           GROUP_CONCAT(CONCAT(images.id, ':', images.image) SEPARATOR ',') AS images 
    FROM products 
    LEFT JOIN images ON products.product_id = images.product_id 
    GROUP BY products.product_id
");

// Initialize array to store products data
$data = array();

// Loop through the result set
while ($row = $result->fetch_assoc()) {
    // Explode the comma-separated image data into an array
    $images = explode(',', $row['images']);
    $imageData = [];
    foreach ($images as $image) {
        list($imageId, $imageUrl) = explode(':', $image);
        $imageData[] = ['image_id' => $imageId, 'image_url' => $imageUrl];
    }
    $row['images'] = $imageData;

    // Append the modified row to the data array
    $data[] = $row;
}

// Encode the data array to JSON
$allProducts = $data;
