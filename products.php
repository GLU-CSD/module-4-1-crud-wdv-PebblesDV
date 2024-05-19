<?php
include('core/header.php');
include('core/get_products.php');
?>
<div class="row">
    <div class="col-12">
        <h2 class="text-center">Hier komen alle producten</h2>
    </div>


    <?php foreach ($allProducts as $key => $product) : ?>
        <div class="col-4 mb-3">
            <div class="card w-100">
                <img src="<?= $product["images"][0]["image_url"] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $product["category"] . " " . $product["title"] ?></h5>
                    <p class="card-text">&euro; <?= $product["price"] ?></p>
                    <a href="product.php?id=<?= $product["product_id"] ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<?php
include('core/footer.php');
?>