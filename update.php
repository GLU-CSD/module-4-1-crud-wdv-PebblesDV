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

    if ($productId !== "" || $category !== "" || $title !== "" || $price !== "" || $description !== "" || $img1 !== "" || $img2 !== "" || $img3 !== "") {
        $stmt = $con->prepare("UPDATE products SET category = ?, title = ?, price = ?, description = ? WHERE product_id = ?;");

        // Bind parameter values
        $stmt->bind_param("ssdsi", $category, $title, $price, $description, $productId);

        // Execute the query
        $stmt->execute();

        // Close the statement
        $stmt->close();

        $stmt = $con->prepare("UPDATE images SET image = ? WHERE id = ?;");
        $stmt->bind_param("si", $img1, $productById["images"][0]["image_id"]);
        $stmt->execute();
        $stmt->close();

        $stmt = $con->prepare("UPDATE images SET image = ? WHERE id = ?;");
        $stmt->bind_param("si", $img2, $productById["images"][1]["image_id"]);
        $stmt->execute();
        $stmt->close();

        $stmt = $con->prepare("UPDATE images SET image = ? WHERE id = ?;");
        $stmt->bind_param("si", $img3, $productById["images"][2]["image_id"]);
        $stmt->execute();
        $stmt->close();

        header("Location: product.php?id=" . $productById["product_id"]);
        exit();
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

    <?php if ($_SERVER["REQUEST_METHOD"] == "GET") : ?>
        <form action="update.php?id=<?= $productById["product_id"] ?>" method="post">
            <input type="text" name="category" placeholder="Category" value="<?= $productById["category"] ?>">
            <input type="text" name="title" placeholder="Title" value="<?= $productById["title"] ?>">
            <input type="text" name="price" placeholder="Price" value="<?= $productById["price"] ?>">
            <input type="text" name="description" placeholder="Description" value="<?= $productById["description"] ?>">
            <input type="text" name="img1" placeholder="Image 1" value="<?= $productById["images"][0]["image_url"] ?>">
            <input type="text" name="img2" placeholder="Image 2" value="<?= $productById["images"][1]["image_url"] ?>">
            <input type="text" name="img3" placeholder="Image 3" value="<?= $productById["images"][2]["image_url"] ?>">
            <input type="submit" name="sub-btn" value="Submit">
        </form>
    <?php endif; ?>

</body>

</html>