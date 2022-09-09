<nav class="sidebar dark_sidebar">
        <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="<?php echo base_url('admin/Admin/dashboard') ?>"><img src="<?php echo base_url() ?>adminAssets/img/logo_white.png" alt=""></a>
            <a class="small_logo" href="<?php echo base_url('admin/Admin/dashboard') ?>"><img src="<?php echo base_url() ?>adminAssets/img/mini_logo.png" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?php echo base_url() ?>adminAssets/img/menu-icon/1.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Dashboard </span>
                    </div>
                </a>
                <ul>
                    <li><a href="index_2.html">Default</a></li>
                    <li><a href="index_3.html">Light Sidebar</a></li>
                    <li><a href="index.html">Dark Sidebar</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?php echo base_url() ?>adminAssets/img/menu-icon/1.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Products From </span>
                    </div>
                </a>
                <ul>
                    <li><a href="<?php echo base_url('admin/Admin/product_category') ?>">Add Product Category</a></li>
                    <li><a href="<?php echo base_url('admin/Admin/addProduct') ?>">Products</a></li>
                    
                </ul>
            </li>
            <li class="">
                <a href="crypto_wallet.html" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?php echo base_url() ?>adminAssets/img/menu-icon/2.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Crypto Wallet</span>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="buy_sell.html" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="<?php echo base_url() ?>adminAssets/img/menu-icon/3.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Buy & Sell</span>
                    </div>
                </a>
            </li>
            
        </ul>
    </nav>