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
                        </div>

                        <ul class="cial-sidebar-menu-list">
                            <li class="cial-sidebar-menu-item">
                                <a href="profile.php" class="cial-sidebar-menu-link active">
                                    <svg id="person_outline_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2006" data-name="Path 2006" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2007" data-name="Path 2007" d="M12,5.9A2.1,2.1,0,1,1,9.9,8,2.1,2.1,0,0,1,12,5.9m0,9c2.97,0,6.1,1.46,6.1,2.1v1.1H5.9V17c0-.64,3.13-2.1,6.1-2.1M12,4a4,4,0,1,0,4,4A4,4,0,0,0,12,4Zm0,9c-2.67,0-8,1.34-8,4v3H20V17C20,14.34,14.67,13,12,13Z" fill="#fff"/>
                                    </svg>
                                    <span> Profile</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="my-appointment.php" class="cial-sidebar-menu-link">
                                    <svg id="book_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2016" data-name="Path 2016" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2017" data-name="Path 2017" d="M18,2H6A2.006,2.006,0,0,0,4,4V20a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V4A2.006,2.006,0,0,0,18,2ZM9,4h2V9l-1-.75L9,9Zm9,16H6V4H7v9l3-2.25L13,13V4h5Z" fill="#fff"/>
                                    </svg>
                                    <span>My Appointment</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="my-lab-test.php" class="cial-sidebar-menu-link">
                                    <svg id="science_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="Group_985" data-name="Group 985">
                                            <rect id="Rectangle_35" data-name="Rectangle 35" width="24" height="24" fill="none"/>
                                        </g>
                                        <g id="Group_986" data-name="Group 986">
                                            <path id="Path_2018" data-name="Path 2018" d="M13,11.33,18,18H6l5-6.67V6h2m2.96-2H8.04a.5.5,0,0,0-.39.81L9,6.5v4.17L3.2,18.4A1,1,0,0,0,4,20H20a1,1,0,0,0,.8-1.6L15,10.67V6.5l1.35-1.69A.5.5,0,0,0,15.96,4Z" fill="#fff"/>
                                        </g>
                                    </svg>
                                    <span>My Lab Test</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="my-medicine-orders.php" class="cial-sidebar-menu-link">
                                    <svg id="medical_services_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="Group_987" data-name="Group 987">
                                            <rect id="Rectangle_36" data-name="Rectangle 36" width="24" height="24" fill="none"/>
                                        </g>
                                        <g id="Group_989" data-name="Group 989">
                                            <g id="Group_988" data-name="Group 988">
                                            <path id="Path_2019" data-name="Path 2019" d="M20,6H16V4a2.006,2.006,0,0,0-2-2H10A2.006,2.006,0,0,0,8,4V6H4A2.006,2.006,0,0,0,2,8V20a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2V8A2.006,2.006,0,0,0,20,6ZM10,4h4V6H10ZM20,20H4V8H20Z" fill="#fff"/>
                                            <path id="Path_2020" data-name="Path 2020" d="M13,10H11v3H8v2h3v3h2V15h3V13H13Z" fill="#fff"/>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>My Medicine Orders</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="my-order.php" class="cial-sidebar-menu-link">
                                    <svg id="shopping_cart_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2034" data-name="Path 2034" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2035" data-name="Path 2035" d="M15.55,13a1.991,1.991,0,0,0,1.75-1.03l3.58-6.49A1,1,0,0,0,20.01,4H5.21L4.27,2H1V4H3l3.6,7.59L5.25,14.03A2,2,0,0,0,7,17H19V15H7l1.1-2ZM6.16,6H18.31l-2.76,5H8.53ZM7,18a2,2,0,1,0,2,2A2,2,0,0,0,7,18Zm10,0a2,2,0,1,0,2,2A2,2,0,0,0,17,18Z" fill="#fff"/>
                                    </svg>
                                    <span>My Order</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="my-reviews.php" class="cial-sidebar-menu-link">
                                    <svg id="star_border_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2028" data-name="Path 2028" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2029" data-name="Path 2029" d="M22,9.24l-7.19-.62L12,2,9.19,8.63,2,9.24l5.46,4.73L5.82,21,12,17.27,18.18,21l-1.63-7.03ZM12,15.4,8.24,17.67l1-4.28L5.92,10.51l4.38-.38L12,6.1l1.71,4.04,4.38.38L14.77,13.4l1,4.28Z" fill="#fff"/>
                                    </svg>
                                    <span>My Reviews</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="my-questions.php" class="cial-sidebar-menu-link">
                                    <svg id="live_help_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2030" data-name="Path 2030" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2031" data-name="Path 2031" d="M19,2H5A2,2,0,0,0,3,4V18a2,2,0,0,0,2,2H9l3,3,3-3h4a2.006,2.006,0,0,0,2-2V4A2.006,2.006,0,0,0,19,2Zm0,16H14.17l-.59.59L12,20.17l-1.59-1.59L9.83,18H5V4H19Zm-8-3h2v2H11Zm1-8a2.006,2.006,0,0,1,2,2c0,2-3,1.75-3,5h2c0-2.25,3-2.5,3-5A4,4,0,0,0,8,9h2A2.006,2.006,0,0,1,12,7Z" fill="#fff"/>
                                    </svg>
                                    <span>My Questions</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="my-wallets.php" class="cial-sidebar-menu-link">
                                    <svg id="account_balance_wallet_black_24dp_1_" data-name="account_balance_wallet_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2032" data-name="Path 2032" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2033" data-name="Path 2033" d="M21,7.28V5a2.006,2.006,0,0,0-2-2H5A2,2,0,0,0,3,5V19a2,2,0,0,0,2,2H19a2.006,2.006,0,0,0,2-2V16.72A2,2,0,0,0,22,15V9a2,2,0,0,0-1-1.72ZM20,9v6H13V9ZM5,19V5H19V7H13a2.006,2.006,0,0,0-2,2v6a2.006,2.006,0,0,0,2,2h6v2Z" fill="#fff"/>
                                        <circle id="Ellipse_646" data-name="Ellipse 646" cx="1.5" cy="1.5" r="1.5" transform="translate(14.5 10.5)" fill="#fff"/>
                                    </svg>
                                    <span>My Wallets</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="my-prescription.php" class="cial-sidebar-menu-link">
                                    <svg id="medication_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="Group_1067" data-name="Group 1067">
                                            <path id="Path_2039" data-name="Path 2039" d="M0,0H24V24H0Z" fill="none"/>
                                        </g>
                                        <g id="Group_1069" data-name="Group 1069">
                                            <g id="Group_1068" data-name="Group 1068">
                                            <path id="Path_2040" data-name="Path 2040" d="M10.5,15H8V12h2.5V9.5h3V12H16v3H13.5v2.5h-3ZM19,8V19a2.006,2.006,0,0,1-2,2H7a2.006,2.006,0,0,1-2-2V8A2.006,2.006,0,0,1,7,6H17A2.006,2.006,0,0,1,19,8ZM17,8H7V19H17Zm1-5H6V5H18Z" fill="#fff"/>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>My Prescription</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="#" class="cial-sidebar-menu-link">
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
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" role="tab" aria-controls="personal" aria-selected="true">Personal</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="medical-tab" data-bs-toggle="tab" data-bs-target="#medical" type="button" role="tab" aria-controls="medical" aria-selected="false">Medical</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="lifestyle-tab" data-bs-toggle="tab" data-bs-target="#lifestyle" type="button" role="tab" aria-controls="lifestyle" aria-selected="false">Lifestyle</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="profileTabContent">
                            <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
                                <div class="ciam-tab-content">
                                    <form class="row g-3">
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputFirstname" class="form-label">First name</label>
                                            <input type="text" class="form-control" id="Firstname" placeholder="First name">
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputLastname" class="form-label">Last name</label>
                                            <input type="text" class="form-control" id="Lastname" placeholder="Last name">
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputEmailId" class="form-label">Email id</label>
                                            <input type="email" class="form-control" id="inputEmailId" placeholder="Email id">
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputContactNumber" class="form-label">Contact Number</label>
                                            <input type="text" class="form-control" id="inputContactNumber" placeholder="Contact Number">
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputAge" class="form-label">Age</label>
                                            <input type="text" class="form-control" id="inputAge" placeholder="Age">
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputGender" class="form-label">Gender</label>
                                            <input type="text" class="form-control" id="inputGender" placeholder="Gender">
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputDateofBirth" class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control" id="inputDateofBirth" placeholder="Date of Birth">
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputBloodGroup" class="form-label">Blood group</label>
                                            <input type="text" class="form-control" id="inputBloodGroup" placeholder="Blood group">
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputMaritalStatus" class="form-label">Marital status</label>
                                            <input type="text" class="form-control" id="inputMaritalStatus" placeholder="Marital status">
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputHeight" class="form-label">Height</label>
                                            <input type="text" class="form-control" id="inputHeight" placeholder="Height">
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputWeight" class="form-label">Weight</label>
                                            <input type="text" class="form-control" id="inputWeight" placeholder="Weight">
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputEmergencycontact" class="form-label">Emergency contact</label>
                                            <input type="text" class="form-control" id="inputEmergencycontact" placeholder="Emergency contact">
                                        </div>
                                        <div class="col col-12 col-md-12 col-lg-12">
                                            <label for="inputAddress" class="form-label">Address</label>
                                            <textarea  class="form-control" name="" id="inputAddress" rows="4" placeholder="Address"></textarea>
                                        </div>
                                        <div class="col col-12 col-md-12 col-lg-12">
                                            <label for="inputAddress" class="form-label">Update photo</label>
                                            <div class="ciam-fileInput">
                                                <input type="file" class="form-control">
                                                <span class="ciam-fileInput-text">+ Choose New Profile photo</span>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-12 col-lg-12 text-center">
                                            <button type="submit" class="btn btn-primary w-100">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="medical" role="tabpanel" aria-labelledby="medical-tab">
                                <div class="ciam-tab-content">
                                    <form class="row g-3">
                                        <div class="col col-12 col-md-12 col-lg-12">
                                            <label for="inputDetailsofAllergies" class="form-label">Details of allergies</label>
                                            <textarea  class="form-control" name="" id="inputDetailsofAllergies" rows="4" placeholder="Details of allergies"></textarea>
                                        </div>
                                        <div class="col col-12 col-md-12 col-lg-12">
                                            <label for="inputCurrentPastMedications" class="form-label">Current & Past Medications</label>
                                            <textarea  class="form-control" name="" id="inputCurrentPastMedications" rows="4" placeholder="Current & Past Medications"></textarea>
                                        </div>
                                        <div class="col col-12 col-md-12 col-lg-12">
                                            <label for="inputPastSurgeryInjury" class="form-label">Past surgery or injury</label>
                                            <textarea  class="form-control" name="" id="inputPastSurgeryInjury" rows="4" placeholder="Past surgery or injury"></textarea>
                                        </div>
                                        <div class="col col-12 col-md-12 col-lg-12">
                                            <label for="inputAnyChronicDisease" class="form-label">Any chronic disease</label>
                                            <textarea  class="form-control" name="" id="inputAnyChronicDisease" rows="4" placeholder="Any chronic disease"></textarea>
                                        </div>
                                        <div class="col col-12 col-md-12 col-lg-12 text-center">
                                            <button type="submit" class="btn btn-primary w-100">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="lifestyle" role="tabpanel" aria-labelledby="lifestyle-tab">
                                <div class="ciam-tab-content">
                                    <form class="row g-3">
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputSmoking" class="form-label">Smoking</label>
                                            <select id="inputSmoking" class="form-select">
                                                <option selected>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputAlchol" class="form-label">Alchol</label>
                                            <select id="inputAlchol" class="form-select">
                                                <option selected>Yes</option>
                                                <option>No</option>
                                            </select>
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputWorkoutLevel" class="form-label">Workout level</label>
                                            <select id="inputWorkoutLevel" class="form-select">
                                                <option selected>High</option>
                                                <option>Medium</option>
                                                <option>Low</option>
                                            </select>
                                        </div>
                                        <div class="col col-12 col-md-6 col-lg-6">
                                            <label for="inputSportsInvolvement" class="form-label">Sports involvement</label>
                                            <input type="text" class="form-control" id="inputSportsInvolvement" placeholder="Sports involvement">
                                        </div>
                                        <div class="col col-12 col-md-12 col-lg-12 text-center">
                                            <button type="submit" class="btn btn-primary w-100">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard Section End -->

<?php include('include/footer.php') ?>