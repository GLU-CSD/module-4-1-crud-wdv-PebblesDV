<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category = $_POST['category'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];

    echo "Category: $category <br>";
    echo "Title: $title <br>";
    echo "Price: $price <br>";
    echo "Description: $description <br>";
    echo "Image 1: $img1 <br>";
    echo "Image 2: $img2 <br>";
    echo "Image 3: $img3 <br>";
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