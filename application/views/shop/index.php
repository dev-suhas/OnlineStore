
            <!-- Slider Arae Start -->
            <div class="slider-area">
                <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
                    <!-- Slider Single Item Start -->
                    <?php if(!empty($banners)){ 
                        foreach($banners as $banner){ ?>
                    <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img" style="background-image: url('<?php echo base_url($banner['image']); ?>');">
                    </div>
                    <?php } } ?>
                    <!-- Slider Single Item End -->
                </div>
            </div>
            <!-- Slider Arae End -->
            <!-- Static Area Start -->
            <section class="static-area mtb-60px">
                <div class="container">
                    <div class="static-area-wrap">
                        <div class="row">
                            <!-- Static Single Item Start -->
                            <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                                <div class="single-static pb-res-md-0 pb-res-sm-0 pb-res-xs-0">
                                    <img src="<?php echo base_url('assets/website/images/icons/static-icons-1.png'); ?>" alt="" class="img-responsive" />
                                    <div class="single-static-meta">
                                        <h4>Free Shipping</h4>
                                        <p>On all orders over $75.00</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Static Single Item End -->
                            <!-- Static Single Item Start -->
                            <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                                <div class="single-static pb-res-md-0 pb-res-sm-0 pb-res-xs-0 pt-res-xs-20">
                                    <img src="<?php echo base_url('assets/website/images/icons/static-icons-2.png'); ?>" alt="" class="img-responsive" />
                                    <div class="single-static-meta">
                                        <h4>Free Returns</h4>
                                        <p>Returns are free within 9 days</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Static Single Item End -->
                            <!-- Static Single Item Start -->
                            <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                                <div class="single-static pt-res-md-30 pb-res-sm-30 pb-res-xs-0 pt-res-xs-20">
                                    <img src="<?php echo base_url('assets/website/images/icons/static-icons-3.png'); ?>" alt="" class="img-responsive" />
                                    <div class="single-static-meta">
                                        <h4>100% Payment Secure</h4>
                                        <p>Your payment are safe with us.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Static Single Item End -->
                            <!-- Static Single Item Start -->
                            <div class="col-lg-3 col-xs-12 col-md-6 col-sm-6">
                                <div class="single-static pt-res-md-30 pb-res-sm-30 pt-res-xs-20">
                                    <img src="<?php echo base_url('assets/website/images/icons/static-icons-4.png'); ?>" alt="" class="img-responsive" />
                                    <div class="single-static-meta">
                                        <h4>Support 24/7</h4>
                                        <p>Contact us 24 hours a day</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Static Single Item End -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Static Area End -->
            <!-- Best Sells Area Start -->
            <section class="best-sells-area mb-30px">
                <div class="container">
                    <!-- Section Title Start -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2>Best Sellers</h2>
                                <p>Add bestselling products to weekly line up</p>
                            </div>
                        </div>
                    </div>
                    <!-- Section Title End -->
                    <!-- Best Sell Slider Carousel Start -->
                    <div class="best-sell-slider owl-carousel owl-nav-style">
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                    <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy Quilted Ter..</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€18.90</li>
                                        <li class="current-price">€34.21</li>
                                        <li class="discount-price">-5%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                    <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Fresh Foam Ka..</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€18.90</li>
                                        <li class="current-price">€15.12</li>
                                        <li class="discount-price">-20%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                    <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                <h2><a href="single-product.html" class="product-link">Brixton Patrol All Terrain Ano..</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€18.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                    <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                <h2><a href="single-product.html" class="product-link">Juicy Couture Tricot Logo Strip..</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€18.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                    <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Sport v1</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€18.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                    <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNAR</span></a>
                                <h2><a href="single-product.html" class="product-link">Fila Locker Room Varsity Jacket</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€18.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                    <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Water and Wind Resistant Ins..</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€18.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                    <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">New Luxury Men's Slim Fit Shi...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€29.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                    <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Originals Kaval Windbreaker...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€23.90</li>
                                        <li class="current-price">€21.51</li>
                                        <li class="discount-price">-10%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                    <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Brixton Patrol All Terrain Anor...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€18.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                    <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Madden by Steve Madden Cale 6</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€11.90</li>
                                        <li class="current-price">€10.12</li>
                                        <li class="discount-price">-15%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                    <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy Quilted Ter..</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€35.90</li>
                                        <li class="current-price">€34.11</li>
                                        <li class="discount-price">-5%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                    </div>
                    <!-- Best Sells Carousel End -->
                </div>
            </section>
            <!-- Best Sells Slider End -->

            <!-- Category Area Start -->
            <section class="categorie-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title mt-res-sx-30px mt-res-md-30px">
                                <h2>Popular Categories</h2>
                                <p>Add Popular Categories to weekly line up</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Category Slider Start -->
                    <div class="category-slider owl-carousel owl-nav-style">
                        <!-- Single item -->
                        <?php foreach($categories as $category){ ?>
                        <div class="category-item">
                            <div class="category-list mb-30px">
                                <div class="category-thumb">
                                    <a href="shop-4-column.html">
                                        <img src="<?php echo base_url().$category['photo']; ?>" alt="<?php echo $category['name']; ?>" />
                                    </a>
                                </div>
                                <div class="desc-listcategoreis">
                                    <div class="name_categories">
                                        <h4><?php echo $category['name']; ?></h4>
                                    </div>
                                    <span class="number_product"><?php echo $category['description']; ?></span>
                                    <a href="shop-4-column.html"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- Single item -->
                    </div>
                </div>
            </section>
            <!-- Category Area End  -->
            <!-- Hot deal area Start -->
            <section class="hot-deal-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Section Title -->
                                    <div class="section-title">
                                        <h2>Hot Deals</h2>
                                        <p>Add hot products to weekly line up</p>
                                    </div>
                                    <!-- Section Title End-->
                                </div>
                            </div>
                            <!-- Hot Deal Slider Start -->
                            <div class="hot-deal owl-carousel owl-nav-style">
                                <!--  Single item -->
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Originals Kaval Windbreaker Winter Jacket 2</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€18.90</li>
                                                <li class="current-price">€34.21</li>
                                                <li class="discount-price">-5%</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="in-stock">Availability: <span>300 In Stock</span></div>

                                    <div class="clockdiv">
                                        <div class="title_countdown">Hurry Up! Offers ends in:</div>
                                        <div data-countdown="2021/03/01"></div>
                                    </div>
                                </article>
                                <!--  Single item -->
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Originals Kaval Windbreaker Winter Jacket</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€18.90</li>
                                                <li class="current-price">€34.21</li>
                                                <li class="discount-price">-5%</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="in-stock">Availability: <span>300 In Stock</span></div>

                                    <div class="clockdiv">
                                        <div class="title_countdown">Hurry Up! Offers ends in:</div>
                                        <div data-countdown="2021/03/01"></div>
                                    </div>
                                </article>
                                <!--  Single item -->
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">New Balance Fresh Foam Kaymin</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€18.90</li>
                                                <li class="current-price">€34.21</li>
                                                <li class="discount-price">-5%</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>

                                    <div class="clockdiv">
                                        <div class="title_countdown">Hurry Up! Offers ends in:</div>
                                        <div data-countdown="2021/03/01"></div>
                                    </div>
                                </article>
                                <!--  Single item -->
                                <article class="list-product">
                                    <div class="img-block">
                                        <a href="single-product.html" class="thumbnail">
                                            <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                        </a>
                                        <div class="quick-view">
                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                <i class="ion-ios-search-strong"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                    </ul>
                                    <div class="product-decs">
                                        <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                        <h2><a href="single-product.html" class="product-link">Madden by Steve Madden Cale 6</a></h2>
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <div class="pricing-meta">
                                            <ul>
                                                <li class="old-price">€18.90</li>
                                                <li class="current-price">€34.21</li>
                                                <li class="discount-price">-5%</li>
                                            </ul>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="in-stock">Availability: <span>299 In Stock</span></div>

                                    <div class="clockdiv">
                                        <div class="title_countdown">Hurry Up! Offers ends in:</div>
                                        <div data-countdown="2021/03/01"></div>
                                    </div>
                                </article>
                                <!--  Single item -->
                            </div>
                            <!-- Hot Deal Slider End -->
                        </div>
                        <!-- New Arrivals Area Start -->
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Section Title -->
                                    <div class="section-title ml-0px mt-res-sx-30px">
                                        <h2>New Arrivals</h2>
                                        <p>Add new products to weekly line up</p>
                                    </div>
                                    <!-- Section Title -->
                                </div>
                            </div>
                            <!-- New Product Slider Start -->
                            <div class="new-product-slider owl-carousel owl-nav-style">
                                <!-- Product Single Item -->
                                <div class="product-inner-item">
                                    <article class="list-product mb-30px">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                                <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Originals Kaval Windbr...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€23.90</li>
                                                    <li class="current-price">€21.51</li>
                                                    <li class="discount-price">-10%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                                <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy Quil...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€35.90</li>
                                                    <li class="current-price">€34.11</li>
                                                    <li class="discount-price">-5%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Product Single Item -->
                                <div class="product-inner-item">
                                    <article class="list-product mb-30px">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                                <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                            <h2><a href="single-product.html" class="product-link">Brixton Patrol All Terr...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€29.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                                <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Luxury Men's Slim...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€29.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Product Single Item -->
                                <div class="product-inner-item">
                                    <article class="list-product mb-30px">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                                <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Originals Kaval Windbr...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€35.90</li>
                                                    <li class="current-price">€34.11</li>
                                                    <li class="discount-price">-5%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                                <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-1.jpg'); ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy Quil...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€35.90</li>
                                                    <li class="current-price">€34.11</li>
                                                    <li class="discount-price">-5%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Product Single Item -->
                                <div class="product-inner-item">
                                    <article class="list-product mb-30px">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                                <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Madden by Steve Madd...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€11.90</li>
                                                    <li class="current-price">€10.12</li>
                                                    <li class="discount-price">-15%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                                <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Trans-Weight Hooded...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€19.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Product Single Item -->
                                <div class="product-inner-item">
                                    <article class="list-product mb-30px">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                                <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Water and Wind Resist...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€11.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                                <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Fresh Foa...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">€18.90</li>
                                                    <li class="current-price">€15.11</li>
                                                    <li class="discount-price">-20%</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <!-- Product Single Item -->
                                <div class="product-inner-item">
                                    <article class="list-product mb-30px">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                                <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">Juicy Couture Solid Slee...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                    <article class="list-product">
                                        <div class="img-block">
                                            <a href="single-product.html" class="thumbnail">
                                                <img class="first-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                                <img class="second-img" src="<?php echo base_url('assets/website/images/product-image/organic/product-16.jpg'); ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                            <h2><a href="single-product.html" class="product-link">New Balance Fresh Foa...</a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price not-cut">€18.90</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                <li>
                                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li>
                                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <!-- Product Slider End -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hot Deal Area End -->
            <!-- Brand area start -->
            <div class="brand-area">
                <div class="container">
                    <div class="brand-slider owl-carousel owl-nav-style owl-nav-style-2">
                        <?php if(!empty($brands)){
                            foreach($brands as $brand){ ?>
                            <div class="brand-slider-item">
                                <a href="#"><img src="<?php echo base_url($brand['photo']); ?>" alt="<?php echo $brand['name']; ?>" /></a>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
            </div>
            <!-- Brand area end -->
