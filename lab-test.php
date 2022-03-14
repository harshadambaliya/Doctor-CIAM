<?php include('include/header.php') ?>

<!-- Site SearchBar Start -->
<div class="ciam-searchBar ciam-lab-test-serchbar">
    <div class="container">
        <form>
            <div class="ciam-searchBar__inner">
                <div class="ciam-searchBar-content">
                    <label for="exampleFormControlInput1" class="form-label">Location</label>
                    <div class="ciam-searchBar-input">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Current Location">
                    </div>
                </div>
                <div class="ciam-searchBar-content">
                    <label for="exampleFormControlInput1" class="form-label">All Labs</label>
                    <div class="ciam-searchBar-input">
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Lab name</option>
                            <option selected value="2">Lab name</option>
                        </select>
                    </div>
                </div>
                <div class="ciam-searchBar-content">
                    <label for="exampleFormControlInput1" class="form-label">Search</label>
                    <div class="ciam-searchBar-input">
                        <select class="form-select" aria-label="Default select example">
                            <option selected value="" disabled>Search for Tests (CBC, MRI, etc.)</option>
                            <option value="1">Lab name</option>
                            <option value="2">Lab name</option>
                        </select>
                    </div>
                    <!-- <div class="ciam-searchBar-input">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Search for Tests (CBC, MRI, etc.)">
                    </div> -->
                </div>
                <div class="ciam-searchBar-btn-content">
                    <button class="ciam-searchBar-btn"><span class="material-icons"> search </span></button>
                </div>
            </div>
        </form>

        <div class="text-center mt-4">
            <button class="btn btn-light"  data-bs-toggle="modal" data-bs-target="#uploadPrescriptionModal">Book Test from Prescription</button>
        </div>
    </div>
</div>
<!-- Site SearchBar End -->

<!-- Landing Section Start -->
<section class="ciam-labTest-landing-section ciam-section">
    <div class="ciam-labTest-landing-slider">
        <div class="ciam-landing-slide">
            <a href="test-details.php">
                <img src="assets/images/test1.png" alt="test1" class="w-100 img-fluid">
            </a>
        </div>
        <div class="ciam-landing-slide">
            <a href="test-details.php">
                <img src="assets/images/test2.png" alt="test2" class="w-100 img-fluid">
            </a>
        </div>
        <div class="ciam-landing-slide">
            <a href="test-details.php">
                <img src="assets/images/test3.png" alt="test3" class="w-100 img-fluid">
            </a>
        </div>
        <div class="ciam-landing-slide">
            <a href="test-details.php">
                <img src="assets/images/test4.png" alt="test4" class="w-100 img-fluid">
            </a>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Meet Specialities Doctors Section Start -->
<section class="ciam-meet-specialities-doctors ciam-section">
    <div class="ciam-meet-specialities-doctors__inner">
        <div class="ciam-section-heading">
            <div class="container">
                <h2 class="ciam-section-title">Featured Packages</h2>
                <p class="ciam-section-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum fuga neque architecto vero provident cumque quidem temporibus eos perferendis </p>
            </div>
        </div>
        <ul class="ciam-packages-category-list">
            <li class="ciam-packages-category-item">
                <button class="btn btn-outline-primary">Popular Packages</button>
            </li>
            <li class="ciam-packages-category-item">
                <button class="btn btn-outline-primary">Women Health</button>
            </li>
            <li class="ciam-packages-category-item">
                <button class="btn btn-primary">Full Body Check Up</button>
            </li>
            <li class="ciam-packages-category-item">
                <button class="btn btn-outline-primary">Diabetes</button>
            </li>
            <li class="ciam-packages-category-item">
                <button class="btn btn-outline-primary">Covid 19</button>
            </li>
        </ul>
        <div class="ciam-meet-specialities-slider">
            <div class="ciam-meet-specialities-slide">
                <div class="ciam-slide-card">
                    <div class="ciam-slide-card-img">
                        <img src="assets/images/service-img.png" alt="service-img" class="img-fluid">
                    </div>
                    <div class="ciam-slide-card-body">
                        <h3 class="ciam-slide-title">Comprehensive Silver Full Body Checkup</h3>
                        <h4 class="ciam-doctor-name">Includes Test : 71</h4>
                        <span class="ciam-rate-count">4.9 <span class="material-icons">star</span></span>
                        <p class="ciam-doctor-experience">Glycosylated Hemoglobin  Liver Function Test Urine Routine & Microscopy</p>
                        <p class="ciam-product-price"><span>Price :</span> $ 149</p>
                        <span class="ciam-discount">42% Off</span>
                    </div>
                    <div class="ciam-slide-card-footer">
                        <a href="#" class="btn btn-primary w-100">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="ciam-meet-specialities-slide">
                <div class="ciam-slide-card">
                    <div class="ciam-slide-card-img">
                        <img src="assets/images/service-img.png" alt="service-img" class="img-fluid">
                    </div>
                    <div class="ciam-slide-card-body">
                        <h3 class="ciam-slide-title">Comprehensive Silver Full Body Checkup</h3>
                        <h4 class="ciam-doctor-name">Includes Test : 71</h4>
                        <span class="ciam-rate-count">4.9 <span class="material-icons">star</span></span>
                        <p class="ciam-doctor-experience">Glycosylated Hemoglobin  Liver Function Test Urine Routine & Microscopy</p>
                        <p class="ciam-product-price"><span>Price :</span> $ 149</p>
                        <span class="ciam-discount">42% Off</span>
                    </div>
                    <div class="ciam-slide-card-footer">
                        <a href="#" class="btn btn-primary w-100">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="ciam-meet-specialities-slide">
                <div class="ciam-slide-card">
                    <div class="ciam-slide-card-img">
                        <img src="assets/images/service-img.png" alt="service-img" class="img-fluid">
                    </div>
                    <div class="ciam-slide-card-body">
                        <h3 class="ciam-slide-title">Comprehensive Silver Full Body Checkup</h3>
                        <h4 class="ciam-doctor-name">Includes Test : 71</h4>
                        <span class="ciam-rate-count">4.9 <span class="material-icons">star</span></span>
                        <p class="ciam-doctor-experience">Glycosylated Hemoglobin  Liver Function Test Urine Routine & Microscopy</p>
                        <p class="ciam-product-price"><span>Price :</span> $ 149</p>
                        <span class="ciam-discount">42% Off</span>
                    </div>
                    <div class="ciam-slide-card-footer">
                        <a href="#" class="btn btn-primary w-100">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="ciam-meet-specialities-slide">
                <div class="ciam-slide-card">
                    <div class="ciam-slide-card-img">
                        <img src="assets/images/service-img.png" alt="service-img" class="img-fluid">
                    </div>
                    <div class="ciam-slide-card-body">
                        <h3 class="ciam-slide-title">Comprehensive Silver Full Body Checkup</h3>
                        <h4 class="ciam-doctor-name">Includes Test : 71</h4>
                        <span class="ciam-rate-count">4.9 <span class="material-icons">star</span></span>
                        <p class="ciam-doctor-experience">Glycosylated Hemoglobin  Liver Function Test Urine Routine & Microscopy</p>
                        <p class="ciam-product-price"><span>Price :</span> $ 149</p>
                        <span class="ciam-discount">42% Off</span>
                    </div>
                    <div class="ciam-slide-card-footer">
                        <a href="#" class="btn btn-primary w-100">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="ciam-meet-specialities-slide">
                <div class="ciam-slide-card">
                    <div class="ciam-slide-card-img">
                        <img src="assets/images/service-img.png" alt="service-img" class="img-fluid">
                    </div>
                    <div class="ciam-slide-card-body">
                        <h3 class="ciam-slide-title">Comprehensive Silver Full Body Checkup</h3>
                        <h4 class="ciam-doctor-name">Includes Test : 71</h4>
                        <span class="ciam-rate-count">4.9 <span class="material-icons">star</span></span>
                        <p class="ciam-doctor-experience">Glycosylated Hemoglobin  Liver Function Test Urine Routine & Microscopy</p>
                        <p class="ciam-product-price"><span>Price :</span> $ 149</p>
                        <span class="ciam-discount">42% Off</span>
                    </div>
                    <div class="ciam-slide-card-footer">
                        <a href="#" class="btn btn-primary w-100">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="ciam-meet-specialities-slide">
                <div class="ciam-slide-card">
                    <div class="ciam-slide-card-img">
                        <img src="assets/images/service-img.png" alt="service-img" class="img-fluid">
                    </div>
                    <div class="ciam-slide-card-body">
                        <h3 class="ciam-slide-title">Comprehensive Silver Full Body Checkup</h3>
                        <h4 class="ciam-doctor-name">Includes Test : 71</h4>
                        <span class="ciam-rate-count">4.9 <span class="material-icons">star</span></span>
                        <p class="ciam-doctor-experience">Glycosylated Hemoglobin  Liver Function Test Urine Routine & Microscopy</p>
                        <p class="ciam-product-price"><span>Price :</span> $ 149</p>
                        <span class="ciam-discount">42% Off</span>
                    </div>
                    <div class="ciam-slide-card-footer">
                        <a href="#" class="btn btn-primary w-100">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center ciam-section-bottom-btn">
            <a href="#" class="btn btn-primary">View All Packages</a>
        </div>
    </div>
</section>
<!-- Meet Specialities Doctors Section End -->


<!-- Medicines Section Start -->
<section class="ciam-medicines-section ciam-section">
    <div class="ciam-section-heading">
        <div class="container">
            <h2 class="ciam-section-title">Featured Labs</h2>
            <p class="ciam-section-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum fuga neque architecto vero provident cumque quidem temporibus eos perferendis </p>
        </div>
    </div>
    <div class="ciam-meet-specialities-slider">
        <div class="ciam-meet-specialities-slide">
            <div class="ciam-slide-card">
                <div class="ciam-slide-card-img">
                    <img src="assets/images/service-img.png" alt="service-img" class="img-fluid">
                </div>
                <div class="ciam-slide-card-body">
                    <h3 class="ciam-slide-title">Comprehensive Silver Full Body Checkup</h3>
                    <span class="ciam-rate-count">4.9 <span class="material-icons">star</span></span>
                </div>
                <div class="ciam-slide-card-footer">
                    <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
            </div>
        </div>
        <div class="ciam-meet-specialities-slide">
            <div class="ciam-slide-card">
                <div class="ciam-slide-card-img">
                    <img src="assets/images/service-img.png" alt="service-img" class="img-fluid">
                </div>
                <div class="ciam-slide-card-body">
                    <h3 class="ciam-slide-title">Comprehensive Silver Full Body Checkup</h3>
                    <span class="ciam-rate-count">4.9 <span class="material-icons">star</span></span>
                </div>
                <div class="ciam-slide-card-footer">
                    <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
            </div>
        </div>
        <div class="ciam-meet-specialities-slide">
            <div class="ciam-slide-card">
                <div class="ciam-slide-card-img">
                    <img src="assets/images/service-img.png" alt="service-img" class="img-fluid">
                </div>
                <div class="ciam-slide-card-body">
                    <h3 class="ciam-slide-title">Comprehensive Silver Full Body Checkup</h3>
                    <span class="ciam-rate-count">4.9 <span class="material-icons">star</span></span>
                </div>
                <div class="ciam-slide-card-footer">
                    <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
            </div>
        </div>
        <div class="ciam-meet-specialities-slide">
            <div class="ciam-slide-card">
                <div class="ciam-slide-card-img">
                    <img src="assets/images/service-img.png" alt="service-img" class="img-fluid">
                </div>
                <div class="ciam-slide-card-body">
                    <h3 class="ciam-slide-title">Comprehensive Silver Full Body Checkup</h3>
                    <span class="ciam-rate-count">4.9 <span class="material-icons">star</span></span>
                </div>
                <div class="ciam-slide-card-footer">
                    <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
            </div>
        </div>
        <div class="ciam-meet-specialities-slide">
            <div class="ciam-slide-card">
                <div class="ciam-slide-card-img">
                    <img src="assets/images/service-img.png" alt="service-img" class="img-fluid">
                </div>
                <div class="ciam-slide-card-body">
                    <h3 class="ciam-slide-title">Comprehensive Silver Full Body Checkup</h3>
                    <span class="ciam-rate-count">4.9 <span class="material-icons">star</span></span>
                </div>
                <div class="ciam-slide-card-footer">
                    <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
            </div>
        </div>
        <div class="ciam-meet-specialities-slide">
            <div class="ciam-slide-card">
                <div class="ciam-slide-card-img">
                    <img src="assets/images/service-img.png" alt="service-img" class="img-fluid">
                </div>
                <div class="ciam-slide-card-body">
                    <h3 class="ciam-slide-title">Comprehensive Silver Full Body Checkup</h3>
                    <span class="ciam-rate-count">4.9 <span class="material-icons">star</span></span>
                </div>
                <div class="ciam-slide-card-footer">
                    <a href="#" class="btn btn-primary w-100">View Details</a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center ciam-section-bottom-btn">
        <a href="#" class="btn btn-primary">View All Labs</a>
    </div>
</section>
<!-- Medicines Section End -->



<!-- Modal -->
<div class="modal fade" id="uploadPrescriptionModal" tabindex="-1" aria-labelledby="uploadPrescriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadPrescriptionModalLabel">Have a prescription? Upload here </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ciam-upload-prescription-content">
                    <div  class="ciam-upload-prescription-head">
                        <div class="ciam-fileInput">
                            <input type="file" class="form-control">
                            <span class="ciam-fileInput-text">+ Browse</span>
                        </div>
                        <div class="ciam-view-file">
                            view <br/> Prescription
                        </div>
                    </div>
                    <div class="ciam-upload-prescription-body">
                        <div class="ciam-prescription-description ciam-security-description">
                            <span class="material-icons">security</span>
                            <p>You attached prescription will be secure and private</p>
                        </div>
                        <div class="ciam-prescription-description">
                        <span class="material-icons">info</span>
                            <p>Valid prescription Guide</p>
                        </div>
                        <div class="ciam-prescription-description-content">
                            <label>Why Upload a prescription?</label>
                            <p>Lorem ipsum dolor sit amet, consetetur  sadipscing  elitr, sed diam nonumy eirmod tempor invidunt ut  labore et.</p>
                            <p>Lorem ipsum dolor sit amet, consetetur</p>
                            <p>Lorem ipsum dolor sit amet, consetetur</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">CONTINUE</button>
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php') ?>