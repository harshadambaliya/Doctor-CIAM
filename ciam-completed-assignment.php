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
                                <a href="doctor-profile.php" class="cial-sidebar-menu-link ">
                                    <svg id="person_outline_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2006" data-name="Path 2006" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2007" data-name="Path 2007" d="M12,5.9A2.1,2.1,0,1,1,9.9,8,2.1,2.1,0,0,1,12,5.9m0,9c2.97,0,6.1,1.46,6.1,2.1v1.1H5.9V17c0-.64,3.13-2.1,6.1-2.1M12,4a4,4,0,1,0,4,4A4,4,0,0,0,12,4Zm0,9c-2.67,0-8,1.34-8,4v3H20V17C20,14.34,14.67,13,12,13Z" fill="#fff"/>
                                    </svg>
                                    <span> Profile</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="doctor-manage-calendar.php" class="cial-sidebar-menu-link">
                                    <svg id="calendar_today_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2045" data-name="Path 2045" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2046" data-name="Path 2046" d="M20,3H19V1H17V3H7V1H5V3H4A2.006,2.006,0,0,0,2,5V21a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,20,3Zm0,18H4V10H20ZM20,8H4V5H20Z" fill="#fff"/>
                                    </svg>
                                    <span>Manage Calendar</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="doctor-my-booking-request.php" class="cial-sidebar-menu-link ">
                                    <svg id="contacts_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2047" data-name="Path 2047" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2048" data-name="Path 2048" d="M20,4H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,20,4Zm0,14H4V6H20ZM4,0H20V2H4ZM4,22H20v2H4Zm8-10A2.5,2.5,0,1,0,9.5,9.5,2.5,2.5,0,0,0,12,12Zm0-3.5a1,1,0,1,1-1,1A1,1,0,0,1,12,8.5Zm5,7.49C17,13.9,13.69,13,12,13s-5,.9-5,2.99V17H17ZM8.81,15.5a5.6,5.6,0,0,1,6.39,0Z" fill="#fff"/>
                                    </svg>
                                    <span>My Booking Request</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="doctor-my-booked-appointment.php" class="cial-sidebar-menu-link">
                                    <svg id="beenhere_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2049" data-name="Path 2049" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2050" data-name="Path 2050" d="M19,1H5A2,2,0,0,0,3.01,3L3,15.93a2.005,2.005,0,0,0,.88,1.66L12,23l8.11-5.41a2.005,2.005,0,0,0,.88-1.66L21,3A2.006,2.006,0,0,0,19,1ZM12,20.6,5,15.94V3H19V15.93ZM9.99,13.18,7.41,10.59,6,12l4,4,8-8L16.58,6.58Z" fill="#fff"/>
                                    </svg>
                                    <span>My Booked Appointment</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="doctor-my-online-consultants.php" class="cial-sidebar-menu-link">
                                    <svg id="video_camera_front_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g id="Group_1080" data-name="Group 1080">
                                            <rect id="Rectangle_41" data-name="Rectangle 41" width="24" height="24" fill="none"/>
                                        </g>
                                        <g id="Group_1082" data-name="Group 1082">
                                            <g id="Group_1081" data-name="Group 1081">
                                            <path id="Path_2051" data-name="Path 2051" d="M18,10.48V6a2.006,2.006,0,0,0-2-2H4A2.006,2.006,0,0,0,2,6V18a2.006,2.006,0,0,0,2,2H16a2.006,2.006,0,0,0,2-2V13.52l4,3.98V6.5Zm-2-.79V18H4V6H16Z" fill="#fff"/>
                                            <circle id="Ellipse_647" data-name="Ellipse 647" cx="2" cy="2" r="2" transform="translate(8 8)" fill="#fff"/>
                                            <path id="Path_2052" data-name="Path 2052" d="M14,15.43a2.011,2.011,0,0,0-1.22-1.85,6.952,6.952,0,0,0-5.56,0A2.011,2.011,0,0,0,6,15.43V16h8Z" fill="#fff"/>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>My Online Consultants</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="ciam-completed-assignment.php" class="cial-sidebar-menu-link active">
                                    <svg id="assignment_turned_in_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2053" data-name="Path 2053" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2054" data-name="Path 2054" d="M18,9,16.59,7.58,10,14.17,7.41,11.59,6,13l4,4Zm1-6H14.82A2.988,2.988,0,0,0,9.18,3H5a1.752,1.752,0,0,0-.4.04A2.021,2.021,0,0,0,3.16,4.23,1.926,1.926,0,0,0,3,5V19a2.052,2.052,0,0,0,.16.78,2.119,2.119,0,0,0,.43.64,2.008,2.008,0,0,0,1.01.55A2.6,2.6,0,0,0,5,21H19a2.006,2.006,0,0,0,2-2V5A2.006,2.006,0,0,0,19,3Zm-7-.25a.75.75,0,1,1-.75.75A.755.755,0,0,1,12,2.75ZM19,19H5V5H19Z" fill="#fff"/>
                                    </svg>
                                    <span>Completed Assignment</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="doctor-my-reviews.php" class="cial-sidebar-menu-link">
                                    <svg id="star_border_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2028" data-name="Path 2028" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2029" data-name="Path 2029" d="M22,9.24l-7.19-.62L12,2,9.19,8.63,2,9.24l5.46,4.73L5.82,21,12,17.27,18.18,21l-1.63-7.03ZM12,15.4,8.24,17.67l1-4.28L5.92,10.51l4.38-.38L12,6.1l1.71,4.04,4.38.38L14.77,13.4l1,4.28Z" fill="#fff"/>
                                    </svg>
                                    <span>My Reviews</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="doctor-my-questions.php" class="cial-sidebar-menu-link">
                                    <svg id="live_help_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2030" data-name="Path 2030" d="M0,0H24V24H0Z" fill="none"/>
                                        <path id="Path_2031" data-name="Path 2031" d="M19,2H5A2,2,0,0,0,3,4V18a2,2,0,0,0,2,2H9l3,3,3-3h4a2.006,2.006,0,0,0,2-2V4A2.006,2.006,0,0,0,19,2Zm0,16H14.17l-.59.59L12,20.17l-1.59-1.59L9.83,18H5V4H19Zm-8-3h2v2H11Zm1-8a2.006,2.006,0,0,1,2,2c0,2-3,1.75-3,5h2c0-2.25,3-2.5,3-5A4,4,0,0,0,8,9h2A2.006,2.006,0,0,1,12,7Z" fill="#fff"/>
                                    </svg>
                                    <span>My Questions</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="my-wallets.php" class="cial-sidebar-menu-link">
                                    <svg id="receipt_long_black_24dp" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path id="Path_2055" data-name="Path 2055" d="M0,0H24V24H0Z" fill="none"/>
                                        <g id="Group_1083" data-name="Group 1083">
                                            <path id="Path_2056" data-name="Path 2056" d="M19.5,3.5,18,2,16.5,3.5,15,2,13.5,3.5,12,2,10.5,3.5,9,2,7.5,3.5,6,2V16H3v3a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V2ZM15,20H6a1,1,0,0,1-1-1V18H15Zm4-1a1,1,0,0,1-2,0V16H8V5H19Z" fill="#fff"/>
                                            <rect id="Rectangle_42" data-name="Rectangle 42" width="6" height="2" transform="translate(9 7)" fill="#fff"/>
                                            <rect id="Rectangle_43" data-name="Rectangle 43" width="2" height="2" transform="translate(16 7)" fill="#fff"/>
                                            <rect id="Rectangle_44" data-name="Rectangle 44" width="6" height="2" transform="translate(9 10)" fill="#fff"/>
                                            <rect id="Rectangle_45" data-name="Rectangle 45" width="2" height="2" transform="translate(16 10)" fill="#fff"/>
                                        </g>
                                    </svg>
                                    <span>Billing Segment</span>
                                </a>
                            </li>
                            <li class="cial-sidebar-menu-item">
                                <a href="account-setting.php" class="cial-sidebar-menu-link">
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
                        <div class="ciam-appointment-content">
                            <div class="row">
                                <div class="col col-12 col-md-6 col-lg-4">
                                    <div class="ciam-appointment-card">
                                        <div class="ciam-appointment-card-body">
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Booking Id :</span>
                                                <span class="ciam-card-details-text">9956328</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Appointment Date :</span>
                                                <span class="ciam-card-details-text">date</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Amount paid :</span>
                                                <span class="ciam-card-details-text">$229</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Prescription :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Invoice :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Document :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="ciam-appointment-card-footer">
                                            <a href="#" class="btn btn-primary w-100">Chat with patient</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 col-lg-4">
                                    <div class="ciam-appointment-card">
                                        <div class="ciam-appointment-card-body">
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Booking Id :</span>
                                                <span class="ciam-card-details-text">9956328</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Appointment Date :</span>
                                                <span class="ciam-card-details-text">date</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Amount paid :</span>
                                                <span class="ciam-card-details-text">$229</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Prescription :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Invoice :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Document :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="ciam-appointment-card-footer">
                                            <a href="#" class="btn btn-primary w-100">Chat with patient</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 col-lg-4">
                                    <div class="ciam-appointment-card">
                                        <div class="ciam-appointment-card-body">
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Booking Id :</span>
                                                <span class="ciam-card-details-text">9956328</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Appointment Date :</span>
                                                <span class="ciam-card-details-text">date</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Amount paid :</span>
                                                <span class="ciam-card-details-text">$229</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Prescription :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Invoice :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Document :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="ciam-appointment-card-footer">
                                            <a href="#" class="btn btn-primary w-100">Chat with patient</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 col-lg-4">
                                    <div class="ciam-appointment-card">
                                        <div class="ciam-appointment-card-body">
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Booking Id :</span>
                                                <span class="ciam-card-details-text">9956328</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Appointment Date :</span>
                                                <span class="ciam-card-details-text">date</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Amount paid :</span>
                                                <span class="ciam-card-details-text">$229</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Prescription :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Invoice :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Document :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="ciam-appointment-card-footer">
                                            <a href="#" class="btn btn-primary w-100">Chat with patient</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 col-lg-4">
                                    <div class="ciam-appointment-card">
                                        <div class="ciam-appointment-card-body">
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Booking Id :</span>
                                                <span class="ciam-card-details-text">9956328</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Appointment Date :</span>
                                                <span class="ciam-card-details-text">date</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Amount paid :</span>
                                                <span class="ciam-card-details-text">$229</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Prescription :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Invoice :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Document :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="ciam-appointment-card-footer">
                                            <a href="#" class="btn btn-primary w-100">Chat with patient</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-12 col-md-6 col-lg-4">
                                    <div class="ciam-appointment-card">
                                        <div class="ciam-appointment-card-body">
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Booking Id :</span>
                                                <span class="ciam-card-details-text">9956328</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Appointment Date :</span>
                                                <span class="ciam-card-details-text">date</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Amount paid :</span>
                                                <span class="ciam-card-details-text">$229</span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Prescription :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Invoice :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                            <p class="ciam-card-details">
                                                <span class="ciam-card-details-title">Document :</span>
                                                <span class="ciam-card-details-text">
                                                    <a href="assets/images/dummy.pdf" target="_blank">
                                                        <svg id="visibility_black_24dp_1_" data-name="visibility_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <path id="Path_2025" data-name="Path 2025" d="M0,0H24V24H0Z" fill="none"/>
                                                            <path id="Path_2026" data-name="Path 2026" d="M12,6a9.77,9.77,0,0,1,8.82,5.5,9.822,9.822,0,0,1-17.64,0A9.77,9.77,0,0,1,12,6m0-2A11.827,11.827,0,0,0,1,11.5a11.817,11.817,0,0,0,22,0A11.827,11.827,0,0,0,12,4Zm0,5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,12,9m0-2a4.5,4.5,0,1,0,4.5,4.5A4.507,4.507,0,0,0,12,7Z" fill="#409690"/>
                                                        </svg>
                                                    </a>
                                                    <a href="assets/images/dummy.pdf" download >
                                                        <svg id="file_download_black_24dp_1_" data-name="file_download_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                            <g id="Group_1024" data-name="Group 1024">
                                                                <rect id="Rectangle_40" data-name="Rectangle 40" width="24" height="24" fill="none"/>
                                                            </g>
                                                            <g id="Group_1025" data-name="Group 1025">
                                                                <path id="Path_2027" data-name="Path 2027" d="M18,15v3H6V15H4v3a2.006,2.006,0,0,0,2,2H18a2.006,2.006,0,0,0,2-2V15Zm-1-4L15.59,9.59,13,12.17V4H11v8.17L8.41,9.59,7,11l5,5Z" fill="#409690"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="ciam-appointment-card-footer">
                                            <a href="#" class="btn btn-primary w-100">Chat with patient</a>
                                        </div>
                                    </div>
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