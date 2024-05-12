<?php

$result = $con->query("SELECT products.*, GROUP_CONCAT(images.image) AS images FROM products
LEFT JOIN images
ON products.product_id = images.product_id
GROUP BY products.product_id
LIMIT 3;");

// Initialize array to store products data
$data = array();

// Loop through the result set
while ($row = $result->fetch_assoc()) {
    // Explode the comma-separated image URLs into an array
    $row['images'] = explode(',', $row['images']);
    // Append the modified row to the data array
    $data[] = $row;
}

// Encode the data array to JSON
$latestProducts = $data;
