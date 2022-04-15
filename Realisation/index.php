<?php
include "db.php"; 
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>Liquid Beauty</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="css/vendor.css">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="css/utility.css">

    <!--====== App ======-->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="costum-css/costum.css">
 </head>
<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="images/preloader.png" alt=""></div>
    </div>

    <!--====== Main App ======-->
    <div id="app">

        <!--====== Header Wrapper ======-->
        <div class="header-wrapper">

            <!--====== Main Header ======-->
            <header class="header--style-3">

                <!--====== Nav 1 ======-->
                <nav class="primary-nav-wrapper">
                    <div class="container">

                        <!--====== Primary Nav ======-->
                        <div class="primary-nav">

                            <!--====== Main Logo ======-->

                            <a class="main-logo" href="index-3.html">

                                <img src="images/logo/logo-2.png" alt=""></a>
                            <!--====== End - Main Logo ======-->


                            <!--====== Search Form ======-->
                            <form class="main-form">

                                <label for="main-search"></label>

                                <input class="input-text input-text--border-radius input-text--only-white" type="text" id="main-search" placeholder="Search">

                                <button class="btn btn--icon fas fa-search main-search-button" type="submit"></button></form>
                            <!--====== End - Search Form ======-->


                            <!--====== Dropdown Main plugin ======-->
                            <div class="menu-init" id="navigation">

                                <button class="btn btn--icon toggle-button toggle-button--white fas fa-cogs" type="button"></button>

                                <!--====== Menu ======-->
                                <div class="ah-lg-mode">

                                    <span class="ah-close">✕ Close</span>

                                    <!--====== List ======-->
                                
                                    <ul class="ah-list ah-list--design1 ah-list--link-color-white">
                                        <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="categorie">

                                        </li>

                                        <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

                                            <a><i class="far fa-user-circle"></i></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:120px">
                                                <li>
                                                <li>

                                                    <a href="form.php"><i class="fas fa-user-plus u-s-m-r-6"></i>

                                                        <span>Account </span></a></li>
                                               
                                                <li>

                                        
                                            </ul>
                                           
                                                
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Settings">

                                            <a><i class="fas fa-user-cog"></i></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width:120px">
                                                <li class="has-dropdown has-dropdown--ul-right-100">

                                                    <!-- <a>Language<i class="fas fa-angle-down u-s-m-l-6"></i></a> -->

                                                    <!--====== Dropdown ======-->

                                                    <!-- <span class="js-menu-toggle"></span>
                                                    <ul style="width:120px">
                                                        <li>

                                                            <a class="u-c-brand">ENGLISH</a></li>
                                                        <li>

                                                            <a>ARABIC</a></li>
                                                        <li>

                                                            <a>FRANCAIS</a></li>
                                                        <li>

                                                            <a>ESPANOL</a></li>
                                                    </ul> -->
                                                    <!--====== End - Dropdown ======-->
                                                </li>
                                                <li class="has-dropdown has-dropdown--ul-right-100">

                                                    <a>Access.<i class="fas fa-angle-down u-s-m-l-6"></i></a>

                                                    <!--====== Dropdown ======-->

                                                    <span class="js-menu-toggle"></span>
                                                    <ul style="width:225px">
                                                        <li>
                                                            <a class="u-c-brand" href="admin/login.php">Login to Admin Panel </a></li>
                                                        <li>

                                                            <!-- <a>MAD - MOROCCAN DIRHAM </a></li>
                                                        <li> -->

                                                        
                                                    </ul>
                                                    <!--====== End - Dropdown ======-->
                                                </li>
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                        <li data-tooltip="tooltip" data-placement="left" title="Contact">

                                            <a href="tel:+0900901904"><i class="fas fa-phone-volume"></i></a></li>
                                        <li data-tooltip="tooltip" data-placement="left" title="Mail">

                                            <a href="mailto:contact@domain.com"><i class="far fa-envelope"></i></a></li>
                                    </ul>
                                    <!--====== End - List ======-->
                                </div>
                                <!--====== End - Menu ======-->
                            </div>
                            <!--====== End - Dropdown Main plugin ======-->
                        </div>
                        <!--====== End - Primary Nav ======-->
                    </div>
                </nav>
                <!--====== End - Nav 1 ======-->


                <!--====== Nav 2 ======-->
                <nav class="secondary-nav-wrapper">
                    <div class="container">

                        <!--====== Secondary Nav ======-->
                        <div class="secondary-nav">

                            <!--====== Dropdown Main plugin ======-->
                            <div class="menu-init" id="navigation1">

                                <button class="btn btn--icon toggle-mega-text toggle-button" type="button">M</button>

                                <!--====== Menu ======-->
                                <div class="ah-lg-mode">

                                    <span class="ah-close">✕ Close</span>

                                    <!--====== List ======-->
                                    <ul class="ah-list">
                                        <li class="has-dropdown">

                                            <!-- <span class="mega-text">M</span> -->

                                            <!--====== Mega Menu ======-->

                                            <span class="js-menu-toggle"></span>
                                            <div class="mega-menu">
                                                <div class="mega-menu-wrap">
                                                    <div class="mega-menu-list">
                                                        <ul>
                                                            <li class="js-active">

                                                                <a href="shop-side-version-2.html"><i class="fas fa-tv u-s-m-r-6"></i>

                                                                    <span>Electronics</span></a>

                                                                <span class="js-menu-toggle js-toggle-mark"></span></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html"><i class="fas fa-female u-s-m-r-6"></i>

                                                                    <span>Women's Clothing</span></a>

                                                                <span class="js-menu-toggle"></span></li>
                                                            <li>

                                                                <a href="shop-side-version-2.html"><i class="fas fa-male u-s-m-r-6"></i>

                                                                    <span>Men's Clothing</span></a>

                                                                <span class="js-menu-toggle"></span></li>
                                                            <li>

                                                                <a href="index-3.html"><i class="fas fa-utensils u-s-m-r-6"></i>

                                                                    <span>Food & Supplies</span></a>

                                                                <span class="js-menu-toggle"></span></li>
                                                            <li>

                                                                <a href="index-3.html"><i class="fas fa-couch u-s-m-r-6"></i>

                                                                    <span>Furniture & Decor</span></a>

                                                                <span class="js-menu-toggle"></span></li>
                                                            <li>

                                                                <a href="index-3.html"><i class="fas fa-football-ball u-s-m-r-6"></i>

                                                                    <span>Sports & Game</span></a>

                                                                <span class="js-menu-toggle"></span></li>
                                                            <li>

                                                                <a href="index-3.html"><i class="fas fa-heartbeat u-s-m-r-6"></i>

                                                                    <span>Beauty & Health</span></a>

                                                                <span class="js-menu-toggle"></span></li>
                                                        </ul>
                                                    </div>

                                                    <!--====== Electronics ======-->
                                                    <div class="mega-menu-content js-active">

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">3D PRINTER & SUPPLIES</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">3d Printer</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">3d Printing Pen</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">3d Printing Accessories</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">3d Printer Module Board</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">HOME AUDIO & VIDEO</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">TV Boxes</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">TC Receiver & Accessories</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Display Dongle</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Home Theater System</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">MEDIA PLAYERS</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Earphones</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Mp3 Players</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Speakers & Radios</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Microphones</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">VIDEO GAME ACCESSORIES</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Nintendo Video Games Accessories</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Sony Video Games Accessories</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Xbox Video Games Accessories</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                        <br>

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">SECURITY & PROTECTION</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Security Cameras</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Alarm System</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Security Gadgets</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">CCTV Security & Accessories</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">PHOTOGRAPHY & CAMERA</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Digital Cameras</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Sport Camera & Accessories</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Camera Accessories</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Lenses & Accessories</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">ARDUINO COMPATIBLE</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Raspberry Pi & Orange Pi</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Module Board</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Smart Robot</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Board Kits</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">DSLR Camera</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Nikon Cameras</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Canon Camera</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Sony Camera</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">DSLR Lenses</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                        <br>

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <ul>
                                                                    <li class="mega-list-title">

                                                                        <a href="shop-side-version-2.html">NECESSARY ACCESSORIES</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Flash Cards</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Memory Cards</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Flash Pins</a></li>
                                                                    <li>

                                                                        <a href="shop-side-version-2.html">Compact Discs</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-9 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block" href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-0.jpg" alt=""></a></div>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                    </div>
                                                    <!--====== End - Electronics ======-->


                                                    <!--====== Women ======-->
                                                    <div class="mega-menu-content">

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-6 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block" href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-1.jpg" alt=""></a></div>
                                                            </div>
                                                            <div class="col-lg-6 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block" href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-2.jpg" alt=""></a></div>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                        <br>

                                                       
                                               

                                                        <!--====== Mega Menu Row ======-->
                                                        <div class="row">
                                                            <div class="col-lg-6 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block" href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-8.jpg" alt=""></a></div>
                                                            </div>
                                                            <div class="col-lg-6 mega-image">
                                                                <div class="mega-banner">

                                                                    <a class="u-d-block" href="shop-side-version-2.html">

                                                                        <img class="u-img-fluid u-d-block" src="images/banners/banner-mega-9.jpg" alt=""></a></div>
                                                            </div>
                                                        </div>
                                                        <!--====== End - Mega Menu Row ======-->
                                                    </div>
                                                    <!--====== End - Men ======-->


                                                    <!--====== No Sub Categories ======-->
                                                    <div class="mega-menu-content">
                                                        <h5>No Categories</h5>
                                                    </div>
                                                    <!--====== End - No Sub Categories ======-->


                                                    <!--====== No Sub Categories ======-->
                                                    <div class="mega-menu-content">
                                                        <h5>No Categories</h5>
                                                    </div>
                                                    <!--====== End - No Sub Categories ======-->


                                                    <!--====== No Sub Categories ======-->
                                                    <div class="mega-menu-content">
                                                        <h5>No Categories</h5>
                                                    </div>
                                                    <!--====== End - No Sub Categories ======-->


                                                    <!--====== No Sub Categories ======-->
                                                    <div class="mega-menu-content">
                                                        <h5>No Categories</h5>
                                                    </div>
                                                    <!--====== End - No Sub Categories ======-->
                                                </div>
                                            </div>
                                            <!--====== End - Mega Menu ======-->
                                        </li>
                                    </ul>
                                    <!--====== End - List ======-->
                                </div>
                                <!--====== End - Menu ======-->
                            </div>
                            <!--====== End - Dropdown Main plugin ======-->


                            <!--====== Dropdown Main plugin ======-->
                           


                            <!--====== Dropdown Main plugin ======-->
                            <div class="menu-init" id="navigation3">

                                <button class="btn btn--icon toggle-button toggle-button--white fas fa-shopping-bag toggle-button-shop" type="button"></button>

                                <span class="total-item-round">2</span>

                                <!--====== Menu ======-->
                                <div class="ah-lg-mode">

                                    <span class="ah-close">✕ Close</span>

                                    <!--====== List ======-->
                                    <ul class="ah-list ah-list--design1 ah-list--link-color-white">
                                        <li>

                                            <!-- <a href="index-3.html"><i class="fas fa-home u-c-brand"></i></a></li>
                                        <li>

                                            <a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="has-dropdown">

                                            <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>

                                                <span class="total-item-round">2</span></a> -->

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <div class="mini-cart">

                                                <!--====== Mini Product Container ======-->
                                                <div class="mini-product-container gl-scroll u-s-m-b-15">

                                                    <!--====== Card for mini cart ======-->
                                                    <div class="card-mini-product">
                                                        <div class="mini-product">
                                                            <div class="mini-product__image-wrapper">

                                                                <a class="mini-product__link" href="product-detail.html">

                                                                    <img class="u-img-fluid" src="images/product/electronic/product3.jpg" alt=""></a></div>
                                                            <div class="mini-product__info-wrapper">

                                                                <span class="mini-product__category">

                                                                    <a href="shop-side-version-2.html">Electronics</a></span>

                                                                <span class="mini-product__name">

                                                                    <a href="product-detail.html">Yellow Wireless Headphone</a></span>

                                                                <span class="mini-product__quantity">1 x</span>

                                                                <span class="mini-product__price">$8</span></div>
                                                        </div>

                                                        <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                    </div>
                                                    <!--====== End - Card for mini cart ======-->


                                                    <!--====== Card for mini cart ======-->
                                                    <div class="card-mini-product">
                                                        <div class="mini-product">
                                                            <div class="mini-product__image-wrapper">

                                                                <a class="mini-product__link" href="product-detail.html">

                                                                    <img class="u-img-fluid" src="images/product/electronic/product18.jpg" alt=""></a></div>
                                                            <div class="mini-product__info-wrapper">

                                                                <span class="mini-product__category">

                                                                    <a href="shop-side-version-2.html">Electronics</a></span>

                                                                <span class="mini-product__name">

                                                                    <a href="product-detail.html">Nikon DSLR Camera 4k</a></span>

                                                                <span class="mini-product__quantity">1 x</span>

                                                                <span class="mini-product__price">$8</span></div>
                                                        </div>

                                                        <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                    </div>
                                                    <!--====== End - Card for mini cart ======-->


                                                    <!--====== Card for mini cart ======-->
                                                    <div class="card-mini-product">
                                                        <div class="mini-product">
                                                            <div class="mini-product__image-wrapper">

                                                                <a class="mini-product__link" href="product-detail.html">

                                                                    <img class="u-img-fluid" src="images/product/women/product8.jpg" alt=""></a></div>
                                                            <div class="mini-product__info-wrapper">

                                                                <span class="mini-product__category">

                                                                    <a href="shop-side-version-2.html">Women Clothing</a></span>

                                                                <span class="mini-product__name">

                                                                    <a href="product-detail.html">New Dress D Nice Elegant</a></span>

                                                                <span class="mini-product__quantity">1 x</span>

                                                                <span class="mini-product__price">$8</span></div>
                                                        </div>

                                                        <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                    </div>
                                                    <!--====== End - Card for mini cart ======-->


                                                    <!--====== Card for mini cart ======-->
                                                    <div class="card-mini-product">
                                                        <div class="mini-product">
                                                            <div class="mini-product__image-wrapper">

                                                                <a class="mini-product__link" href="product-detail.html">

                                                                    <img class="u-img-fluid" src="images/product/men/product8.jpg" alt=""></a></div>
                                                            <div class="mini-product__info-wrapper">

                                                                <span class="mini-product__category">

                                                                    <a href="shop-side-version-2.html">Men Clothing</a></span>

                                                                <span class="mini-product__name">

                                                                    <a href="product-detail.html">New Fashion D Nice Elegant</a></span>

                                                                <span class="mini-product__quantity">1 x</span>

                                                                <span class="mini-product__price">$8</span></div>
                                                        </div>

                                                        <a class="mini-product__delete-link far fa-trash-alt"></a>
                                                    </div>
                                                    <!--====== End - Card for mini cart ======-->
                                                </div>
                                                <!--====== End - Mini Product Container ======-->


                                                <!--====== Mini Product Statistics ======-->
                                                <div class="mini-product-stat">
                                                    <div class="mini-total">

                                                        <span class="subtotal-text">SUBTOTAL</span>

                                                        <span class="subtotal-value">$16</span></div>
                                                    <div class="mini-action">

                                                        <a class="mini-link btn--e-brand-b-2" href="checkout.html">PROCEED TO CHECKOUT</a>

                                                        <a class="mini-link btn--e-transparent-secondary-b-2" href="cart.html">VIEW CART</a></div>
                                                </div>
                                                <!--====== End - Mini Product Statistics ======-->
                                            </div>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                    </ul>
                                    <!--====== End - List ======-->
                                </div>
                                <!--====== End - Menu ======-->
                            </div>
                            <!--====== End - Dropdown Main plugin ======-->
                        </div>
                        <!--====== End - Secondary Nav ======-->
                    </div>
                </nav>
                <!--====== End - Nav 2 ======-->
            </header>
            <!--====== End - Main Header ======-->
        </div>
        <!--====== End - Header Wrapper ======-->


        <!--====== App Content ======-->
        <div class="app-content">

        <?php 

include "../Challenges/challenge.1/gestion.php";
$gestion = new Gestion();

$data = $gestion->getCartLine();
 foreach($data as $value){ 
//   echo '<br>'. $value->getProduct();
} ?> 


            <!--====== Primary Slider ======-->
            <div class="s-skeleton s-skeleton--h-640 s-skeleton--bg-grey">
                <div class="owl-carousel primary-style-3" id="hero-slider">
                <?php foreach($data as $value){ ?>
                    <div class="hero-slide hero-slide--7">
                        <div class="primary-style-3-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider-content slider-content--animation">

                                            <span class="content-span-1 u-c-white"></span>

                                            <span class="content-span-2 u-c-white"><?php echo $value->getProduct();?></span>
                                            

                                            <span class="content-span-3 u-c-white">Find your routine skincare on best prices</span>

                                            <span class="content-span-4 u-c-white">Starting At </span>

                                                <span class="u-c-brand">$10.00</span></span>

                                            <a class="shop-now-link btn--e-brand" href="form.php">SHOP NOW</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?> 
                  
                </div>
            </div>

   
            <!--====== End - Primary Slider ======-->

            <!-- ====== Removed section ======= -->

            <!--====== Section 3 ======-->
            <div class="u-s-p-b-60">
                
           
                                        

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">RECENT PRODUCTS</h1>

                                    <span class="section__span u-c-silver">NEWLY ADDED PRODUCTS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->

























                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="logged-user/detail.php?id=2">

                                            <img class="aspect__img" src="images/product/women/ampoule.webp" alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"><i class="fas fa-search-plus"></i></a></li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i class="fas fa-plus-circle"></i></a></li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a></li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="shop-side-version-2.html">SKIN CARE</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="product-detail.html">Collagen & Hyaluronic Acid Ampoule</a></span>

                                            <span class="product-r__price">$21.50 </span></div>

                                        <span class="product-r__description">Contains Marine Collagen and Hyaluronic Acid to improve skin elasticity and provide deep hydration to skin. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="logged-user/detail.php?id=3">

                                            <img class="aspect__img" src="images/product/women/Neutrogena Hydro Boost Water Gel Facial Cleanser for Dry or Dehydrated Skin 200ml.jfif" alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"><i class="fas fa-search-plus"></i></a></li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i class="fas fa-plus-circle"></i></a></li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a></li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="shop-side-version-2.html">SKIN CARE</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="product-detail.html">Hydro Boost Hydrating Cleansing Gel</a></span>

                                            <span class="product-r__price">$20.00</span></div>

                                        <span class="product-r__description">Neutrogena Hydro Boost Hydrating Cleansing Gel boosts hydration for soft, supple skin.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="logged-user/detail.php?id=4">

                                            <img class="aspect__img" src="images/product/women/Farmstay Escargot Noblesse Lntensive Skin Care 5 Set.jfif" alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"><i class="fas fa-search-plus"></i></a></li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i class="fas fa-plus-circle"></i></a></li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a></li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="shop-side-version-2.html">SKIN CARE</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="product-detail.html">Farm Stay Escargot Noblesse Intensive Skin Care</a></span>

                                            <span class="product-r__price">$125.00</span></div>

                                        <span class="product-r__description">This product is great for dry skin types especially and keeps the skin beautifully pure and soft.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 u-s-m-b-30">
                                <div class="product-r u-h-100">
                                    <div class="product-r__container">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="logged-user/detail.php?id=6">

                                            <img class="aspect__img" src="images/product/women/Foam Farmstay O2 premium AQUA.jfif" alt=""></a>
                                        <div class="product-r__action-wrap">
                                            <ul class="product-r__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look"><i class="fas fa-search-plus"></i></a></li>
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#add-to-cart"><i class="fas fa-plus-circle"></i></a></li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-heart"></i></a></li>
                                                <li>

                                                    <a href="signin.html"><i class="fas fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-r__info-wrap">

                                        <span class="product-r__category">

                                            <a href="shop-side-version-2.html">SKINCARE</a></span>
                                        <div class="product-r__n-p-wrap">

                                            <span class="product-r__name">

                                                <a href="product-detail.html">O2 Premium Aqua Foam Cleansing</a></span>

                                            <span class="product-r__price">$8.00</span></div>

                                        <span class="product-r__description">Cleanses the skin of the face, does not tighten and does not cause dryness and irritation.</span>
                                    </div>
                                </div>
                            </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 3 ======-->


            <!--====== Section 4 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-16">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">Products Categories : </h1>

                                    <span class="section__span u-c-silver u-s-m-b-16">Find Products based on Categories </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                include "db.php";
          $query = "SELECT * FROM category";
          $result_tasks = mysqli_query($conn, $query);    
          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <ul>
            <li><?php echo $row['Category_Name']; ?></li>
          </ul>
              </a>
            </td>
          </tr>
          <?php } ?>

          <div class="section__intro u-s-m-b-16">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">Products : </h1>
                                    <span class="section__span u-c-silver u-s-m-b-16">Shop Products :  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                
          $query = "SELECT * FROM products";
          $result_tasks = mysqli_query($conn, $query);    
          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <ul>
            <li ><?php echo $row['Name']; ?></li>
            <li><?php echo $row['price']; ?> dh</li>
            <a href="logged-user/detail.php?id=<?php echo $row['id']; ?>">Buy</a>
            <!-- href="logged-user/detail.php?id=2 -->
          </ul>
          <?php } ?>
                <!--====== End - Section Intro ======-->


                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 4 ======-->

            <!--====== Section 5 ======-->>

<!-- === removed section === -->

        <!--====== Main Footer ======-->
        <footer>
            <div class="outer-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="outer-footer__content u-s-m-b-40">

                                <span class="outer-footer__content-title">Contact Us : </span>
                                <div class="outer-footer__text-wrap"><i class="fas fa-home"></i>

                                    <span>Solicode, Tangier - Morocco</span></div>
                                <div class="outer-footer__text-wrap"><i class="fas fa-phone-volume"></i>

                                    <span>(+0) 000 000 000</span></div>
                                <div class="outer-footer__text-wrap"><i class="far fa-envelope"></i>

                                    <span>github.com/tba-adnan</span></div>
                                <div class="outer-footer__social">
                                    <ul>
                                        <li>

                                            <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li>

                                            <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li>

                                            <a class="s-youtube--color-hover" href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li>

                                            <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li>

                                            <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">

                                        <span class="outer-footer__content-title">Information : </span>
                                        <div class="outer-footer__list-wrap">
                                            <ul>
                                                <li>

                                                    <a href="form.php">Account</a></li>
                                                
                                                <li>

                                                    <a href="index.html#">Go back</a></li>
                                                <li>

                                                    
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="outer-footer__content u-s-m-b-40">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="outer-footer__content">

                                <span class="outer-footer__content-title">Join our Newsletter</span>
                                <form class="newsletter">
                                    <div class="u-s-m-b-15">
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="male" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="male">Male</label></div>
                                        </div>
                                        <div class="radio-box newsletter__radio">

                                            <input type="radio" id="female" name="gender">
                                            <div class="radio-box__state radio-box__state--primary">

                                                <label class="radio-box__label" for="female">Female</label></div>
                                        </div>
                                    </div>
                                    <div class="newsletter__group">

                                        <label for="newsletter"></label>

                                        <input class="input-text input-text--only-white" type="text" id="newsletter" placeholder="Enter your Email">

                                        <button class="btn btn--e-brand newsletter__btn" type="submit">SUBSCRIBE</button></div>

                                    <span class="newsletter__text">Subscribe to the mailing list to receive updates on promotions, new arrivals, discount and coupons.</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="lower-footer__content">
                                <div class="lower-footer__copyright">

                                    <span>Copyright © 2022 - by Cutie & ADN</span>


                                    <span>All Right Reserved</span></div>
                                <div class="lower-footer__payment">
                                    <ul>
                                        <li><i class="fab fa-cc-stripe"></i></li>
                                        <li><i class="fab fa-cc-paypal"></i></li>
                                        <li><i class="fab fa-cc-mastercard"></i></li>
                                        <li><i class="fab fa-cc-visa"></i></li>
                                        <li><i class="fab fa-cc-discover"></i></li>
                                        <li><i class="fab fa-cc-amex"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--====== Modal Section ======-->


        <!--====== Quick Look Modal ======-->
        <div class="modal fade" id="quick-look">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">

                                <!--====== Product Breadcrumb ======-->
                                <div class="pd-breadcrumb u-s-m-b-30">
                                    <ul class="pd-breadcrumb__list">
                                        <li class="has-separator">

                                            <a href="index.hml">Home</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">Electronics</a></li>
                                        <li class="has-separator">

                                            <a href="shop-side-version-2.html">DSLR Cameras</a></li>
                                        <li class="is-marked">

                                            <a href="shop-side-version-2.html">Nikon Cameras</a></li>
                                    </ul>
                                </div>
                                <!--====== End - Product Breadcrumb ======-->


                                <!--====== Product Detail ======-->
                                <div class="pd u-s-m-b-30">
                                    <div class="pd-wrap">
                                        <div id="js-product-detail-modal">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-2.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-3.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-4.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-5.jpg" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-t-15">
                                        <div id="js-product-detail-modal-thumbnail">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-1.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-2.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-3.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-4.jpg" alt=""></div>
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product-d-5.jpg" alt=""></div>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Product Detail ======-->
                            </div>
                            <div class="col-lg-7">

                                <!--====== Product Right Side Details ======-->
                                <div class="pd-detail">
                                    <div>

                                        <span class="pd-detail__name">Nikon Camera 4k Lens Zoom Pro</span></div>
                                    <div>
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__price">$6.99</span>

                                            <span class="pd-detail__discount">(76% OFF)</span><del class="pd-detail__del">$28.97</del></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                            <span class="pd-detail__review u-s-m-l-4">

                                                <a href="product-detail.html">23 Reviews</a></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__stock">200 in stock</span>

                                            <span class="pd-detail__left">Only 2 left</span></div>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__preview-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span></div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                                <a href="signin.html">Add to Wishlist</a>

                                                <span class="pd-detail__click-count">(222)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__click-wrap"><i class="far fa-envelope u-s-m-r-6"></i>

                                                <a href="signin.html">Email me When the price drops</a>

                                                <span class="pd-detail__click-count">(20)</span></span></div>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <ul class="pd-social-list">
                                            <li>

                                                <a class="s-fb--color-hover" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li>

                                                <a class="s-tw--color-hover" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li>

                                                <a class="s-insta--color-hover" href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li>

                                                <a class="s-wa--color-hover" href="#"><i class="fab fa-whatsapp"></i></a></li>
                                            <li>

                                                <a class="s-gplus--color-hover" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="u-s-m-b-15">
                                        <form class="pd-detail__form">
                                            <div class="pd-detail-inline-2">
                                                <div class="u-s-m-b-15">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <span class="input-counter__minus fas fa-minus"></span>

                                                        <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">

                                                        <span class="input-counter__plus fas fa-plus"></span></div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <button class="btn btn--e-brand-b-2" type="submit">Add to Cart</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                        <ul class="pd-detail__policy-list">
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Buyer Protection.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Full Refund if you don't receive your order.</span></li>
                                            <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                <span>Returns accepted if product not as described.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Product Right Side Details ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Quick Look Modal ======-->


        <!--====== Add to Cart Modal ======-->
        <div class="modal fade" id="add-to-cart">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-radius modal-shadow">

                    <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="success u-s-m-b-30">
                                    <div class="success__text-wrap"><i class="fas fa-check"></i>

                                        <span>Item is added successfully!</span></div>
                                    <div class="success__img-wrap">

                                        <img class="u-img-fluid" src="images/product/electronic/product1.jpg" alt=""></div>
                                    <div class="success__info-wrap">

                                        <span class="success__name">Beats Bomb Wireless Headphone</span>

                                        <span class="success__quantity">Quantity: 1</span>

                                        <span class="success__price">$170.00</span></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="s-option">

                                    <span class="s-option__text">1 item (s) in your cart</span>
                                    <div class="s-option__link-box">

                                        <a class="s-option__link btn--e-white-brand-shadow" data-dismiss="modal">CONTINUE SHOPPING</a>

                                        <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">VIEW CART</a>

                                        <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED TO CHECKOUT</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Add to Cart Modal ======-->


        <!--====== Newsletter Subscribe Modal ======-->
        <div class="modal fade new-l" id="newsletter-modal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal--shadow">

                    <button class="btn new-l__dismiss fas fa-times" type="button" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <div class="row u-s-m-x-0">
                            <div class="col-lg-6 new-l__col-1 u-s-p-x-0">

                                <a class="new-l__img-wrap u-d-block" href="shop-side-version-2.html">

                                    <img class="u-img-fluid u-d-block" src="images/costum-images/Herbivore Rose Quartz Illuminating Body Oil.jfif" alt=""></a></div>
                            <div class="col-lg-6 new-l__col-2">
                                <div class="new-l__section u-s-m-t-30">
                                    <div class="u-s-m-b-8 new-l--center">
                                        <h3 class="new-l__h3">Newsletter</h3>
                                    </div>
                                    <div class="u-s-m-b-30 new-l--center">
                                        <p class="new-l__p1">Sign up for emails to get the scoop on new arrivals, special sales and more.</p>
                                    </div>
                                    <form class="new-l__form">
                                        <div class="u-s-m-b-15">

                                            <input class="news-l__input" type="text" placeholder="E-mail Address"></div>
                                        <div class="u-s-m-b-15">

                                            <button class="btn btn--e-brand-b-2" type="submit">Sign up!</button></div>
                                    </form>
                                    <div class="u-s-m-b-15 new-l--center">
                                        <p class="new-l__p2">By Signing up, you agree to receive Reshop offers,<br />promotions and other commercial messages. You may unsubscribe at any time.</p>
                                    </div>
                                    <div class="u-s-m-b-15 new-l--center">

                                        <a class="new-l__link" data-dismiss="modal">No Thanks</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Newsletter Subscribe Modal ======-->
        <!--====== End - Modal Section ======-->
    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="js/app.js"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>
</html>