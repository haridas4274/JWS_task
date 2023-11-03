<?php include('include/headers.php') ?>
<div class="page-content bg-white">


	<!-- Book Sale -->
	<section class="content-inner-1">
		<div class="container">
			<div class="section-head book-align">
				<h2 class="title mb-0">Products List</h2>
				<div class="pagination-align style-1">
					<div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
					<div class="swiper-pagination-two"></div>
					<div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
				</div>
			</div>
			<div class="swiper-container books-wrapper-3 swiper-four">
				<div class="swiper-wrapper">
					<?php
					$query = "SELECT * FROM `products` ORDER BY `order_by` ASC";
					$result = $db->query($query);
					while ($row = $result->fetch_assoc()) { ?>
						<div class="swiper-slide">
							<div class="books-card style-3 wow fadeInUp" data-wow-delay="0.1s">
								<div class="dz-media">
									<img src="<?=$row['pro_image']?>" alt="book">
								</div>
								<div class="dz-content">
									<h5 class="title"><a href="javascript:void(0);"><?=$row['pro_name']?></a></h5>
									<ul class="dz-tags">
										<li><a href="books-grid-view.html"><?=$row['pro_desc']?></a></li>
									</ul>
									<div class="book-footer">
										
										<div class="price">
											<span class="price-num">₹<?=$row['pro_price']?></span>
											<!-- <del>$12.0</del> -->
										</div>
										<button onClick="addCart(<?=$row['pro_id']?>)" class="btn btn-sm btn-promary">AddtoCart</button>
									</div>
								</div>
							</div>
						</div>

					<?php } ?>

				</div>
			</div>
		</div>
	</section>
	<!-- Book Sale End -->

	<!-- Feature Product -->
	<!-- <section class="content-inner-1 bg-grey reccomend">
		<div class="container">
			<div class="section-head text-center">
				<div class="circle style-1"></div>
				<h2 class="title">Featured Product</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
					labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
					laboris </p>
			</div>
		</div>
		<div class="container">
			<div class="swiper-container books-wrapper-2 swiper-three">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="books-card style-2">
							<div class="dz-media">
								<img src="images/books/large/bigbook1.jpg" alt="book">
							</div>
							<div class="dz-content">
								<h6 class="sub-title">BEST SELLER</h6>
								<h2 class="title">A Heavy LIft</h2>
								<ul class="dz-tags">
									<li>Napoleon Hill</li>
									<li>Business & Strategy</li>
								</ul>
								<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
									eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris </p>
								<div class="price">
									<span class="price-num">$9.5</span>
									<del>$12.0</del>
									<span class="badge">20% OFF</span>
								</div>
								<div class="bookcard-footer">
									<a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
										Now</a>
									<a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card style-2">
							<div class="dz-media">
								<img src="images/books/large/bigbook2.jpg" alt="book">
							</div>
							<div class="dz-content">
								<h6 class="sub-title">BEST SELLER</h6>
								<h2 class="title">A Heavy LIft</h2>
								<ul class="dz-tags">
									<li>Napoleon Hill</li>
									<li>Business & Strategy</li>
								</ul>
								<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
									eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris </p>
								<div class="price">
									<span class="price-num">$9.5</span>
									<del>$12.0</del>
									<span class="badge">20% OFF</span>
								</div>
								<div class="bookcard-footer">
									<a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
										Now</a>
									<a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card style-2">
							<div class="dz-media">
								<img src="images/books/large/bigbook1.jpg" alt="book">
							</div>
							<div class="dz-content">
								<h6 class="sub-title">BEST SELLER</h6>
								<h2 class="title">A Heavy LIft</h2>
								<ul class="dz-tags">
									<li>Napoleon Hill</li>
									<li>Business & Strategy</li>
								</ul>
								<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
									eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris </p>
								<div class="price">
									<span class="price-num">$9.5</span>
									<del>$12.0</del>
									<span class="badge">20% OFF</span>
								</div>
								<div class="bookcard-footer">
									<a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
										Now</a>
									<a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card style-2">
							<div class="dz-media">
								<img src="images/books/large/bigbook2.jpg" alt="book">
							</div>
							<div class="dz-content">
								<h6 class="sub-title">BEST SELLER</h6>
								<h2 class="title">A Heavy LIft</h2>
								<ul class="dz-tags">
									<li>Napoleon Hill</li>
									<li>Business & Strategy</li>
								</ul>
								<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
									eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris </p>
								<div class="price">
									<span class="price-num">$9.5</span>
									<del>$12.0</del>
									<span class="badge">20% OFF</span>
								</div>
								<div class="bookcard-footer">
									<a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
										Now</a>
									<a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card style-2">
							<div class="dz-media">
								<img src="images/books/large/bigbook1.jpg" alt="book">
							</div>
							<div class="dz-content">
								<h6 class="sub-title">BEST SELLER</h6>
								<h2 class="title">A Heavy LIft</h2>
								<ul class="dz-tags">
									<li>Napoleon Hill</li>
									<li>Business & Strategy</li>
								</ul>
								<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
									eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris </p>
								<div class="price">
									<span class="price-num">$9.5</span>
									<del>$12.0</del>
									<span class="badge">20% OFF</span>
								</div>
								<div class="bookcard-footer">
									<a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
										Now</a>
									<a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="books-card style-2">
							<div class="dz-media">
								<img src="images/books/large/bigbook2.jpg" alt="book">
							</div>
							<div class="dz-content">
								<h6 class="sub-title">BEST SELLER</h6>
								<h2 class="title">A Heavy LIft</h2>
								<ul class="dz-tags">
									<li>Napoleon Hill</li>
									<li>Business & Strategy</li>
								</ul>
								<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
									eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
									veniam, quis nostrud exercitation ullamco laboris </p>
								<div class="price">
									<span class="price-num">$9.5</span>
									<del>$12.0</del>
									<span class="badge">20% OFF</span>
								</div>
								<div class="bookcard-footer">
									<a href="shop-cart.html" class="btn btn-primary btnhover m-t15 m-r10">Buy
										Now</a>
									<a href="books-detail.html" class="btn btn-outline-secondary btnhover m-t15">See Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pagination-align style-2">
					<div class="swiper-button-prev"><i class="fa-solid fa-angle-left"></i></div>
					<div class="swiper-pagination-three"></div>
					<div class="swiper-button-next"><i class="fa-solid fa-angle-right"></i></div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Feature Product End -->




	<!-- Newsletter -->
	<section class="py-5 newsletter-wrapper" style="background-image: url('assets/images/background/bg1.jpg'); background-size: cover;">
		<div class="container">
			<div class="subscride-inner">
				<div class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
					<div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
						<div class="section-head mb-0">
							<h2 class="title text-white my-lg-3 mt-0">Subscribe our newsletter for newest books
								updates</h2>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
						<form class="dzSubscribe style-1" action="https://bookland.dexignzone.com/xhtml/script/mailchamp.php" method="post">
							<div class="dzSubscribeMsg"></div>
							<div class="form-group">
								<div class="input-group mb-0">
									<input name="dzEmail" required="required" type="email" class="form-control bg-transparent text-white" placeholder="Your Email Address">
									<div class="input-group-addon">
										<button name="submit" value="Submit" type="submit" class="btn btn-primary btnhover">
											<span>SUBSCRIBE</span>
											<i class="fa-solid fa-paper-plane"></i>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter End -->

</div>

<!-- Footer -->
<?php include('include/footers.php') ?>