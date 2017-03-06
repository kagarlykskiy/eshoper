<?php include ROOT."/views/layouts/header.php" ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <?php foreach ($categories as $item): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?=$item['id']?>">
                                            <?=$item['name']?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div><!--/category-products-->

                </div>
            </div>

            <div class="col-sm-9">
                <div class="product-details"><!--product-details-->
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="../../template/images/shop/note.jpg" alt="" class="product-image" >
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->
                                <img src="../../template/images/product-details/new.jpg" class="newarrival" alt="" />
                                <h2><?=$product['name']?></h2>
                                <p>Код товара: <?=$product['code']?></p>
                                <span>
                                    <span>Цена: <?=$product['price']?> UAH</span><hr>
                                    <a href="/" data-id="<?=$product['id']?>" class="btn btn-default add-to-cart">
                                    <i class="fa fa-shopping-cart"></i>В корзину</a>
                                </span>
                                <p><b>Наличие:</b> На складе</p>
                                <p><b>Состояние:</b> Новое</p>
                                <p><b>Производитель:</b> <?=$product['brand']?></p>
                            </div><!--/product-information-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Описание товара</h3>
                            <p><?=$product['description']?></p>
                        </div>
                    </div>
                </div><!--/product-details-->

            </div>
        </div>
    </div>
</section>


<br/>
<br/>


<?php include ROOT."/views/layouts/footer.php" ?>