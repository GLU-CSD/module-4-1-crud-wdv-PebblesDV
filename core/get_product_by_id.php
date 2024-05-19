<?php

// Get the product ID from the GET request
$productId = $_GET["id"];

// Prepare a statement with a parameter
$stmt = $con->prepare("
    SELECT products.*, 
           GROUP_CONCAT(CONCAT(images.id, ':', images.image) SEPARATOR ',') AS images 
    FROM products 
    LEFT JOIN images ON products.product_id = images.product_id 
    WHERE products.product_id = ? 
    GROUP BY products.product_id
");

// Bind the parameter value
$stmt->bind_param("i", $productId);

// Execute the query
$stmt->execute();

// Get the result set
$result = $stmt->get_result();

// Fetch the single product row
$productById = $result->fetch_assoc();

// Explode the comma-separated image IDs and URLs into an array if the productById exists
if ($productById) {
    $images = explode(',', $productById['images']);
    $imageData = [];
    foreach ($images as $image) {
        list($imageId, $imageUrl) = explode(':', $image);
        $imageData[] = ['image_id' => $imageId, 'image_url' => $imageUrl];
    }
    $productById['images'] = $imageData;
}

// Close the statement
$stmt->close();

// Now $productById contains the product data with images as an array of image IDs and URLs
