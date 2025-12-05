<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Title -->
  <!-- <title>Lennore | Water Purifier Machine Company</title>  -->
  <title>LENNORE IONIZER</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">

  <!-- Font-Awesome (CSS) -->
  <link rel="stylesheet" href="./assets/vendors/font-awesome/css/all.min.css">

  <link rel="stylesheet" href="./assets/vendors/magnific-popup/magnific-popup.css">

  <!-- Swiper (CSS) -->
  <!-- <link rel="stylesheet" href="../assets/vendors/swiper/swiper-bundle.min.css"> -->
  <link rel="stylesheet" href="./assets/vendors/swiper/swiper-bundle.min.css">


  <!-- Custom Stylesheets -->
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">
<meta name="google-site-verification" content="ad4CY5gJh2ehVzCD9IokTCagcE_n2U9tyIUEYCAaMKI" />
</head>
<style>
  /* Contact Information Styles */
  .info.connect {
    font-size: 15px;
    line-height: 1.6;
  }

  .clickable-contact a {
    display: flex;
    align-items: center;
    gap: 10px;
    color: inherit;
    text-decoration: none;
    transition: all 0.2s ease;
  }

  .clickable-contact a:hover {
    color: #2a7d2e;
    /* Lennore brand green */
  }

  .contact-icon {
    color: #f5f5f5 !important;
    min-width: 20px;
    text-align: center;
  }

  .clickable-contact:hover .contact-icon {
    color: #2a7d2e;
    transform: scale(1.1);
  }

  /* Remove default link styling */
  .clickable-contact a,
  .clickable-contact a:hover,
  .clickable-contact a:visited {
    color: inherit;
  }



  /* FAQ Section Styles */
  .faq-section {
    max-width: 80%;
    margin: 40px auto;
    padding: 20px;
    font-family: 'Arial', sans-serif;
  }

  .faq-heading {
    text-align: center;
    margin-bottom: 30px;
  }

  .faq-heading h2 {
    color: rgba(39, 137, 103, 0.908);
    font-size: 32px;
    margin-bottom: 10px;
  }

  .faq-heading p {
    color: #666;
    font-size: 16px;
  }

  .faq-container {
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
  }

  .faq-item {
    border-bottom: 1px solid #e0e0e0;
    transition: all 0.3s ease;
  }

  .faq-item:last-child {
    border-bottom: none;
  }

  .faq-question {
    width: 100%;
    padding: 20px;
    text-align: left;
    background: #f9f9f9;
    border: none;
    cursor: pointer;
    font-size: 18px;
    font-weight: 600;
    color: #333;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: all 0.3s ease;
  }

  .faq-question:hover {
    background: rgba(39, 137, 103, 0.908);
    color: #fff;
  }

  .faq-question i {
    transition: transform 0.3s ease;
  }

  .faq-question.active i {
    transform: rotate(180deg);
  }

  .faq-answer {
    padding: 0 20px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease, padding 0.3s ease;
    background: #fff;
    font-size: 16px;
  }

  .faq-question.active+.faq-answer {
    padding-bottom: 40px;
    padding-top: 20px;
    max-height: 1000px;
    /* Increased to accommodate long answers */
  }

  .faq-answer p {
    color: #666;
    line-height: 1.6;
    margin: 0;
  }

  /* Animation to scroll to the question when opened */
  @keyframes smoothScroll {
    0% {
      scroll-margin-top: 0;
    }

    100% {
      scroll-margin-top: 20px;
    }
  }

  .faq-item.active-item {
    scroll-margin-top: 20px;
    animation: smoothScroll 0.5s forwards;
  }

  @media (max-width: 768px) {
    .faq-question {
      padding: 15px;
      font-size: 16px;
    }

    .faq-heading h2 {
      font-size: 28px;
    }
  }
</style>



<body>

  <!-- ==================== Scroll-Top Area (Start) ==================== -->
  <a href="#" class="scroll-top">
    <i class="fas fa-long-arrow-alt-up"></i>
  </a>
  <!-- ==================== Scroll-Top Area (End) ==================== -->



  <!-- ==================== Header Area (Start) ==================== -->
  <header>

    <!-- ===== Header Area (Start) ===== -->
    <div class="header">

      <div class="header-1">

        <!-- == Contacts == -->
        <ul class="header-contacts">
          <li class="clickable-contact">
            <a href="tel:+919810337293">
              <i class="fas fa-phone lennore-header-contact" style="color:whitesmoke"></i>
              <span style="color:whitesmoke">+91 98103 37293 +91 98107 09704</span>
            </a>
          </li>
          <li class="clickable-contact">
            <a href="mailto:info@lennore.in">
              <i class="fas fa-envelope lennore-header-contact" style="color:whitesmoke"></i>
              <span class="gmail" style="color:whitesmoke">info@lennore.in</span>
            </a>
          </li>
        </ul>

        <!-- == Social == -->
        <ul class="social-contacts">
          <li><a href="https://www.facebook.com/profile.php?id=61558773770869" target="_blank"
              class="fab fa-facebook-f"></a></li>
          <li><a href="https://www.youtube.com/@LennoreIONIZER" target="_blank" class="fab fa-youtube"></a></li>
          <li><a href="https://www.instagram.com/lennoreofficial/" target="_blank" class="fab fa-instagram"></a></li>
          <li><a href="https://www.linkedin.com/company/106217416/admin/dashboard/" target="_blank"
              class="fab fa-linkedin"></a></li>
          <li><a href="https://api.whatsapp.com/send?phone=919810337293" target="_blank" class="fab fa-whatsapp"></a>
          </li>
        </ul>

      </div>

      <div class="header-2">

        <div id="menu-btn" class="icon fa-solid fa-bars-staggered"></div>

        <!-- == Logo == -->
        <a class="logo" href="./index.html">
          <img src="./assets/img/logo.png" alt="logo">

        </a>

        <div class="container">

          <!-- == Navbar == -->
          <nav class="navbar">

            <a class="nav-btn" href="./index.html">home</a>

            <div class="dropdown-menu">
              <button class="nav-btn"><a href="./about.html" style="color: whitesmoke;">about us</a></button>
            </div>

            <div class="dropdown-menu">
              <button class="nav-btn"><a href="./gallery.html" style="color: whitesmoke;">Gallery</a></button>
            </div>

            <div class="dropdown-menu">
              <button class="nav-btn"><a href="./services.html" style="color: whitesmoke;">Services</a></button>

            </div>

            <div class="dropdown-menu">
              <button class="nav-btn"><a href="./products.html" style="color: whitesmoke;">products</a></button>
            </div>


            <!-- 
            <div class="dropdown-menu">
              <button class="nav-btn"><a href="./blog.html" style="color: whitesmoke;" >blogs </a></button>
            </div>  -->

            <div class="dropdown-menu">
              <button class="nav-btn"><a href="./contact.html" style="color: whitesmoke;">contact </a></button>
            </div>

        </div>


        </nav>


        <!-- == Mobile Menu Area (Start) == -->
        <div class="mobile-menu">

          <nav class="mobile-navbar">

            <div class="nav-link">
              <div class="main-nav-link"> <a class="nav-btn" href="./index.html">home</a> </div>
            </div>

            <div class="nav-link">
              <div class="main-nav-link">
                <div class="nav-btn"><a href="./about.html">about us</a>
                </div>

              </div>


              <div class="nav-link">
                <div class="main-nav-link">
                  <div class="nav-btn"><a href="./services.html">Services</a></div>
                </div>

                <div class="nav-link">
                  <div class="main-nav-link">
                    <div class="nav-btn"><a href="./products.html">products</a></div>
                  </div>


                  <!-- <div class="nav-link">
              <div class="main-nav-link"> <div class="nav-btn"> <a href="./blog.html">blogs</a></div>
          
            </div>  -->

                  <div class="nav-link">
                    <div class="main-nav-link"> <a class="nav-btn" href="./contact.html">contact</a> </div>
                  </div>


                  <!-- <div class="dropdown-menu">
              <button class="nav-btn">about <i class="fas fa-angle-down"></i> </button>
              <div class="dropdown-content">
                <a href="pages/About/About.html">about us</a>
                <a href="pages/About/Team.html">team</a>
                <a href="javascript:void(0)">team single</a>
                <a href="pages/About/Testimonials.html">testimonials</a>
                <a href="pages/About/Faqs.html">faqs</a>
              </div>
            </div> -->


          </nav>

        </div>

      </div>

    </div>
    <!-- ===== Header Area (Ends) ===== -->

  </header>
  <!-- ==================== Header Area (End) ==================== -->



  <!-- ==================== Home-Slider Area (Start) ==================== -->
  <section class="home">

    <div class="swiper-container home-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide home-item">
          <img src="./assets/img/banner/mainbanner.jpg" alt="">
          <div class="content">
            <div class="text">

            </div>
          </div>
        </div>

        <div class="swiper-slide home-item">
          <img src="./assets/img/banner/websitebannerL5+RO.jpg" alt="">
          <div class="content">
            <div class="text">

            </div>
          </div>
        </div>

        <div class="swiper-slide home-item">
          <img src="./assets/img/banner/websiteBannerL5.jpg" alt="">
          <div class="content">
            <div class="text">
              <!-- <a href="./products.html" class="btn">our products</a> -->
            </div>
          </div>
        </div>

        <div class="swiper-slide home-item">
          <img src="./assets/img/banner/websitebannerL9.jpg" alt="">
          <div class="content">
            <div class="text">
              <!-- <a href="./products.html" class="btn">our products</a> -->
            </div>
          </div>
        </div>

      </div>

      <div class="swiper-pagination swiper-pagination1"></div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>

  </section>
  <!-- ==================== Home-Slider Area (End) ==================== -->



  <!-- ==================== Features Area (End) ==================== -->
  <section class="features home-features">

    <div class="box-container">

      <div class="feature-item">
        <i class="fa-solid fa-droplet"></i>
        <h3>Advanced Filtration Technology </h3>
        <p>Water ionizers from our company extract dangerous metals and chemicals from
          the water stream to deliver healthy and secure drinking water. </p>
      </div>

      <div class="feature-item">
        <i class="fa-solid fa-thumbs-up"></i>
        <h3>Built to Last </h3>
        <p>Lennore water system ionizers maintain their strength and durability while
          functioning effectively for long periods of time before requiring maintenance or
          repairs.</p>
      </div>

      <div class="feature-item">
        <i class="fa-solid fa-headset"></i>
        <h3>Sleek, Space-Saving Designs </h3>
        <p>The water ionizer machine from our brand combines fashion with functionality
          because it adopts a small compact design to suit any kitchen decoration or office
          environment.</p>
      </div>

    </div>

  </section>
  <!-- ==================== Features Area (End) ==================== -->



  <!-- ==================== About Area (Start) ==================== -->
  <section class="about">

    <div class="box-container">

      <div class="image">
        <div class="sub-image1"><img src="./assets/img/product/2 L7+RO.png" alt=""></div>
        <!-- <div class="sub-image2">
          <div class="experience-container">
            <div class="experience"><span>35</span> years of experience</div>
          </div>
          <img src="../assets/img/L5.jpg" alt="">
        </div> -->
      </div>

      <div class="content">
        <div class="heading">
          <span>Know About US </span>
          <h3>Why Choose Lennore? </h3>
          <!-- <img src="../assets/img/L7.jpg" alt=""> -->
        </div>
        <p>Lennore works to provide purified safe drinking water for all people. Our alkaline
          water ionizer machine provides dependable alkaline water products together with
          trustworthy service and durable equipment. We create water solutions to
          maintain effective operations 24 hours a day for residential and business
          premises.</p>
        <ul class="about-points">
          <li>
            <i class="fa-solid fa-recycle"></i>
            <div class="text">
              <h5>Trusted Quality </h5>
              <p>Advanced RO tech for safe, clean drinking water. </p>
            </div>
          </li>
          <li>
            <i class="fa-solid fa-droplet"></i>
            <div class="text">
              <h5>Customer-First Service
              </h5>
              <p>Quick setup, fast support, and reliable service always.</p>
            </div>
          </li>
        </ul>
        <a href="./contact.html" class="btn">contact us</a>
      </div>

    </div>

  </section>
  <!-- ==================== About Area (End) ==================== -->



  <!-- ==================== Count Area (Start) ==================== -->
  <div class="counting">

    <div class="box">
      <div class="info">
        <i class="fa-solid fa-briefcase"></i>
        <h1 class="count" data-count="5">5+</h1>
        <h3>products Done</h3>
      </div>
    </div>

    <div class="box">
      <div class="info">
        <i class="fas fa-filter"></i> <!-- Using fa-filter as RO icon alternative -->
        <h1 class="count" data-count="2000">2000+</h1>
        <h3>Machines Delivered</h3>
      </div>
    </div>

    <div class="box">
      <div class="info">
        <i class="fa-solid fa-people-group"></i>
        <h1 class="count" data-count="2000">2000+</h1>
        <h3>Happy Customers</h3>
      </div>
    </div>

    <div class="box">
      <div class="info">
        <i class="fa-solid fa-users-gear"></i>
        <h1 class="count" data-count="100">100+</h1>
        <h3>Expert Workers</h3>
      </div>
    </div>

  </div>
  <!-- ==================== Count Area (End) ==================== -->



  <!-- ==================== Products Area (Start) ==================== -->
  <section class="products">

    <div class="heading">
      <span>featured products</span>
      <h2>our products</h2>
      <img src="./assets/img/L5 + RO/" alt="">
    </div>

    <div class="box-container">

      <div class="product-item">
        <div class="image">
          <img src="assets/img/product/3.png" alt="">
        </div>
        <div class="content">
          <a href="./L5.html">
            <h3>Water Purifier [L5] </h3>
          </a>
          <!-- <div class="price">$40.00 <span>$50.00</span></div> -->
          <p>Smart hydration with advanced purification every day.</p>
          <!-- <a href="pages/Shop/Cart.html" class="btn">add to cart</a> -->
        </div>
      </div>

      <div class="product-item">
        <div class="image">
          <img src="assets/img/product/2.png" alt="">
        </div>
        <div class="content">
          <a href="./L5+ro.html">
            <h3>Water Purifier [L5 + RO]</h3>
          </a>
          <!-- <div class="price">$40.00 <span>$50.00</span></div> -->
          <p>Pure water plus RO, perfect for daily health. </p>
          <!-- <a href="pages/Shop/Cart.html" class="btn">add to cart</a> -->
        </div>
      </div>

     



      <div class="product-item">
        <div class="image">
          <img src="assets/img/product/2 L7+RO.png" alt="">
        </div>
        <div class="content">
          <a href="./L7+ro.html">
            <h3>Water Purifier [L7 + RO]</h3>
          </a>
          <!-- <div class="price">$40.00 <span>$50.00</span></div> -->
          <p>Premium RO system with unmatched filtration performance. </p>
          <!-- <a href="pages/Shop/Cart.html" class="btn">add to cart</a> -->
        </div>
      </div>

    </div>

  </section>
  <!-- ==================== Products Area (End) ==================== -->


  <!-- ==================== Composition Area (Start) ==================== -->
  <section class="water-composition linear-bg">

    <div class="heading">
      <span>mineral water</span>
      <h2>water Composition</h2>
      <img src="./assets/images/Heading/heading.html" alt="">
    </div>

    <div class="box-container">

      <div class="box-1">

        <div class="water-item">
          <h3><span>Ca</span>calcium</h3>
          <h5>19.1 mg / L</h5>
          <p>Supports strong bones, teeth, and essential cellular functions. </p>
        </div>

        <div class="water-item">
          <h3><span>Mg</span>Magnesium</h3>
          <h5>2.5 mg / L</h5>
          <p>Helps muscle function, energy production, and nerve health.</p>
        </div>

        <div class="water-item">
          <h3><span>Na</span>Sodium</h3>
          <h5>9.5 mg / L</h5>
          <p>Regulates fluid balance and supports nerve and muscle function. </p>
        </div>

      </div>

      <div class="image">
        <img src="./assets/images/Composition/Water.png" alt="">
      </div>

      <div class="box-2">

        <div class="water-item">
          <h3>potassium <span>K</span></h3>
          <h5>0.5 mg / L</h5>
          <p>Crucial for heart health, muscle function, and nerve signals. </p>
        </div>

        <div class="water-item">
          <h3>Bicarbonate <span>HCO</span></h3>
          <h5>35 mg / L</h5>
          <p>Maintains pH balance and reduces acidity in the body.</p>
        </div>

        <div class="water-item">
          <h3>Chloride <span>Cl-</span></h3>
          <h5>12.1 mg / L</h5>
          <p>Supports hydration and aids digestion by balancing electrolytes.</p>
        </div>

      </div>

    </div>

  </section>
  <!-- ==================== Composition Area (End) ==================== -->






  <!-- ==================== Team Area (Start) ==================== -->
  <!-- <section class="team">

    <div class="heading">
      <span>meet our team</span>
      <h2>our team</h2>
      <img src="./assets/images/Heading/heading.html" alt="">
    </div>

    <div class="box-container">

      <div class="team-item">
        <div class="image">
          <img src="./assets/images/Team/Team-1.jpg" alt="">
          <div class="icon-container">
            <a href="https://www.facebook.com/profile.php?id=61558773770869" target="_blank"><i
                class="fab fa-facebook-f"></i></a>
            <a href="https://www.linkedin.com/company/106217416/admin/dashboard/" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/@LennoreIONIZER" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/lennoreofficial/" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="content">
          <a href="javascript:void(0)">
            <h2>William Johnson</h2>
          </a>
          <h5>Founder & CEO</h5>
        </div>
      </div>

      <div class="team-item">
        <div class="image">
          <img src="./assets/images/Team/Team-2.jpg" alt="">
          <div class="icon-container">
            <a href="https://www.facebook.com/profile.php?id=61558773770869" target="_blank"><i
                class="fab fa-facebook-f"></i></a>
            <a href="https://www.linkedin.com/company/106217416/admin/dashboard/" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/@LennoreIONIZER" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/lennoreofficial/" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="content">
          <a href="javascript:void(0)">
            <h2>Amelia Taylor</h2>
          </a>
          <h5>Operations Manager</h5>
        </div>
      </div>

      <div class="team-item">
        <div class="image">
          <img src="./assets/images/Team/Team-3.jpg" alt="">
          <div class="icon-container">
            <a href="https://www.facebook.com/profile.php?id=61558773770869" target="_blank"><i
                class="fab fa-facebook-f"></i></a>
            <a href="https://www.linkedin.com/company/106217416/admin/dashboard/" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/@LennoreIONIZER" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/lennoreofficial/" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="content">
          <a href="javascript:void(0)">
            <h2>David Wilson</h2>
          </a>
          <h5>Delivery Driver</h5>
        </div>
      </div>

      <div class="team-item">
        <div class="image">
          <img src="./assets/images/Team/Team-4.jpg" alt="">
          <div class="icon-container">
            <a href="https://www.facebook.com/profile.php?id=61558773770869" target="_blank"><i
                class="fab fa-facebook-f"></i></a>
            <a href="https://www.linkedin.com/company/106217416/admin/dashboard/" target="_blank"><i
                class="fab fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/@LennoreIONIZER" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/lennoreofficial/" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="content">
          <a href="javascript:void(0)">
            <h2>Elizabeth Scott</h2>
          </a>
          <h5>Marketing Manager</h5>
        </div>
      </div>

    </div>

  </section> -->
  <!-- ==================== Team Area (End) ==================== -->



  <!-- ==================== Testimonials Area (Start) ==================== -->
  <section class="testimonial linear-bg">

    <div class="heading">
      <span>what our client's say</span>
      <h2>our testimonials</h2>
      <img src="./assets/images/Heading/heading.html" alt="">
    </div>

    <div class="swiper-container testimonial-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide testi-item">
          <div class="image">
            <img src="./assets/img/about/male.jfif" alt="">
            <i class="fas fa-quote-left"></i>
          </div>
          <p>Lennore stands apart as the provider of top-notch alkaline water ionizer machine
            which deliver exceptional taste together with smooth operation and detectable
            health advancements throughout daily use.</p>
          <div class="text">
            <h4>- Amit Gupta </h4>
            <!-- <h6>Manager</h6> -->
          </div>
          <i class="fa-solid fa-quote-right"></i>
        </div>

        <div class="swiper-slide testi-item">
          <div class="image">
            <img src="./assets/img/about/female.jfif" alt="">
            <i class="fas fa-quote-left"></i>
          </div>
          <p>As a result we absolutely recognize the life-changing ionised water benefits. The
            alkaline ionizer system from Lennore delivered positive effects on both our
            energy levels and digestion systems.</p>
          <div class="text">
            <h4>- Neha Rawat </h4>
            <!-- <h6>Housewife</h6> -->
          </div>
          <i class="fa-solid fa-quote-right"></i>
        </div>

        <div class="swiper-slide testi-item">
          <div class="image">
            <img src="./assets/img/about/female.jfif" alt="">
            <i class="fas fa-quote-left"></i>
          </div>
          <p>Attractive features about Lennore's alkaline water machine price include its
            budget-friendly price and durable construction and everyday usability.</p>
          <div class="text">
            <h4>- Subhana
              Noor </h4>
            <!-- <h6>volunteer</h6> -->
          </div>
          <i class="fa-solid fa-quote-right"></i>
        </div>

        <div class="swiper-slide testi-item">
          <div class="image">
            <img src="./assets/img/about/male.jfif" alt="">
            <i class="fas fa-quote-left"></i>
          </div>
          <p>The ionizer machine for water supplied by Lennore matches its excellence to its
            compact dimensions and represents outstanding value for your money.</p>
          <div class="text">
            <h4>- Baljeet
              Singh </h4>
            <!-- <h6>event organizer</h6> -->
          </div>
          <i class="fa-solid fa-quote-right"></i>
        </div>

      </div>

      <div class="swiper-pagination swiper-pagination3"></div>

    </div>

  </section>
  <!-- ==================== Testimonials Area (End) ==================== -->






  <!-- ==================== Sponsors Area (Start) ==================== -->
  <!-- <section class="sponsors">

    <div class="heading">  
      <span>our amazing sponsors</span>
      <h2>our sponsors</h2> 
      <img src="./assets/images/Heading/heading.html" alt=""> 
    </div>

    <div class="swiper-container sponsor-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide sponsor-item"><img src="./assets/images/Sponsors/Sponsor-2.png" alt=""></div>
        <div class="swiper-slide sponsor-item"><img src="./assets/images/Sponsors/Sponsor-1.png" alt=""></div>
        <div class="swiper-slide sponsor-item"><img src="./assets/images/Sponsors/Sponsor-3.png" alt=""></div>
        <div class="swiper-slide sponsor-item"><img src="./assets/images/Sponsors/Sponsor-4.png" alt=""></div>
        <div class="swiper-slide sponsor-item"><img src="./assets/images/Sponsors/Sponsor-5.png" alt=""></div>
        <div class="swiper-slide sponsor-item"><img src="./assets/images/Sponsors/Sponsor-6.png" alt=""></div>
        <div class="swiper-slide sponsor-item"><img src="./assets/images/Sponsors/Sponsor-7.png" alt=""></div>
        <div class="swiper-slide sponsor-item"><img src="./assets/images/Sponsors/Sponsor-8.png" alt=""></div>
        <div class="swiper-slide sponsor-item"><img src="./assets/images/Sponsors/Sponsor-9.png" alt=""></div>
        <div class="swiper-slide sponsor-item"><img src="./assets/images/Sponsors/Sponsor-10.png" alt=""></div>

      </div>
    </div> 

  </section> -->
  <!-- ==================== Sponsors Area (End) ==================== -->

  <!-- whats app -->
  <div class="whatsapp">
    <a href="https://api.whatsapp.com/send?phone=919810337293" target="_blank">
      <i class="fab fa-whatsapp"></i>
    </a>
    <!-- <div class="whatsapp-text">Chat with us</div> -->
  </div>

  <!-- whatsapp  -->


  <!-- faq section start -->
  <section class="faq-section">
    <div class="faq-heading">
      <h2>Frequently Asked Questions</h2>
      <p>Find answers to common questions about our products</p>
    </div>

    <div class="faq-container" id="faqContainer">
      <!-- FAQ Item 1 -->
      <div class="faq-item">
        <button class="faq-question">
          Is alkaline water safe for daily consumption?
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Yes! Alkaline water from Lennore is safe, healthy, and ideal for daily use.</p>
        </div>
      </div>

      <!-- FAQ Item 2 -->
      <div class="faq-item">
        <button class="faq-question">
          Can it be installed in my kitchen?
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Absolutely. Lennore Ionizer is designed for easy countertop,UTC or wall-mounted installation.</p>
        </div>
      </div>

      <!-- FAQ Item 3 -->
      <div class="faq-item">
        <button class="faq-question">
          What makes Lennore special from others?
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Alkaline, Antioxidant and Micro-Clustering.</p>
        </div>
      </div>

      <!-- FAQ Item 4 -->
      <div class="faq-item">
        <button class="faq-question">
          Why Lennore Alkaline Water Ionizer Machine?
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <ul>
            <li><strong>Energy Efficient:</strong> Uses less power than competitors without compromising performance
            </li>
            <li><strong>100% Safe:</strong> Produces Alkaline pH levels without chemicals</li>
            <li><strong>Easy Upgradation:</strong> Modular design for future enhancements</li>
            <li><strong>Quality Assured:</strong> 32-point inspection across 9 quality levels before shipping</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
    // Improved FAQ Accordion Functionality
    document.addEventListener('DOMContentLoaded', function () {
      const faqContainer = document.getElementById('faqContainer');
      const faqQuestions = document.querySelectorAll('.faq-question');

      faqQuestions.forEach(question => {
        question.addEventListener('click', function () {
          const answer = this.nextElementSibling;
          const isOpening = !this.classList.contains('active');

          // Close all other FAQs
          faqQuestions.forEach(q => {
            if (q !== this) {
              q.classList.remove('active');
              q.nextElementSibling.style.maxHeight = null;
            }
          });

          // Toggle current FAQ
          this.classList.toggle('active');

          if (this.classList.contains('active')) {
            answer.style.maxHeight = answer.scrollHeight + 'px';

            // Smooth scroll to keep question visible
            setTimeout(() => {
              this.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
              });
            }, 100);
          } else {
            answer.style.maxHeight = null;
          }
        });
      });

      // Format long answers better
      document.querySelectorAll('.faq-answer p').forEach(answer => {
        if (answer.textContent.length > 150) {
          const text = answer.textContent;
          answer.innerHTML = text.split('\n\n').map(paragraph =>
            `<p>${paragraph.trim()}</p>`
          ).join('');
        }
      });
    });
  </script>
  <!-- faq section end -->








  <!-- ==================== Footer Area (Start) ==================== -->
  <footer class="footer">

    <div class="box-container">

      <div class="footer-item">
        <!-- Logo -->
        <a class="logo" href="./index.html">
          <img src="./assets/img/logo.png" alt="logo">

        </a>
        <p>We provide our customers with safe and clean drinking water, delivered right to their doorstep with the
          utmost convenience. We offer a range of options to suit your preferences and budget.</p>
        <div class="social">
          <a href="https://www.facebook.com/profile.php?id=61558773770869" target="_blank"><i
              class="fab fa-facebook-f"></i></a>
          <a href="https://www.linkedin.com/company/106217416/admin/dashboard/" target="_blank"><i
              class="fab fa-linkedin-in"></i></a>
          <a href="https://www.youtube.com/@LennoreIONIZER" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="https://www.instagram.com/lennoreofficial/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <div class="footer-item">
        <div class="footer-heading">
          <h2>our services</h2>
          <img src="../assets/images/Heading/heading.html" alt="">
        </div>
        <div class="info links">
          <p><i class="fa-solid fa-caret-right" style="color: whitesmoke;"></i><a href="./about.html">about</a></p>
          <p><i class="fa-solid fa-caret-right" style="color: whitesmoke;"></i><a href="./services.html">services</a>
          </p>
          <p><i class="fa-solid fa-caret-right" style="color: whitesmoke;"></i><a href="./products.html">products</a>
          </p>
          <!-- <p><i class="fa-solid fa-caret-right"></i><a href="./shop.html">shop</a></p> -->
          <p><i class="fa-solid fa-caret-right" style="color: whitesmoke;"></i><a href="./blog.html">blogs</a></p>
          <p><i class="fa-solid fa-caret-right" style="color: whitesmoke;"></i><a href="./contact.html">contact</a></p>
        </div>
      </div>

      <div class="footer-item">
        <div class="footer-heading">
          <h2>useful links</h2>
          <img src="./assets/images/Heading/heading.html" alt="">
        </div>
        <div class="info links">
          <p><i class="fa-solid fa-caret-right" style="color: whitesmoke;"></i><a href="./L5.html">L5</a></p>
          <p><i class="fa-solid fa-caret-right" style="color: whitesmoke;"></i><a href="./L5+ro.html">L5 + RO</a></p>
          <p><i class="fa-solid fa-caret-right" style="color: whitesmoke;"></i><a href="./L7+ro.html">L7 + RO</a></p>
          <p><i class="fa-solid fa-caret-right" style="color: whitesmoke;"></i><a href="./L9.html">L9</a></p>
          <!-- <p><i class="fa-solid fa-caret-right"></i><a href="./contact.html">contact</a></p> -->
        </div>
      </div>


      <div class='footer-item'>
        <div class="footer-heading"> style="color: whitesmoke;"
          <h2>contact info</h2>
          <img src="./assets/images/Heading/heading.html" alt="">
        </div>
        <div class="info connect">
          <p class="clickable-contact">
            <a href="tel:+919810337293">
              <i class="fas fa-phone contact-icon"></i>
              <span>+91 98103 37293 <br> +91 98107 09704</span>
            </a>
          </p>
          <p class="clickable-contact">
            <a href="mailto:info@lennore.in">
              <i class="fas fa-envelope contact-icon"></i>
              <span class="gmail">info@lennore.in</span>
            </a>
          </p>
          <p class="clickable-contact">
            <a href="https://maps.google.com/?q=Apex Square, Plot No : 11, Pocket B3, Sector - 17, Dwarka, New Delhi - 110075"
              target="_blank">
              <i class="fas fa-map contact-icon"></i>
              <span>Apex Square, Plot No : 11, Pocket B3, Sector - 17, Dwarka, New Delhi - 110075</span>
            </a>
          </p>
          <p>
            <i class="fa-solid fa-clock contact-icon"></i>
            <span>Mon - Sat (10AM - 7PM)</span>
          </p>
        </div>
      </div>

    </div>

    <div class="content">
      <p>&copy;<span>Lennore</span> | all rights reserved</p>
    </div>

  </footer>
  <!-- ==================== Footer Area (End) ==================== -->



  <!-- ==================== Loader Area (End) ==================== -->
  <div class="pre-loader">
    <div id="loader">
      <img src="./assets/images/Logo/Logo.png" alt="">
    </div>
  </div>
  <!-- ==================== Loader Area (End) ==================== -->






  <!-- Jquery -->
  <script src="./assets/vendors/jquery/jquery.min.js"></script>

  <!-- Magnific-Popup JS -->
  <script src="./assets/vendors/magnific-popup/jquery.magnific-popup.html"></script>

  <!-- Swiper (JS) -->
  <script src="./assets/vendors/swiper/swiper-bundle.min.js"></script>

  <!-- Custom Script Files -->
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/nav-link-toggler.js"></script>
  <script src="./assets/js/home-slider.js"></script>
  <script src="./assets/js/counter-up.js"></script>
  <script src="./assets/js/projects.js"></script>
  <script src="./assets/js/testi-slider.js"></script>
  <script src="./assets/js/sponsor-slider.js"></script>



</body>

<!-- Mirrored from aquadrop-html.asdesignsgalaxy.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Apr 2025 05:10:16 GMT -->

</html>