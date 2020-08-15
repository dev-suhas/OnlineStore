
            <!-- Breadcrumb Area start -->
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content">
                                <h1 class="breadcrumb-hrading">Shop Page</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Shop </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- Shop Category Area End -->
            <div class="shop-category-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                            <!-- Shop Top Area Start -->
                            <div class="shop-top-bar">
                                <!-- Left Side start -->
                                <div class="shop-tab nav mb-res-sm-15">
                                    <p>There Are <?php if(!empty($products)){ echo count($products); } else { echo 0 ; } ?> Products.</p>
                                </div>
                                <!-- Left Side End -->
                                <!-- Right Side Start -->
                                <div class="select-shoing-wrap">
                                    <div class="shot-product">
                                        <p>Sort By:</p>
                                    </div>
                                    <div class="shop-select">
                                        <select>
                                            <option value="">A to Z</option>
                                            <option value=""> Z to A</option>
                                            <option value="">In stock</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Right Side End -->
                            </div>
                            <!-- Shop Top Area End -->

                            <!-- Shop Bottom Area Start -->
                            <div class="shop-bottom-area mt-35">
                                <!-- Shop Tab Content Start -->
                                <div class="tab-content jump">
                                    <!-- Tab One Start -->
                                    <div id="shop-1" class="tab-pane active">
                                        <div class="row"> 
                                           <?php  if(!empty($products)){
                                                 foreach($products as $pro){ ?>
                                            <div class="col-xl-3 col-md-6 col-lg-4 col-sm-6 col-xs-12">
                                                <article class="list-product">
                                                    <div class="img-block">
                                                        <a href="single-product.html" class="thumbnail">
                                                            <img class="first-img" src="<?php echo base_url($pro['photo']); ?>" alt="" />
                                                            <img class="second-img" src="<?php echo base_url($pro['photo']); ?>" alt="" />
                                                        </a>
                                                        <div class="quick-view">
                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                                <i class="ion-ios-search-strong"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <ul class="product-flag">
                                                        <?php if($pro['status']==1){ ?>
                                                            <li class="new">In Stock</li>
                                                        <?php } else { ?>
                                                            <li class="new" style ="background-color:red">Out of Stock</li>
                                                        <?php } ?>
                                                    </ul>
                                                    <div class="product-decs">
                                                        <a class="inner-link" href="<?php echo base_url(); ?>"><span><?php echo $pro['code']; ?></span></a>
                                                        <h2><a href="<?php echo base_url(); ?>" class="product-link"><?php echo $pro['name']; ?></a></h2>
                                                        <div class="pricing-meta">
                                                            <ul>
                                                                <li class="old-price not-cut">
                                                                    <i class="fa fa-inr" aria-hidden="true">INR</i>
                                                                    <?php echo $pro['offer_price']; ?></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-link">
                                                        <ul>
                                                            <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                                            <li>
                                                                <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                            </div>
                                        <?php } } ?>
                                        </div>
                                    </div>
                                    <!-- Tab One End -->
                                </div>
                                <!-- Shop Tab Content End -->
                                <!--  Pagination Area Start -->
                                     <?php echo $links; ?>
                                <!--  Pagination Area End -->
                            </div>
                            <!-- Shop Bottom Area End -->
                        </div>
                        <!-- Sidebar Area Start -->
                        <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-res-md-60px mb-res-sm-60px">
                            <div class="left-sidebar">
                                <div class="sidebar-heading">
                                    <div class="main-heading">
                                        <h2>Filter By</h2>
                                    </div>
                                    <!-- Sidebar single item -->
                                    <div class="sidebar-widget">
                                        <h4 class="pro-sidebar-title">Categories</h4>
                                        <div class="sidebar-widget-list">
                                            <ul>
                                                <?php if(!empty($categories)){
                                                    foreach($categories as $cat){ ?>
                                                <li>
                                                    <div class="sidebar-widget-list-left">
                                                        <input type="checkbox" /> <a href="#"><?php echo $cat['name']; ?><span></span> </a>
                                                        <span class="checkmark"></span>
                                                    </div>
                                                </li>
                                              <?php }} ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Sidebar single item -->
                                </div>
                                <!-- Sidebar single item -->
                                <div class="sidebar-widget mt-30">
                                    <h4 class="pro-sidebar-title">Brand</h4>
                                    <div class="sidebar-widget-list">
                                        <ul>
                                        <?php if(!empty($brands)){
                                                    foreach($brands as $brand){ ?>
                                            <li>
                                                <div class="sidebar-widget-list-left">
                                                    <input type="checkbox" /> <a href="#"><?php echo $brand['name']; ?><span></span> </a>
                                                    <span class="checkmark"></span>
                                                </div>
                                            </li>
                                         <?php }} ?>    
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Sidebar Area End -->
                    </div>
                </div>
            </div>
            <!-- Shop Category Area End -->