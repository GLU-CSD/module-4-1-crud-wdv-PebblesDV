<?php
include('core/header.php');
include('core/get_product_by_id.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_GET["id"];

    if ($productId !== "") {
        $stmt = $con->prepare("DELETE FROM products WHERE product_id = ?;");

        // Bind parameter values
        $stmt->bind_param("i", $productId);

        // Execute the query
        $stmt->execute();

        // Close the statement
        $stmt->close();

        $stmt = $con->prepare("DELETE FROM images WHERE product_id = ?;");
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $stmt->close();

        header("Location: products.php");
        exit();
    }
}
