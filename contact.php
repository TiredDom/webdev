<?php require_once 'partials/header.php'; ?>

			<!-- PAGE HEADER -->
			<header class="py-5">
				<div class="container text-center">
					<h1 class="display-4">Contact Us</h1>
					<p class="lead text-muted">We'd love to hear from you. Please fill out the form below.</p>
				</div>
			</header>

			<!-- CONTACT FORM -->
			<section class="pb-5">
				<div class="container">
					<div class="row">
						<div class="col-md-8 mx-auto">
							<form id="contactForm" novalidate>
								<div class="mb-3">
									<label for="contactName" class="form-label">Full Name</label>
									<input type="text" class="form-control no-leading-space normalize-spaces" id="contactName" name="contactName" required />
								</div>
								<div class="mb-3">
									<label for="contactEmail" class="form-label">Email Address</label>
									<input type="email" class="form-control" id="contactEmail" name="contactEmail" required />
								</div>
								<div class="mb-3">
									<label for="contactMessage" class="form-label">Message</label>
									<textarea class="form-control no-leading-space" id="contactMessage" name="contactMessage" rows="5" required></textarea>
								</div>
								<button type="submit" class="btn btn-primary w-100">Send Message</button>
							</form>
						</div>
					</div>
				</div>
			</section>

<?php require_once 'partials/footer.php'; ?>