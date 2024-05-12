<?php
include('core/header.php');
include('core/get_product_by_id.php');

?>

<div class="row d-flex justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="row">
                <div class="col-md-6">
                    <div class="images p-3">
                        <div class="text-center p-4">
                            <img id="main-image" src="<?= $productById["images"][0] ?>" width="250" />
                        </div>
                        <div class="thumbnail text-center">
                            <img src="<?= $productById["images"][1] ?>" width="70">
                            <img src="<?= $productById["images"][2] ?>" width="70">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product p-4">

                        <div class="mt-4 mb-3"> <span class="text-uppercase text-muted brand"><?= $productById["category"] ?></span>
                            <h5 class="text-uppercase"><?= $productById["title"] ?></h5>
                            <div class="price d-flex flex-row align-items-center">
                                <span class="act-price">&euro; <?= $productById["price"] ?></span>
                            </div>
                        </div>
                        <p class="about"><?= $productById["description"] ?></p>
                        <div class="sizes mt-5">
                            <h6 class="text-uppercase">Size</h6>
                            <label class="radio">
                                <input type="radio" name="size" value="S" checked> <span>S</span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="size" value="M"> <span>M</span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="size" value="L"> <span>L</span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="size" value="XL"> <span>XL</span>
                            </label>
                            <label class="radio">
                                <input type="radio" name="size" value="XXL"> <span>XXL</span>
                            </label>
                        </div>
                        <div class="cart mt-4 align-items-center">
                            <button class="btn btn-danger text-uppercase mr-2 px-4">
                                Add to cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('core/footer.php');
?>