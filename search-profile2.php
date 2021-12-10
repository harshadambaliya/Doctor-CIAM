<?php include('include/header.php') ?>

<!-- Landing Section Start -->
<section class="ciam-search-landing-section ciam-form-search-landing-section ciam-section">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-12 col-lg-6 col-xl-5 ms-auto">
                <div class="ciam-search-form-content">
                    <h2 class="ciam-search-form-title">Find In-Home Care Near You</h2>
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Where is care needed?</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Enter Postal Code">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Enter Full Name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Enter Email Id">
                        </div>
                        <div class="mb-5">
                            <label for="recipient-name" class="col-form-label">Phone Number</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Enter Phone Number">
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary">Find Care</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Serch Profile Section Start -->
<section class="ciam-serch-profile-section ciam-section">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-md-12 col-lg-3">
                <div class="ciam-filter-bar">
                    <h3 class="ciam-filter-title">Filter by </h3>
                    <div class="accordion" id="ciamFilterAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Category
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#ciamFilterAccordion">
                                <div class="accordion-body">
                                    <div class="ciam-filter-check-content">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckCategory1">
                                            <label class="form-check-label" for="CheckCategory1">
                                                Category Name
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckCategory2">
                                            <label class="form-check-label" for="CheckCategory2">
                                                Category Name
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckCategory3">
                                            <label class="form-check-label" for="CheckCategory3">
                                                Category Name
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckCategory4">
                                            <label class="form-check-label" for="CheckCategory4">
                                                Category Name
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckCategory5">
                                            <label class="form-check-label" for="CheckCategory5">
                                                Category Name
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckCategory6">
                                            <label class="form-check-label" for="CheckCategory6">
                                                Category Name
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckCategory7">
                                            <label class="form-check-label" for="CheckCategory7">
                                                Category Name
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Gender
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#ciamFilterAccordion">
                                <div class="accordion-body">
                                    <div class="ciam-filter-check-content">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioFemale" id="flexRadioFemale1">
                                            <label class="form-check-label" for="flexRadioFemale1">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioFemale" id="flexRadioFemale2">
                                            <label class="form-check-label" for="flexRadioFemale2">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Day
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#ciamFilterAccordion">
                                <div class="accordion-body">
                                    <div class="ciam-filter-check-content">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckDay1">
                                            <label class="form-check-label" for="CheckDay1">
                                                Any day
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckDay2">
                                            <label class="form-check-label" for="CheckDay2">
                                                Today
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckDay3">
                                            <label class="form-check-label" for="CheckDay3">
                                                Next 3 days
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Consultancy fees
                            </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#ciamFilterAccordion">
                                <div class="accordion-body">
                                    <div class="ciam-filter-slider">
                                        <label for="customRange1" class="form-label">Example range</label>
                                        <input type="range" class="form-range" id="customRange1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Years of experience
                            </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#ciamFilterAccordion">
                                <div class="accordion-body">
                                    <div class="ciam-filter-slider">
                                        <label for="customRange1" class="form-label">Example range</label>
                                        <input type="range" class="form-range" id="customRange1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Video consult
                            </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#ciamFilterAccordion">
                                <div class="accordion-body">
                                    <div class="ciam-filter-check-content">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioVideoConsult" id="flexRadioVideoConsult1">
                                            <label class="form-check-label" for="flexRadioVideoConsult1">
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioVideoConsult" id="flexRadioVideoConsult2">
                                            <label class="form-check-label" for="flexRadioVideoConsult2">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-12 col-lg-9">
                <div class="ciam-review-content">
                    <div class="row">
                        <div class="col col-12 col-md-12 col-lg-12">
                            <div class="ciam-review-card">
                                <div class="ciam-review-card-heading">
                                    <div class="ciam-review-user">
                                        <div class="ciam-review-user-img">
                                            <img src="assets/images/review-img.png" alt="review-img" class="img-fluid">
                                        </div>
                                        <div class="ciam-review-user-details">
                                            <h3 class="ciam-review-user-title">Doctor Name</h3>
                                            <label class="ciam-doctor-designation">Dentist -- subcategory</label>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary">Book an Appointment</a>
                                </div>
                                <div class="ciam-review-card-body">
                                    <ul class="ciam-doctor-details-list">
                                        <li class="ciam-doctor-details-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.059" height="24.295" viewBox="0 0 25.059 24.295">
                                                <g id="noun_experience_3488675" transform="translate(-3.731 -142.17)">
                                                    <g id="Layer_2" data-name="Layer 2" transform="translate(3.731 142.17)">
                                                    <g id="Group">
                                                        <path id="Path" d="M121.722,194.9a2.923,2.923,0,0,1,.192-2.411,2.83,2.83,0,0,1,1.914-1.353,3.44,3.44,0,0,1,.709-.074,3.584,3.584,0,0,1,.595.05v-1.061a4.543,4.543,0,0,0-1.522.057A3.867,3.867,0,0,0,121,191.968a3.954,3.954,0,0,0-.275,3.267,4.98,4.98,0,0,0,4.637,3.315c.05,0,.1,0,.149,0a7.781,7.781,0,0,1-.26-1.05A3.917,3.917,0,0,1,121.722,194.9Z" transform="translate(-120.496 -188.758)" fill="#409690"/>
                                                        <path id="Path-2" data-name="Path" d="M888.68,191.969a3.867,3.867,0,0,0-2.609-1.859,4.544,4.544,0,0,0-1.522-.057v1.061a3.523,3.523,0,0,1,1.305.024,2.827,2.827,0,0,1,1.914,1.353,2.922,2.922,0,0,1,.192,2.411,3.92,3.92,0,0,1-3.53,2.6,7.781,7.781,0,0,1-.26,1.05l.149,0a4.98,4.98,0,0,0,4.637-3.315A3.956,3.956,0,0,0,888.68,191.969Z" transform="translate(-864.125 -188.758)" fill="#409690"/>
                                                        <path id="Compound_Path" data-name="Compound Path" d="M317.14,143.563v5.976a7.391,7.391,0,0,0,.123,1.349,7.293,7.293,0,0,0,.267,1.024,7.377,7.377,0,0,0,5.928,4.921v6.121H321.3v1.411h-2v2.1h10.407v-2.1h-2v-1.411h-2.156v-6.121a7.377,7.377,0,0,0,5.929-4.922,7.3,7.3,0,0,0,.267-1.024,7.4,7.4,0,0,0,.123-1.349V142.17H317.14Zm6.466,3.77.971-2.989.971,2.989h3.143l-.54.392-2,1.455.971,2.989-2.543-1.848-2.543,1.847.971-2.989-2.152-1.564-.391-.284Z" transform="translate(-311.978 -142.17)" fill="#409690"/>
                                                    </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span>09 years of experience</span>
                                        </li>
                                        <li class="ciam-doctor-details-item">
                                            <svg id="location_on_black_24dp_2_" data-name="location_on_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path id="Path_2059" data-name="Path 2059" d="M0,0H24V24H0Z" fill="none"/>
                                                <path id="Path_2060" data-name="Path 2060" d="M12,2A7,7,0,0,0,5,9c0,5.25,7,13,7,13s7-7.75,7-13A7,7,0,0,0,12,2ZM7,9A5,5,0,0,1,17,9c0,2.88-2.88,7.19-5,9.88C9.92,16.21,7,11.85,7,9Z" fill="#409690"/>
                                                <circle id="Ellipse_650" data-name="Ellipse 650" cx="2.5" cy="2.5" r="2.5" transform="translate(9.5 6.5)" fill="#409690"/>
                                            </svg>
                                            <span>Location of clinic</span>
                                        </li>
                                        <li class="ciam-doctor-details-item">
                                            <svg id="date_range_black_24dp_1_" data-name="date_range_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path id="Path_2061" data-name="Path 2061" d="M0,0H24V24H0Z" fill="none"/>
                                                <path id="Path_2062" data-name="Path 2062" d="M7,11H9v2H7ZM21,6V20a2.006,2.006,0,0,1-2,2H5a2,2,0,0,1-2-2L3.01,6A1.991,1.991,0,0,1,5,4H6V2H8V4h8V2h2V4h1A2.006,2.006,0,0,1,21,6ZM5,8H19V6H5ZM19, 20V10H5V20Zm-4-7h2V11H15Zm-4,0h2V11H11Z" fill="#409690"/>
                                            </svg>
                                            <span>Available Today</span>
                                        </li>
                                    </ul>
                                    <p class="ciam-review-description">Disease Treated  - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-12 col-lg-12">
                            <div class="ciam-review-card">
                                <div class="ciam-review-card-heading">
                                    <div class="ciam-review-user">
                                        <div class="ciam-review-user-img">
                                            <img src="assets/images/review-img.png" alt="review-img" class="img-fluid">
                                        </div>
                                        <div class="ciam-review-user-details">
                                            <h3 class="ciam-review-user-title">Doctor Name</h3>
                                            <label class="ciam-doctor-designation">Dentist -- subcategory</label>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary">Book an Appointment</a>
                                </div>
                                <div class="ciam-review-card-body">
                                    <ul class="ciam-doctor-details-list">
                                        <li class="ciam-doctor-details-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.059" height="24.295" viewBox="0 0 25.059 24.295">
                                                <g id="noun_experience_3488675" transform="translate(-3.731 -142.17)">
                                                    <g id="Layer_2" data-name="Layer 2" transform="translate(3.731 142.17)">
                                                    <g id="Group">
                                                        <path id="Path" d="M121.722,194.9a2.923,2.923,0,0,1,.192-2.411,2.83,2.83,0,0,1,1.914-1.353,3.44,3.44,0,0,1,.709-.074,3.584,3.584,0,0,1,.595.05v-1.061a4.543,4.543,0,0,0-1.522.057A3.867,3.867,0,0,0,121,191.968a3.954,3.954,0,0,0-.275,3.267,4.98,4.98,0,0,0,4.637,3.315c.05,0,.1,0,.149,0a7.781,7.781,0,0,1-.26-1.05A3.917,3.917,0,0,1,121.722,194.9Z" transform="translate(-120.496 -188.758)" fill="#409690"/>
                                                        <path id="Path-2" data-name="Path" d="M888.68,191.969a3.867,3.867,0,0,0-2.609-1.859,4.544,4.544,0,0,0-1.522-.057v1.061a3.523,3.523,0,0,1,1.305.024,2.827,2.827,0,0,1,1.914,1.353,2.922,2.922,0,0,1,.192,2.411,3.92,3.92,0,0,1-3.53,2.6,7.781,7.781,0,0,1-.26,1.05l.149,0a4.98,4.98,0,0,0,4.637-3.315A3.956,3.956,0,0,0,888.68,191.969Z" transform="translate(-864.125 -188.758)" fill="#409690"/>
                                                        <path id="Compound_Path" data-name="Compound Path" d="M317.14,143.563v5.976a7.391,7.391,0,0,0,.123,1.349,7.293,7.293,0,0,0,.267,1.024,7.377,7.377,0,0,0,5.928,4.921v6.121H321.3v1.411h-2v2.1h10.407v-2.1h-2v-1.411h-2.156v-6.121a7.377,7.377,0,0,0,5.929-4.922,7.3,7.3,0,0,0,.267-1.024,7.4,7.4,0,0,0,.123-1.349V142.17H317.14Zm6.466,3.77.971-2.989.971,2.989h3.143l-.54.392-2,1.455.971,2.989-2.543-1.848-2.543,1.847.971-2.989-2.152-1.564-.391-.284Z" transform="translate(-311.978 -142.17)" fill="#409690"/>
                                                    </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span>09 years of experience</span>
                                        </li>
                                        <li class="ciam-doctor-details-item">
                                            <svg id="location_on_black_24dp_2_" data-name="location_on_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path id="Path_2059" data-name="Path 2059" d="M0,0H24V24H0Z" fill="none"/>
                                                <path id="Path_2060" data-name="Path 2060" d="M12,2A7,7,0,0,0,5,9c0,5.25,7,13,7,13s7-7.75,7-13A7,7,0,0,0,12,2ZM7,9A5,5,0,0,1,17,9c0,2.88-2.88,7.19-5,9.88C9.92,16.21,7,11.85,7,9Z" fill="#409690"/>
                                                <circle id="Ellipse_650" data-name="Ellipse 650" cx="2.5" cy="2.5" r="2.5" transform="translate(9.5 6.5)" fill="#409690"/>
                                            </svg>
                                            <span>Location of clinic</span>
                                        </li>
                                        <li class="ciam-doctor-details-item">
                                            <svg id="date_range_black_24dp_1_" data-name="date_range_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path id="Path_2061" data-name="Path 2061" d="M0,0H24V24H0Z" fill="none"/>
                                                <path id="Path_2062" data-name="Path 2062" d="M7,11H9v2H7ZM21,6V20a2.006,2.006,0,0,1-2,2H5a2,2,0,0,1-2-2L3.01,6A1.991,1.991,0,0,1,5,4H6V2H8V4h8V2h2V4h1A2.006,2.006,0,0,1,21,6ZM5,8H19V6H5ZM19, 20V10H5V20Zm-4-7h2V11H15Zm-4,0h2V11H11Z" fill="#409690"/>
                                            </svg>
                                            <span>Available Today</span>
                                        </li>
                                    </ul>
                                    <p class="ciam-review-description">Disease Treated  - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-12 col-lg-12">
                            <div class="ciam-review-card">
                                <div class="ciam-review-card-heading">
                                    <div class="ciam-review-user">
                                        <div class="ciam-review-user-img">
                                            <img src="assets/images/review-img.png" alt="review-img" class="img-fluid">
                                        </div>
                                        <div class="ciam-review-user-details">
                                            <h3 class="ciam-review-user-title">Doctor Name</h3>
                                            <label class="ciam-doctor-designation">Dentist -- subcategory</label>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary">Book an Appointment</a>
                                </div>
                                <div class="ciam-review-card-body">
                                    <ul class="ciam-doctor-details-list">
                                        <li class="ciam-doctor-details-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.059" height="24.295" viewBox="0 0 25.059 24.295">
                                                <g id="noun_experience_3488675" transform="translate(-3.731 -142.17)">
                                                    <g id="Layer_2" data-name="Layer 2" transform="translate(3.731 142.17)">
                                                    <g id="Group">
                                                        <path id="Path" d="M121.722,194.9a2.923,2.923,0,0,1,.192-2.411,2.83,2.83,0,0,1,1.914-1.353,3.44,3.44,0,0,1,.709-.074,3.584,3.584,0,0,1,.595.05v-1.061a4.543,4.543,0,0,0-1.522.057A3.867,3.867,0,0,0,121,191.968a3.954,3.954,0,0,0-.275,3.267,4.98,4.98,0,0,0,4.637,3.315c.05,0,.1,0,.149,0a7.781,7.781,0,0,1-.26-1.05A3.917,3.917,0,0,1,121.722,194.9Z" transform="translate(-120.496 -188.758)" fill="#409690"/>
                                                        <path id="Path-2" data-name="Path" d="M888.68,191.969a3.867,3.867,0,0,0-2.609-1.859,4.544,4.544,0,0,0-1.522-.057v1.061a3.523,3.523,0,0,1,1.305.024,2.827,2.827,0,0,1,1.914,1.353,2.922,2.922,0,0,1,.192,2.411,3.92,3.92,0,0,1-3.53,2.6,7.781,7.781,0,0,1-.26,1.05l.149,0a4.98,4.98,0,0,0,4.637-3.315A3.956,3.956,0,0,0,888.68,191.969Z" transform="translate(-864.125 -188.758)" fill="#409690"/>
                                                        <path id="Compound_Path" data-name="Compound Path" d="M317.14,143.563v5.976a7.391,7.391,0,0,0,.123,1.349,7.293,7.293,0,0,0,.267,1.024,7.377,7.377,0,0,0,5.928,4.921v6.121H321.3v1.411h-2v2.1h10.407v-2.1h-2v-1.411h-2.156v-6.121a7.377,7.377,0,0,0,5.929-4.922,7.3,7.3,0,0,0,.267-1.024,7.4,7.4,0,0,0,.123-1.349V142.17H317.14Zm6.466,3.77.971-2.989.971,2.989h3.143l-.54.392-2,1.455.971,2.989-2.543-1.848-2.543,1.847.971-2.989-2.152-1.564-.391-.284Z" transform="translate(-311.978 -142.17)" fill="#409690"/>
                                                    </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span>09 years of experience</span>
                                        </li>
                                        <li class="ciam-doctor-details-item">
                                            <svg id="location_on_black_24dp_2_" data-name="location_on_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path id="Path_2059" data-name="Path 2059" d="M0,0H24V24H0Z" fill="none"/>
                                                <path id="Path_2060" data-name="Path 2060" d="M12,2A7,7,0,0,0,5,9c0,5.25,7,13,7,13s7-7.75,7-13A7,7,0,0,0,12,2ZM7,9A5,5,0,0,1,17,9c0,2.88-2.88,7.19-5,9.88C9.92,16.21,7,11.85,7,9Z" fill="#409690"/>
                                                <circle id="Ellipse_650" data-name="Ellipse 650" cx="2.5" cy="2.5" r="2.5" transform="translate(9.5 6.5)" fill="#409690"/>
                                            </svg>
                                            <span>Location of clinic</span>
                                        </li>
                                        <li class="ciam-doctor-details-item">
                                            <svg id="date_range_black_24dp_1_" data-name="date_range_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path id="Path_2061" data-name="Path 2061" d="M0,0H24V24H0Z" fill="none"/>
                                                <path id="Path_2062" data-name="Path 2062" d="M7,11H9v2H7ZM21,6V20a2.006,2.006,0,0,1-2,2H5a2,2,0,0,1-2-2L3.01,6A1.991,1.991,0,0,1,5,4H6V2H8V4h8V2h2V4h1A2.006,2.006,0,0,1,21,6ZM5,8H19V6H5ZM19, 20V10H5V20Zm-4-7h2V11H15Zm-4,0h2V11H11Z" fill="#409690"/>
                                            </svg>
                                            <span>Available Today</span>
                                        </li>
                                    </ul>
                                    <p class="ciam-review-description">Disease Treated  - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-12 col-lg-12">
                            <div class="ciam-review-card">
                                <div class="ciam-review-card-heading">
                                    <div class="ciam-review-user">
                                        <div class="ciam-review-user-img">
                                            <img src="assets/images/review-img.png" alt="review-img" class="img-fluid">
                                        </div>
                                        <div class="ciam-review-user-details">
                                            <h3 class="ciam-review-user-title">Doctor Name</h3>
                                            <label class="ciam-doctor-designation">Dentist -- subcategory</label>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary">Book an Appointment</a>
                                </div>
                                <div class="ciam-review-card-body">
                                    <ul class="ciam-doctor-details-list">
                                        <li class="ciam-doctor-details-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.059" height="24.295" viewBox="0 0 25.059 24.295">
                                                <g id="noun_experience_3488675" transform="translate(-3.731 -142.17)">
                                                    <g id="Layer_2" data-name="Layer 2" transform="translate(3.731 142.17)">
                                                    <g id="Group">
                                                        <path id="Path" d="M121.722,194.9a2.923,2.923,0,0,1,.192-2.411,2.83,2.83,0,0,1,1.914-1.353,3.44,3.44,0,0,1,.709-.074,3.584,3.584,0,0,1,.595.05v-1.061a4.543,4.543,0,0,0-1.522.057A3.867,3.867,0,0,0,121,191.968a3.954,3.954,0,0,0-.275,3.267,4.98,4.98,0,0,0,4.637,3.315c.05,0,.1,0,.149,0a7.781,7.781,0,0,1-.26-1.05A3.917,3.917,0,0,1,121.722,194.9Z" transform="translate(-120.496 -188.758)" fill="#409690"/>
                                                        <path id="Path-2" data-name="Path" d="M888.68,191.969a3.867,3.867,0,0,0-2.609-1.859,4.544,4.544,0,0,0-1.522-.057v1.061a3.523,3.523,0,0,1,1.305.024,2.827,2.827,0,0,1,1.914,1.353,2.922,2.922,0,0,1,.192,2.411,3.92,3.92,0,0,1-3.53,2.6,7.781,7.781,0,0,1-.26,1.05l.149,0a4.98,4.98,0,0,0,4.637-3.315A3.956,3.956,0,0,0,888.68,191.969Z" transform="translate(-864.125 -188.758)" fill="#409690"/>
                                                        <path id="Compound_Path" data-name="Compound Path" d="M317.14,143.563v5.976a7.391,7.391,0,0,0,.123,1.349,7.293,7.293,0,0,0,.267,1.024,7.377,7.377,0,0,0,5.928,4.921v6.121H321.3v1.411h-2v2.1h10.407v-2.1h-2v-1.411h-2.156v-6.121a7.377,7.377,0,0,0,5.929-4.922,7.3,7.3,0,0,0,.267-1.024,7.4,7.4,0,0,0,.123-1.349V142.17H317.14Zm6.466,3.77.971-2.989.971,2.989h3.143l-.54.392-2,1.455.971,2.989-2.543-1.848-2.543,1.847.971-2.989-2.152-1.564-.391-.284Z" transform="translate(-311.978 -142.17)" fill="#409690"/>
                                                    </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span>09 years of experience</span>
                                        </li>
                                        <li class="ciam-doctor-details-item">
                                            <svg id="location_on_black_24dp_2_" data-name="location_on_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path id="Path_2059" data-name="Path 2059" d="M0,0H24V24H0Z" fill="none"/>
                                                <path id="Path_2060" data-name="Path 2060" d="M12,2A7,7,0,0,0,5,9c0,5.25,7,13,7,13s7-7.75,7-13A7,7,0,0,0,12,2ZM7,9A5,5,0,0,1,17,9c0,2.88-2.88,7.19-5,9.88C9.92,16.21,7,11.85,7,9Z" fill="#409690"/>
                                                <circle id="Ellipse_650" data-name="Ellipse 650" cx="2.5" cy="2.5" r="2.5" transform="translate(9.5 6.5)" fill="#409690"/>
                                            </svg>
                                            <span>Location of clinic</span>
                                        </li>
                                        <li class="ciam-doctor-details-item">
                                            <svg id="date_range_black_24dp_1_" data-name="date_range_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path id="Path_2061" data-name="Path 2061" d="M0,0H24V24H0Z" fill="none"/>
                                                <path id="Path_2062" data-name="Path 2062" d="M7,11H9v2H7ZM21,6V20a2.006,2.006,0,0,1-2,2H5a2,2,0,0,1-2-2L3.01,6A1.991,1.991,0,0,1,5,4H6V2H8V4h8V2h2V4h1A2.006,2.006,0,0,1,21,6ZM5,8H19V6H5ZM19, 20V10H5V20Zm-4-7h2V11H15Zm-4,0h2V11H11Z" fill="#409690"/>
                                            </svg>
                                            <span>Available Today</span>
                                        </li>
                                    </ul>
                                    <p class="ciam-review-description">Disease Treated  - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-12 col-lg-12">
                            <div class="ciam-review-card">
                                <div class="ciam-review-card-heading">
                                    <div class="ciam-review-user">
                                        <div class="ciam-review-user-img">
                                            <img src="assets/images/review-img.png" alt="review-img" class="img-fluid">
                                        </div>
                                        <div class="ciam-review-user-details">
                                            <h3 class="ciam-review-user-title">Doctor Name</h3>
                                            <label class="ciam-doctor-designation">Dentist -- subcategory</label>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary">Book an Appointment</a>
                                </div>
                                <div class="ciam-review-card-body">
                                    <ul class="ciam-doctor-details-list">
                                        <li class="ciam-doctor-details-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.059" height="24.295" viewBox="0 0 25.059 24.295">
                                                <g id="noun_experience_3488675" transform="translate(-3.731 -142.17)">
                                                    <g id="Layer_2" data-name="Layer 2" transform="translate(3.731 142.17)">
                                                    <g id="Group">
                                                        <path id="Path" d="M121.722,194.9a2.923,2.923,0,0,1,.192-2.411,2.83,2.83,0,0,1,1.914-1.353,3.44,3.44,0,0,1,.709-.074,3.584,3.584,0,0,1,.595.05v-1.061a4.543,4.543,0,0,0-1.522.057A3.867,3.867,0,0,0,121,191.968a3.954,3.954,0,0,0-.275,3.267,4.98,4.98,0,0,0,4.637,3.315c.05,0,.1,0,.149,0a7.781,7.781,0,0,1-.26-1.05A3.917,3.917,0,0,1,121.722,194.9Z" transform="translate(-120.496 -188.758)" fill="#409690"/>
                                                        <path id="Path-2" data-name="Path" d="M888.68,191.969a3.867,3.867,0,0,0-2.609-1.859,4.544,4.544,0,0,0-1.522-.057v1.061a3.523,3.523,0,0,1,1.305.024,2.827,2.827,0,0,1,1.914,1.353,2.922,2.922,0,0,1,.192,2.411,3.92,3.92,0,0,1-3.53,2.6,7.781,7.781,0,0,1-.26,1.05l.149,0a4.98,4.98,0,0,0,4.637-3.315A3.956,3.956,0,0,0,888.68,191.969Z" transform="translate(-864.125 -188.758)" fill="#409690"/>
                                                        <path id="Compound_Path" data-name="Compound Path" d="M317.14,143.563v5.976a7.391,7.391,0,0,0,.123,1.349,7.293,7.293,0,0,0,.267,1.024,7.377,7.377,0,0,0,5.928,4.921v6.121H321.3v1.411h-2v2.1h10.407v-2.1h-2v-1.411h-2.156v-6.121a7.377,7.377,0,0,0,5.929-4.922,7.3,7.3,0,0,0,.267-1.024,7.4,7.4,0,0,0,.123-1.349V142.17H317.14Zm6.466,3.77.971-2.989.971,2.989h3.143l-.54.392-2,1.455.971,2.989-2.543-1.848-2.543,1.847.971-2.989-2.152-1.564-.391-.284Z" transform="translate(-311.978 -142.17)" fill="#409690"/>
                                                    </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span>09 years of experience</span>
                                        </li>
                                        <li class="ciam-doctor-details-item">
                                            <svg id="location_on_black_24dp_2_" data-name="location_on_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path id="Path_2059" data-name="Path 2059" d="M0,0H24V24H0Z" fill="none"/>
                                                <path id="Path_2060" data-name="Path 2060" d="M12,2A7,7,0,0,0,5,9c0,5.25,7,13,7,13s7-7.75,7-13A7,7,0,0,0,12,2ZM7,9A5,5,0,0,1,17,9c0,2.88-2.88,7.19-5,9.88C9.92,16.21,7,11.85,7,9Z" fill="#409690"/>
                                                <circle id="Ellipse_650" data-name="Ellipse 650" cx="2.5" cy="2.5" r="2.5" transform="translate(9.5 6.5)" fill="#409690"/>
                                            </svg>
                                            <span>Location of clinic</span>
                                        </li>
                                        <li class="ciam-doctor-details-item">
                                            <svg id="date_range_black_24dp_1_" data-name="date_range_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path id="Path_2061" data-name="Path 2061" d="M0,0H24V24H0Z" fill="none"/>
                                                <path id="Path_2062" data-name="Path 2062" d="M7,11H9v2H7ZM21,6V20a2.006,2.006,0,0,1-2,2H5a2,2,0,0,1-2-2L3.01,6A1.991,1.991,0,0,1,5,4H6V2H8V4h8V2h2V4h1A2.006,2.006,0,0,1,21,6ZM5,8H19V6H5ZM19, 20V10H5V20Zm-4-7h2V11H15Zm-4,0h2V11H11Z" fill="#409690"/>
                                            </svg>
                                            <span>Available Today</span>
                                        </li>
                                    </ul>
                                    <p class="ciam-review-description">Disease Treated  - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-12 col-lg-12">
                            <div class="ciam-review-card">
                                <div class="ciam-review-card-heading">
                                    <div class="ciam-review-user">
                                        <div class="ciam-review-user-img">
                                            <img src="assets/images/review-img.png" alt="review-img" class="img-fluid">
                                        </div>
                                        <div class="ciam-review-user-details">
                                            <h3 class="ciam-review-user-title">Doctor Name</h3>
                                            <label class="ciam-doctor-designation">Dentist -- subcategory</label>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary">Book an Appointment</a>
                                </div>
                                <div class="ciam-review-card-body">
                                    <ul class="ciam-doctor-details-list">
                                        <li class="ciam-doctor-details-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25.059" height="24.295" viewBox="0 0 25.059 24.295">
                                                <g id="noun_experience_3488675" transform="translate(-3.731 -142.17)">
                                                    <g id="Layer_2" data-name="Layer 2" transform="translate(3.731 142.17)">
                                                    <g id="Group">
                                                        <path id="Path" d="M121.722,194.9a2.923,2.923,0,0,1,.192-2.411,2.83,2.83,0,0,1,1.914-1.353,3.44,3.44,0,0,1,.709-.074,3.584,3.584,0,0,1,.595.05v-1.061a4.543,4.543,0,0,0-1.522.057A3.867,3.867,0,0,0,121,191.968a3.954,3.954,0,0,0-.275,3.267,4.98,4.98,0,0,0,4.637,3.315c.05,0,.1,0,.149,0a7.781,7.781,0,0,1-.26-1.05A3.917,3.917,0,0,1,121.722,194.9Z" transform="translate(-120.496 -188.758)" fill="#409690"/>
                                                        <path id="Path-2" data-name="Path" d="M888.68,191.969a3.867,3.867,0,0,0-2.609-1.859,4.544,4.544,0,0,0-1.522-.057v1.061a3.523,3.523,0,0,1,1.305.024,2.827,2.827,0,0,1,1.914,1.353,2.922,2.922,0,0,1,.192,2.411,3.92,3.92,0,0,1-3.53,2.6,7.781,7.781,0,0,1-.26,1.05l.149,0a4.98,4.98,0,0,0,4.637-3.315A3.956,3.956,0,0,0,888.68,191.969Z" transform="translate(-864.125 -188.758)" fill="#409690"/>
                                                        <path id="Compound_Path" data-name="Compound Path" d="M317.14,143.563v5.976a7.391,7.391,0,0,0,.123,1.349,7.293,7.293,0,0,0,.267,1.024,7.377,7.377,0,0,0,5.928,4.921v6.121H321.3v1.411h-2v2.1h10.407v-2.1h-2v-1.411h-2.156v-6.121a7.377,7.377,0,0,0,5.929-4.922,7.3,7.3,0,0,0,.267-1.024,7.4,7.4,0,0,0,.123-1.349V142.17H317.14Zm6.466,3.77.971-2.989.971,2.989h3.143l-.54.392-2,1.455.971,2.989-2.543-1.848-2.543,1.847.971-2.989-2.152-1.564-.391-.284Z" transform="translate(-311.978 -142.17)" fill="#409690"/>
                                                    </g>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span>09 years of experience</span>
                                        </li>
                                        <li class="ciam-doctor-details-item">
                                            <svg id="location_on_black_24dp_2_" data-name="location_on_black_24dp (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path id="Path_2059" data-name="Path 2059" d="M0,0H24V24H0Z" fill="none"/>
                                                <path id="Path_2060" data-name="Path 2060" d="M12,2A7,7,0,0,0,5,9c0,5.25,7,13,7,13s7-7.75,7-13A7,7,0,0,0,12,2ZM7,9A5,5,0,0,1,17,9c0,2.88-2.88,7.19-5,9.88C9.92,16.21,7,11.85,7,9Z" fill="#409690"/>
                                                <circle id="Ellipse_650" data-name="Ellipse 650" cx="2.5" cy="2.5" r="2.5" transform="translate(9.5 6.5)" fill="#409690"/>
                                            </svg>
                                            <span>Location of clinic</span>
                                        </li>
                                        <li class="ciam-doctor-details-item">
                                            <svg id="date_range_black_24dp_1_" data-name="date_range_black_24dp (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                <path id="Path_2061" data-name="Path 2061" d="M0,0H24V24H0Z" fill="none"/>
                                                <path id="Path_2062" data-name="Path 2062" d="M7,11H9v2H7ZM21,6V20a2.006,2.006,0,0,1-2,2H5a2,2,0,0,1-2-2L3.01,6A1.991,1.991,0,0,1,5,4H6V2H8V4h8V2h2V4h1A2.006,2.006,0,0,1,21,6ZM5,8H19V6H5ZM19, 20V10H5V20Zm-4-7h2V11H15Zm-4,0h2V11H11Z" fill="#409690"/>
                                            </svg>
                                            <span>Available Today</span>
                                        </li>
                                    </ul>
                                    <p class="ciam-review-description">Disease Treated  - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Serch Profile Section End -->

<?php include('include/footer.php') ?>