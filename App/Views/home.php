<?php 
    require_once "header.php";
    extract($data);
    // var_dump($product);
   
?>
    <!-- Page Contain -->
    <div class="page-contain">

        <!-- Main content -->
        <div id="main-content" class="main-content">

            <!-- Block 01: Main slide block-->
            <div class="main-slide block-slider">
                <ul class="biolife-carousel nav-none-on-mobile" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}'>
                <?php foreach ($banner as $key => $bn) : ?>
                    <?php if ($bn['position'] == 1) : ?>
                    <li>
                        <div class="slide-contain slider-opt03__layout01 mode-03 black-color slide-bgr-mode03-01">
                            <div class="medias">
                                <img src="public/frontend/assets/images/home-01/<?=$bn['img']?>" alt="">
                            </div>
                            <!-- <div class="media"></div> -->
                            <div class="text-content">
                                <i class="first-line"><?=$bn['info1']?></i>
                                <h3 class="second-line"><?=$bn['title']?></h3>
                                <p class="third-line"><?=$bn['info2']?></p>
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Xem ngay</a>
                                    <a href="#" class="btn btn-thin">ưu đãi</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <?php endif ?>
                <?php endforeach ?>
                    <!-- <li>
                        <div class="slide-contain slider-opt03__layout01 mode-03 slide-bgr-mode03-02">
                            <div class="media">
                            </div>
                            <div class="text-content">
                                <i class="first-line">Pomegranate</i>
                                <h3 class="second-line">Fresh Juice. 100% Organic</h3>
                                <p class="third-line">A blend of freshly squeezed green apple & fruits</p>
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Shop now</a>
                                    <a href="#" class="btn btn-thin">View lookbook</a>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="slide-contain slider-opt03__layout01 mode-03 slide-bgr-mode03-03">
                            <div class="media">
                            </div>
                            <div class="text-content">
                                <i class="first-line">Pomegranate</i>
                                <h3 class="second-line">Fresh Juice. 100% Organic</h3>
                                <p class="third-line">A blend of freshly squeezed green apple & fruits</p>
                                <p class="buttons">
                                    <a href="#" class="btn btn-bold">Shop now</a>
                                    <a href="#" class="btn btn-thin">View lookbook</a>
                                </p>
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div>

            <!-- Block 02: Grid Banners-->
            <!-- <div class="biolife-gird-banners xs-margin-top-80px sm-margin-top-0">

                <div class="grid-panel">

                    <div class="grid-panel-item left-content">
                        <div class="biolife-banner grid biolife-banner__grid type-02 bn-elm-01">
                            <a href="#" class="media-contain media-01"></a>
                            <div class="banner-contain">
                                <a href="#" class="cat-name">Fruit juice</a>
                            </div>
                        </div>
                    </div>

                    <div class="grid-panel-item midle-content">
                        <ul class="list-media">
                            <li>
                                <div class="biolife-banner grid biolife-banner__grid type-02 bn-elm-02">
                                    <a href="#" class="media-contain media-02"></a>
                                    <div class="banner-contain">
                                        <a href="#" class="cat-name">Strawberry</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="biolife-banner grid biolife-banner__grid type-02 bn-elm-03">
                                    <a href="#" class="media-contain media-03"></a>
                                    <div class="banner-contain">
                                        <a href="#" class="cat-name">Blueberries</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="biolife-banner grid biolife-banner__grid type-02 bn-elm-04">
                                    <a href="#" class="media-contain media-04"></a>
                                    <div class="banner-contain">
                                        <a href="#" class="cat-name">Raspberries</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="biolife-banner grid biolife-banner__grid type-02 bn-elm-05">
                                    <a href="#" class="media-contain  media-05"></a>
                                    <div class="banner-contain">
                                        <a href="#" class="cat-name">Our berries</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="grid-panel-item right-content">
                        <div class="biolife-banner grid biolife-banner__grid type-02 bn-elm-06">
                            <a href="#" class="media-contain media-06"></a>
                            <div class="banner-contain">
                                <a href="#" class="cat-name">Pomegranate</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div> -->

            <!-- Block 03: Product Tab-->
            <div class="product-tab z-index-20 sm-margin-top-49px xs-margin-top-80px">
                <div class="container">
                    <div class="biolife-title-box biolife-title-box__icon-at-top-style hidden-icon-on-mobile">
                        <span class="icon-at-top biolife-icon icon-organic"></span>
                        <span class="subtitle">Sản phẩm dành cho bạn</span>
                        <h3 class="main-title">Thực phẩm giảm giá</h3>
                    </div>
                    <div class="biolife-tab biolife-tab-contain sm-margin-top-32px">
                        <div class="tab-head tab-head__icon-top-layout icon-top-layout background-tab-include type-02">
                            <ul class="tabs">
                                <li class="tab-element active">
                                    <a href="#tab02_1st" class="tab-link">
                                        <span class="biolife-icon icon-lemon"></span>
                                        <span>Bán chạy</span>
                                    </a>
                                   
                                </li>
                                <li class="tab-element">
                                    <a href="#tab02_2nd" class="tab-link elm-02">
                                        <span class="biolife-icon icon-grape2"></span>
                                        <span>Giảm giá</span>
                                    </a>
                                </li>
                                <li class="tab-element">
                                    <a href="#tab02_3rd" class="tab-link elm-03">
                                        <span class="biolife-icon icon-blueberry"></span>
                                        <span>Mới cập nhật</span>
                                    </a>
                                </li>
                                <li class="tab-element">
                                    <a href="#tab02_4th" class="tab-link elm-04">
                                        <span class="biolife-icon icon-orange"></span>
                                        <span>Lượt xem</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div id="tab02_1st" class="tab-contain active">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
                                    <?php foreach ($product as $key => $pro) : ?>
                                      
                                        <li class="product-item">
                                            <div class="contain-product layout-default">
                                                <div class="product-thumb">
                                                    <a href="<?=BASE_PATH?>product_detail&id=<?=$pro['id']?>" class="link-to-product">
                                                        <img src="public/frontend/assets/images/products/<?=$pro['img']?>" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                    </a>
                                                    <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                </div>
                                                <div class="info">
                                                    <b class="categories">Đã bán: <?=$pro['sold_count']?></b>
                                                    <h4 class="product-title"><a href="<?=BASE_PATH?>product_detail&id=<?=$pro['id']?>" class="pr-name"><?=$pro['name']?></a></h4>
                                                    <input type="hidden" name="id_detail" value="<?=$pro['id']?>">
                                                    <div class="price ">
                                                        <ins><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></ins>
                                                        <del><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></del>
                                                    </div>
                                                    <div class="slide-down-box">
                                                        <p class="message"><?=$pro['material']?>.</p>
                                                        <div class="buttons">
                                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                            <a href="<?=BASE_PATH?>add_cart&id=<?=$pro['id']?>" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Thêm vào giỏ</a>
                                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    <?php endforeach ?>
                                    <!-- <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-08.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-10.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-09.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-20.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <div id="tab02_2nd" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
                                   <?php foreach ($product_promotion as $key => $pro) : ?>
                                <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/<?=$pro['img']?>" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Giảm: <?=$pro['promotion']?>%</b>
                                                <h4 class="product-title"><a href="#" class="pr-name"><?=$pro['name']?></a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach ?>
                                    <!-- <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-07.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers of Lemons</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers Magnetic Salt</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-20.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower Kugel</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <div id="tab02_3rd" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
                                    <?php foreach ($product_new as $key => $pro) :?>
                                             <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="public/frontend/assets/images/products/<?=$pro['img']?>" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <!-- <b class="categories">Vegetables</b> -->
                                                        <h4 class="product-title"><a href="#" class="pr-name"><?=$pro['name']?></a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                    <?php endforeach ?>
                                    <!-- <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers Magnetic Salt</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-07.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers of Lemons</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-20.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower Kugel</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <div id="tab02_4th" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
                                        <?php foreach ($product_view as $key => $pro) :?>
                                             <li class="product-item">
                                                <div class="contain-product layout-default">
                                                    <div class="product-thumb">
                                                        <a href="#" class="link-to-product">
                                                            <img src="public/frontend/assets/images/products/<?=$pro['img']?>" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                        </a>
                                                        <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                    </div>
                                                    <div class="info">
                                                        <b class="categories"><?=$pro['view']?> Lượt xem</b>
                                                        <h4 class="product-title"><a href="#" class="pr-name"><?=$pro['name']?></a></h4>
                                                        <div class="price ">
                                                            <ins><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></ins>
                                                            <del><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></del>
                                                        </div>
                                                        <div class="slide-down-box">
                                                            <p class="message">All products are carefully selected to ensure food safety.</p>
                                                            <div class="buttons">
                                                                <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                    <?php endforeach ?>
                                    <!-- <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-07.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers of Lemons</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers Magnetic Salt</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower Kugel</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Block 04: Banners-->
            <div class="banner-block md-margin-top-61px sm-margin-bottom-89px xs-margin-top-60px">
                <div class="biolife-banner special-02 biolife-banner__special-02">
                    <div class="container">
                        <?php foreach ($banner as $key => $bn) : ?>
                            <?php if ($bn['position'] == 2) : ?>
                                <div class="banner-contain">
                                    <div class="thumb">
                                        <a href="#" class="link"><img src="public/frontend/assets/images/home-01/<?=$bn['img']?>" width="753" height="517" alt=""></a>
                                    </div>
                                    <div class="text-content">
                                        <i class="text01"><?=$bn['title']?></i>
                                        <b class="text02"><?=$bn['title']?></b>
                                        <span class="text03"><?=$bn['info1']?></span>
                                        <!-- <span class="text04">Easy <i>Healthy, Happy Life</i></span> -->
                                        <div class="product-detail">
                                            <h4 class="product-name"><?=$bn['info2']?></h4>
                                            <div class="price price-contain">
                                                <!-- <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins> -->
                                            </div>
                                            <p class="measure"><?=$bn['info1']?></p>
                                            <div class="buttons">
                                                <a href="#" class="btn add-to-cart-btn" tabindex="-1">Xem ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>

            <!-- Block 05: Banner Promotion-->
            <div class="banner-promotion xs-margin-top-0 sm-margin-top-60px xs-margin-top-100">
                <div class="biolife-banner promotion6 biolife-banner__promotion6">
                 <?php foreach ($banner as $key => $bn) : ?>
                    <?php if ($bn['position'] == 3) : ?>
                    <div class="banner-contain">
                        <div class="media">
                            <div class="img-moving position-1">
                                <a href="#" class="banner-link">
                                    <img src="public/frontend/assets/images/home-01/<?=$bn['img']?>" width="568" height="760" alt="img msv">
                                </a>
                            </div>
                            <!-- <div class="img-moving position-2">
                                <img src="public/frontend/assets/images/home-01/bn-promotion-6-child-02.png" width="745" height="682" alt="img msv">
                            </div> -->
                        </div>
                        <div class="text-content">
                            <i class="text1"><?=$bn['title']?></i>
                            <b class="text2"><?=$bn['info1']?></b>
                            <p class="buttons">
                                <a href="#" class="btn btn-thin">Xem ngay</a>
                            </p>
                        </div>
                    </div>
                    <?php endif ?>
                <?php endforeach ?>
                </div>
            </div>

            <!-- Block 06: Product Tab-->
            <div class="product-tab z-index-20 sm-margin-top-71px xs-margin-top-80px">
                <div class="container">
                    <div class="biolife-title-box biolife-title-box__icon-at-top-style hidden-icon-on-mobile sm-margin-bottom-24px">
                        <span class="icon-at-top biolife-icon icon-organic"></span>
                        <span class="subtitle">Sản phẩm dành cho bạn</span>
                        <h3 class="main-title">Sản phẩm</h3>
                    </div>
                    <div class="biolife-tab biolife-tab-contain">
                        <div class="tab-head tab-head__sample-layout type-02 xs-margin-bottom-15px ">
                            <ul class="tabs">
                            
                                <?php foreach ($category as $key => $cate) : ?>
                                    <li class="tab-element">
                                        <a href="#<?=$cate['id']?>" class="tab-link"><?=$cate['name']?></a>
                                    </li>
                                <?php endforeach ?>
                            
                                <!-- <li class="tab-element">
                                    <a href="#tab01_2nd" class="tab-link">Top Rated</a>
                                </li>
                                <li class="tab-element">
                                    <a href="#tab01_3rd" class="tab-link">On Sale</a>
                                </li> -->
                            </ul>
                        </div>
                        <div class="tab-content">
                            
                        <?php foreach ($category as $key => $cate) : ?>
                            
                                <div id="<?= isset($cate['id']) ? $cate['id'] : 1 ?>" class="tab-contain <?= ($cate['id'] == 1) ? 'active' : '' ?>">
                                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin": 30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin": 15}}]}'>
                                        <?php foreach ($product as $key => $pro) : ?>
                                            <?php if ($pro['id_category'] == $cate['id']) : ?>
                                                    <li class="product-item ">
                                                        <div class="contain-product layout-default">
                                                            <div class="product-thumb">
                                                                <a href="#" class="link-to-product">
                                                                    <img src="public/frontend/assets/images/products/<?=$pro['img']?>" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                                </a>
                                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                                            </div>
                                                            <div class="info">
                                                                <b class="categories"><?=$cate['name']?></b>
                                                                <h4 class="product-title"><a href="#" class="pr-name"><?=$pro['name']?></a></h4>
                                                                <div class="price ">
                                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></ins>
                                                                    <del><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></del>
                                                                </div>
                                                                <div class="slide-down-box">
                                                                    <p class="message"><?=$pro['material']?></p>
                                                                    <div class="buttons">
                                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            
                        <?php endforeach ?>
                            <!-- <div id="tab01_2nd" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-07.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers of Lemons</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers Magnetic Salt</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-20.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower Kugel</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tab01_3rd" class="tab-contain ">
                                <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":1 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":30}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado, Large</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-02.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Hot Chili Peppers Magnetic Salt</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Organic Hass Avocado</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-06.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Packham's Pears</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-07.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">13 Healing Powers of Lemons</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-18.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-20.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-22.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Cherry Tomato Seeds</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-19.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Pumpkins Fairytale</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="product-item">
                                        <div class="contain-product layout-default">
                                            <div class="product-thumb">
                                                <a href="#" class="link-to-product">
                                                    <img src="public/frontend/assets/images/products/p-03.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                                </a>
                                                <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                            </div>
                                            <div class="info">
                                                <b class="categories">Vegetables</b>
                                                <h4 class="product-title"><a href="#" class="pr-name">Passover Cauliflower Kugel</a></h4>
                                                <div class="price ">
                                                    <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                    <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                </div>
                                                <div class="slide-down-box">
                                                    <p class="message">All products are carefully selected to ensure food safety.</p>
                                                    <div class="buttons">
                                                        <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                        <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                        <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Block 07: Blog posts-->
            <!-- <div class="blog-posts sm-margin-top-49px xs-margin-top-60px">
                <div class="container">
                    <div class="biolife-title-box biolife-title-box__bold-center xs-margin-bottom-50px sm-margin-bottom-0-im">
                        <i class="subtitle">Tin tức mới nhất và thú vị nhất</i>
                        <h3 class="main-title">Bài viết mới nhất của chúng tôi</h3>
                    </div>
                    <ul class="biolife-carousel nav-center xs-margin-top-34px nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":3, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 3}},{"breakpoint":992, "settings":{ "slidesToShow": 2}},{"breakpoint":768, "settings":{ "slidesToShow": 2}},{"breakpoint":600, "settings":{ "slidesToShow": 1}}]}'>
                        <li>
                            <div class="post-item effect-01 style-bottom-info layout-02 ">
                                <div class="thumbnail">
                                    <a href="#" class="link-to-post"><img src="public/frontend/assets/images/our-blog/post-thumb-01.jpg" width="370" height="270" alt=""></a>
                                    <div class="post-date">
                                        <span class="date">26</span>
                                        <span class="month">dec</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                    <div class="post-meta">
                                        <a href="#" class="post-meta__item author"><img src="public/frontend/assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                                        <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                                        <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                                        <div class="post-meta__item post-meta__item-social-box">
                                            <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                            <div class="inner-content">
                                                <ul class="socials">
                                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many plants that were historically used as dyes...</p>
                                    <div class="group-buttons">
                                        <a href="#" class="btn readmore">continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-item effect-01 style-bottom-info layout-02">
                                <div class="thumbnail">
                                    <a href="#" class="link-to-post"><img src="public/frontend/assets/images/our-blog/post-thumb-02.jpg" width="370" height="270" alt=""></a>
                                    <div class="post-date">
                                        <span class="date">26</span>
                                        <span class="month">dec</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                    <div class="post-meta">
                                        <a href="#" class="post-meta__item author"><img src="public/frontend/assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                                        <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                                        <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                                        <div class="post-meta__item post-meta__item-social-box">
                                            <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                            <div class="inner-content">
                                                <ul class="socials">
                                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many plants that were historically used as dyes...</p>
                                    <div class="group-buttons">
                                        <a href="#" class="btn readmore">continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-item effect-01 style-bottom-info layout-02">
                                <div class="thumbnail">
                                    <a href="#" class="link-to-post"><img src="public/frontend/assets/images/our-blog/post-thumb-04.jpg" width="370" height="270" alt=""></a>
                                    <div class="post-date">
                                        <span class="date">26</span>
                                        <span class="month">dec</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                    <div class="post-meta">
                                        <a href="#" class="post-meta__item author"><img src="public/frontend/assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                                        <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                                        <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                                        <div class="post-meta__item post-meta__item-social-box">
                                            <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                            <div class="inner-content">
                                                <ul class="socials">
                                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many plants that were historically used as dyes...</p>
                                    <div class="group-buttons">
                                        <a href="#" class="btn readmore">continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-item effect-01 style-bottom-info layout-02">
                                <div class="thumbnail">
                                    <a href="#" class="link-to-post"><img src="public/frontend/assets/images/our-blog/post-thumb-03.jpg" width="370" height="270" alt=""></a>
                                    <div class="post-date">
                                        <span class="date">26</span>
                                        <span class="month">dec</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                    <div class="post-meta">
                                        <a href="#" class="post-meta__item author"><img src="public/frontend/assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                                        <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                                        <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                                        <div class="post-meta__item post-meta__item-social-box">
                                            <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                            <div class="inner-content">
                                                <ul class="socials">
                                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many plants that were historically used as dyes...</p>
                                    <div class="group-buttons">
                                        <a href="#" class="btn readmore">continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-item effect-01 style-bottom-info layout-02">
                                <div class="thumbnail">
                                    <a href="#" class="link-to-post"><img src="public/frontend/assets/images/our-blog/post-thumb-05.jpg" width="370" height="270" alt=""></a>
                                    <div class="post-date">
                                        <span class="date">26</span>
                                        <span class="month">dec</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                    <div class="post-meta">
                                        <a href="#" class="post-meta__item author"><img src="public/frontend/assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                                        <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                                        <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                                        <div class="post-meta__item post-meta__item-social-box">
                                            <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                            <div class="inner-content">
                                                <ul class="socials">
                                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many plants that were historically used as dyes...</p>
                                    <div class="group-buttons">
                                        <a href="#" class="btn readmore">continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="post-item effect-01 style-bottom-info layout-02">
                                <div class="thumbnail">
                                    <a href="#" class="link-to-post"><img src="public/frontend/assets/images/our-blog/post-thumb-06.jpg" width="370" height="270" alt=""></a>
                                    <div class="post-date">
                                        <span class="date">26</span>
                                        <span class="month">dec</span>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-name"><a href="#" class="linktopost">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                    <div class="post-meta">
                                        <a href="#" class="post-meta__item author"><img src="public/frontend/assets/images/home-03/post-author.png" width="28" height="28" alt=""><span>Admin</span></a>
                                        <a href="#" class="post-meta__item btn liked-count">2<span class="biolife-icon icon-comment"></span></a>
                                        <a href="#" class="post-meta__item btn comment-count">6<span class="biolife-icon icon-like"></span></a>
                                        <div class="post-meta__item post-meta__item-social-box">
                                            <span class="tbn"><i class="fa fa-share-alt" aria-hidden="true"></i></span>
                                            <div class="inner-content">
                                                <ul class="socials">
                                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="excerpt">Did you know that red-staining foods are excellent lymph-movers? In fact, many plants that were historically used as dyes...</p>
                                    <div class="group-buttons">
                                        <a href="#" class="btn readmore">continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> -->

            <!-- Block 08: Advance Product-->
            <div class="banner-block">
                <div class="biolife-banner special-03 biolife-banner__special-03">
                    <div class="banner-contain">
                        <div class="container">
                            <div class="biolife-title-box bgrd-bold biolife-title-box__bgrd-bold">
                                <h3 class="title">Giảm giá sản phẩm</h3>
                            </div>
                            <ul class="products-list vertical-layout-02 biolife-carousel nav-none-on-mobile" data-slick='{"rows":3,"arrows":false,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 1}},{"breakpoint":768, "settings":{ "slidesToShow": 3, "rows":2, "slidesMargin":10}},{"breakpoint":500, "settings":{ "slidesToShow": 2, "rows":2, "slidesMargin":15}}]}'>
                               <?php foreach ($product_promotion as $key => $pro) : ?>

                                <li class="product-item">
                                    <div class="contain-product contain-product__right-info-layout3">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="public/frontend/assets/images/products/<?=$pro['img']?>" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4 class="product-title"><a href="#" class="pr-name"><?=$pro['name']?></a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></ins>
                                                <del><span class="price-amount"><span class="currencySymbol">£</span><?=number_format($pro['price'])?></span></del>
                                            </div>
                                            <div class="rating">
                                                <p class="star-rating"><span class="width-80percent"></span></p>
                                                <span class="review-count">(05 Reviews)</span>
                                            </div>
                                            <p class="desc"><?=$pro['material']?></p>
                                            <div class="buttons">
                                                <a href="#" class="btn add-to-cart-btn" tabindex="0">Thêm vào giỏ hàng</a>
                                                <a href="#" class="btn wishlist-btn" tabindex="0"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                <a href="#" class="btn compare-btn" tabindex="0"><i class="fa fa-random" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Block 09: Instagram-->
            <!-- <div class="biolife-instagram-block sm-margin-top-76px xs-margin-top-60px">
                <div class="wrap-title xs-margin-bottom-60px-im sm-margin-bottom-35-im">
                    <i class="subtitle hidden-xs">Sử dụng thực phẩm hàng đầu để có cơ hội nhận được ưu đãi </i>
                    <h3 class="title">Theo dõi chúng tôi tại Instagram</h3>
                </div>
                <div class="instagram-inline-wrap">
                    <ul class="biolife-carousel nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":6, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 6}},{"breakpoint":992, "settings":{ "slidesToShow": 5}},{"breakpoint":800, "settings":{ "slidesToShow": 4}},{"breakpoint":768, "settings":{ "slidesToShow": 3}},{"breakpoint":600, "settings":{ "slidesToShow": 2}},{"breakpoint":480, "settings":{"rows":2, "slidesToShow": 3}}]}'>
                        <li>
                            <div class="instagram-ltl-item">
                                <a href="#" class="link-to">
                                    <span class="show-on-hover biolife-icon icon-capacity-about"></span>
                                    <img src="public/frontend/assets/images/home-02/instag-inline-01.jpg" width="320" height="320" alt="">
                                </a>
                            </div>
                        </li>
                      
                    </ul>
                </div>
            </div> -->

            <!-- Block 10: Brands-->
            <div class="brand-slide sm-margin-top-76px sm-margin-bottom-77px xs-margin-top-80px xs-margin-bottom-80px">
                <div class="container">
                    <ul class="biolife-carousel nav-center-bold nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin": 10}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin": 10}}]}'>
                        <?php foreach ($brand as $key => $br) :?>
                        <li>
                            <div class="biolife-brd-container transparent-effect">
                                <a href="#" class="link">
                                    <figure><img src="public/frontend/assets/images/home-01/<?=$br['img']?>" width="199" height="110" alt=""></figure>
                                </a>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>

        </div>

    </div>

<?php 
    require_once "footer.php"
?>