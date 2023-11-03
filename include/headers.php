<!DOCTYPE html>
<html lang="en">

<?php
include("config/db_con.php");

session_start();
ob_start();
$user = new crud;
?>

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="Haridas" />

    <!-- FAVICONS ICON -->
    <link rel="icon" type="image/x-icon" href="https://jayamwebsolutions.com/images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Bookland Book Store Ecommerce Website</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/icons/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <style>
        .preloader-wrapper-1 {
            display: none;
        }

        .DZ-theme-btn {
            display: none !important;
        }

        .books-card .dz-media img {
            width: 400px;
            height: 150px;
            object-fit: cover;
        }

        canvas {
            /*prevent interaction with the canvas*/
            pointer-events: none;
        }

        .captchaInput {
            padding: 8px 10px;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            /* width: 40px; */
            box-sizing: border-box;
        }

        .validBtn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 8px 20px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }

        .validedBtn {
            background-color: blue;
            border: none;
            color: white;
            padding: 8px 20px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>

</head>

<body>

    <div class="page-wraper">
        <div id="loading-area" class="preloader-wrapper-1">
            <div class="preloader-inner">
                <div class="preloader-shade"></div>
                <div class="preloader-wrap"></div>
                <div class="preloader-wrap wrap2"></div>
                <div class="preloader-wrap wrap3"></div>
                <div class="preloader-wrap wrap4"></div>
                <div class="preloader-wrap wrap5"></div>
            </div>
        </div>

        <!-- Header -->
        <header class="site-header mo-left header style-1">
            <!-- Main Header -->
            <div class="header-info-bar">
                <div class="container clearfix">
                    <!-- Website Logo -->
                    <div class="logo-header logo-dark">
                        <a href="index.html"><img src="https://jayamwebsolutions.com/images/logo.png" alt="logo"></a>
                    </div>
                    <!-- EXTRA NAV -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <ul class="navbar-nav header-right">
                                <li class="nav-item">
                                  
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="nav-link box cart-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                        </svg>
                                        <span class="badge">5</span>
                                    </button>
                                    <ul class="dropdown-menu cart-list">
                                        <li class="cart-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="books-detail.html">
                                                        <img alt="" class="media-object" src="images/books/small/pic1.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="dz-title"><a href="books-detail.html" class="media-heading">Real Life</a></h6>
                                                    <span class="dz-price">$28.00</span>
                                                    <span class="item-close">&times;</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cart-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="books-detail.html">
                                                        <img alt="" class="media-object" src="images/books/small/pic2.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="dz-title"><a href="books-detail.html" class="media-heading">Home</a></h6>
                                                    <span class="dz-price">$28.00</span>
                                                    <span class="item-close">&times;</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cart-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="books-detail.html">
                                                        <img alt="" class="media-object" src="images/books/small/pic3.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="dz-title"><a href="books-detail.html" class="media-heading">Such a fun age</a></h6>
                                                    <span class="dz-price">$28.00</span>
                                                    <span class="item-close">&times;</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="cart-item text-center">
                                            <h6 class="text-secondary">Totle = $500</h6>
                                        </li>
                                        <li class="text-center d-flex">
                                            <a href="shop-cart.html" class="btn btn-sm btn-primary me-2 btnhover w-100">View Cart</a>
                                            <a href="shop-checkout.html" class="btn btn-sm btn-outline-primary btnhover w-100">Checkout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown profile-dropdown  ms-4">
                                    <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="images/profile1.jpg" alt="/">
                                        <div class="profile-info">
                                            <h6 class="title">Haridas</h6>
                                            <span>haridasnamakkal@gmail.com</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu py-0 dropdown-menu-end">
                                        <div class="dropdown-header">
                                            <h6 class="m-0">Brian</h6>
                                            <span>info@gmail.com</span>
                                        </div>
                                        <div class="dropdown-body">
                                            <a href="my-profile.html" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                                                    </svg>
                                                    <span class="ms-2">Profile</span>
                                                </div>
                                            </a>
                                            <a href="shop-cart.html" class="dropdown-item d-flex justify-content-between align-items-center ai-icon">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 24 24" width="20px" fill="#000000">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z" />
                                                    </svg>
                                                    <span class="ms-2">My Order</span>
                                                </div>
                                            </a>
                                          
                                        </div>
                                        <div class="dropdown-footer">
                                            <?php if (isset($_SESSION['user_id'])) { ?>
                                                <a class="btn btn-primary w-100 btnhover btn-sm" href="logout.php">Log
                                                    Out</a>
                                            <?php } else { ?>
                                                <button class="btn btn-primary w-100 btnhover btn-sm" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Log
                                                in</button>
                                            <button class="btn btn-primary w-100 btnhover btn-sm" data-bs-target="#registerModal" data-bs-toggle="modal" data-bs-dismiss="modal">Register</button>
                                            <?php } ?>

                                           
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
            <!-- Main Header End -->

            <!-- Main Header -->
            <div class="sticky-header main-bar-wraper navbar-expand-lg">
                <div class="main-bar clearfix">
                    <div class="container clearfix">
                        <!-- Website Logo -->
                        <div class="logo-header logo-dark">
                            <a href="index.html"><img src="https://jayamwebsolutions.com/images/logo.png" alt="logo"></a>
                        </div>

                        <!-- Nav Toggle Button -->
                        <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>

                        <!-- EXTRA NAV -->


                        <!-- Main Nav -->
                        <div class="header-nav navbar-collapse collapse justify-content-center" id="navbarNavDropdown">
                            <div class="logo-header logo-dark">
                                <a href="index.html"><img src="images/logo.png" alt=""></a>
                            </div>
                            <form class="search-input">
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
                                    <button class="btn" type="button"><i class="flaticon-loupe"></i></button>
                                </div>
                            </form>
                            <ul class="nav navbar-nav">
                                <li class="sub-menu-down"><a href="<?= $base_url ?>"><span>Home</span></a>

                                </li>
                                <li><a href="<?= $base_url ?>"><span>About Us</span></a></li>
                                <li class="sub-menu-down"><a href="javascript:void(0);"><span>Pages</span></a>

                                </li>
                                <li class="sub-menu-down"><a href="javascript:void(0);"><span>Shop</span></a>

                                </li>

                                <li><a href="<?= $base_url ?>"><span>Contact Us</span></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Header End -->

        </header>
        <!-- Header End -->

        <!-- login models -->
        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-flex d-flex  flex-column justify-content-between">

                    <div class="leftModal">
                        <img src="https://jayamwebsolutions.com/images/logo.png" alt="logo">
                    </div>
                    <div class="rightModal">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">Login </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="login-form">
                                <div class="loginerror">
                                </div>
                                <label for="">Email</label>
                                <input type="email" name="email" id="user_email" require class="form-control" placeholder="Enter Email Address">
                                <hr>

                                <label for="">Password</label>
                                <input type="number" name="password" id="user_password" require class="form-control" placeholder="Password">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-dark" id="login">Login</button>
                            <!-- data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"  data-bs-dismiss="modal" -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- register modal -->
        <div class="modal fade" id="registerModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-flex d-flex  flex-column justify-content-between">

                    <div class="leftModal">
                        <img src="https://jayamwebsolutions.com/images/logo.png" alt="logo">
                    </div>
                    <div class="rightModal">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">Register </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="register-form">
                                <div class="error">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Name</label>
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter Your Name">
                                        <label for="">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                                        <label for="">Confirm Password</label>
                                        <input type="password" name="c_password" id="c_password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="msg text-danger"></div>
                                    <div class="col-3">
                                        <div id="captcha">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" class="captchaInput" placeholder="Captcha" id="cpatchaTextBox" />
                                        <button onClick="validateCaptcha()" id="validBtn" class="validBtn">Submit</button>
                                    </div>

                                </div>

                            </form>
                        </div>
                        <div class="modal-footer" id="regEvent">
                            <!-- <button class="btn btn-success" id="register">Register</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>