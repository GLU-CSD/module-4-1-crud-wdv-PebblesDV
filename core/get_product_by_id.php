<?php

//BRON chatGPT


// Get the product ID from the GET request
$productId = $_GET["id"];

// Prepare a statement with a parameter
$stmt = $con->prepare("SELECT products.*, GROUP_CONCAT(images.image) AS images FROM products 
LEFT JOIN images ON products.product_id = images.product_id
WHERE products.product_id = ?
GROUP BY products.product_id");

// Bind the parameter value
$stmt->bind_param("i", $productId);

// Execute the query
$stmt->execute();

// Get the result set
$result = $stmt->get_result();

// Fetch the single product row
$productById = $result->fetch_assoc();

// Explode the comma-separated image URLs into an array if the productById exists
if ($productById) {
    $productById['images'] = explode(',', $productById['images']);
}

// Close the statement
$stmt->close();

// Now $productBy