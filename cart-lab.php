<?php include('include/header.php') ?>

<!-- Cart Section Start -->
<section class="ciam-cart-section ciam-section">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-12 col-lg-8">
                <div class="ciam-cart-content">
                    <div class="ciam-profile-details-head">
                        <h2 class="ciam-profile-details-title">Patient Details</h2>
                    </div>
                    <div class="ciam-profile-details-body__inner">
                        <div class="row">
                            <div class="col col-12 col-md-4 col-lg-4 col-xl-3">
                                <label class="ciam-profile-details-label">Patient Name :</label>
                            </div>
                            <div class="col col-12 col-md-8 col-lg-8 col-xl-9">
                                <p class="ciam-profile-details-description">Patient Name</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-12 col-md-4 col-lg-4 col-xl-3">
                                <label class="ciam-profile-details-label">Patient Mobile Number :</label>
                            </div>
                            <div class="col col-12 col-md-8 col-lg-8 col-xl-9">
                                <p class="ciam-profile-details-description">+91 89756 23658 </p>
                            </div>
                        </div>
                    </div>
                    <div class="ciam-profile-details-head">
                        <h2 class="ciam-profile-details-title">Lab details</h2>
                    </div>
                    <div class="ciam-profile-details-body__inner">
                        <div class="row">
                            <div class="col col-12 col-md-4 col-lg-4 col-xl-3">
                                <label class="ciam-profile-details-label">Lab Name :</label>
                            </div>
                            <div class="col col-12 col-md-8 col-lg-8 col-xl-9">
                                <p class="ciam-profile-details-description">Lab Name</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-12 col-md-4 col-lg-4 col-xl-3">
                                <label class="ciam-profile-details-label">Location :</label>
                            </div>
                            <div class="col col-12 col-md-8 col-lg-8 col-xl-9">
                                <p class="ciam-profile-details-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                        </div>
                    </div>
                    <h3 class="text-start ciam-cart-total-title">Selected  Test details</h3>
                    <div class="table-responsive ciam-cart-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Booking date</th>
                                    <th>Test Name</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10-05-2022</td>
                                    <td>Test Name</td>
                                    <td>$100</td>
                                </tr>
                                <tr>
                                    <td>10-05-2022</td>
                                    <td>Test Name</td>
                                    <td>$100</td>
                                </tr>
                                <tr>
                                    <td>10-05-2022</td>
                                    <td>Test Name</td>
                                    <td>$100</td>
                                </tr>
                                <tr>
                                    <td>10-05-2022</td>
                                    <td>Test Name</td>
                                    <td>$100</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <th>Total</th>
                                    <th>$100</th>
                                </tr>
                            </tbody>
                        </table>
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
                </div>
            </div>
            <div class="col col-12 col-md-12 col-lg-4">
                <div class="ciam-cart-total-content">
                <div class="ciam-cart-total-content__inner">
                    <h3 class="ciam-cart-total-title">Bill Summary</h3>
                    <div class="table-responsive ciam-cart-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Ammount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Consultation fee</td>
                                    <td class="text-end">$100</td>
                                </tr>
                                <tr>
                                    <td>Coupon discount</td>
                                    <td class="text-end">- $10</td>
                                </tr>
                                <tr>
                                    <th>To be Paid</th>
                                    <th class="text-end">$90</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="#" class="btn btn-primary w-100">Check Out</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cart Section End -->
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