<?php

include('core/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = $_POST['category'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];

    if ($category !== "" || $title !== "" || $price !== "" || $description !== "" || $img1 !== "" || $img2 !== "" || $img3 !== "") {
        $stmt = $con->prepare("INSERT INTO products (category, title, price, description) VALUES (?, ?, ?, ?)");

        // Bind parameter values
        $stmt->bind_param("ssss", $category, $title, $price, $description);

        // Execute the query
        $stmt->execute();

        // Get the ID of the newly inserted product
        $newProductId = $con->insert_id;

        // Close the statement
        $stmt->close();

        echo $newProductId;

        $stmt = $con->prepare("INSERT INTO images (image, product_id) VALUES (?, ?), (?, ?), (?, ?)");

        // Bind parameter values
        $stmt->bind_param("sisisi", $img1, $newProductId, $img2, $newProductId, $img3, $newProductId);

        // Execute the query
        $stmt->execute();

        // Get the ID of the newly inserted product
        $newProductId = $con->insert_id;

        // Close the statement
        $stmt->close();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post">
        <input type="text" name="category" placeholder="Category">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="price" placeholder="Price">
        <input type="text" name="description" placeholder="Description">
        <input type="text" name="img1" placeholder="Image 1">
        <input type="text" name="img2" placeholder="Image 2">
        <input type="text" name="img3" placeholder="Image 3">
        <input type="submit" name="sub-btn" value="Submit">
    </form>

</body>

</html>