<?php include('include/header.php') ?>

<!-- Landing Section Start -->
<section class="ciam-login-landing-section ciam-section">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-12 col-lg-6 col-xl-5 mx-auto">
                <div class="ciam-search-form-content ciam-login-form-content">
                    <div class="ciam-login-form-header">
                        <a href="#" class="ciam-search-form-title active">Change Password</a>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="oldPassword" class="col-form-label">Old Password</label>
                            <input type="password" class="form-control" id="oldPassword" placeholder="Enter Your Old Password">
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="col-form-label">New Password</label>
                            <input type="password" class="form-control" id="newPassword" placeholder="Enter Your New Password">
                        </div>
                        <div class="mb-5">
                            <label for="reEnterNewPassword" class="col-form-label">Old Password</label>
                            <input type="password" class="form-control" id="reEnterNewPassword" placeholder="Re-enter Your New Password">
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary">Confrim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->


<?php include('include/footer.php') ?>