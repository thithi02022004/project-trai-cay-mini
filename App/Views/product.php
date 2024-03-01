   <?php 
   require_once "header.php";
        extract($data);
        foreach ($count as $key => $count) {
            
            $number = $count['COUNT(*)'];
        }
        $page = ceil($number / SHOP_LIMIT);                             
   ?>
   
   
   <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Organic Fruits</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><a href="#" class="permal-link">Natural Organic</a></li>
                <li class="nav-item"><span class="current-page">Fresh Fruit</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain category-page no-sidebar">
        <div class="container">
            <div class="row">

                <!-- Main content -->
                <div id="main-content" class="main-content col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="block-item recently-products-cat md-margin-bottom-39">
                        <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>
                            <?php foreach ($product_promotion as $key => $pro) : ?>
                                <li class="product-item">
                                    <div class="contain-product layout-02">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="public/frontend/assets/images/products/<?=$pro['img']?>" alt="dd" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Đã bán: <?=$pro['sold_count']?></b>
                                            <h4 class="product-title"><a href="#" class="pr-name"><?=$pro['name']?></a></h4>
                                            <div class="price">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></del>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>

                    <div class="product-category grid-style">

                        <div id="top-functions-area" class="top-functions-area">
                            <div style="display: flex; align-items: flex-end;" class="flt-item to-left group-on-mobile">
                                <span class="flt-title">Bộ lọc</span>
                                <a style="margin-right: 30px;" href="<?=BASE_PATH?>product&price=high">Giá cao đến thấp</a>
                                <a style="margin-right: 30px;" href="<?=BASE_PATH?>product&price=low">Giá thấp đến cao</a>
                                <!-- <a href="#" class="icon-for-mobile">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a> -->
                                <!-- <div class="wrap-selectors"> 
                                    <form action="<?=BASE_PATH?>filter" name="frm-refine" method="get">
                                        <span class="title-for-mobile">Refine Products By</span>
                                        <div data-title="Price:" class="selector-item">
                                            <select name="price" class="selector">
                                                <option value="all">Giá</option>
                                                <option value="class-1st">Giá giảm dần</option>
                                                <option value="class-2nd">Giá tăng dần</option>
                                            </select>
                                        </div>
                                        <div data-title="Brand:" class="selector-item">
                                            <select name="brad" class="selector">
                                                <option value="all">Thương hiệu</option>
                                                <option value="br2">Brand first</option>
                                                <option value="br3">Brand second</option>
                                                <option value="br4">Brand third</option>
                                                <option value="br5">Brand fourth</option>
                                                <option value="br6">Brand fiveth</option>
                                            </select>
                                        </div>
                                        <div data-title="Avalability:" class="selector-item">
                                            <select name="ability" class="selector">
                                                <option value="all">Availability</option>
                                                <option value="vl2">Availability 1</option>
                                                <option value="vl3">Availability 2</option>
                                                <option value="vl4">Availability 3</option>
                                                <option value="vl5">Availability 4</option>
                                                <option value="vl6">Availability 5</option>
                                            </select>
                                        </div>
                                        <p class="btn-for-mobile"><button type="submit" class="btn-submit">Go</button></p>
                                    </form>
                                </div> -->
                            </div>
                            <!-- <div class="flt-item to-right">
                                <span class="flt-title">Sort</span>
                                <div class="wrap-selectors">
                                    <div class="selector-item orderby-selector">
                                        <select name="orderby" class="orderby" aria-label="Shop order">
                                            <option value="menu_order" selected="selected">Lọc sản phẩm</option>
                                            <option value="price_high">
                                                <a href="<?=BASE_PATH?>product&high-to-low">Giá cao đến thâp</a>
                                            </option>
                                            <option value="price_low">
                                                <a href="<?=BASE_PATH?>product&low-to-high">Giá thấp đến cao</a>
                                            </option>
                                            <option value="date_new">
                                                <a href="#">Mới nhất</a>
                                            </option>
                                            <option value="price_old">
                                                <a href="#">Cũ nhất</a>
                                            </option>
                                        </select>
                                    </div>
                                    <div class="selector-item viewmode-selector">
                                        <a href="category-grid-left-sidebar.html" class="viewmode grid-mode active"><i class="biolife-icon icon-grid"></i></a>
                                        <a href="category-list-left-sidebar.html" class="viewmode detail-mode"><i class="biolife-icon icon-list"></i></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <div class="row">
                            <ul class="products-list">
                                <?php if (isset($_GET['price']) && $_GET['price'] == 'low') : ?>
                                    <?php foreach ($product_price_low as $key => $pro) : ?>
                                        <li class="product-item col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                            <div class="contain-product layout-default">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product">
                                                        <img src="public/frontend/assets/images/products/<?=$pro['img']?>" alt="dd" width="270" height="270" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <!-- <b class="categories">Fresh Fruit</b> -->
                                                    <h4 class="product-title"><a href="#" class="pr-name"><?=$pro['name']?></a></h4>
                                                    <div class="price">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></del>
                                                    </div>
                                                    <!-- <div class="shipping-info">
                                                        <p class="shipping-day">3-Day Shipping</p>
                                                        <p class="for-today">Pree Pickup Today</p>
                                                    </div> -->
                                                    <div class="slide-down-box">
                                                        <p class="message"><?=$pro['material']?></p>
                                                        <div class="buttons">
                                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
                                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                <?php elseif(isset($_GET['price']) && $_GET['price'] == 'high') : ?>
                                    <?php foreach ($product_price_high as $key => $pro) : ?>
                                        <li class="product-item col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                            <div class="contain-product layout-default">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product">
                                                        <img src="public/frontend/assets/images/products/<?=$pro['img']?>" alt="dd" width="270" height="270" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <!-- <b class="categories">Fresh Fruit</b> -->
                                                    <h4 class="product-title"><a href="#" class="pr-name"><?=$pro['name']?></a></h4>
                                                    <div class="price">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></del>
                                                    </div>
                                                    <!-- <div class="shipping-info">
                                                        <p class="shipping-day">3-Day Shipping</p>
                                                        <p class="for-today">Pree Pickup Today</p>
                                                    </div> -->
                                                    <div class="slide-down-box">
                                                        <p class="message"><?=$pro['material']?></p>
                                                        <div class="buttons">
                                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
                                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                <?php elseif(!isset($_GET['price'])) : ?>
                                    <?php foreach ($product as $key => $pro) : ?>
                                        <li class="product-item col-lg-2 col-md-3 col-sm-4 col-xs-6">
                                            <div class="contain-product layout-default">
                                                <div class="product-thumb">
                                                    <a href="#" class="link-to-product">
                                                        <img src="public/frontend/assets/images/products/<?=$pro['img']?>" alt="dd" width="270" height="270" class="product-thumnail">
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <!-- <b class="categories">Fresh Fruit</b> -->
                                                    <h4 class="product-title"><a href="#" class="pr-name"><?=$pro['name']?></a></h4>
                                                    <div class="price">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></del>
                                                    </div>
                                                    <!-- <div class="shipping-info">
                                                        <p class="shipping-day">3-Day Shipping</p>
                                                        <p class="for-today">Pree Pickup Today</p>
                                                    </div> -->
                                                    <div class="slide-down-box">
                                                        <p class="message"><?=$pro['material']?></p>
                                                        <div class="buttons">
                                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Thêm vào giỏ hàng</a>
                                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </ul>
                        </div>

                        <div class="biolife-panigations-block">
                            <ul class="panigation-contain">
                                <!-- <li><span class="current-page"><a href="<?=BASE_PATH?>product&page=1">1</a></span></li>
                                <li><span class="current-page"><a href="<?=BASE_PATH?>product&page=2">2</a></span></li>
                                <li><span class="current-page"><a href="<?=BASE_PATH?>product&page=3">3</a></span></li> -->
                                <!-- <li><a href="#" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li> -->
                                        <?php
                                            $url = $_GET['price'] ?? '';
                                            var_dump($url);
                                        ?>
                                        
                                           
                                        <?php if ($url == 'high') : ?>
                                            <?php 
                                                for ($i=1; $i <= $page  ; $i++) { 
                                                    echo '<li><span class="current-page"><a href="product&price=high&page='.$i.'">'.$i.'</a></span></li>';
                                                }
                                            ?>
                                        <?php elseif ($url == 'low') :?>
                                            <?php 
                                                for ($i=1; $i <= $page  ; $i++) { 
                                                    echo '<li><span class="current-page"><a href="product&price=low&page='.$i.'">'.$i.'</a></span></li>';
                                                }
                                            ?>
                                        <?php elseif($url == '') : ?>
                                            <?php 
                                                for ($i=1; $i <= $page  ; $i++) { 
                                                    echo '<li><span class="current-page"><a href="product&page='.$i.'">'.$i.'</a></span></li>';
                                                }
                                            ?>
                                        <?php endif ?>
                                        
                                        
                            </ul>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
<?php require_once "footer.php" ?>