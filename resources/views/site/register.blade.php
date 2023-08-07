@extends('layouts.app')

@section('title', 'Makro - Registro')

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
			<header id="header_section" class="header_section text-white sticky_header d-flex align-items-center clearfix">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-lg-2 col-md-12">
							<div class="brand_logo">
								<a href="http://127.0.0.1:8000" class="brand_link">
									<img src="assets/images/logo/logo_1.png" alt="logo_not_found">
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
									<li class="menu_item_has_child">
										<a href="#!">Home</a>
										<div class="mega_menu">
											<div class="home_items_submenu">
												<div class="row">
													<div class="items_col">
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

									<li class="active menu_item_has_child">
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
											<li class="active menu_item_has_child">
												<a href="#!">Register</a>
												<ul class="submenu">
													<li class="active"><a href="sign_up.html">Cadastrar</a></li>
													<li><a href="sign_in.html">Cadastrar</a></li>
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
							<a href="contact.html" class="btn btn_border border_white float-right">Contact Us</a>
						</div>
						
					</div>
				</div>
			</header>

			<!-- mobile sidebar menu - start -->
			<div class="sidebar-menu-wrapper">
				<div id="mobile_menu" class="mobile_menu">

					<div class="brand_logo mb-50 clearfix">
						<a href="index.html" class="brand_link">
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
									<li><a href="sign_in.html">Cadastrar</a></li>
									<li><a href="sign_up.html">Cadastrar</a></li>
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

					<a href="sign_up.html" class="btn bg_default_blue">Get Started</a>

				</div>
				<div class="overlay"></div>
			</div>
			<!-- mobile sidebar menu - end -->

			<!-- header_section - end
			================================================== -->


			<!-- main body - start
			================================================== -->
			<main>


				<!-- breadcrumb_section - start
				================================================== -->
				<section id="breadcrumb_section" class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
					<div class="container">
						<div class="breadcrumb_content text-center" data-aos="fade-up" data-aos-delay="100">
							<h1 class="page_title">Cadastrar</h1>
							<p class="mb-0">
							Desenvolvimento de Sistemas Web Personalizados e de interação do site com o seu cliente para pequenas, médias e grandes empresas de vários segmentos feitos sob medida.
							</p>
						</div>
					</div>

					<div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
						<img src="assets/images/shapes/shape_1.png" alt="spahe_not_found">
					</div>
					<div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="500">
						<img src="assets/images/shapes/shape_2.png" alt="spahe_not_found">
					</div>
				</section>
				<!-- breadcrumb_section - end
				================================================== -->


				<!-- register_section - start
				================================================== -->
				<section id="register_section" class="register_section sec_ptb_120 clearfix">
					<div class="container">

						<div class="signup_wrap" data-aos="fade-up" data-aos-delay="300">
							<div class="row">
								<div class="col-lg-5 col-md-5">
									<div class="info_wrap">
										<h4>já tem uma conta?</h4>
										<h3>
											
										Faça login agora   <strong>e aproveite</strong> nossos incríveis produtos
										</h3>
										<div class="info_list ul_li_block mb-50">
											<ul class="clearfix">
												<li>Acesso Premium a todos os produtos</li>
												<li>Ferramentas de teste grátis</li>
												<li>Contas de usuário ilimitadas</li>
											</ul>
										</div>
										<a href="#!" class="btn btn_border">Cadastrar</a>
									</div>
								</div>

								<div class="col-lg-7 col-md-7">
									<div class="reg_form signup_form">
										<h2 class="title_text">Cadastrar</h2>
										<form action="{{ route('site.register') }}" method="post">
										@csrf
											<div class="form_item">
												<h4 class="input_title">Usuario</h4>
												<input type="text" name="nome" placeholder="usuario">
											</div>

											<div class="form_item">
												<h4 class="input_title">Email</h4>
												<input type="email" name="email" placeholder="example@gmail.com">
											</div>

											<div class="form_item">
												<h4 class="input_title">Senha</h4>
												<input type="password" name="password" placeholder="**********">
											</div>

											<div class="check_box mb-50">
												<input id="remember_btn" type="checkbox">
												<label for="remember_btn">Eu concordo com os termos e condições deste site</label>
											</div>

											<button type="submit" class="btn bg_default_blue">Cadastrar</button>
										</form>
									</div>
								</div>
							</div>
						</div>

					</div>
				</section>
				<!-- register_section - end
				================================================== -->


			</main>
			<!-- main body - end
			================================================== -->


			<!-- footer_section - start
			================================================== -->
			<footer id="footer_section" class="footer_section bg_gray deco_wrap clearfix">

				<div class="widget_area">
					<div class="container position-relative">
						<div class="row justify-content-lg-between">

							<div class="col-lg-4 col-md-12">
								<div class="widget about_content">
									<div class="brand_logo mb-30">
										<a href="index.html" class="brand_link">
											<img src="assets/images/logo/logo_2.png" alt="logo_not_found">
										</a>
									</div>
									<p class="mb-30">
										Why say old chap that is spiffin barney and nancy boys bleeder and chimne pot ichard cheers the little rotter so I said, easy peasy buggered blower 
									</p>
									<div class="contact_info ul_li_block">
										<ul class="clearfix">
											<li>Email: <a href="#!">makro@gmail.com</a></li>
											<li>Phone: <a href="#!">+948 256 347 968</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="col-lg-2 col-md-4 col-sm-4">
								<div class="widget useful_links ul_li_block">
									<h3 class="widget_title mb-50">Makro Homes</h3>
									<ul class="clearfix">
										<li><a href="home_agency.html">Agency</a></li>
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

						<div class="deco_image deco_image_1">
							<img src="assets/images/shapes/img_1.png" alt="spahe_not_found">
						</div>
						<div class="deco_image deco_image_2">
							<img src="assets/images/shapes/img_2.png" alt="spahe_not_found">
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

				<div class="deco_image spahe_1" data-aos="fade-up" data-aos-delay="100">
					<img src="assets/images/shapes/shape_7.png" alt="spahe_not_found">
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