<?php include('include/header.php') ?>

<!-- Landing Section Start -->
<section class="ciam-login-landing-section ciam-section">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-12 col-lg-6 col-xl-5 mx-auto">
                <div class="ciam-search-form-content ciam-login-form-content">
                    <div class="ciam-login-form-header">
                        <a href="login.php" class="ciam-search-form-title active">Log In</a>
                        <a href="register.php" class="ciam-search-form-title">Register</a>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="emailID" class="col-form-label">Email ID</label>
                            <input type="email" class="form-control" id="emailID" placeholder="Enter Your email ID">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="col-form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Your password">
                        </div>
                        <div class="ciam-login-form-bottom-content mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMeCheck">
                                <label class="form-check-label" for="rememberMeCheck">
                                    Remember me 
                                </label>
                            </div>
                            <a href="forgot-password.php" class="ciam-forgot-password-link">Forgot password ?</a>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary">Log in Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->


<?php include('include/footer.php') ?>