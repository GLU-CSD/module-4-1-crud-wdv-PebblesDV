<?php
include('core/header.php');
include('core/get_latest_products.php');
?>
<div class="row">
    <div class="col">
        <h1 class="text-center">WELKOM</h1>
    </div>
</div>

<div class="row mb-3">
    <div class="col">
        <img src="https://placehold.co/1920x400.png" class="img-fluid" alt="">
    </div>
</div>
<div class="row">
    <div class="col-12">
        <h2 class="text-center">Latest products</h2>
    </div>
    <?php foreach ($latestProducts as $key => $product) : ?>
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

    <div class="col-12 text-center">
        <a href="products.php" class="btn btn-info">SHOW ALL products</a>
    </div>
</div>
<?php
include('core/footer.php');
?>