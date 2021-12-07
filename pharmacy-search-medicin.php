<?php include('include/header.php') ?>

<!-- Landing Section Start -->
<section class="ciam-search-landing-section ciam-section">
    <div class="container">
        <div class="ciam-search-landing-content">
            <h1 class="ciam-section-title">A heritage in care.  reputation in excellence.</h1>
            <div class="ciam-profile-searchBar">
                <form class="mb-5">
                    <div class="ciam-searchBar__inner">
                        <div class="ciam-searchBar-content">
                            <label for="exampleFormControlInput1" class="form-label">Location</label>
                            <div class="ciam-searchBar-input">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Current Location">
                            </div>
                        </div>
                        <div class="ciam-searchBar-content">
                            <label for="exampleFormControlInput1" class="form-label">Search</label>
                            <div class="ciam-searchBar-input">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Doctor name, specialty, symptom">
                            </div>
                        </div>
                        <div class="ciam-searchBar-btn-content">
                            <button class="ciam-searchBar-btn"><span class="material-icons"> arrow_forward </span></button>
                        </div>
                    </div>
                </form>
                <div class="text-center">
                    <button type="button" class="btn btn-primary">Upload a Photo</button>
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
            <div class="col col-12 col-md-3 col-lg-3">
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
            <div class="col col-12 col-md-9 col-lg-9">
                <div class="ciam-review-content ciam-shop-medicine-content">
                    <div class="row">
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ciam-slide-card ciam-product-card">
                                <div class="ciam-slide-card-img">
                                    <img src="assets/images/medisince-img.png" alt="medisince-img" class="img-fluid">
                                </div>
                                <div class="ciam-slide-card-body">
                                    <h3 class="ciam-slide-title">Volini Pain Relief Gel</h3>
                                    <p class="ciam-product-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis similique atque </p>
                                    <p class="ciam-product-price"><span>Price :</span> $ 149</p>
                                </div>
                                <div class="ciam-slide-card-footer">
                                    <a href="#" class="btn btn-primary w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ciam-slide-card ciam-product-card">
                                <div class="ciam-slide-card-img">
                                    <img src="assets/images/medisince-img.png" alt="medisince-img" class="img-fluid">
                                </div>
                                <div class="ciam-slide-card-body">
                                    <h3 class="ciam-slide-title">Volini Pain Relief Gel</h3>
                                    <p class="ciam-product-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis similique atque </p>
                                    <p class="ciam-product-price"><span>Price :</span> $ 149</p>
                                </div>
                                <div class="ciam-slide-card-footer">
                                    <a href="#" class="btn btn-primary w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ciam-slide-card ciam-product-card">
                                <div class="ciam-slide-card-img">
                                    <img src="assets/images/medisince-img.png" alt="medisince-img" class="img-fluid">
                                </div>
                                <div class="ciam-slide-card-body">
                                    <h3 class="ciam-slide-title">Volini Pain Relief Gel</h3>
                                    <p class="ciam-product-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis similique atque </p>
                                    <p class="ciam-product-price"><span>Price :</span> $ 149</p>
                                </div>
                                <div class="ciam-slide-card-footer">
                                    <a href="#" class="btn btn-primary w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ciam-slide-card ciam-product-card">
                                <div class="ciam-slide-card-img">
                                    <img src="assets/images/medisince-img.png" alt="medisince-img" class="img-fluid">
                                </div>
                                <div class="ciam-slide-card-body">
                                    <h3 class="ciam-slide-title">Volini Pain Relief Gel</h3>
                                    <p class="ciam-product-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis similique atque </p>
                                    <p class="ciam-product-price"><span>Price :</span> $ 149</p>
                                </div>
                                <div class="ciam-slide-card-footer">
                                    <a href="#" class="btn btn-primary w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ciam-slide-card ciam-product-card">
                                <div class="ciam-slide-card-img">
                                    <img src="assets/images/medisince-img.png" alt="medisince-img" class="img-fluid">
                                </div>
                                <div class="ciam-slide-card-body">
                                    <h3 class="ciam-slide-title">Volini Pain Relief Gel</h3>
                                    <p class="ciam-product-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis similique atque </p>
                                    <p class="ciam-product-price"><span>Price :</span> $ 149</p>
                                </div>
                                <div class="ciam-slide-card-footer">
                                    <a href="#" class="btn btn-primary w-100">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 col-md-6 col-lg-4">
                            <div class="ciam-slide-card ciam-product-card">
                                <div class="ciam-slide-card-img">
                                    <img src="assets/images/medisince-img.png" alt="medisince-img" class="img-fluid">
                                </div>
                                <div class="ciam-slide-card-body">
                                    <h3 class="ciam-slide-title">Volini Pain Relief Gel</h3>
                                    <p class="ciam-product-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis similique atque </p>
                                    <p class="ciam-product-price"><span>Price :</span> $ 149</p>
                                </div>
                                <div class="ciam-slide-card-footer">
                                    <a href="#" class="btn btn-primary w-100">Add to Cart</a>
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