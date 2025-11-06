<?php require_once 'partials/header.php'; ?>

			<!-- HERO -->
			<div class="ratio" style="--bs-aspect-ratio: 33.33%;">
				<div
					id="carouselExampleCaptions"
					class="carousel slide"
					data-bs-ride="carousel"
				>
					<div class="carousel-indicators">
						<button
							type="button"
							data-bs-target="#carouselExampleCaptions"
							data-bs-slide-to="0"
							class="active"
							aria-current="true"
							aria-label="Slide 1"
						></button>
						<button
							type="button"
							data-bs-target="#carouselExampleCaptions"
							data-bs-slide-to="1"
							aria-label="Slide 2"
						></button>
						<button
							type="button"
							data-bs-target="#carouselExampleCaptions"
							data-bs-slide-to="2"
							aria-label="Slide 3"
						></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img
								src="dist/images/furn4.png"
								class="d-block w-100"
								alt="Hero 1"
							/>
							<div class="carousel-caption d-none d-md-block">
								<h3>Timeless Rattan & Cane</h3>
								<p>Discover artisanal pieces that bring natural warmth and texture to any space.</p>
								<a href="products.php" class="btn btn-light btn-lg mt-3">Explore the Collection</a>
							</div>
						</div>
						<div class="carousel-item">
							<img
								src="dist/images/furn2.png"
								class="d-block w-100"
								alt="Hero 2"
							/>
							<div class="carousel-caption d-none d-md-block">
								<h3>Modern Comfort, Redefined</h3>
								<p>Experience the perfect blend of minimalist design and exceptional comfort.</p>
								<a href="products.php" class="btn btn-light btn-lg mt-3">Shop Living Room</a>
							</div>
						</div>
						<div class="carousel-item">
							<img
								src="dist/images/furn3.png"
								class="d-block w-100"
								alt="Hero 3"
							/>
							<div class="carousel-caption d-none d-md-block">
								<h3>Serenity in Simplicity</h3>
								<p>Our curated selection of Japandi-style furniture creates calm and tranquil interiors.</p>
								<a href="products.php" class="btn btn-light btn-lg mt-3">View All Products</a>
							</div>
						</div>
					</div>
					<button
						class="carousel-control-prev"
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide="prev"
					>
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button
						class="carousel-control-next"
						type="button"
						data-bs-target="#carouselExampleCaptions"
						data-bs-slide="next"
					>
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>

			<!-- WHY CHOOSE US -->
			<section class="py-5">
				<div class="container text-center">
					<div class="row">
						<div class="col-md-4">
							<i class="bi bi-truck display-4 text-primary"></i>
							<h5 class="mt-3">Free Shipping</h5>
							<p class="text-muted">Enjoy free, fast shipping on all orders over ₱50.</p>
						</div>
						<div class="col-md-4">
							<i class="bi bi-gem display-4 text-primary"></i>
							<h5 class="mt-3">Premium Quality</h5>
							<p class="text-muted">We source only the finest materials for our products.</p>
						</div>
						<div class="col-md-4">
							<i class="bi bi-headset display-4 text-primary"></i>
							<h5 class="mt-3">24/7 Support</h5>
							<p class="text-muted">Our support team is always here to help you.</p>
						</div>
					</div>
				</div>
			</section>

			<!-- PRODUCTS -->
			<section class="py-5 bg-light product-grid">
				<div class="container">
					<h2 class="text-center mb-4">Featured Products</h2>
					
					<!-- Desktop Layout (3 columns) -->
					<div class="row g-5 justify-content-center d-none d-lg-flex">
						<div class="col-lg-4">
							<div class="wrapper">
								<div class="container">
									<div class="top" style="background-image: url(https://picsum.photos/300/400?product1)"></div>
									<div class="bottom">
										<div class="left">
											<div class="details"><h1>Elegant Chair</h1><p>₱99.00</p></div>
											<div class="buy"><i class="bi bi-cart-plus"></i></div>
										</div>
										<div class="right"><div class="action-wrapper"><div class="done"><i class="bi bi-check2"></i></div><div class="remove"><i class="bi bi-x"></i></div></div><div class="details"><h1>Chair</h1><p>Added to cart</p></div></div>
									</div>
								</div>
								<div class="inside"><div class="icon"><i class="bi bi-info-circle"></i></div><div class="contents"><table><tr><th>Width</th><th>Height</th></tr><tr><td>80cm</td><td>120cm</td></tr><tr><th>Material</th><th>Color</th></tr><tr><td>Oak Wood</td><td>Natural</td></tr></table></div></div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="wrapper">
								<div class="container">
									<div class="top" style="background-image: url(https://picsum.photos/300/400?product2)"></div>
									<div class="bottom">
										<div class="left">
											<div class="details"><h1>Smart Lamp</h1><p>₱49.00</p></div>
											<div class="buy"><i class="bi bi-cart-plus"></i></div>
										</div>
										<div class="right"><div class="action-wrapper"><div class="done"><i class="bi bi-check2"></i></div><div class="remove"><i class="bi bi-x"></i></div></div><div class="details"><h1>Lamp</h1><p>Added to cart</p></div></div>
									</div>
								</div>
								<div class="inside"><div class="icon"><i class="bi bi-info-circle"></i></div><div class="contents"><table><tr><th>Width</th><th>Height</th></tr><tr><td>30cm</td><td>60cm</td></tr><tr><th>Material</th><th>Color</th></tr><tr><td>Aluminum</td><td>White</td></tr></table></div></div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="wrapper">
								<div class="container">
									<div class="top" style="background-image: url(https://picsum.photos/300/400?product3)"></div>
									<div class="bottom">
										<div class="left">
											<div class="details"><h1>Modern Desk</h1><p>₱199.00</p></div>
											<div class="buy"><i class="bi bi-cart-plus"></i></div>
										</div>
										<div class="right"><div class="action-wrapper"><div class="done"><i class="bi bi-check2"></i></div><div class="remove"><i class="bi bi-x"></i></div></div><div class="details"><h1>Desk</h1><p>Added to cart</p></div></div>
									</div>
								</div>
								<div class="inside"><div class="icon"><i class="bi bi-info-circle"></i></div><div class="contents"><table><tr><th>Width</th><th>Height</th></tr><tr><td>120cm</td><td>75cm</td></tr><tr><th>Material</th><th>Color</th></tr><tr><td>Maple Wood</td><td>Light</td></tr></table></div></div>
							</div>
						</div>
					</div>

					<!-- Mobile Layout (Triangle) -->
					<div class="d-lg-none">
						<div class="row g-4 justify-content-center">
							<div class="col-6">
								<div class="wrapper">
									<div class="container">
										<div class="top" style="background-image: url(https://picsum.photos/300/400?product1)"></div>
										<div class="bottom">
											<div class="left">
												<div class="details"><h1>Elegant Chair</h1><p>₱99.00</p></div>
												<div class="buy"><i class="bi bi-cart-plus"></i></div>
											</div>
											<div class="right"><div class="action-wrapper"><div class="done"><i class="bi bi-check2"></i></div><div class="remove"><i class="bi bi-x"></i></div></div><div class="details"><h1>Chair</h1><p>Added to cart</p></div></div>
										</div>
									</div>
									<div class="inside"><div class="icon"><i class="bi bi-info-circle"></i></div><div class="contents"><table><tr><th>Width</th><th>Height</th></tr><tr><td>80cm</td><td>120cm</td></tr><tr><th>Material</th><th>Color</th></tr><tr><td>Oak Wood</td><td>Natural</td></tr></table></div></div>
								</div>
							</div>
							<div class="col-6">
								<div class="wrapper">
									<div class="container">
										<div class="top" style="background-image: url(https://picsum.photos/300/400?product2)"></div>
										<div class="bottom">
											<div class="left">
												<div class="details"><h1>Smart Lamp</h1><p>₱49.00</p></div>
												<div class="buy"><i class="bi bi-cart-plus"></i></div>
											</div>
											<div class="right"><div class="action-wrapper"><div class="done"><i class="bi bi-check2"></i></div><div class="remove"><i class="bi bi-x"></i></div></div><div class="details"><h1>Lamp</h1><p>Added to cart</p></div></div>
										</div>
									</div>
									<div class="inside"><div class="icon"><i class="bi bi-info-circle"></i></div><div class="contents"><table><tr><th>Width</th><th>Height</th></tr><tr><td>30cm</td><td>60cm</td></tr><tr><th>Material</th><th>Color</th></tr><tr><td>Aluminum</td><td>White</td></tr></table></div></div>
								</div>
							</div>
						</div>
						<div class="row g-4 justify-content-center mt-4">
							<div class="col-6">
								<div class="wrapper">
									<div class="container">
										<div class="top" style="background-image: url(https://picsum.photos/300/400?product3)"></div>
										<div class="bottom">
											<div class="left">
												<div class="details"><h1>Modern Desk</h1><p>₱199.00</p></div>
												<div class="buy"><i class="bi bi-cart-plus"></i></div>
											</div>
											<div class="right"><div class="action-wrapper"><div class="done"><i class="bi bi-check2"></i></div><div class="remove"><i class="bi bi-x"></i></div></div><div class="details"><h1>Desk</h1><p>Added to cart</p></div></div>
										</div>
									</div>
									<div class="inside"><div class="icon"><i class="bi bi-info-circle"></i></div><div class="contents"><table><tr><th>Width</th><th>Height</th></tr><tr><td>120cm</td><td>75cm</td></tr><tr><th>Material</th><th>Color</th></tr><tr><td>Maple Wood</td><td>Light</td></tr></table></div></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- NEWSLETTER -->
			<section class="py-5 bg-light">
				<div class="container">
					<div class="row">
						<div class="col-md-8 mx-auto text-center">
							<h2>Join Our Newsletter</h2>
							<p class="lead text-muted">Get exclusive deals and be the first to know about new products.</p>
							<form id="newsletterForm" novalidate>
								<div class="input-group mt-4">
									<input type="email" class="form-control" name="newsletter_email" placeholder="Enter your email address" required>
									<button class="btn btn-primary" type="submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

<?php require_once 'partials/footer.php'; ?>