<?php require_once "includes/header.php"?>

  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>Homeland<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="index.html">Home</a>
                  </li>
                  <li><a href="buy.html">Buy</a></li>
                  <li><a href="rent.html">Rent</a></li>
                  <li class="has-children">
                    <a href="properties.html">Properties</a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#">Condo</a></li>
                      <li><a href="#">Property Land</a></li>
                      <li><a href="#">Commercial Building</a></li>
                     
                    </ul>
                  </li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="login.html">Login</a></li>
                  <li><a href="register.html">Register</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">For Rent</span>
              <h1 class="mb-2">871 Crenshaw Blvd</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">$2,250,500</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">See Details</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">For Sale</span>
              <h1 class="mb-2">625 S. Berendo St</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">$1,000,500</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">See Details</a></p>
            </div>
          </div>
        </div>
      </div>  

    </div>


    <div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" style="margin-top: -100px;">
            <div class="row  align-items-end">
              <div class="col-md-3">
                <label for="list-types">Listing Types</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="list-types" id="list-types" class="form-control d-block rounded-0">
                    <option value="">Condo</option>
                    <option value="">Commercial Building</option>
                    <option value="">Land Property</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="offer-types">Offer Type</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                    <option value="">For Sale</option>
                    <option value="">For Rent</option>
                    <option value="">For Lease</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="select-city">Select City</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="select-city" id="select-city" class="form-control d-block rounded-0">
                    <option value="">New York</option>
                    <option value="">Brooklyn</option>
                    <option value="">London</option>
                    <option value="">Japan</option>
                    <option value="">Philippines</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <input type="submit" class="btn btn-success text-white btn-block rounded-0" value="Search">
              </div>
            </div>
          </form>
        </div>  

        <div class="row">
          <div class="col-md-12">
            <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">
              <div class="mr-auto">
                <a href="index.html" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                <a href="view-list.html" class="icon-view view-list"><span class="icon-view_list"></span></a>
                
              </div>
              <div class="ml-auto d-flex align-items-center">
                <div>
                  <a href="#" class="view-list px-3 border-right active">All</a>
                  <a href="#" class="view-list px-3 border-right">Rent</a>
                  <a href="#" class="view-list px-3">Sale</a>
                </div>


                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select class="form-control form-control-sm d-block rounded-0">
                    <option value="">Sort by</option>
                    <option value="">Price Ascending</option>
                    <option value="">Price Descending</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">
      
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">Sale</span>
                </div>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">625 S. Berendo St</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 625 S. Berendo St Unit 607 Los Angeles, CA 90005</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">7,000</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">Sale</span>
                </div>
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite active"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">871 Crenshaw Blvd</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 1 New York Ave, Warners Bay, NSW 2282</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">1,620</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">Sale</span>
                </div>
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">853 S Lucerne Blvd</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 853 S Lucerne Blvd Unit 101 Los Angeles, CA 90005</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">5,500</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">Sale</span>
                </div>
                <img src="images/img_4.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">625 S. Berendo St</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 625 S. Berendo St Unit 607 Los Angeles, CA 90005</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">7,000</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">Sale</span>
                </div>
                <img src="images/img_5.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">871 Crenshaw Blvd</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 1 New York Ave, Warners Bay, NSW 2282</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">1,620</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">Sale</span>
                </div>
                <img src="images/img_6.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">853 S Lucerne Blvd</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 853 S Lucerne Blvd Unit 101 Los Angeles, CA 90005</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">5,500</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">Sale</span>
                </div>
                <img src="images/img_7.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">625 S. Berendo St</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 625 S. Berendo St Unit 607 Los Angeles, CA 90005</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">7,000</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">Sale</span>
                </div>
                <img src="images/img_8.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">871 Crenshaw Blvd</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 1 New York Ave, Warners Bay, NSW 2282</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">1,620</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">Sale</span>
                </div>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">853 S Lucerne Blvd</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 853 S Lucerne Blvd Unit 101 Los Angeles, CA 90005</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">5,500</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>Why Choose Us?</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores quisquam saepe architecto error corporis aliquam. Cum ipsam a consectetur aut sunt sint animi, pariatur corporis, eaque, deleniti cupiditate officia.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
              <span class="icon flaticon-house"></span>
              <h2 class="service-heading">Research Subburbs</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis ex odio molestia.</p>
              <p><span class="read-more">Read More</span></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
              <span class="icon flaticon-sold"></span>
              <h2 class="service-heading">Sold Houses</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis ex odio molestia.</p>
              <p><span class="read-more">Read More</span></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="service text-center">
              <span class="icon flaticon-camera"></span>
              <h2 class="service-heading">Security Priority</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt iure qui natus perspiciatis ex odio molestia.</p>
              <p><span class="read-more">Read More</span></p>
            </a>
          </div>
        </div>
      </div>
    </div>

    
<?php require_once "includes/footer.php"?>