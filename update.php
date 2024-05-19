<?php

include('core/header.php');
include('core/get_product_by_id.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_GET["id"];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];


    prettyDump($productById);

    // if ($productId !== "" || $category !== "" || $title !== "" || $price !== "" || $description !== "" || $img1 !== "" || $img2 !== "" || $img3 !== "") {
    //     $stmt = $con->prepare("UPDATE products SET category = ?, title = ?, price = ?, description = ? WHERE product_id = ?;");

    //     // Bind parameter values
    //     $stmt->bind_param("ssisi", $category, $title, $price, $description, $productId);

    //     // Execute the query
    //     $stmt->execute();

    //     // Get the ID of the newly inserted product
    //     $newProductId = $con->insert_id;

    //     // Close the statement
    //     $stmt->close();

    //     echo $newProductId;

    //     $stmt = $con->prepare("INSERT INTO images (image, product_id) VALUES (?, ?), (?, ?), (?, ?)");

    //     // Bind parameter values
    //     $stmt->bind_param("sisisi", $img1, $newProductId, $img2, $newProductId, $img3, $newProductId);

    //     // Execute the query
    //     $stmt->execute();

    //     // Get the ID of the newly inserted product
    //     $newProductId = $con->insert_id;

    //     // Close the statement
    //     $stmt->close();
    // }
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

    <?php if ($_SERVER["REQUEST_METHOD"] == "GET") : ?>
        <form action="update.php?id=<?= $productById["product_id"] ?>" method="post">
            <input type="text" name="category" placeholder="Category" value="<?= $productById["category"] ?>">
            <input type="text" name="title" placeholder="Title" value="<?= $productById["title"] ?>">
            <input type="text" name="price" placeholder="Price" value="<?= $productById["price"] ?>">
            <input type="text" name="description" placeholder="Description" value="<?= $productById["description"] ?>">
            <input type="text" name="img1" placeholder="Image 1" value="<?= $productById["images"][0] ?>">
            <input type="text" name="img2" placeholder="Image 2" value="<?= $productById["images"][1] ?>">
            <input type="text" name="img3" placeholder="Image 3" value="<?= $productById["images"][2] ?>">
            <input type="submit" name="sub-btn" value="Submit">
        </form>
    <?php endif; ?>

</body>

</html>