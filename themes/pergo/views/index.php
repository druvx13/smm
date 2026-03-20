<!doctype html>
<html class="no-js" lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    
    <meta name="description" content="<?=get_option('website_desc', "is Cheapest SMM and Best SMM Panel in World. 100% High Quality for all social networks. Get the best Instagram panel today! , Save time managing your social account in one panel. Where people buy SMM services such as Facebook ads management, Instagram, YouTube, Twitter, Soundcloud, Website ads and many more!")?>">
    
    <meta name="keywords" content="<?=get_option('website_keywords', "smm panel, FollowersKart, Followers Kart, FK, JustAnotherPanel, Indian SMM, PayTm SMM Panel, SMO Servises, SMM Panel Scripts, Paytm Smm Panel,smm panel script,smm panel,paytm smm panel list,smm panel india,smm panel instagram,top 5 smm panel in india,cheapest smm panel,cheap smm panel,cheapest smm reseller panel,smm reseller panel,best smm panel,followers panel, smm reseller panel, smm provider panel, reseller panel, instagram panel, resellerpanel, social media reseller panel, smmpanel, panelsmm, smm, panel, socialmedia, instagram reseller panel, FollowersKart, smartpanelsmm, perfectsmm, cheapeast smm")?>">
    
    <title><?=get_option('website_title', "FollowersKart - The Best & Fast SMM Panel")?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?=get_option('website_favicon', BASE."assets/images/favicon.png")?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <link rel="shortcut icon" type="image/x-icon" href="<?=BASE?>assets/uploads/userca3512f4dfa95a03169c5a670a4c91a19b3077b4/2bb24ecc594f25163b62702e0fa6561c.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:400,600,700&display=swap">
    <link rel="stylesheet" href="<?=BASE?>themes/pergo/assets/home/css/animate.css">
    <link rel="stylesheet" href="<?=BASE?>themes/pergo/assets/home/css/slick.css">
    <link rel="stylesheet" href="<?=BASE?>themes/pergo/assets/home/css/LineIcons.css">
    <link rel="stylesheet" href="<?=BASE?>themes/pergo/assets/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=BASE?>themes/pergo/assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE?>themes/pergo/assets/home/css/default.css">
    <link rel="stylesheet" href="<?=BASE?>themes/pergo/assets/home/css/theme.css">
  
  
  

   <script type="text/javascript">
      var token = '<?=$this->security->get_csrf_hash()?>',
          PATH  = '<?=PATH?>',
          BASE  = '<?=BASE?>';
      var    deleteItem = '<?=lang("Are_you_sure_you_want_to_delete_this_item")?>';
      var    deleteItems = '<?=lang("Are_you_sure_you_want_to_delete_all_items")?>';
    </script>
  
</head>

<body>
    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="/">
                                <img src="<?=get_option('website_logo', BASE."assets/images/logo.png")?>" alt="perfectsmo Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">What we offer!</a>
                                    </li>

                                                                        
                                                                        
                                       <?php
                if (get_option("enable_service_list_no_login") == 1) {
              ?>
              <li class="nav-item">
                <a class="page-scroll" href="<?=cn("services")?>"><?=lang("Services")?></a>
              </li>
              <?php }?>                                 
                                  <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>





                                    <li class="nav-item d-md-none" style="border-top: 1px solid #e6e3e3; padding-top: 5px;">
                                        <a href="<?=cn('auth/signup')?>">Register</a>
                                    </li>

                                    <li class="nav-item d-md-none">
                                        <a href="<?=cn('auth/login')?>">Login</a>
                                    </li> 

                                </ul>
                            </div>
                                                        
                                                        
                                                      <div class="navbar-btn d-none d-sm-inline-block">
              <?php 
                if (!session('uid')) {
              ?>
              <a class="mr-2" data-scroll-nav="0" href="<?=cn('auth/login')?>"><?=lang("Login")?></a>
              <a class="main-btn" data-scroll-nav="0" data-scroll-nav="0" href="<?=cn('auth/signup')?>" class="btn btn-pill btn-outline-primary sign-up"><?=lang("Sign_Up")?></a>
              <?php }else{?>
              <a class="main-btn" data-scroll-nav="0" href="<?=cn('statistics')?>" class="btn btn-pill btn-outline-primary btn-statistics text-uppercase">Dashboard</a>
              <?php }?>  
                         
                                                    </nav>
                    </div>
                </div>
            </div>
        </div>
        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center">
            <div class="shape shape-1 animation1">
                <img src="<?=BASE?>themes/pergo/assets/home/images/shape-1.svg" alt="shape">
            </div>
            <div class="shape shape-2 animation2">
                <img src="<?=BASE?>themes/pergo/assets/home/images/shape-2.svg" alt="shape">
            </div>
            <div class="shape shape-3">
                <img src="<?=BASE?>themes/pergo/assets/home/images/shape-3.svg" alt="shape">
            </div>
            <div class="shape shape-4 animation1">
                <img src="<?=BASE?>themes/pergo/assets/home/images/shape-1.svg" alt="shape">
            </div>
            <div class="shape shape-5 animation2">
                <img src="<?=BASE?>themes/pergo/assets/home/images/icon3.png" alt="shape">
            </div>
            <div class="shape shape-6">
                <img src="<?=BASE?>themes/pergo/assets/home/images/shape-3.svg" alt="shape">
            </div>
            <div class="shape shape-7 animation1">
                <img src="<?=BASE?>themes/pergo/assets/home/images/icon_yellow_circle.png" alt="shape">
            </div>
            <div class="shape shape-8 animation2">
                <img src="<?=BASE?>themes/pergo/assets/home/images/shape-2.svg" alt="shape">
            </div>
            <div class="shape shape-9">
                <img src="<?=BASE?>themes/pergo/assets/home/images/shape-3.svg" alt="shape">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="header-hero-content">
                            <h1 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Get Your Social Account's Followers And Likes At One Place, Instantly                                                                                                                                                                                                                                                                                        </h1>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Save time managing your social account in one panel. Where people buy SMM services such as Facebook ads management, Instagram, YouTube, Twitter, Soundcloud, Website ads and many more!                                                                                                                                                                                                                                                                                        </p>
                                                        
                                                        
                                                        
                                                   <?php 
                if (!session('uid')) {
              ?>
              
              <a class="main-btn" data-scroll-nav="0" data-scroll-nav="0" href="<?=cn('auth/signup')?>" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.2s">Get start now!</a>
              <?php }else{?>
              <a class="main-btn" data-scroll-nav="0" href="<?=cn('statistics')?>" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.2s">Dashboard</a>
              <?php }?>       
                                                        
                                                        
                                                        
                           
                                                    </div>
                    </div>
                </div>
            </div>
            <div class="header-hero-image d-flex justify-content-start align-items-center wow fadeInRightBig" data-wow-duration="2s" data-wow-delay="1.7s">
                <div class="image">
                    <img src="<?=BASE?>themes/pergo/assets/home/images/header.png" alt="hero">
                </div>
            </div>
            <div class="header-shape d-none d-lg-block"></div>
        </div>
    </header>
    
    <section id="about" class="about-area pt-120">
        <div class="about-image d-flex align-items-xl-end align-items-center justify-content-end">
            <img src="<?=BASE?>themes/pergo/assets/home/images/about_us.png" alt="About" class="wow fadeInLeftBig" data-wow-duration="2s" data-wow-delay="0.5s">
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="about-content wow fadeInRightBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <h5 class="sub-title">About Us</h5>
                            <h3 class="title">A Little About Our Startup <span>Business Solution</span></h3>
                        </div>
                        <p class="text">We provide the cheapest SMM Reseller Panel services amongst our competitors. If you’re looking for a super-easy way to offer additional marketing services to your existing and new clients, look no further! our site offers that and more ! <br><br>You can resell our services in any site or Link your site through API and start resell our services directly start building stronger relationships, and helping you make a great profit at the same time. We do the work so you can focus on what you do best! As you grow, your profit grows without having to hire more people. This allows you to expand your business without all the expense and headaches usually associated with growing bigger!                                                                                                                                                                                                                                                                                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="services-area pt-115 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-20 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                        <h5 class="sub-title">Services</h5>
                        <h3 class="title">We Provide Best Services <br> For <span>Your Business</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <img src="<?=BASE?>themes/pergo/assets/home/images/service-icon-1.svg" alt="service">
                        </div>
                        <div class="services-content">
                            <h4 class="services-title">Secure Payments</h4>
                            <p class="text">We have a Popular methods as PayPal and many more can be enabled upon request                                                                                                                                                                                                                                                                                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <img src="<?=BASE?>themes/pergo/assets/home/images/service-icon-2.svg" alt="service">
                        </div>
                        <div class="services-content">
                            <h4 class="services-title">High quality services</h4>
                            <p class="text">Get the best high quality services and in less time here</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <img src="<?=BASE?>themes/pergo/assets/home/images/service-icon-3.svg" alt="service">
                        </div>
                        <div class="services-content">
                            <h4 class="services-title">Updates</h4>
                            <p class="text">Services are updated daily In order to be further improved and to provide you with best experience                                                                                                                                                                                                                                                                                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.2s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <img src="<?=BASE?>themes/pergo/assets/home/images/service-icon-4.svg" alt="service">
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Api support</a></h4>
                            <p class="text">We have API Support For panel owners so you can resell our services easily                                                                                                                                                                                                                                                                                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <img src="<?=BASE?>themes/pergo/assets/home/images/service-icon-5.svg" alt="service">
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">Resellers</a></h4>
                            <p class="text">You can resell our services and grow your profit easily, Resellers are important part of SMM PANEL                                                                                                                                                                                                                                                                                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services mt-30 wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.8s">
                        <div class="services-icon d-flex align-items-center justify-content-center">
                            <img src="<?=BASE?>themes/pergo/assets/home/images/service-icon-6.svg" alt="service">
                        </div>
                        <div class="services-content">
                            <h4 class="services-title">Supports</h4>
                            <p class="text">Technical support for all our services 24/7 to help you</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="testimonial" class="testimonial-area pt-70">
        <div class="testimonial-shape-1 d-none d-md-block">
            <img src="<?=BASE?>themes/pergo/assets/home/images/testimonial-shape-1.svg" alt="shape">
        </div>
        <div class="shape shape-1 animation2">
            <img src="<?=BASE?>themes/pergo/assets/home/images/shape-2.svg" alt="shape">
        </div>
        <div class="shape shape-2 animation2">
            <img src="<?=BASE?>themes/pergo/assets/home/images/shape-2.svg" alt="shape">
        </div>
        <div class="shape shape-3 animation1">
            <img src="<?=BASE?>themes/pergo/assets/home/images/shape-1.svg" alt="shape">
        </div>
        <div class="shape shape-4">
            <img src="<?=BASE?>themes/pergo/assets/home/images/shape-3.svg" alt="shape">
        </div>
        <div class="shape shape-5 animation2">
            <img src="<?=BASE?>themes/pergo/assets/home/images/shape-2.svg" alt="shape">
        </div>
        <div class="shape shape-6">
            <img src="<?=BASE?>themes/pergo/assets/home/images/shape-3.svg" alt="shape">
        </div>
        <div class="shape shape-7">
            <img src="<?=BASE?>themes/pergo/assets/home/images/shape-3.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5">
                    <div class="testimonial-author mt-50">
                        <div class="author-image author-1 animation3">
                            <img src="<?=BASE?>themes/pergo/assets/home/images/author-1.jpg" alt="author">
                        </div>
                        <div class="author-image author-2 animation3">
                            <img src="<?=BASE?>themes/pergo/assets/home/images/author-2.jpg" alt="author">
                        </div>
                        <div class="author-image author-3 animation3">
                            <img src="<?=BASE?>themes/pergo/assets/home/images/author-3.jpg" alt="author">
                        </div>
                        <div class="author-image author-4 animation3">
                            <img src="<?=BASE?>themes/pergo/assets/home/images/author-4.jpg" alt="author">
                        </div>
                        <div class="author-image author-5 animation3">
                            <img src="<?=BASE?>themes/pergo/assets/home/images/author-5.jpg" alt="author">
                        </div>
                        <div class="testimonial-author-wrapper">
                            <div class="testimonial-quote d-flex align-items-center justify-content-center">
                                <img src="<?=BASE?>themes/pergo/assets/home/images/quote.svg" alt="quote">
                            </div>
                            <div class="testimonial-author-slider">
                                <div class="single-author">
                                    <img src="<?=BASE?>themes/pergo/assets/home/images/author-4.jpg" alt="author">
                                </div>
                                <div class="single-author">
                                    <img src="<?=BASE?>themes/pergo/assets/home/images/author-2.jpg" alt="author">
                                </div>
                                <div class="single-author">
                                    <img src="<?=BASE?>themes/pergo/assets/home/images/author-3.jpg" alt="author">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="testimonial-wrapper mt-50 wow fadeInRightBig" data-wow-duration="2s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <h5 class="sub-title">Testimonials</h5>
                            <h3 class="title">See What's Our <span>Client Says About Us</span></h3>
                        </div>
                        <div class="testimonial-content">
                            <div class="single-testimonial mt-35">
                                <p class="text">After trying several websites who claim to have 'fast delivery', I'm glad I finally found this service. They literally started delivering 5 seconds after my payment!                                                                                                                                                                                                                                                                                        </p>
                                <h4 class="holder-name">John Smith <span>/ Youtuber</span></h4>
                            </div>
                            <div class="single-testimonial mt-35">
                                <p class="text">I cannot stress enough how happy I am with the service that I received. Thanks to all of you, my Instagram account is surging with activity! You’ve not only earned yourself a loyal customer, but a friend for life.                                                                                                                                                                                                                                                                                        </p>
                                <h4 class="holder-name">Keith Irvine <span>/ Instagram Model</span></h4>
                            </div>
                            <div class="single-testimonial mt-35">
                                <p class="text">Wow! This is amazing, i have been purchasing Instagram Likes for over a year and never got a delay! ? did a great job always                                                                                                                                                                                                                                                                                        </p>
                                <h4 class="holder-name">Sara-Jade Bevis <span>/ Bloger</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section id="contact" class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-content wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="section-title">
                            <h5 class="sub-title">Contact</h5>
                            <h3 class="title">Get in touch with us today, we’d love to hear from you!</h3>
                        </div>
                    </div>
                    <div class="contact-form wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.6s">
                        <form class="actionContactForm" action id="contactForm" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <textarea name="message" placeholder="Message" required></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="single-form" style="margin-top: 0px;">
                                        <button class="main-btn btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="2s" data-wow-delay="0.5s">
            <div class="image">
                <img src="<?=BASE?>themes/pergo/assets/home/images/support.png" alt="contact">
            </div>
        </div>
    </section>
    <section id="footer" class="footer-area ">
        <div class="footer-shape-1">
            <img src="<?=BASE?>themes/pergo/assets/home/images/footer-shape-1.svg" alt="footer">
        </div>
        <div class="container">
            <div class="footer-widget pt-70 pb-120">
                <div class="row">
                    
                    <div class="col-lg-6 col-md-6 order-md-3 order-lg-2">
                        <div class="footer-link-wrapper d-flex ">
                            <div class="footer-link mt-45  wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Quick Link</h4>
                                </div>
                                <ul class="link mt-35">
                                    <li><a href="/">Home</a></li>
                                                                        <li><a href="/auth/login">Login</a></li>
                                    <li><a href="/auth/signup">Sign Up</a></li>
                                                                      </ul>
                            </div>
                            <div class="footer-link mt-45 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">&nbsp;</h4>
                                </div>
                                <ul class="link mt-35">
                                    <li><a href="/terms">Terms & Conditions</a></li>
                                                                        <li><a href="/api/docs">API Documentation</a></li>
                                                                        <li><a href="/faq">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    
                    
            
                    <div class="col-lg-6 col-md-6 order-md-2 order-lg-3">
                        <div class="footer-subscribe wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">
                            <div class="subscribe-content mt-45">
                                <div class="footer-title">
                                    <h4 class="title">Subscribe Now</h4>
                                    <p class="text">Fill in the ridiculously small form below to receive our ridiculously cool newsletter!</p>
                                </div>
                            </div>
                            <form class="form actionFormWithoutToast" action="<?php echo cn("client/subscriber"); ?>" method="POST">
                                <div class="subscribe-form mt-40">
                                    <input type="email" name="email" placeholder="example@gmail.com" required>
                                    <button class="main-btn btn-submit">Subscribe</button>
                                </div>
                                <div class="col-md-12">
                                    <div id="alert-message" class="mt-20"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright d-md-flex justify-content-between">
                <div class="copyright-social d-flex justify-content-center justify-content-md-start">
                    <span><?=get_option('website_title')?></span>
                   
                </div>
                <div class="copyright-text">
                    <p class="text"><?=lang("Copyright")?> <?=(get_role("admin")) ? $version : "" ?> </p>
                </div>
            </div>
        </div>
        <div class="footer-shape-2">
            <img src="<?=BASE?>themes/pergo/assets/home/images/footer-shape-2.svg" alt="footer">
        </div>
    </section>
 <?php
                $redirect = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
              ?>
              
    <div class="modal-infor">
      <div class="modal" id="notification">
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title"><i class="fe fe-bell"></i> <?=lang("Notification")?></h4>
              <button type="button" class="close" data-dismiss="modal"></button>
            </div>

            <div class="modal-body">
              <?=get_option('notification_popup_content')?>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><?=lang("Close")?></button>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <script src="<?=BASE?>themes/pergo/assets/home/js/jquery-1.12.4.min.js"></script>
    <script src="<?=BASE?>themes/pergo/assets/home/js/modernizr-3.7.1.min.js"></script>
    <script src="<?=BASE?>themes/pergo/assets/home/js/popper.min.js"></script>
    <script src="<?=BASE?>themes/pergo/assets/home/js/bootstrap.min.js"></script>
    <script src="<?=BASE?>themes/pergo/assets/home/js/slick.min.js"></script>
    <script src="<?=BASE?>themes/pergo/assets/home/js/jquery.easing.min.js"></script>
    <script src="<?=BASE?>themes/pergo/assets/home/js/scrolling-nav.js"></script>
    <script src="<?=BASE?>themes/pergo/assets/home/js/ajax-contact.js"></script>
    <script src="<?=BASE?>themes/pergo/assets/home/js/wow.min.js"></script>
    <script src="<?=BASE?>themes/pergo/assets/home/js/main.js"></script>
    
 
    
 <?=htmlspecialchars_decode(get_option('embed_javascript', ''), ENT_QUOTES)?>
    <script>
      $(document).ready(function(){
        var is_notification_popup = "<?=get_option('enable_notification_popup', 0)?>"
        setTimeout(function(){
            if (is_notification_popup == 1) {
              $("#notification").modal('show');
            }else{
              $("#notification").modal('hide');
            }
        },500);
     });
    </script>
    <!-- Script js -->
    <script src="<?=BASE?>assets/js/process.js"></script>
    <script src="<?=BASE?>assets/js/general.js"></script>
</body>

</html>