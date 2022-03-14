<?php include('include/header.php') ?>

<!-- Dashboard Section Start -->
<section class="ciam-profile-details-section ciam-section">
    <div class="container">
        <div class="ciam-profile-details-content">
            <div class="ciam-profile-details-body">
                <div class="ciam-profile-details-head">
                    <h2 class="ciam-profile-details-title">Patient Details</h2>
                </div>
                <div class="ciam-profile-details-body__inner">
                    <div class="row align-items-center">
                        <div class="col col-12 col-md-4 col-lg-3 col-xl-2">
                            <div class="ciam-patient-profile">
                                <img src="assets/images/patient-profile-img.png" alt="patient-profile-img" class="img-fluid">
                            </div>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-9 col-xl-10">
                            <div class="row">
                                <div class="col col-12 col-md-4 col-lg-4 col-xl-3">
                                    <label class="ciam-profile-details-label">Patient Name :</label>
                                </div>
                                <div class="col col-12 col-md-8 col-lg-8 col-xl-9">
                                    <p class="ciam-profile-details-description">Name</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-12 col-md-4 col-lg-4 col-xl-3">
                                    <label class="ciam-profile-details-label">Location :</label>
                                </div>
                                <div class="col col-12 col-md-8 col-lg-8 col-xl-9">
                                    <p class="ciam-profile-details-description">Location</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ciam-profile-details-head">
                    <h2 class="ciam-profile-details-title">Coupon Code</h2>
                </div>
                <div class="ciam-profile-details-body__inner">
                    <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4 col-xl-3">
                            <label class="ciam-profile-details-label">Coupon Code :</label>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-9">
                            <p class="ciam-profile-details-description"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#couponCodeModal">Apply Code</button></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4 col-xl-3">
                            <label class="ciam-profile-details-label">Coupon Code :</label>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-9">
                            <p class="ciam-profile-details-description"> <span class="ciam-coupon-code mb-0">TRYNEW 30%</span> Coupon Applied!  <button type="buttton" class="btn btn-primary ms-3" >Remove Coupon</button></p>
                        </div>
                    </div>
                </div>
                <div class="ciam-profile-details-head">
                    <h2 class="ciam-profile-details-title">Bill Summary</h2>
                </div>
                <div class="ciam-profile-details-body__inner">
                    <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4 col-xl-3">
                            <label class="ciam-profile-details-label">Counsulation Fee :</label>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-9">
                            <p class="ciam-profile-details-description">₹300.00</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4 col-xl-3">
                            <label class="ciam-profile-details-label">Coupon Discount :</label>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-9">
                            <p class="ciam-profile-details-description">₹30.00</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-12 col-md-4 col-lg-4 col-xl-3">
                            <label class="ciam-profile-details-label">Total Amount :</label>
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-9">
                            <p class="ciam-profile-details-description">₹270.00</p>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col col-12 col-md-4 col-lg-4 col-xl-3">
                        </div>
                        <div class="col col-12 col-md-8 col-lg-8 col-xl-9">
                            <button type="submit" class="btn btn-primary" id="pay_now">Proceed</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Section End -->

<!-- Modal -->
<div class="modal fade" id="couponCodeModal" tabindex="-1" aria-labelledby="couponCodeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div >
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Coupon Code">
                        <span class="input-group-text btn btn-primary">Apply Code</span>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ciam-coupon-code-modal-content">
                    <ul class="ciam-coupon-code-list">
                        <li class="ciam-coupon-code-item">
                            <div class="ciam-coupon-code-item__inner">
                                <span class="ciam-coupon-code">TRYNEW 30%</span>
                                <div class="ciam-coupon-code-info">
                                    <label class="ciam-coupon-code-label">code Title</label>
                                    <p class="ciam-coupon-code-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ex cumque sequi</p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-small">Apply Coupon</button>
                        </li>
                        <li class="ciam-coupon-code-item">
                            <div class="ciam-coupon-code-item__inner">
                                <span class="ciam-coupon-code">TRYNEW 30%</span>
                                <div class="ciam-coupon-code-info">
                                    <label class="ciam-coupon-code-label">code Title</label>
                                    <p class="ciam-coupon-code-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ex cumque sequi</p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary btn-small">Apply Coupon</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancle</button>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php') ?>