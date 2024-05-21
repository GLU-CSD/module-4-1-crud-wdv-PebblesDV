<?php

include('core/header.php');
include('core/get_products.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>

    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Admin panel</h2>
        </div>


        <?php foreach ($allProducts as $key => $product) : ?>
            <div class="col-4 mb-3">
                <div class="card w-100">
                    <img src="<?= $product["images"][0]["image_url"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product["category"] . " " . $product["title"] ?></h5>
                        <p class="card-text">&euro; <?= $product["price"] ?></p>
                        <a href="update.php?id=<?= $product["product_id"] ?>" class="btn btn-primary">Update Product</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>

</html>

<?php
include('core/footer.php');
?>