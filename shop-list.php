<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<?php
include('head.php')
?>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

        <?php
        include('header.php')
        ?>



        <!-- Page Title
        ============================================= -->
        <section id="page-title">

            <div class="container clearfix">
                <h1>Shop</h1>
                <span>Start Buying your Favourite Theme</span>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">

                    <!-- Shop
                    ============================================= -->
                    <div id="shop" class="shop row grid-container gutter-30" data-layout="fitRows">

                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                    <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                    <div class="sale-flash badge bg-secondary p-2">Out of Stock</div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                    <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
                                    <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                    <div class="product-price">$39.99</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <div class="fslider" data-arrows="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a></div>
                                                <div class="slide"><a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a></div>
                                                <div class="slide"><a href="#"><img src="images/shop/shoes/1-2.jpg" alt="Dark Brown Boots"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                    <div class="product-price">$49</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
                                    <a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                    <div class="product-price">$19.95</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
                                    <a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
                                    <div class="sale-flash badge bg-success p-2 text-uppercase">Sale!</div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                    <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/tshirts/1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                    <a href="#"><img src="images/shop/tshirts/1-1.jpg" alt="Blue Round-Neck Tshirt"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Blue Round-Neck Tshirt</a></h3></div>
                                    <div class="product-price">$9.99</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/watches/1.jpg" alt="Silver Chrome Watch"></a>
                                    <a href="#"><img src="images/shop/watches/1-1.jpg" alt="Silver Chrome Watch"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Silver Chrome Watch</a></h3></div>
                                    <div class="product-price">$129.99</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/shoes/2.jpg" alt="Men Grey Casual Shoes"></a>
                                    <a href="#"><img src="images/shop/shoes/2-1.jpg" alt="Men Grey Casual Shoes"></a>
                                    <div class="sale-flash badge bg-success p-2 text-uppercase">Sale!</div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Men Grey Casual Shoes</a></h3></div>
                                    <div class="product-price"><del>$45.99</del> <ins>$39.49</ins></div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <div class="fslider" data-arrows="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="#"><img src="images/shop/dress/3.jpg" alt="Pink Printed Dress"></a></div>
                                                <div class="slide"><a href="#"><img src="images/shop/dress/3-1.jpg" alt="Pink Printed Dress"></a></div>
                                                <div class="slide"><a href="#"><img src="images/shop/dress/3-2.jpg" alt="Pink Printed Dress"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Pink Printed Dress</a></h3></div>
                                    <div class="product-price">$39.49</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/pants/5.jpg" alt="Green Trousers"></a>
                                    <a href="#"><img src="images/shop/pants/5-1.jpg" alt="Green Trousers"></a>
                                    <div class="sale-flash badge bg-success p-2 text-uppercase">Sale!</div>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Green Trousers</a></h3></div>
                                    <div class="product-price"><del>$24.99</del> <ins>$21.99</ins></div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-half-full"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/sunglasses/2.jpg" alt="Men Aviator Sunglasses"></a>
                                    <a href="#"><img src="images/shop/sunglasses/2-1.jpg" alt="Men Aviator Sunglasses"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Men Aviator Sunglasses</a></h3></div>
                                    <div class="product-price">$13.49</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="product-image">
                                    <a href="#"><img src="images/shop/tshirts/4.jpg" alt="Black Polo Tshirt"></a>
                                    <a href="#"><img src="images/shop/tshirts/4-1.jpg" alt="Black Polo Tshirt"></a>
                                    <div class="bg-overlay">
                                        <div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
                                            <a href="#" class="btn btn-dark me-2"><i class="icon-shopping-cart"></i></a>
                                            <a href="include/ajax/shop-item.html" class="btn btn-dark" data-lightbox="ajax"><i class="icon-line-expand"></i></a>
                                        </div>
                                        <div class="bg-overlay-bg bg-transparent"></div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <div class="product-title"><h3><a href="#">Black Polo Tshirt</a></h3></div>
                                    <div class="product-price">$11.49</div>
                                    <div class="product-rating">
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                        <i class="icon-star3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- #shop end -->

                </div>
            </div>
        </section><!-- #content end -->

        <!-- Footer
        ============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-4">

									<div class="widget clearfix">

										<img src="images/footer-widget-logo.png" alt="Image" class="footer-logo">

										<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

										<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
											<address>
												<strong>Headquarters:</strong><br>
												795 Folsom Ave, Suite 600<br>
												San Francisco, CA 94107<br>
											</address>
											<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
											<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
											<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
										</div>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget widget_links clearfix">

										<h4>Blogroll</h4>

										<ul>
											<li><a href="https://codex.wordpress.org/">Documentation</a></li>
											<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
											<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
											<li><a href="https://wordpress.org/support/">Support Forums</a></li>
											<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
											<li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
											<li><a href="https://planet.wordpress.org/">Canvas Planet</a></li>
										</ul>

									</div>

								</div>

								<div class="col-md-4">

									<div class="widget clearfix">
										<h4>Recent Posts</h4>

										<div class="posts-sm row col-mb-30" id="post-list-footer">
											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>

											<div class="entry col-12">
												<div class="grid-inner row">
													<div class="col">
														<div class="entry-title">
															<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
														</div>
														<div class="entry-meta">
															<ul>
																<li>10th July 2021</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="row col-mb-50">
								<div class="col-md-4 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-lg-6 bottommargin-sm">
												<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
												<h5 class="mb-0">Total Downloads</h5>
											</div>

											<div class="col-lg-6 bottommargin-sm">
												<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
												<h5 class="mb-0">Clients</h5>
											</div>
										</div>

									</div>
								</div>

								<div class="col-md-5 col-lg-12">
									<div class="widget subscribe-widget clearfix">
										<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
										<div class="widget-subscribe-form-result"></div>
										<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0">
											<div class="input-group mx-auto">
												<div class="input-group-text"><i class="icon-email2"></i></div>
												<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
												<button class="btn btn-success" type="submit">Subscribe</button>
											</div>
										</form>
									</div>
								</div>

								<div class="col-md-3 col-lg-12">
									<div class="widget clearfix" style="margin-bottom: -20px;">

										<div class="row">
											<div class="col-6 col-md-12 col-lg-6 clearfix bottommargin-sm">
												<a href="#" class="social-icon si-dark si-colored si-facebook mb-0" style="margin-right: 10px;">
													<i class="icon-facebook"></i>
													<i class="icon-facebook"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
											</div>
											<div class="col-6 col-md-12 col-lg-6 clearfix">
												<a href="#" class="social-icon si-dark si-colored si-rss mb-0" style="margin-right: 10px;">
													<i class="icon-rss"></i>
													<i class="icon-rss"></i>
												</a>
												<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
											</div>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-start">
							Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 text-center text-md-end">
							<div class="d-flex justify-content-center justify-content-md-end">
								<a href="#" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-yahoo">
									<i class="icon-yahoo"></i>
									<i class="icon-yahoo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>

							<div class="clear"></div>

							<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +1-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
</html>