<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="loginModalLabel">Member Login</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<!-- Login View -->
				<div id="login-view">
					<form id="loginForm" novalidate>
						<div class="mb-3">
							<label for="loginEmail" class="form-label">Email Address</label>
							<input type="email" class="form-control" id="loginEmail" name="loginEmail" required />
						</div>
						<div class="mb-3">
							<label for="loginPassword" class="form-label">Password</label>
							<div class="password-wrapper">
								<input type="password" class="form-control pe-4" id="loginPassword" name="loginPassword" required />
								<span class="toggle-password">
									<i class="bi bi-eye-slash-fill"></i>
								</span>
							</div>
						</div>
					</form>
				</div>
				<!-- Signup View -->
				<div id="signup-view" class="d-none">
					<form id="signupForm" novalidate>
						<div class="mb-3">
							<label for="signupName" class="form-label">Full Name</label>
							<input type="text" class="form-control no-leading-space normalize-spaces" id="signupName" name="signupName" required />
						</div>
						<div class="mb-3">
							<label for="signupContact" class="form-label">Contact Number</label>
							<div class="input-group">
								<span class="input-group-text">+63</span>
								<input type="text" class="form-control" id="signupContact" name="signupContact" maxlength="10" placeholder="9171234567" required />
							</div>
						</div>
						<div class="mb-3">
							<label for="signupEmail" class="form-label">Email Address</label>
							<input type="email" class="form-control" id="signupEmail" name="signupEmail" required />
						</div>
						<div class="mb-3">
							<label for="signupPassword" class="form-label">Password</label>
							<div class="password-wrapper">
								<input type="password" class="form-control pe-4" id="signupPassword" name="signupPassword" required />
								<span class="toggle-password">
									<i class="bi bi-eye-slash-fill"></i>
								</span>
							</div>
						</div>
						<div class="mb-3">
							<label for="confirmPassword" class="form-label">Confirm Password</label>
							<div class="password-wrapper">
								<input type="password" class="form-control pe-4" id="confirmPassword" name="confirmPassword" required />
								<span class="toggle-password">
									<i class="bi bi-eye-slash-fill"></i>
								</span>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<!-- Login Footer -->
				<div id="login-footer" class="d-flex justify-content-between w-100">
					<div>
						<a href="#" id="show-signup-view" class="text-muted" style="font-size: 0.9em;">No account yet? Sign Up</a>
					</div>
					<div>
						<button type="submit" class="btn btn-primary" form="loginForm">Login</button>
					</div>
				</div>
				<!-- Signup Footer -->
				<div id="signup-footer" class="d-flex justify-content-between w-100 d-none">
					<div>
						<a href="#" id="show-login-view" class="text-muted" style="font-size: 0.9em;">Already a member? Login</a>
					</div>
					<div>
						<button type="submit" class="btn btn-primary" form="signupForm">Create Account</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>