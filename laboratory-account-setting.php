<?php include('include/header.php') ?>

<!-- Dashboard Section Start -->
<section class="ciam-dashboard-section ciam-section">
    <div class="container">
        <div class="row g-0">
            <div class="col col-12 col-md-12 col-lg-4">
                <div class="ciam-dashboard-sidebar">
                    <div class="ciam-dashboard-sidebar-heading">
                        <div class="ciam-sidebar-user">
                            <img src="assets/images/user-img.png" alt="user-img" class="img-fluid">
                            <span>User Name</span>
                            <button class="navbar-toggler cial-sidebar-menu-toggler ms-auto d-block d-lg-none" type="button">
                                <span class="navbar-toggler-icons"></span>
                                <span class="navbar-toggler-icons"></span>
                                <span class="navbar-toggler-icons"></span>
                            </button>
                        </div>

                        <ul class="cial-sidebar-menu-list">
                            <li class="cial-sidebar-menu-item">
                                <a href="laboratory-profile.php" class="cial-sidebar-menu-link ">
                                    <svg id="person_outline_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2006" data-name="Path 2006" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2007" data-name="Path 2007" d="M12,5.9A2.1,2.1,0,1,1,9.9,8,2.1,2.1,0,0,1,12,5.9m0,9c2.97,0,6.1,1.46,6.1,2.1v1.1H5.9V17c0-.64,3.13-2.1,6.1-2.1M12,4a4,4,0,1,0,4,4A4,4,0,0,0,12,4Zm0,9c-2.67,0-8,1.34-8,4v3H20V17C20,14.34,14.67,13,12,13Z" fill="#fff"/>
                                    </svg>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="laboratory-my-lab-test.php" class="cial-sidebar-menu-link ">
                                    <svg id="science_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="Group_985" data-name="Group 985">
                                            <rect id="Rectangle_35" data-name="Rectangle 35" width="24" height="24" fill="none"/>
                                        </g>
                                        <g id="Group_986" data-name="Group 986">
                                            <path id="Path_2018" data-name="Path 2018" d="M13,11.33,18,18H6l5-6.67V6h2m2.96-2H8.04a.5.5,0,0,0-.39.81L9,6.5v4.17L3.2,18.4A1,1,0,0,0,4,20H20a1,1,0,0,0,.8-1.6L15,10.67V6.5l1.35-1.69A.5.5,0,0,0,15.96,4Z" fill="#fff"/>
                                        </g>
                                    </svg>
                                    <span>My Lab Tests Request</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="laboratory-my-reviews.php" class="cial-sidebar-menu-link">
                                    <svg id="star_border_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2028" data-name="Path 2028" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2029" data-name="Path 2029" d="M22,9.24l-7.19-.62L12,2,9.19,8.63,2,9.24l5.46,4.73L5.82,21,12,17.27,18.18,21l-1.63-7.03ZM12,15.4,8.24,17.67l1-4.28L5.92,10.51l4.38-.38L12,6.1l1.71,4.04,4.38.38L14.77,13.4l1,4.28Z" fill="#fff"/>
                                    </svg>
                                    <span>My Reviews</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="laboratory-my-wallets.php" class="cial-sidebar-menu-link">
                                    <svg id="account_balance_wallet_black_24dp_1_" data-name="account_balance_wallet_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2032" data-name="Path 2032" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2033" data-name="Path 2033" d="M21,7.28V5a2.006,2.006,0,0,0-2-2H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V16.72A2,2,0,0,0,22,15V9a2,2,0,0,0-1-1.72ZM20,9v6H13V9ZM5,19V5H19V7H13a2.006,2.006,0,0,0-2,2v6a2.006,2.006,0,0,0,2,2h6v2Z" fill="#fff"/>
                                        <circle id="Ellipse_646" data-name="Ellipse 646" cx="1.5" cy="1.5" r="1.5" transform="translate(14.5 10.5)" fill="#fff"/>
                                    </svg>
                                    <span>My Wallets</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="laboratory-account-setting.php" class="cial-sidebar-menu-link active">
                                    <svg id="manage_accounts_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="Group_1071" data-name="Group 1071">
                                            <path id="Path_2041" data-name="Path 2041" d="M0,0H24V24H0Z" fill="none"/>
                                        </g>
                                        <g id="Group_1073" data-name="Group 1073">
                                            <g id="Group_1072" data-name="Group 1072">
                                            <path id="Path_2042" data-name="Path 2042" d="M4,18v-.65a.946.946,0,0,1,.41-.81A10.889,10.889,0,0,1,10,15a.22.22,0,0,1,.08.01,6.886,6.886,0,0,1,.59-1.98c-.22-.02-.44-.03-.67-.03a12.876,12.876,0,0,0-6.61,1.82A2.922,2.922,0,0,0,2,17.35V20h9.26a7.133,7.133,0,0,1-.97-2Z" fill="#fff"/>
                                            <path id="Path_2043" data-name="Path 2043" d="M10,12A4,4,0,1,0,6,8,4,4,0,0,0,10,12Zm0-6A2,2,0,1,1,8,8,2.006,2.006,0,0,1,10,6Z" fill="#fff"/>
                                            <path id="Path_2044" data-name="Path 2044" d="M20.75,16a4.338,4.338,0,0,0-.06-.63l1.14-1.01-1-1.73-1.45.49a3.647,3.647,0,0,0-1.08-.63L18,11H16l-.3,1.49a3.647,3.647,0,0,0-1.08.63l-1.45-.49-1,1.73,1.14,1.01a4.338,4.338,0,0,0-.06.63,4.338,4.338,0,0,0,.06.63l-1.14,1.01,1,1.73,1.45-.49a3.647,3.647,0,0,0,1.08.63L16,21h2l.3-1.49a3.647,3.647,0,0,0,1.08-.63l1.45.49,1-1.73-1.14-1.01A4.338,4.338,0,0,0,20.75,16ZM17,18a2,2,0,1,1,2-2A2.006,2.006,0,0,1,17,18Z" fill="#fff"/>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>Account Setting</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="#" class="cial-sidebar-menu-link">
                                    <svg id="logout_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="Group_990" data-name="Group 990">
                                            <path id="Path_2021" data-name="Path 2021" d="M0,0H24V24H0Z" fill="none"/>
                                        </g>
                                        <g id="Group_991" data-name="Group 991">
                                            <path id="Path_2022" data-name="Path 2022" d="M17,8,15.59,9.41,17.17,11H9v2h8.17l-1.58,1.58L17,16l4-4ZM5,5h7V3H5A2.006,2.006,0,0,0,3,5V19a2.006,2.006,0,0,0,2,2h7V19H5Z" fill="#fff"/>
                                        </g>
                                    </svg>
                                    <span>Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-12 col-lg-8">
                <div class="ciam-dashboard-content">
                    <div class="ciam-dashboard-content__inner">
                        <form class="row g-3">
                            <div class="col col-12 col-md-12 col-lg-12">
                                <label for="inputChangePassword" class="form-label">Change the Password</label>
                                <input type="text" class="form-control" id="inputChangePassword" placeholder="Enter Old password">
                            </div>
                            <div class="col col-12 col-md-12 col-lg-12">
                                <label for="inputEnterNewPassword" class="form-label">New Password</label>
                                <input type="text" class="form-control" id="inputEnterNewPassword" placeholder="Enter New Password">
                            </div>
                            <div class="col col-12 col-md-12 col-lg-12">
                                <label for="inputPaymentGatewayID" class="form-label">Payment gateway ID</label>
                                <input type="text" class="form-control" id="inputPaymentGatewayID" placeholder="Enter Payment gateway ID">
                            </div>
                            <div class="col col-12 col-md-12 col-lg-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexDeactivateAccount">
                                    <label class="form-check-label" for="flexDeactivateAccount">
                                        Deactivate the account
                                    </label>
                                </div>
                            </div>
                            <div class="col col-12 col-md-12 col-lg-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Section End -->

<?php include('include/footer.php') ?>