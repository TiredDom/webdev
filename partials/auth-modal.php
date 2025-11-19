<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            <div class="modal-header border-0 px-4 pt-4 pb-0">
                <h5 class="modal-title font-weight-bold" id="loginModalLabel">Welcome Back</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div id="login-view">
                    <form id="loginForm" novalidate>
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label small text-muted font-weight-bold">Email Address</label>
                            <input type="email" class="form-control bg-light border-0 py-2" id="loginEmail" name="loginEmail" placeholder="name@example.com">
                        </div>
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <label for="loginPassword" class="form-label small text-muted font-weight-bold mb-0">Password</label>
                                <a href="#" class="text-decoration-none small text-muted">Forgot?</a>
                            </div>
                            <input type="password" class="form-control bg-light border-0 py-2" id="loginPassword" name="loginPassword" placeholder="Enter your password">
                        </div>
                        <button type="submit" class="btn login-button w-100 py-2 mb-3 justify-content-center">Log In</button>
                    </form>
                    <div class="text-center">
                        <p class="small text-muted mb-0">Don't have an account? <a href="#" id="show-signup-view" class="text-decoration-none font-weight-bold" style="color: #009970;">Sign up</a></p>
                    </div>
                </div>

                <div id="signup-view" class="d-none">
                    <form id="signupForm" novalidate>
                        <div class="mb-3">
                            <label for="signupName" class="form-label small text-muted font-weight-bold">Full Name</label>
                            <input type="text" class="form-control bg-light border-0 py-2" id="signupName" name="signupName" placeholder="John Doe">
                        </div>
                        <div class="mb-3">
                            <label for="signupEmail" class="form-label small text-muted font-weight-bold">Email Address</label>
                            <input type="email" class="form-control bg-light border-0 py-2" id="signupEmail" name="signupEmail" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="signupPassword" class="form-label small text-muted font-weight-bold">Password</label>
                            <input type="password" class="form-control bg-light border-0 py-2" id="signupPassword" name="signupPassword" placeholder="Create a password">
                        </div>
                        <div class="mb-4">
                            <label for="signupConfirmPassword" class="form-label small text-muted font-weight-bold">Confirm Password</label>
                            <input type="password" class="form-control bg-light border-0 py-2" id="signupConfirmPassword" name="signupConfirmPassword" placeholder="Confirm your password">
                        </div>
                        <button type="submit" class="btn login-button w-100 py-2 mb-3 justify-content-center">Create Account</button>
                    </form>
                    <div class="text-center">
                        <p class="small text-muted mb-0">Already have an account? <a href="#" id="show-login-view" class="text-decoration-none font-weight-bold" style="color: #009970;">Log in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>