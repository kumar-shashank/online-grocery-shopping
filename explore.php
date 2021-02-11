<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Dorne - Directory &amp; Listing Template | Explore</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.php">Home</a>
                                        <a class="dropdown-item" href="explore.php">Explore</a>
                                        <a class="dropdown-item" href="listing.php">Listing</a>
                                        <a class="dropdown-item" href="single-listing.php">Single Listing</a>
                                        <a class="dropdown-item" href="contact.php">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                        <a class="dropdown-item" href="index.php">Home</a>
                                        <a class="dropdown-item" href="explore.php">Explore</a>
                                        <a class="dropdown-item" href="listing.php">Listing</a>
                                        <a class="dropdown-item" href="single-listing.php">Single Listing</a>
                                        <a class="dropdown-item" href="contact.php">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                            </div>
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                                <a href="#">Sign in  or Register</a>
                            </div>
                            <!-- Add listings btn -->
                            <div class="dorne-add-listings-btn">
                                <a href="#" class="btn dorne-btn">+ Add Listings</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg)">
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- Explore Area -->
    <section class="dorne-explore-area d-md-flex">
        <!-- Explore Search Area -->
        <div class="explore-search-area d-md-flex">
            <!-- Explore Search Form -->
            <div class="explore-search-form">
                <h6>What are you looking for?</h6>
                <!-- Tabs -->
                <div class="nav nav-tabs" id="heroTab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Places</a>
                    <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Events</a>
                </div>
                <!-- Tabs Content -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                        <form action="#" method="get">
                            <select class="custom-select" id="destinations">
                                <option selected>Your Destinations</option>
                                <option value="1">New York</option>
                                <option value="2">Latvia</option>
                                <option value="3">Dhaka</option>
                                <option value="4">Melbourne</option>
                                <option value="5">London</option>
                            </select>
                            <select class="custom-select" id="catagories">
                                <option selected>All Catagories</option>
                                <option value="1">Catagories 1</option>
                                <option value="2">Catagories 2</option>
                                <option value="3">Catagories 3</option>
                                <option value="3">Catagories 4</option>
                            </select>
                            <select class="custom-select" id="price-range">
                                <option selected>Price Range</option>
                                <option value="1">$100 - $499</option>
                                <option value="2">$500 - $999</option>
                                <option value="3">$1000 - $4999</option>
                                <option value="3">$5000+</option>
                            </select>
                            <select class="custom-select" id="proximity">
                                <option selected>Proximity</option>
                                <option value="1">Proximity 1</option>
                                <option value="2">Proximity 2</option>
                                <option value="3">Proximity 3</option>
                                <option value="3">Proximity 4</option>
                                <option value="3">Proximity 5</option>
                            </select>
                            <div class="row mt-md-5 mt-0">
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Accepts Credit Cards</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Bike Parking</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Wireless Internet</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Reservations</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Privat Parking</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Smoking Area</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Wheelchair Accesible</span>
                                    </label>
                                </div>
                                <div class="col-12 col-xl-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Coupons</span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn dorne-btn mt-50 bg-white text-dark"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                        <form action="#" method="get">
                            <select class="custom-select" id="events-destinations">
                                <option selected>Your Destinations</option>
                                <option value="1">New York</option>
                                <option value="2">Latvia</option>
                                <option value="3">Dhaka</option>
                                <option value="4">Melbourne</option>
                                <option value="5">London</option>
                            </select>
                            <select class="custom-select" id="events-catagories">
                                <option selected>All Catagories</option>
                                <option value="1">Catagories 1</option>
                                <option value="2">Catagories 2</option>
                                <option value="3">Catagories 3</option>
                                <option value="3">Catagories 4</option>
                            </select>
                            <select class="custom-select" id="events-price-range">
                                <option selected>Price Range</option>
                                <option value="1">$100 - $499</option>
                                <option value="2">$500 - $999</option>
                                <option value="3">$1000 - $4999</option>
                                <option value="3">$5000+</option>
                            </select>
                            <select class="custom-select" id="events-proximity">
                                <option selected>Proximity</option>
                                <option value="1">Proximity 1</option>
                                <option value="2">Proximity 2</option>
                                <option value="3">Proximity 3</option>
                                <option value="3">Proximity 4</option>
                                <option value="3">Proximity 5</option>
                            </select>
                            <button type="submit" class="btn dorne-btn mt-50 bg-white text-dark"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Explore Search Result -->
            <div class="explore-search-result">
                <!-- Single Features Area -->
                <div class="single-features-area">
                    <img src="img/bg-img/feature-1.jpg" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        <p>FROM $59/night</p>
                    </div>
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <div class="feature-title">
                            <h5>Ibiza</h5>
                            <p>Party</p>
                        </div>
                        <div class="feature-favourite">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Features Area -->
                <div class="single-features-area">
                    <img src="img/bg-img/feature-2.jpg" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        <p>FROM $59/night</p>
                    </div>
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <div class="feature-title">
                            <h5>Paris</h5>
                            <p>Luxury</p>
                        </div>
                        <div class="feature-favourite">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Features Area -->
                <div class="single-features-area">
                    <img src="img/bg-img/feature-3.jpg" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        <p>FROM $59/night</p>
                    </div>
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <div class="feature-title">
                            <h5>Lake Como</h5>
                            <p>Spectacular</p>
                        </div>
                        <div class="feature-favourite">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Single Features Area -->
                <div class="single-features-area">
                    <img src="img/bg-img/feature-4.jpg" alt="">
                    <!-- Price -->
                    <div class="price-start">
                        <p>FROM $59/night</p>
                    </div>
                    <div class="feature-content d-flex align-items-center justify-content-between">
                        <div class="feature-title">
                            <h5>Greece</h5>
                            <p>Sunny</p>
                        </div>
                        <div class="feature-favourite">
                            <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Explore Map Area -->
        <div class="explore-map-area">
            <div id="exploreGoogleMap"></div>
        </div>
    </section>

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Project is made by Shashank Kumar & Varunika Palsetty</a>

                        </p>
                    </div>
                    <div class="footer-social-btns">
                        <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Google Maps js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk"></script>
    <script src="js/google-map/explore-map-active.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>