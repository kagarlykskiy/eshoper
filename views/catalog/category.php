<!--header-->
<?php include ROOT."/views/layouts/header.php" ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $item): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?=$item['id']?>"
                                        class="<?php if($categoryId == $item['id']) echo 'active';?>">
                                            <?=$item['name']?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товары</h2>
                    <?php foreach ($categoryProducts as $latestProductsItem):?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="/product/<?=$latestProductsItem['id'];?>">
                                            <img src="../../template/images/shop/product7.jpg" alt="chromeDAUN-<?=$latestProductsItem['id'];?>" />
                                        </a>
                                        <h2>
                                            <a href="/product/<?=$latestProductsItem['id'];?>">
                                                <?=$latestProductsItem['price'];?> UAH
                                            </a>
                                        </h2>
                                        <p>
                                            <?=$latestProductsItem['name']?>
                                        </p>
                                        <a href="/" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                    <?php
                                    if($latestProductsItem['is_new']) {?>
                                        <img src="/template/images/home/new.png" alt="new" class="new">
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div><!--features_items-->


            </div>
        </div>
    </div>
</section>
<!--footer-->
<?php include ROOT."/views/layouts/footer.php" ?>