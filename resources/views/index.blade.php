@extends('layouts.app')

@section('title', 'Makro')

@section('content')

<div class="body_wrap">


<!-- backtotop - start -->
<div id="thetop"></div>
<div id="backtotop">
    <a href="#" id="scroll">
        <i class="fal fa-arrow-up"></i>
        <i class="fal fa-arrow-up"></i>
    </a>
</div>
<!-- backtotop - end -->

<!-- preloader - start -->
<!--
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="K" class="letters-loading">
                    K
                </span>
                <span data-text-preloader="R" class="letters-loading">
                    R
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!-- preloader - end -->


<!-- header_section - start
================================================== -->
<header id="header_section" class="header_section sticky_header d-flex align-items-center clearfix">
    <div class="container w-1520">
        <div class="row align-items-center">

            <div class="col-lg-2 col-md-12">
                <div class="brand_logo">
                    <a href="http://127.0.0.1:8000" class="brand_link">
                        <img src="assets/images/logo/logo_2.png" alt="logo_not_found">
                        <img src="assets/images/logo/logo_2.png" alt="logo_not_found">
                    </a>
                    <button type="button" class="menu_btn">
                        <i class="fal fa-bars"></i>
                    </button>
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <nav class="main_menu ul_li_center clearfix">
                    <ul class="clearfix">
                        <li class="active menu_item_has_child">
                            <a href="#!">Home</a>
                            <div class="mega_menu">
                                <div class="home_items_submenu">
                                    <div class="row">
                                        <div class="items_col active">
                                            <a href="home_agency.html" class="page_item">
                                                <span>
                                                    <img src="assets/images/pages/home_pages/01_home_1_agency.jpg" alt="image_not_found">
                                                </span>
                                                <small>Agency</small>
                                            </a>
                                        </div>

                                        <div class="items_col">
                                            <a href="home_app_landing.html" class="page_item">
                                                <span>
                                                    <img src="assets/images/pages/home_pages/01_home_2_app_landing.jpg" alt="image_not_found">
                                                </span>
                                                <small>App Landing</small>
                                            </a>
                                        </div>

                                        <div class="items_col">
                                            <a href="home_chat.html" class="page_item">
                                                <span>
                                                    <img src="assets/images/pages/home_pages/01_home_3_chat.jpg" alt="image_not_found">
                                                </span>
                                                <small>Chat</small>
                                            </a>
                                        </div>

                                        <div class="items_col">
                                            <a href="home_digital_agency.html" class="page_item">
                                                <span>
                                                    <img src="assets/images/pages/home_pages/01_home_4_digital_agency.jpg" alt="image_not_found">
                                                </span>
                                                <small>Digital Agency</small>
                                            </a>
                                        </div>

                                        <div class="items_col">
                                            <a href="home_digital_marketing.html" class="page_item">
                                                <span>
                                                    <img src="assets/images/pages/home_pages/01_home_5_digital_marketing.jpg" alt="image_not_found">
                                                </span>
                                                <small>Digital Marketing</small>
                                            </a>
                                        </div>

                                        <div class="items_col">
                                            <a href="home_hr_management.html" class="page_item">
                                                <span>
                                                    <img src="assets/images/pages/home_pages/01_home_6_HR_management.jpg" alt="image_not_found">
                                                </span>
                                                <small>HR Management</small>
                                            </a>
                                        </div>

                                        <div class="items_col">
                                            <a href="home_payment.html" class="page_item">
                                                <span>
                                                    <img src="assets/images/pages/home_pages/01_home_7_payment.jpg" alt="image_not_found">
                                                </span>
                                                <small>Payment</small>
                                            </a>
                                        </div>

                                        <div class="items_col">
                                            <a href="home_project_management.html" class="page_item">
                                                <span>
                                                    <img src="assets/images/pages/home_pages/01_home_8_project_management.jpg" alt="image_not_found">
                                                </span>
                                                <small>Project Management</small>
                                            </a>
                                        </div>

                                        <div class="items_col">
                                            <a href="home_saas.html" class="page_item">
                                                <span>
                                                    <img src="assets/images/pages/home_pages/01_home_9_saas.jpg" alt="image_not_found">
                                                </span>
                                                <small>SAAS</small>
                                            </a>
                                        </div>

                                        <div class="items_col">
                                            <a href="home_software.html" class="page_item">
                                                <span>
                                                    <img src="assets/images/pages/home_pages/01_home_10_software.jpg" alt="image_not_found">
                                                </span>
                                                <small>Software</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="menu_item_has_child">
                            <a href="pricing.html">Portfolio</a>
                            <div class="mega_menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="menu_list ul_li_block clearfix">
                                                <h3 class="list_title">Portfolio Grid</h3>
                                                <ul class="clearfix">
                                                    <li><a href="portfolio_fullimage_2_column.html">Full Image (2 Column)</a></li>
                                                    <li><a href="portfolio_fullimage_3_column.html">Full Image (3 Column)</a></li>
                                                    <li><a href="portfolio_fullimage_4_column.html">Full Image (4 Column)</a></li>

                                                    <li><a href="portfolio_grid_2_column.html">Grid Style (2 Column)</a></li>
                                                    <li><a href="portfolio_grid_3_column.html">Grid Style (3 Column)</a></li>
                                                    <li><a href="portfolio_grid_4_column.html">Grid Style (4 Column)</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="menu_list ul_li_block clearfix">
                                                <h3 class="list_title">Portfolio Fluid</h3>
                                                <ul class="clearfix">
                                                    <li><a href="portfolio_fullimage_fullwidth_3_column.html">Full Image (3 Column)</a></li>
                                                    <li><a href="portfolio_fullimage_fullwidth_4_column.html">Full Image (4 Column)</a></li>

                                                    <li><a href="portfolio_grid_fullwidth_3_column.html">Grid Style (3 Column)</a></li>
                                                    <li><a href="portfolio_grid_fullwidth_4_column.html">Grid Style (4 Column)</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="menu_list ul_li_block clearfix">
                                                <h3 class="list_title">Portfolio Masonry</h3>
                                                <ul class="clearfix">
                                                    <li><a href="portfolio_fullimage_masonry_2_column.html">Full Image (2 Column)</a></li>
                                                    <li><a href="portfolio_fullimage_masonry_3_column.html">Full Image (3 Column)</a></li>
                                                    <li><a href="portfolio_fullimage_masonry_4_column.html">Full Image (4 Column)</a></li>

                                                    <li><a href="portfolio_grid_masonry_2_column.html">Grid Style (2 Column)</a></li>
                                                    <li><a href="portfolio_grid_masonry_3_column.html">Grid Style (3 Column)</a></li>
                                                    <li><a href="portfolio_grid_masonry_4_column.html">Grid Style (4 Column)</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="menu_list ul_li_block clearfix">
                                                <h3 class="list_title">Portfolio Details</h3>
                                                <ul class="clearfix">
                                                    <li><a href="portfolio_details_1.html">Portfolio Details V.1</a></li>
                                                    <li><a href="portfolio_details_2.html">Portfolio Details V.2</a></li>
                                                    <li><a href="portfolio_details_3.html">Portfolio Details V.3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="menu_item_has_child">
                            <a href="pricing.html">Gallery</a>
                            <ul class="submenu">
                                <li><a href="gallery_fullimage_2_column.html">Grid (2 Column)</a></li>
                                <li><a href="gallery_fullimage_3_column.html">Grid (3 Column)</a></li>
                                <li><a href="gallery_fullimage_4_column.html">Grid (4 Column)</a></li>

                                <li><a href="gallery_fullimage_fullwidth_3_column.html">Full Width (3 Column)</a></li>
                                <li><a href="gallery_fullimage_fullwidth_4_column.html">Full Width (4 Column)</a></li>

                                <li><a href="gallery_fullimage_masonry_2_column.html">Masonry (2 Column)</a></li>
                                <li><a href="gallery_fullimage_masonry_3_column.html">Masonry (3 Column)</a></li>
                                <li><a href="gallery_fullimage_masonry_4_column.html">Masonry (4 Column)</a></li>
                            </ul>
                        </li>

                        <li class="menu_item_has_child">
                            <a href="#!">Pages</a>
                            <ul class="submenu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="process.html">Process</a></li>
                                <li class="menu_item_has_child">
                                    <a href="#!">Services</a>
                                    <ul class="submenu">
                                        <li><a href="service_1.html">Service V.1</a></li>
                                        <li><a href="service_2.html">Service V.2</a></li>
                                        <li><a href="service_3.html">Service V.3</a></li>
                                    </ul>
                                </li>
                                <li class="menu_item_has_child">
                                    <a href="#!">Casestudy</a>
                                    <ul class="submenu">
                                        <li><a href="case_study.html">Casestudy</a></li>
                                        <li><a href="case_study_details.html">Casestudy Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu_item_has_child">
                                    <a href="#!">Jobs</a>
                                    <ul class="submenu">
                                        <li><a href="job.html">Job</a></li>
                                        <li><a href="job_details.html">Job Details</a></li>
                                        <li><a href="job_apply.html">Job Apply</a></li>
                                    </ul>
                                </li>
                                <li class="menu_item_has_child">
                                    <a href="#!">F.A.Q.</a>
                                    <ul class="submenu">
                                        <li><a href="faq_1.html">F.A.Q. V.1</a></li>
                                        <li><a href="faq_2.html">F.A.Q. V.2</a></li>
                                    </ul>
                                </li>
                                <li class="menu_item_has_child">
                                    <a href="#!">Register</a>
                                    <ul class="submenu">
                                        <li><a href="sign_up.html">Sign Up</a></li>
                                        <li><a href="sign_in.html">Sign In</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>

                        <li class="menu_item_has_child">
                            <a href="#!">News</a>
                            <ul class="submenu">
                                <li><a href="blog_list.html">Blog List</a></li>
                                <li class="menu_item_has_child">
                                    <a href="#!">Blog Grid</a>
                                    <ul class="submenu">
                                        <li><a href="blog_grid_1.html">Blog Grid V.1</a></li>
                                        <li><a href="blog_grid_2.html">Blog Grid V.2</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog_masonry.html">Blog Masonry</a></li>
                                <li><a href="blog_details.html">Blog Details</a></li>
                            </ul>
                        </li>

                        <li class="menu_item_has_child">
                            <a href="#!">Shop</a>
                            <ul class="submenu">
                                <li><a href="shop_grid.html">Shop Grid</a></li>
                                <li><a href="shop_list.html">Shop List</a></li>
                                <li><a href="shop_details.html">Shop Details</a></li>
                                <li><a href="shop_cart.html">Shop Cart</a></li>
                                <li><a href="shop_checkout.html">Shop Checkout</a></li>
                                <li><a href="shop_wishlist.html">Shop Wishlist</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-2 col-md-12">
            
                <a href="{{ route('site.login') }}" class="btn bg_white float-right">Acessar</a>
            </div>
            
        </div>
    </div>
</header>

<!-- mobile sidebar menu - start -->
<div class="sidebar-menu-wrapper">
    <div id="mobile_menu" class="mobile_menu">

        <div class="brand_logo mb-50 clearfix">
            <a href="http://127.0.0.1:8000" class="brand_link">
                <img src="assets/images/logo/logo_2.png" alt="logo_not_found">
            </a>
            <span class="close_btn"><i class="fal fa-times"></i></span>
        </div>

        <div class="mobile_menu_dropdown menu_list ul_li_block mp_balancing mb-50 clearfix">
            <ul class="clearfix">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                    <ul class="dropdown-menu">
                        <li><a href="home_agency.html">Agency</a></li>
                        <li><a href="home_app_landing.html">App Landing</a></li>
                        <li><a href="home_chat.html">Chat</a></li>
                        <li><a href="home_digital_agency.html">Digital Agency</a></li>
                        <li><a href="home_digital_marketing.html">Digital Marketing</a></li>
                        <li><a href="home_hr_management.html">HR Management</a></li>
                        <li><a href="home_payment.html">Payment</a></li>
                        <li><a href="home_project_management.html">Project Management</a></li>
                        <li><a href="home_saas.html">SAAS</a></li>
                        <li><a href="home_software.html">Software</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio Grid</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio_fullimage_2_column.html">Full Image (2 Column)</a></li>
                                <li><a href="portfolio_fullimage_3_column.html">Full Image (3 Column)</a></li>
                                <li><a href="portfolio_fullimage_4_column.html">Full Image (4 Column)</a></li>

                                <li><a href="portfolio_grid_2_column.html">Grid Style (2 Column)</a></li>
                                <li><a href="portfolio_grid_3_column.html">Grid Style (3 Column)</a></li>
                                <li><a href="portfolio_grid_4_column.html">Grid Style (4 Column)</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio Fluid</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio_fullimage_fullwidth_3_column.html">Full Image Fluid (3 Column)</a></li>
                                <li><a href="portfolio_fullimage_fullwidth_4_column.html">Full Image Fluid (4 Column)</a></li>

                                <li><a href="portfolio_grid_fullwidth_3_column.html">Grid Style Fluid (3 Column)</a></li>
                                <li><a href="portfolio_grid_fullwidth_4_column.html">Grid Style Fluid (4 Column)</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio Masonry</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio_fullimage_masonry_2_column.html">Full Image Masonry (2 Column)</a></li>
                                <li><a href="portfolio_fullimage_masonry_3_column.html">Full Image Masonry (3 Column)</a></li>
                                <li><a href="portfolio_fullimage_masonry_4_column.html">Full Image Masonry (4 Column)</a></li>

                                <li><a href="portfolio_grid_masonry_2_column.html">Grid Style Masonry (2 Column)</a></li>
                                <li><a href="portfolio_grid_masonry_3_column.html">Grid Style Masonry (3 Column)</a></li>
                                <li><a href="portfolio_grid_masonry_4_column.html">Grid Style Masonry (4 Column)</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio Details</a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio_details_1.html">Portfolio Details V.1</a></li>
                                <li><a href="portfolio_details_2.html">Portfolio Details V.2</a></li>
                                <li><a href="portfolio_details_3.html">Portfolio Details V.3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery Pages</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery Grid</a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery_fullimage_2_column.html">Full Image (2 Column)</a></li>
                                <li><a href="gallery_fullimage_3_column.html">Full Image (3 Column)</a></li>
                                <li><a href="gallery_fullimage_4_column.html">Full Image (4 Column)</a></li>

                                <li><a href="gallery_grid_2_column.html">Grid Style (2 Column)</a></li>
                                <li><a href="gallery_grid_3_column.html">Grid Style (3 Column)</a></li>
                                <li><a href="gallery_grid_4_column.html">Grid Style (4 Column)</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery Fluid</a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery_fullimage_fullwidth_3_column.html">Full Image Fluid (3 Column)</a></li>
                                <li><a href="gallery_fullimage_fullwidth_4_column.html">Full Image Fluid (4 Column)</a></li>

                                <li><a href="gallery_grid_fullwidth_3_column.html">Grid Style Fluid (3 Column)</a></li>
                                <li><a href="gallery_grid_fullwidth_4_column.html">Grid Style Fluid (4 Column)</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery Masonry</a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery_fullimage_masonry_2_column.html">Full Image Masonry (2 Column)</a></li>
                                <li><a href="gallery_fullimage_masonry_3_column.html">Full Image Masonry (3 Column)</a></li>
                                <li><a href="gallery_fullimage_masonry_4_column.html">Full Image Masonry (4 Column)</a></li>

                                <li><a href="gallery_grid_masonry_2_column.html">Grid Style Masonry (2 Column)</a></li>
                                <li><a href="gallery_grid_masonry_3_column.html">Grid Style Masonry (3 Column)</a></li>
                                <li><a href="gallery_grid_masonry_4_column.html">Grid Style Masonry (4 Column)</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery Details</a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery_details_1.html">Gallery Details V.1</a></li>
                                <li><a href="gallery_details_2.html">Gallery Details V.2</a></li>
                                <li><a href="gallery_details_3.html">Gallery Details V.3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li><a href="about.html">About Us</a></li>
                <li><a href="pricing.html">Pricing Plans</a></li>
                <li><a href="process.html">Process</a></li>

                <li class="dropdown">
                    <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">3rd Level Dropdown</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Example V.1</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Example V.1.1</a></li>
                                <li><a href="#">Example V.1.2</a></li>
                                <li><a href="#">Example V.1.3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Example V.2</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Example V.2.1</a></li>
                                <li><a href="#">Example V.2.2</a></li>
                                <li><a href="#">Example V.2.3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Example V.3</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Example V.3.1</a></li>
                                <li><a href="#">Example V.3.2</a></li>
                                <li><a href="#">Example V.3.3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                        <li><a href="service_1.html">Service V.1</a></li>
                        <li><a href="service_2.html">Service V.2</a></li>
                        <li><a href="service_3.html">Service V.3</a></li>
                        <li><a href="case_study.html">Case Study</a></li>
                        <li><a href="case_study_details.html">Case Study Details</a></li>
                        <li><a href="faq_1.html">F.A.Q. V.1</a></li>
                        <li><a href="faq_2.html">F.A.Q. V.2</a></li>
                        <li><a href="job.html">Jobs</a></li>
                        <li><a href="job_details.html">Job Details</a></li>
                        <li><a href="job_apply.html">Job Apply</a></li>
                        <li><a href="team.html">Creative Team</a></li>
                        <li><a href="sign_in.html">Sign In</a></li>
                        <li><a href="sign_up.html">Sign Up</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                    <ul class="dropdown-menu">
                        <li><a href="shop_grid.html">Shop Grid</a></li>
                        <li><a href="shop_list.html">Shop List</a></li>
                        <li><a href="shop_details.html">Shop Details</a></li>
                        <li><a href="shop_cart.html">Shop Cart</a></li>
                        <li><a href="shop_checkout.html">Shop Checkout</a></li>
                        <li><a href="shop_wishlist.html">Shop Wishlist</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a>
                    <ul class="dropdown-menu">
                        <li><a href="blog_list.html">Blog List</a></li>
                        <li><a href="blog_grid_1.html">Blog Grid V.1</a></li>
                        <li><a href="blog_grid_2.html">Blog Grid V.2</a></li>
                        <li><a href="blog_masonry.html">Blog Masonry</a></li>
                        <li><a href="blog_details.html">Blog Details</a></li>
                    </ul>
                </li>

                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>

        <a href="{{ route('site.register') }}" class="btn bg_default_blue">Cadastrar</a>

    </div>
    <div class="overlay"></div>
</div>
<!-- mobile sidebar menu - end -->

<!-- header_section - end
================================================== -->


<!-- main body - start
================================================== -->
<main>


    <!-- banner_section - start
    ================================================== -->
    <section id="banner_section" class="banner_section agency_banner deco_wrap d-flex align-items-center clearfix">

        <div class="container w-1520">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="col-lg-7 col-md-7 col-sm-8 order-last">
                    <div class="banner_image scene">
                        <div class="big_image">
                            <div class="layer" data-depth="0.1">
                                <div data-aos="fade-up" data-aos-delay="500">
                                    <img src="assets/images/banner/01_agency/img_1.png" alt="image_not_found" data-parallax='{"y" : 30}'>
                                </div>
                            </div>
                        </div>
                        <div class="leaf_1">
                            <div class="layer" data-depth="0.2">
                                <div data-aos="fade-up" data-aos-delay="600">
                                    <img src="assets/images/banner/01_agency/shape_6.png" alt="Leaf_Image" data-parallax='{"y" : 50}'>
                                </div>
                            </div>
                        </div>
                        <div class="leaf_2">
                            <div class="layer" data-depth="0.2">
                                <div data-aos="fade-up" data-aos-delay="700">
                                    <img src="assets/images/banner/01_agency/shape_7.png" alt="Leaf_Image" data-parallax='{"y" : 60}'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 col-sm-8">
                    <div class="banner_content">
                        <h1 class="title_text mb-30 text_effect_wrap clearfix">
                            <span class="text_effect text_effect_left">Nós construímos e transformamos </span>
                            <span class="text_effect text_effect_left">a estratégia de negócios</span>
                        </h1>
                        <p class="mb-50" data-aos="fade-up" data-aos-delay="200">
                        Análise e Desenvolvimento de Sistemas é a área profissional responsável por dar uma solução informatizada a um problema, como a criação de um software, um aplicativo ou um banco de dado.
                        </p>
                        <div class="btns_group ul_li" data-aos="fade-up" data-aos-delay="300">
                            <ul class="clearfix">
                                <li><a href="{{ route('site.register') }}" class="btn btn_border border_blue">Cadastrar</a></li>
                                <li>
                                    <a class="popup_video" href="hhttps://www.youtube.com/watch?v=74__tcRxzIM">
                                        <span class="icon"><i class="icon-play"></i></span>
                                        <small>Assistir vídeo</small>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="deco_image bg_1" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/images/banner/01_agency/shape_1.png" alt="spahe_not_found">
            <!--
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="878" height="900" viewBox="0 0 878 900">
                <image width="878" height="900" xlink:href="assets/images/banner/01_agency/shape_1.svg"/>
            </svg>
            -->
        </div>
        <div class="deco_image bg_2" data-aos="fade-left" data-aos-delay="200">
            <img src="assets/images/banner/01_agency/shape_2.png" alt="spahe_not_found">
            <!--
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="989" height="888" viewBox="0 0 989 888">
                <image width="989" height="888" xlink:href="assets/images/banner/01_agency/shape_2.svg"/>
            </svg>
            -->
        </div>

        <div class="clouds_wrap scene_1">
            <div class="deco_image cloud_1">
                <div class="layer" data-depth="0.2">
                    <div data-aos="fade-up" data-aos-delay="700">
                        <img src="assets/images/banner/01_agency/shape_3.png" alt="spahe_not_found" data-parallax='{"y" : 80}'>
                    </div>
                </div>
            </div>
            <div class="deco_image cloud_2">
                <div class="layer" data-depth="0.2">
                    <div data-aos="fade-up" data-aos-delay="600">
                        <img src="assets/images/banner/01_agency/shape_4.png" alt="spahe_not_found" data-parallax='{"y" : 50}'>
                    </div>
                </div>
            </div>
            <div class="deco_image cloud_3">
                <div class="layer" data-depth="0.1">
                    <div data-aos="fade-up" data-aos-delay="800">
                        <img src="assets/images/banner/01_agency/shape_5.png" alt="spahe_not_found" data-parallax='{"y" : 90}'>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- banner_section - end
    ================================================== -->


    <!-- service_section - start
    ================================================== -->
    <section id="service_section" class="service_section sec_ptb_120 pt-0 deco_wrap clearfix">
        <div class="container w-1520">
            <div class="section_title text-center mb-30 c_slide_in">
                <h3 class="sub_title mb-15">
                    <span class="c_slide_in_wrap1">
                        <span class="c_slide_in_wrap2">
                            <span class="c_slide_in_wrap3">
                                DESENVOLVEDOR PHP
                            </span>
                        </span>
                    </span>
                </h3>
                <h2 class="title_text mb-0">
                    <span class="c_slide_in_wrap1">
                        <span class="c_slide_in_wrap2">
                            <span class="c_slide_in_wrap3">
                            Por que desenvolvimento em PHP ?
                            </span>
                        </span>
                    </span>
                </h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service_primary_2" data-aos="fade-up" data-aos-delay="300">
                        <div class="item_icon icon_blue">
                            <i class="icon-setting"></i>
                        </div>
                        <h3 class="item_title">Aplicações em sites</h3>
                        <p>
                        Uma das principais características do PHP é o fato de ser uma linguagem bem mais dinâmica do que a maioria das outras opções que existem.
                        </p>
                        <a href="service_1.html" class="details_btn">saiba mais <i class="fal fa-long-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service_primary_2" data-aos="fade-up" data-aos-delay="500">
                        <div class="item_icon icon_orange">
                            <i class="icon-tube"></i>
                        </div>
                        <h3 class="item_title">Plugins WordPress</h3>
                        <p>
                        O WordPress é mais uma grande empresa que baseia todo a programação de suas aplicações na linguagem PHP.
                        </p>
                        <a href="service_1.html" class="details_btn">saiba mais<i class="fal fa-long-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service_primary_2" data-aos="fade-up" data-aos-delay="700">
                        <div class="item_icon icon_green">
                            <i class="icon-ring"></i>
                        </div>
                        <h3 class="item_title">E-commerce</h3>
                        <p>
                        As lojas virtuais têm uma necessidade muito marcante, que é a comunicação frequente com bancos de dados robustos e repletos de elementos importantes.                        </p>
                        <a href="service_1.html" class="details_btn">saiba mais<i class="fal fa-long-arrow-right ml-1"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service_primary_2" data-aos="fade-up" data-aos-delay="900">
                        <div class="item_icon icon_purple">
                            <i class="icon-processor"></i>
                        </div>
                        <h3 class="item_title">Código aberto</h3>
                        <p>
                        Por ser uma linguagem de código aberto, PHP não gera custos para os programadores que desejam trabalhar com ela        </p>
                        <a href="service_1.html" class="details_btn">saiba mais <i class="fal fa-long-arrow-right ml-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="deco_image dot_image_1" data-aos="fade-up" data-aos-delay="300">
            <img src="assets/images/shapes/shape_25.png" alt="image_not_found" data-parallax='{"y" : 90}'>
        </div>
    </section>
    <!-- service_section - end
    ================================================== -->


    <div class="container" data-aos="fade-up" data-aos-delay="300">
        <hr class="m-0">
    </div>


    <!-- introduction_section - start
    ================================================== -->
    <section id="introduction_section" class="introduction_section sec_ptb_120 clearfix">
        <div class="container">

            <div class="section_title text-center mb-80 c_slide_in">
                <h3 class="sub_title mb-15">
                    <span class="c_slide_in_wrap1">
                        <span class="c_slide_in_wrap2">
                            <span class="c_slide_in_wrap3">
                                Intro Video
                            </span>
                        </span>
                    </span>
                </h3>
                <h2 class="title_text mb-0">
                    <span class="c_slide_in_wrap1">
                        <span class="c_slide_in_wrap2">
                            <span class="c_slide_in_wrap3">
                                Veja nossas plataformas
                            </span>
                        </span>
                    </span>
                </h2>
            </div>

            <div class="video_wrap deco_wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-9">
                        <div class="banner_image" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/images/video/img_1.jpg" alt="image_not_found">
                            <a class="popup_video" href="https://www.youtube.com/watch?v=74__tcRxzIM"><i class="icon-play"></i></a>
                        </div>
                    </div>
                </div>

                <div class="deco_image shadow_image" data-aos="fade-up" data-aos-delay="400">
                    <img src="assets/images/shapes/shape_15.png" alt="image_not_found">
                </div>

                <div class="deco_image dot_image" data-aos="fade-up" data-aos-delay="500">
                    <img src="assets/images/shapes/shape_16.png" alt="image_not_found">
                </div>
                <div class="deco_image leaf_image" data-aos="fade-down" data-aos-delay="600">
                    <img src="assets/images/shapes/img_3.png" alt="image_not_found">
                </div>
                <div class="deco_image man_1" data-aos="fade-left" data-aos-delay="700">
                    <img src="assets/images/shapes/img_4.png" alt="image_not_found">
                </div>
                <div class="deco_image man_2" data-aos="fade-right" data-aos-delay="800">
                    <img src="assets/images/shapes/img_5.png" alt="image_not_found">
                </div>
            </div>
            
        </div>
    </section>
    <!-- introduction_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section sec_ptb_120 deco_wrap clearfix">
        <div class="container">

            <div class="feature_item">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-lg-6 col-md-7 col-sm-8">
                        <div class="feature_image" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/images/features/img_9.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-8">
                        <div class="section_title ml--30">
                            <span class="icon icon_yellow mb-30">
                                <i class="icon-avatar"></i>
                            </span>
                            <h2 class="title_text mb-30 c_slide_in">
                                <span class="c_slide_in_wrap1">
                                    <span class="c_slide_in_wrap2">
                                        <span class="c_slide_in_wrap3">                                            
                                        Desenvolvimento de sistema perfeito para suas operações

                                        </span>
                                    </span>
                                </span> 
                                <span class="c_slide_in_wrap1">
                                    <span class="c_slide_in_wrap2">
                                        <span class="c_slide_in_wrap3">
                                        e finanças
                                        </span>
                                    </span>
                                </span>
                            </h2>
                            <p class="mb-30" data-aos="fade-up" data-aos-delay="100">
                            É bastante importante para o programador PHP o constante acompanhamento do desenvolvimento da linguagem, que se atualiza constantemente. Novas funcionalidades e possibilidades de integração com outros sistemas surgem à medida que a linguagem evolui.
                            </p>
                            <a href="service_1.html" class="btn_text" data-aos="fade-up" data-aos-delay="200">Saiba mais <i class="fal fa-long-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature_item">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-lg-6 col-md-7 col-sm-8 order-last">
                        <div class="feature_image float-left" data-aos="fade-up" data-aos-delay="300">
                            <img src="assets/images/features/img_10.png" alt="image_not_found">
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-8">
                        <div class="section_title mr--30">
                            <span class="icon icon_pink mb-30">
                                <i class="icon-lock"></i>
                            </span>
                            <h2 class="title_text mb-30 c_slide_in">
                                <span class="c_slide_in_wrap1">
                                    <span class="c_slide_in_wrap2">
                                        <span class="c_slide_in_wrap3">                                           
                                        Com eficiência para desbloquear
                                        </span>
                                    </span>
                                </span>
                                <span class="c_slide_in_wrap1">
                                    <span class="c_slide_in_wrap2">
                                        <span class="c_slide_in_wrap3">
                                        mais oportunidades
                                        </span>
                                    </span>
                                </span>
                            </h2>
                            <p class="mb-30" data-aos="fade-up" data-aos-delay="100">
                            Por que eu digo meu velho, quer dizer, arrumando sua porca, caramba, guvnor geeza cara, joelhos pra cima, bunda babada William cack Richard. Bloke fanny around chesed 
                            </p>
                            <a href="service_1.html" class="btn_text" data-aos="fade-up" data-aos-delay="200">Saiba mb_convert_variables <i class="fal fa-long-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="deco_image shape_1" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/images/shapes/shape_26.png" alt="image_not_found">
        </div>

        <div class="deco_image dot_image_1" data-aos="fade-up" data-aos-delay="300">
            <img src="assets/images/shapes/shape_25.png" alt="image_not_found" data-parallax='{"y" : 90}'>
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- feature_section - start
    ================================================== -->
    <section class="feature_section sec_ptb_120 bg_flow deco_wrap d-flex align-items-center clearfix" data-background="assets/images/backgrounds/bg_5.png">
        <div class="container">
            <div class="feature_item">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

                    <div class="col-lg-6 col-md-7 col-sm-8">
                        <div class="feature_image">
                            <img src="assets/images/features/img_1.png" alt="image_not_found" data-aos="fade-up" data-aos-delay="300">
                            <div class="phone_image" data-aos="fade-up" data-aos-delay="400">
                                <img src="assets/images/features/img_2.png" alt="image_not_found">
                            </div>
                            <div class="watch_image" data-aos="fade-up" data-aos-delay="500">
                                <img src="assets/images/features/img_3.png" alt="image_not_found">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6 col-sm-7">
                        <div class="section_title ml--30 text-white">
                            <span class="icon mb-30">
                                <i class="ti-package"></i>
                            </span>
                            <h2 class="title_text mb-30 c_slide_in">
                                <span class="c_slide_in_wrap1">
                                    <span class="c_slide_in_wrap2">
                                        <span class="c_slide_in_wrap3">                             
                                        Amamos construir coisas incríveise 
                                        </span>
                                    </span>
                                </span>
                                <span class="c_slide_in_wrap1">
                                    <span class="c_slide_in_wrap2">
                                        <span class="c_slide_in_wrap3">
                                        softwares úteis
                                        </span>
                                    </span>
                                </span>
                            </h2>
                            <p class="mb-30" data-aos="fade-up" data-aos-delay="100">
                            Por que eu digo meu velho, quer dizer, arrumando sua porca, caramba, guvnords geeza cara, joelhos pra cima, bunda babada William cack Richard. Cara fanny em torno de chesed de saco de bumbum velho perdeu o piloto dizer lá spiffing off sua noz. 
                            </p>
                            <div data-aos="fade-up" data-aos-delay="200">
                                <a href="{{ route('site.register') }}" class="btn btn_border border_white">Cadastrar</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="deco_image shape_2" data-parallax='{"y" : 70}'>
            <img src="assets/images/shapes/shape_27.png" alt="image_not_found" data-aos="fade-up" data-aos-delay="100">
        </div>
    </section>
    <!-- feature_section - end
    ================================================== -->


    <!-- testimonial_section - start
    ================================================== -->
    <section id="testimonial_section" class="testimonial_section sec_ptb_120 deco_wrap clearfix">
        <div class="container">
            <div class="section_title text-center mb-80 c_slide_in">
                <h3 class="sub_title mb-15">
                    <span class="c_slide_in_wrap1">
                        <span class="c_slide_in_wrap2">
                            <span class="c_slide_in_wrap3">
                                Desenvolvedor
                            </span>
                        </span>
                    </span>
                </h3>
                <h2 class="title_text mb-0">
                    <span class="c_slide_in_wrap1">
                        <span class="c_slide_in_wrap2">
                            <span class="c_slide_in_wrap3">
                                Amo dos Clientes    
                            </span>
                        </span>
                    </span>
                </h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 col-sm-10 col-xs-12">
                    <div id="testimonial_carousel_1" class="testimonial_carousel_1 secondary_style dots_true nav_false owl-carousel owl-theme" data-aos="fade-up" data-aos-delay="300">

                        <div class="item text-center">
                            <div class="thumbnail_wrap">
                                <div class="thumbnail_image">
                                    <img src="assets/images/meta/alfredo.jpg" alt="image_not_found">
                                </div>
                            </div>

                            <h3 class="hero_name">Alfredo Gomes Pereira</h3>
                            <span class="hero_title mb-30">Desenvolvedor PHP</span>

                            <p class="mb-0">
                            Trabalho com desenvolvimento de sistemas Web, Tenho certificação em Lógica de Programação, HTML5, MySQL, JavaScript, PHP e Laravel 8
                            </p>
                        </div>

                        <div class="item text-center">
                            <div class="thumbnail_wrap">
                                <div class="thumbnail_image">
                                    <img src="assets/images/meta/alfredo.jpg" alt="image_not_found">
                                </div>
                            </div>

                            <h3 class="hero_name">Alfredo Gomes Pereira</h3>
                            <span class="hero_title mb-30">Desenvolvedor PHP</span>

                            <p class="mb-0">
                            Trabalho com desenvolvimento de sistemas Web, Tenho certificação em Lógica de Programação, HTML5, MySQL, JavaScript, PHP e Laravel 8
                            </p>
                        </div>

                        <div class="item text-center">
                            <div class="thumbnail_wrap">
                                <div class="thumbnail_image">
                                    <img src="assets/images/meta/alfredo.jpg" alt="image_not_found">
                                </div>
                            </div>

                            <h3 class="hero_name">Alfredo Gomes Pereira</h3>
                            <span class="hero_title mb-30">Desenvolvedor PHP</span>

                            <p class="mb-0">
                            Trabalho com desenvolvimento de sistemas Web, Tenho certificação em Lógica de Programação, HTML5, MySQL, JavaScript, PHP e Laravel 8
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="deco_image shape_1" data-parallax='{"y" : 90}'>
            <img src="assets/images/shapes/shape_25.png" alt="image_not_found" data-aos="fade-up" data-aos-delay="200">
        </div>
        <div class="deco_image shape_2" data-aos="fade-left" data-aos-delay="300">
            <img src="assets/images/shapes/shape_31.png" alt="image_not_found">
        </div>
    </section>
    <!-- testimonial_section - end
    ================================================== -->


    <div class="container" data-aos="fade-up" data-aos-delay="300">
        <hr class="m-0">
    </div>


    <!-- partner_section - start
    ================================================== -->
    <section id="partner_section" class="partner_section text-center sec_ptb_120 deco_wrap clearfix">
        <div class="container">
            <div class="row justify-content-center mb-30">
                <div class="col-lg-10 col-md-9 col-sm-10">
                    <div class="section_title">
                        <h2 class="title_text mb-0 c_slide_in">
                            <span class="c_slide_in_wrap1">
                                <span class="c_slide_in_wrap2">
                                    <span class="c_slide_in_wrap3">
                                    Patrocinadores
                                    </span>
                                </span>
                            </span>
                            <span class="c_slide_in_wrap1">
                                <span class="c_slide_in_wrap2">
                                    <span class="c_slide_in_wrap3">
                                    
                                    </span>
                                </span>
                            </span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <div class="partner_logo col-lg-2">
                    <a href="#!">
                        <img src="assets/images/partners/img_1.png" alt="logo_not_found">
                    </a>
                </div>

                <div class="partner_logo col-lg-2">
                    <a href="#!">
                        <img src="assets/images/partners/img_2.png" alt="logo_not_found">
                    </a>
                </div>

                <div class="partner_logo col-lg-2">
                    <a href="#!">
                        <img src="assets/images/partners/img_3.png" alt="logo_not_found">
                    </a>
                </div>

                <div class="partner_logo col-lg-2">
                    <a href="#!">
                        <img src="assets/images/partners/img_4.png" alt="logo_not_found">
                    </a>
                </div>

                <div class="partner_logo col-lg-2">
                    <a href="#!">
                        <img src="assets/images/partners/img_5.png" alt="logo_not_found">
                    </a>
                </div>

                <div class="partner_logo col-lg-2">
                    <a href="#!">
                        <img src="assets/images/partners/img_6.png" alt="logo_not_found">
                    </a>
                </div>

                <div class="partner_logo col-lg-2">
                    <a href="#!">
                        <img src="assets/images/partners/img_7.png" alt="logo_not_found">
                    </a>
                </div>

                <div class="partner_logo col-lg-2">
                    <a href="#!">
                        <img src="assets/images/partners/img_8.png" alt="logo_not_found">
                    </a>
                </div>

                <div class="partner_logo col-lg-2">
                    <a href="#!">
                        <img src="assets/images/partners/img_9.png" alt="logo_not_found">
                    </a>
                </div>
            </div>
        </div>

        <div class="deco_image shape_1" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/images/shapes/shape_32.png" alt="image_not_found">
        </div>
    </section>
    <!-- partner_section - end
    ================================================== -->


    <!-- newsletter_section - start
    ================================================== -->
    <section id="newsletter_section" class="newsletter_section bg_gradient_blue_2 text-white sec_ptb_60 clearfix">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="col-lg-5 col-md-7 col-sm-9">
                    <div class="section_title decrease_size">
                        <h2 class="title_text mb-15">Quer começar?</h2>
                        <p class="mb-0">
                        A demonstração gratuita vem sem compromissos e não requer cartão de crédito <span class="d-block"></span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8">
                    <form action="#">
                        <div class="form_item mb-0">
                            <input class="text-left" type="email" name="email" placeholder="seu email">
                        </div>
                    </form>
                </div>

                <div class="col-lg-2 col-md-12">
                    <button type="submit" class="btn btn_border border_white float-right">Inscrever</button>
                </div>

            </div>
        </div>
    </section>
    <!-- newsletter_section - end
    ================================================== -->


</main>
<!-- main body - end
================================================== -->


<!-- footer_section - start
================================================== -->
<footer id="footer_section" class="footer_section bg_dark_blue text-white deco_wrap clearfix">

    <div class="widget_area">
        <div class="container position-relative">
            <div class="row justify-content-lg-between">

                <div class="col-lg-4 col-md-12">
                    <div class="widget about_content">
                        <div class="brand_logo mb-50">
                            <a href="index.html" class="brand_link">
                                <img src="assets/images/logo/logo_1.png" alt="logo_not_found">
                            </a>
                        </div>
                        <div class="contact_info ul_li_block mb-30">
                            <ul class="clearfix">
                                <li>Email: <a href="#!">alfredogomes1995@gmail.com</a></li>
                                <li>Phone: <a href="#!">+31 99535 8198</a></li>
                            </ul>
                        </div>
                        <div class="form_item mb-0">
                            <input type="email" name="email" placeholder="email">
                            <button type="submit"><i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="widget useful_links ul_li_block">
                        <h3 class="widget_title mb-50">Marko</h3>
                        <ul class="clearfix">
                            <li><a href="home_agency.html">Agencia</a></li>
                            <li><a href="home_app_landing.html">App Landing</a></li>
                            <li><a href="home_chat.html">Chat</a></li>
                            <li><a href="home_digital_agency.html">Digital Agency</a></li>
                            <li><a href="home_digital_marketing.html">Digital Marketing</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="widget useful_links ul_li_block">
                        <h3 class="widget_title mb-50">More Homes</h3>
                        <ul class="clearfix">
                            <li><a href="home_hr_management.html">HR Management</a></li>
                            <li><a href="home_payment.html">Payment</a></li>
                            <li><a href="home_project_management.html">Project Management</a></li>
                            <li><a href="home_saas.html">SAAS</a></li>
                            <li><a href="home_software.html">Software</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-sm-4">
                    <div class="widget useful_links ul_li_block">
                        <h3 class="widget_title mb-50">Useful Pages</h3>
                        <ul class="clearfix">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="service_1.html">Our Services</a></li>
                            <li><a href="case_study.html">Casestudy</a></li>
                            <li><a href="job.html">Jobs</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="copyright_text">
                        <p class="mb-0">
                            Copyright © 2020 Desing by <a href="https://droitthemes.com/" class="author_link">DroitThemes</a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="social_icon ul_li_center">
                        <ul class="clearfix">
                            <li>
                                <a href="#!">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="icon-vimeo"></i>
                                    <i class="icon-vimeo"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="footer_menu ul_li_right">
                        <ul class="clearfix">
                            <li><a href="#!">Terms of Use</a></li>
                            <li><a href="#!">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

</footer>
<!-- footer_section - end
================================================== -->


</div>


<!-- jquery include -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- slider & carousel - jquery include -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- animation - jquery include -->
<script src="assets/js/aos.js"></script>
<script src="assets/js/splitting.js"></script>

<!-- magnific popup - jquery include -->
<script src="assets/js/magnific-popup.min.js"></script>

<!-- isotope filter - jquery include -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>

<!-- mouse move & scroll parallax  - jquery include -->
<script src="assets/js/parallax.min.js"></script>
<script src="assets/js/parallax-scroll.js"></script>

<!-- google map - jquery include -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhrdEzlfpnsnfq4MgU1e1CCsrvVx2d59s"></script>
<script src="assets/js/gmaps.js"></script>

<!-- mobile menu - jquery include -->
<script src="assets/js/mCustomScrollbar.js"></script>

<!-- custom - jquery include -->
<script src="assets/js/custom.js"></script>

@endsection