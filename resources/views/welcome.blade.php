<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    <link rel=icon href="{{URL::asset('assets/img/favicon.png')}} sizes="20x20" type="image/png">

    <!-- <link rel="stylesheet" href="assets/css/animate.css"> -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="assets/css/magnific-popup.css"> -->

    <!-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css"> -->

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/flaticon.css">

    <!-- <link rel="stylesheet" href="assets/css/hover-min.css"> -->

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div></div>
            <hr />
        </div>
    </div>

    <div class="header-style-01">
        <nav class="navbar navbar-area navbar-expand-lg nav-style-02">
            <div class="container nav-container sass-nav">
                <div class="responsive-mobile-menu">
                    <div class="logo-wrapper">
                        <a href="/" class="logo">
                            <img src="{{URL::asset('assets/img/logo.png')}}" alt="">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bizcoxx_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                    <ul class="navbar-nav">
                        <li class="current-menu-item">
                            <a href="#">Home</a>
                        </li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#faqs">FAQs</a></li>
                    </ul>
                </div>
                <div class="nav-right-content">
                    <div class="btn-wrapper">
                        <a href="#contactus" class="boxed-btn btn-brand white">Contact US</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="header-area header-brand">
        <div class="sass-bg-img wow animate__animated animate__zoomIn" data-parallax='{"x": 220, "y": 150}' style="background-image:url(assets/img/header-slider/brand/01.png);"></div>
        <div class="shape"></div>
        <div class="shape-02"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="header-inner">
                        <h3 class="title">A new brand of creatives. create orginal and mind blowing ideas</h3>
                        <div class="btn-wrapper padding-top-30">
                            <a href="#" class="boxed-btn btn-brand">Get Started</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="how-it-work-area padding-bottom-120 padding-top-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title startup desktop-center margin-bottom-55">
                        <h3 class="title">How it works</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="how-it-single-item">
                        <div class="icon style-01">
                            <span class="day">1</span>
                        </div>
                        <div class="content">
                            <h4 class="title">Create Account</h4>
                            <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="how-it-single-item">
                        <div class="icon style-01">
                            <span class="day">2</span>
                        </div>
                        <div class="content">
                            <h4 class="title">Fill The Form</h4>
                            <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="how-it-single-item">
                        <div class="icon style-01">
                            <span class="day">3</span>
                        </div>
                        <div class="content">
                            <h4 class="title">Lets Enjoy</h4>
                            <p>Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="call-to-action-area bg-image">
        <div class="container">
            <div class="call-to-action-inner style-05">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="call-action-img">
                            <img src="{{URL::asset('assets/img/action.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="call-to-action-content">
                            <h2 class="title">{{config('app.name')}} Made for You</h2>
                            <p class="subtitle">Each time a digital asset is purchased or sold, Sequoir donates a percentage of the fees back.</p>
                            <div class="apps-download">
                                <div class="download-img">
                                    <a href=""> <img src="{{URL::asset('assets/img/01.png')}}" alt=""></a>
                                </div>
                                <div class="download-img style-01">
                                    <a href=""> <img src="{{URL::asset('assets/img/02.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="faqs" class="accoridions padding-top-310 padding-bottom-120">
        <div class="container">
            <div class="row justify-content-center padding-bottom-50">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title desktop-center">
                        <h2 class="title">Frequently asked quetions</h2>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion-wrapper">

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseOwo" aria-expanded="false" aria-controls="collapseOwo">
                                            How can I customize each pattern?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        You may have as many domains as you want; in fact, buying domains similar to your original domain—like misspellings or additional domain extensions—is something we advise in order to protect your brand.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOwo">
                                            Do you offer discounts?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        You may have as many domains as you want; in fact, buying domains similar to your original domain—like misspellings or additional domain extensions—is something we advise in order to protect your brand.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOwo">
                                            Can I cancel a subscription at any time?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        You may have as many domains as you want; in fact, buying domains similar to your original domain—like misspellings or additional domain extensions—is something we advise in order to protect your brand.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Can I refund my money?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        You may have as many domains as you want; in fact, buying domains similar to your original domain—like misspellings or additional domain extensions—is something we advise in order to protect your brand.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contactus" class="contact-inner-area padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="content-area">
                        <div class="section-title padding-bottom-25">
                            <h4 class="title">Let’s scale your brand, together</h4>
                        </div>
                        <div class="single-contact-item-02">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-form style-01">
                        <form action="contact.php" id="contact_page_form" class="contact-page-form" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Name <span>*</span></label>
                                        <input type="text" name="name" placeholder="Type Name" class="form-control" required="" aria-required="true" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="phone">Phone <span>*</span></label>
                                        <input type="text" name="phone" placeholder="Type Phone Number" class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email Address <span>*</span></label>
                                        <input type="text" name="email" placeholder="Type Email Address" class="form-control" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">How can we help? <span>*</span></label>
                                        <textarea name="message" id="msg" cols="1" rows="4" placeholder="Type Desciption"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send Message" class="submit-btn">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-area">
        <div class="footer-top style-04 padding-top-85 padding-bottom-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget widget">
                            <div class="about_us_widget">
                                <a href="/" class="footer-logo"> <img src="{{URL::asset('assets/img/logo.png')}}" alt="footer logo"></a>
                            </div>
                        </div>
                        <div class="widget widget_nav_menu">
                            <p>Trivhunt is a unique initiative that helps Nigerians and other Africans increase their earning power when they display mastery of their profession by answering career related questions.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget style-01 widget widget_nav_menu">
                            <h4 class="widget-title">Company</h4>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="#about">About Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget style-01 widget widget_nav_menu">
                            <h4 class="widget-title">Help</h4>
                            <ul>
                                <li><a href="#faqs">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget style-01 widget widget_nav_menu">
                            <h4 class="widget-title">Get In Touch</h4>
                            <ul>
                                <li><a href="#contactus">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area style-03">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-area-inner">
                            © Copyrights {{ date('Y') }} {{config('app.name')}} All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>


    <script src="assets/js/jquery-2.2.4.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <!-- <script src="assets/js/jquery.magnific-popup.js"></script> -->

    <!-- <script src="assets/js/wow.min.js"></script> -->

    <!-- <script src="assets/js/owl.carousel.min.js"></script> -->

    <!-- <script src="assets/js/waypoints.min.js"></script> -->

    <!-- <script src="assets/js/jquery.counterup.min.js"></script> -->

    <!-- <script src="assets/js/jquery.ripples-min.js"></script> -->

    <!-- <script src="assets/js/tilt.jquery.js"></script> -->

    <!-- <script src="assets/js/imagesloaded.pkgd.min.js"></script> -->

    <!-- <script src="assets/js/isotope.pkgd.min.js"></script> -->

    <script src="assets/js/parallax.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>