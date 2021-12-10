<?php include('include/header.php') ?>
<!-- Site SearchBar Start -->
<div class="ciam-searchBar">
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
                    <label for="exampleFormControlInput1" class="form-label">Search For</label>
                    <div class="ciam-searchBar-input">
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Products</option>
                            <option selected value="2">Doctor, Clinics, hospitals...</option>
                        </select>
                    </div>
                </div>
                <div class="ciam-searchBar-content">
                    <label for="exampleFormControlInput1" class="form-label">Search</label>
                    <div class="ciam-searchBar-input">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Doctor, Clinics, hospitals, etc.">
                    </div>
                </div>
                <div class="ciam-searchBar-btn-content">
                    <button class="ciam-searchBar-btn"><span class="material-icons"> search </span></button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Site SearchBar End -->

<!-- Serch Profile Section Start -->
<section class="ciam-serch-profile-section  ciam-section">
    <div class="container">
        <h2 class="ciam-shop-medicine-title">Shop by category</h2>
        <div class="ciam-shop-product-slider">
            <div class="ciam-meet-specialities-slide">
                <div class="ciam-slide-card ciam-product-card">
                    <div class="ciam-slide-card-img">
                        <img src="assets/images/masks-img.jpg" alt="masks-img" class="img-fluid">
                    </div>
                    <div class="ciam-slide-card-footer">
                        <a href="#" class="btn btn-success w-100">Masks</a>
                    </div>
                </div>
            </div>
            <div class="ciam-meet-specialities-slide">
                <div class="ciam-slide-card ciam-product-card">
                    <div class="ciam-slide-card-img">
                        <img src="assets/images/thermometers-img.jpg" alt="thermometers-img" class="img-fluid">
                    </div>
                    <div class="ciam-slide-card-footer">
                        <a href="#" class="btn btn-success w-100">Thermometers</a>
                    </div>
                </div>
            </div>
            <div class="ciam-meet-specialities-slide">
                <div class="ciam-slide-card ciam-product-card">
                    <div class="ciam-slide-card-img">
                        <img src="assets/images/pulse-oximeter-img.jpg" alt="pulse-oximeter-img" class="img-fluid">
                    </div>
                    <div class="ciam-slide-card-footer">
                        <a href="#" class="btn btn-success w-100">Pulse Oximeter</a>
                    </div>
                </div>
            </div>
            <div class="ciam-meet-specialities-slide">
                <div class="ciam-slide-card ciam-product-card">
                    <div class="ciam-slide-card-img">
                        <img src="assets/images/body-massager.png" alt="body-massager" class="img-fluid">
                    </div>
                    <div class="ciam-slide-card-footer">
                        <a href="#" class="btn btn-success w-100">Body Massager</a>
                    </div>
                </div>
            </div>
            <div class="ciam-meet-specialities-slide">
                <div class="ciam-slide-card ciam-product-card">
                    <div class="ciam-slide-card-img">
                        <img src="assets/images/thermometers-img.jpg" alt="thermometers-img" class="img-fluid">
                    </div>
                    <div class="ciam-slide-card-footer">
                        <a href="#" class="btn btn-success w-100">Thermometers</a>
                    </div>
                </div>
            </div>
            <div class="ciam-meet-specialities-slide">
                <div class="ciam-slide-card ciam-product-card">
                    <div class="ciam-slide-card-img">
                        <img src="assets/images/pulse-oximeter-img.jpg" alt="pulse-oximeter-img" class="img-fluid">
                    </div>
                    <div class="ciam-slide-card-footer">
                        <a href="#" class="btn btn-success w-100">Pulse Oximeter</a>
                    </div>
                </div>
            </div>
        </div>
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
                                Brand
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#ciamFilterAccordion">
                                <div class="accordion-body">
                                    <div class="ciam-filter-check-content">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckBrand1">
                                            <label class="form-check-label" for="CheckBrand1">
                                                Brand Name
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckBrand2">
                                            <label class="form-check-label" for="CheckBrand2">
                                                Brand Name
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckBrand3">
                                            <label class="form-check-label" for="CheckBrand3">
                                                Brand Name
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckBrand4">
                                            <label class="form-check-label" for="CheckBrand4">
                                                Brand Name
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckBrand5">
                                            <label class="form-check-label" for="CheckBrand5">
                                                Brand Name
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckBrand6">
                                            <label class="form-check-label" for="CheckBrand6">
                                                Brand Name
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckBrand7">
                                            <label class="form-check-label" for="CheckBrand7">
                                                Brand Name
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                AGE
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#ciamFilterAccordion">
                                <div class="accordion-body">
                                    <div class="ciam-filter-check-content">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckAge1">
                                            <label class="form-check-label" for="CheckAge1">
                                                All
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckAge2">
                                            <label class="form-check-label" for="CheckAge2">
                                                Child
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckAge3">
                                            <label class="form-check-label" for="CheckAge3">
                                                Adult
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckAge4">
                                            <label class="form-check-label" for="CheckAge4">
                                                Elderly
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                GENDER
                            </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#ciamFilterAccordion">
                                <div class="accordion-body">
                                    <div class="ciam-filter-check-content">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckGender1">
                                            <label class="form-check-label" for="CheckGender1">
                                                Unisex
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckGender2">
                                            <label class="form-check-label" for="CheckGender2">
                                                Female
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="CheckGender3">
                                            <label class="form-check-label" for="CheckGender3">
                                                Male
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
                                    <a href="#" class="btn btn-success w-100">Add to Cart</a>
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
                                    <a href="#" class="btn btn-success w-100">Add to Cart</a>
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
                                    <a href="#" class="btn btn-success w-100">Add to Cart</a>
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
                                    <a href="#" class="btn btn-success w-100">Add to Cart</a>
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
                                    <a href="#" class="btn btn-success w-100">Add to Cart</a>
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
                                    <a href="#" class="btn btn-success w-100">Add to Cart</a>
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
                                    <a href="#" class="btn btn-success w-100">Add to Cart</a>
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
                                    <a href="#" class="btn btn-success w-100">Add to Cart</a>
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
                                    <a href="#" class="btn btn-success w-100">Add to Cart</a>
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