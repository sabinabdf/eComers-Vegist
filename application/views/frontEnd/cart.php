
<?php include('src/header.php') ?>
       
        <!-- mobile menu end -->
        
        <!-- breadcrumb start -->
        <section class="about-breadcrumb">
            <div class="about-back section-tb-padding" style="background-image: url(image/about-image.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="about-l">
                                <ul class="about-link">
                                    <li class="go-home"><a href="index1.html">Home</a></li>
                                    <li class="about-p"><span>Your shopping cart</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb end -->
        <!-- cart start -->
        <section class="cart-page section-tb-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-xs-12 col-sm-12 col-md-12 col-lg-8">
                        <div class="cart-area">
                            <div class="cart-details">
                                <div class="cart-item">
                                    <span class="cart-head">My cart:</span>
                                    <span class="c-items">4 item</span>
                                </div>
                                <div class="cart-all-pro">
                                    <div class="cart-pro">
                                        <div class="cart-pro-image">
                                            <a href="product.html"><img src="<?php echo base_url('FrontAssets/') ?>image/cart-page/cart-1/image1.jpg" class="img-fluid" alt="image"></a>
                                        </div>
                                        <div class="pro-details">
                                            <h4><a href="product.html">Vegetable tomato fresh</a></h4>
                                            <span class="pro-size"><span class="size">Size:</span> 5kg</span>
                                            <span class="pro-shop">Petro-demo</span>
                                            <span class="cart-pro-price">$384.51 CAD</span>
                                        </div>
                                    </div>
                                    <div class="qty-item">
                                        <div class="center">
                                            <div class="plus-minus">
                                                <span>
                                                    <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                                    <input type="text" name="name" value="1">
                                                    <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                                </span>
                                            </div>
                                            <a href="grid-list.html" class="pro-remove">Remove</a>
                                        </div>
                                    </div>
                                    <div class="all-pro-price">
                                        <span>$384.51 CAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-area">
                            <div class="cart-details">
                                <div class="cart-all-pro">
                                    <div class="cart-pro">
                                        <div class="cart-pro-image">
                                            <a href="product.html"><img src="<?php echo base_url('FrontAssets/') ?>image/cart-page/cart-1/image3.jpg" class="img-fluid" alt="image"></a>
                                        </div>
                                        <div class="pro-details">
                                            <h4><a href="product.html">Fresh healthy food</a></h4>
                                            <span class="pro-size"><span class="size">Size:</span> 5kg</span>
                                            <span class="pro-shop">Multiwebinfo</span>
                                            <span class="cart-pro-price">$230.00 CAD</span>
                                        </div>
                                    </div>
                                    <div class="qty-item">
                                        <div class="center">
                                            <div class="plus-minus">
                                                <span>
                                                    <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                                    <input type="text" name="name" value="1">
                                                    <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                                </span>
                                            </div>
                                            <a href="grid-list.html" class="pro-remove">Remove</a>
                                        </div>
                                    </div>
                                    <div class="all-pro-price">
                                        <span>$460.00 CAD</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cart-area">
                            <div class="cart-details">
                                <div class="cart-all-pro">
                                    <div class="cart-pro">
                                        <div class="cart-pro-image">
                                            <a href="product.html"><img src="<?php echo base_url('FrontAssets/') ?>image/cart-page/cart-1/image2.jpg" class="img-fluid" alt="image"></a>
                                        </div>
                                        <div class="pro-details">
                                            <h4><a href="product.html">Fresh green orange</a></h4>
                                            <span class="pro-size"><span class="size">Size:</span> 5kg</span>
                                            <span class="pro-shop">Vegina-store</span>
                                            <span class="cart-pro-price">$109.20 CAD</span>
                                        </div>
                                    </div>
                                    <div class="qty-item">
                                        <div class="center">
                                            <div class="plus-minus">
                                                <span>
                                                    <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                                    <input type="text" name="name" value="1">
                                                    <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                                </span>
                                            </div>
                                            <a href="grid-list.html" class="pro-remove">Remove</a>
                                        </div>
                                    </div>
                                    <div class="all-pro-price">
                                        <span>$109.20 CAD</span>
                                    </div>
                                </div>
                                <div class="other-link">
                                    <ul class="c-link">
                                        <li class="cart-other-link"><a href="grid-list.html">Update cart</a></li>
                                        <li class="cart-other-link"><a href="<?php echo base_url('shop') ?>">Continue shopping</a></li>
                                        <li class="cart-other-link"><a href="index1.html">Clear cart</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="cart-total">
                            <div class="cart-price">
                                <span>Subtotal</span>
                                <span class="total">$78.44 CAD</span>
                            </div>
                            <div class="cart-info">
                                <h4>Shipping info</h4>
                                <form>
                                    <label>Country</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option>---</option>
                                        <option>Afghanistan</option>
                                        <option>Åland Islands</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                        <option>Andorra</option>
                                        <option>Angola</option>
                                        <option>Anguilla</option>
                                        <option>Antigua & Barbuda</option>
                                        <option>Argentina</option>
                                        <option>Armenia</option>
                                        <option>Aruba</option>
                                        <option>Ascension Island</option>
                                        <option>Australia</option>
                                        <option>Austria</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                    </select>
                                    <label>Zip/postal code</label>
                                    <input type="text" name="code" placeholder="Zip/postal code">
                                </form>
                                <a href="javascript:void(0)" class="cart-calculate">Calculate</a>
                            </div>
                            <div class="shop-total">
                                <span>Total</span>
                                <span class="total-amount">$78.44 CAD</span>
                            </div>
                            <a href="<?php echo base_url('checkout') ?>" class="check-link">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cart end -->
        <!-- footer start -->
  <?php include('src/footer.php') ?>