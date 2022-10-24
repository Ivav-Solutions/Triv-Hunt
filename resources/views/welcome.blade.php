<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>{{config('app.name')}}</title>
</head>

<body data-scroll-animation="true">
    <div class="body_wrapper">
        <div class="click_capture"></div>

        <!--================Navbar Area =================-->
        <nav class="navbar navbar-expand-lg  menu_one sticky-nav d-none d-lg-block">
            <div class="container">
                <a class="navbar-brand header_logo" href="/">
                    <img class="first_logo sticky_logo" src="#" srcset="img/logo-2x.png 2x" alt="logo">
                    <img class="white_logo main_logo" src="#" srcset="img/logo-w2x.png 2x" alt="logo">
                </a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav menu ms-auto">
                        <li class="nav-item dropdown submenu active">
                            <a href="/" class="nav-link dropdown-toggle">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon" aria-hidden="false"
                                data-bs-toggle="dropdown"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="mobile_main_menu sticky-nav menu_one">
            <div class="container">
                <div class="mobile_menu_left">
                    <button type="button" class="navbar-toggler mobile_menu_btn">
                        <span class="menu_toggle ">
                            <span class="hamburger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </span>
                    </button>
                    <a class="navbar-brand header_logo" href="/">
                        <img class="sticky_logo " src="#" srcset="img/logo-2x.png 2x" alt="logo">
                        <img class="main_logo white_logo" src="#" srcset="img/logo-w2x.png 2x" alt="logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="side_menu">
            <div class="mobile_menu_header">
                <div class="close_nav">
                    <i class="icon_close"></i>
                </div>
                <div class="mobile_logo">
                    <a class="navbar-brand header_logo me-0" href="/">
                        <img class="sticky_logo main_logo" src="#" srcset="img/logo-2x.png 2x" alt="logo">
                        <img class="white_logo" src="#" srcset="img/logo-w2x.png 2x" alt="logo">
                    </a>
                </div>
            </div>
            <div class="mobile_nav_wrapper">
                <nav class="mobile_nav_top">
                    <ul class="navbar-nav menu ms-auto">
                        <li class="nav-item dropdown submenu active">
                            <a href="/" class="nav-link dropdown-toggle">Home</a>
                            <i class="arrow_carrot-down_alt2 mobile_dropdown_icon"></i>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--================Banner Area =================-->
        <section class="banner-area-3 has_search">
            <div class="container">
                <div class="row doc_banner_content">
                    <div class="col-12 px-0">
                        <h1 class="banner-title-h1">Welcome to {{config('app.name')}}</h1>
                        <p class="banner-text-p">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <div class="banner-search-box mt-40">
                            <form action="#">
                                <div class="input-wrapper">
                                    <input placeholder="Search your forum of topic here..." type='search' id="searchbox"
                                        autocomplete="off" name="search">
                                    <button type="submit" class="search-btn">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Bannner Area =================-->

        <!--================Ama Statistics Area =================-->
        <section class="forum-statistics">
            <div class="container">
                <div class="row align-items-center gy-lg-0 gy-4">
                    <div class="col-lg-8">
                        <div class="row gy-4 gy-sm-0">
                            <div class="col-sm-4">
                                <div
                                    class="statistics-widget wow fadeInRight justify-content-center justify-content-sm-start">
                                    <img src="img/home_two/icon-1.svg" alt="icon">
                                    <div>
                                        <h4>
                                            <span class="counter d-inline-block">1099</span>+
                                        </h4>
                                        <p>members</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="statistics-widget wow fadeInRight justify-content-center justify-content-sm-start"
                                    data-wow-delay="0.3s">
                                    <img src="img/home_two/icon-2.svg" alt="icon">
                                    <div>
                                        <h4 class="counter">5099</h4>
                                        <p>posts</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="statistics-widget wow fadeInRight justify-content-center justify-content-sm-start"
                                    data-wow-delay="0.6s">
                                    <img src="img/home_two/icon-3.svg" alt="icon">
                                    <div>
                                        <h4 class="counter">255</h4>
                                        <p>online</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 text-lg-end text-center wow fadeInLeft" data-wow-delay="0.3s">
                        <a class="action_btn btn_bg round-btn" href="#">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Ama Statistics Area =================-->

        <!--================Feature Two Area =================-->
        <section class="feature-two">
            <div class="container">
                <div class="row align-items-center gy-4 gy-lg-0">
                    <div class="col-lg-6 order-lg-2 ps-lg-4 text-center text-lg-start  offset-xl-1">
                        <div class="img-content wow fadeInLeft">
                            <img class="img-fluid" src="img/home_two/daily-notification.png" alt="post">
                            <img src="img/home_two/scribbles-scribbles-43.png" alt="shape">
                            <img class="bg-img" src="img/home_two/daily-notification-bg.png" alt="bg">
                        </div>

                    </div>
                    <div class="col-xl-5 col-lg-6 pe-xl-0 order-lg-1">
                        <div class="feature-content-text wow fadeInRight mt-4 mt-xl-0">
                            <h2>Activate daily notifications and never miss a thing</h2>
                            <p>Please make sure you read the forum guidelines and Frequently Asked Questions before
                                contributing to WordPress support, both when asking for and giving support, this helps
                                maintain a friendly and welcoming atmosphere for all involved. I asked this writer for a
                                guest post, which he seemed happy to write for me.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Two Area =================-->

        <sectiom class="feature-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="section_title text-start">
                            <h2 class="h_title wow fadeInUp">Frequency Asked Questions</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In!</p>
                        </div>
                        <div class="choose-content">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne" >
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What does {{config('app.name')}} do?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Basically, we provide custom made IT solutions for clients in different industries. Secondly, we train those interested in acquiring tech skills till they become experts and lastly, we assist businesses and individuals by offering consultation sessions where we identify their IT needs and proffer the best guidance.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            What product can {{config('app.name')}} build for me?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We develop software tailored to your business needs and we build a fully controlled website that accommodates all your personal or business offerings.    
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            My website and app are not functioning properly, how can {{config('app.name')}} help?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            When you book a consultation session with us, our representative will schedule a call with you and audit the affected digital platform to understand what exactly is wrong. Once the problem is ascertained, we will present a probable solution and start work on it immediately.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            How can I ensure my website or software is up-to-date?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        {{config('app.name')}} doesn't just build websites, develop software or train upcoming tech gurus. We also provide routine maintenance for your digital platforms to ensure all parts function optimally.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            What technologies do {{config('app.name')}} use in development?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            We employ a variety of programming options e.g. Java, JavaScript. Python etc. to provide the best solution and our team which consists of highly experienced and sort after professionals help in deploying these technologies.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            How long does it take {{config('app.name')}} to build a custom made website?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            There are different websites with different scopes and complexities. So, there's no 'one cap fits all' duration for all the websites we build. However, a website development project will not take us two weeks to a month before it's delivered to you. On special occasions might be longer depending on requirements/complexities.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            How long does it take {{config('app.name')}} to develop a software?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Just like a website, there's no particular duration for the completion of all categories of software but we can guarantee that you will have it handed over to in 4 to 6 weeks. This can sometimes be longer depending on requirements/complexities.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            What's the duration of {{config('app.name')}}'s training?
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            The duration of training depends on the course you opt-in for. However, our courses duration ranges from 4 weeks to 6 months.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            What IT Courses Can I be trained on?
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            With us you can learn and become proficient in Project/Product Management, Business Analysis, Digital Marketing, Software Development, Web Development, Full stack Development etc. Also, you can learn individual programming languages such as Python, PHP, Java, JavaScript, HTML, CSS, React Node, React JS and so on.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTen">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            How will the course material be delivered?
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            All our courses are delivered online which means you can attend classes remotely and at your preferred location.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEleven">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            Can I trust the quality of the training?
                                        </button>
                                    </h2>
                                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Absolutely! Our courses are taught by industry practitioners who will not only impact you with theoretical concepts but also take you through the rigours of practicals so that you can be equipped for real world problems.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </sectiom>

        <section class="contact_area sec_pad">
            <div class="container">
                <div class="contact_info">
                    <div class="section_title text-start">
                        <h2 class="h_title wow fadeInUp">Let’s start the conversation</h2>
                        <p>Please email us, we’ll happy to assist you.</p>
                    </div>
                    <form action="#" class="contact_form">
                        <div class="row contact_fill">
                            <div class="col-lg-4 form-group">
                                <h6>Full Name</h6>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter your name here">
                            </div>
                            <div class="col-lg-4 form-group">
                                <h6>Email</h6>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="info@Foram.com">
                            </div>
                            <div class="col-lg-4 form-group">
                                <h6>Phone no</h6>
                                <input type="tel" class="form-control" name="tel" id="phone" placeholder="+462">
                            </div>
                            <div class="col-lg-12 form-group">
                                <h6>Message</h6>
                                <textarea class="form-control message" id="message"
                                    placeholder="Enter Your Text ..."></textarea>
                            </div>
                            <div class="col-lg-12 form-group">
                                <button type="submit" class="btn action_btn thm_btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!--================Footer Area =================-->
        <footer class="footer-3 ">
            <div class="container">
                <div class="footer-top pt-80 pb-20">
                    <div class="row gy-lg-0 gy-4">
                        <div class="col-lg-4 col-sm-6 wow fadeInLeft">
                            <div class="footer-widget pr-20">
                                <a href="/"> <img src="" alt="logo"></a>
                                <p class="f-text mt-55">A short note about {{config('app.name')}}</p>
                            </div>
                        </div>
                        <div class="col-lg-2 ps-xl-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="footer-widget ps-lg-5">
                                <h6 class="widget-title mb-4">Company</h6>
                                <ul class="link-list list-unstyled">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">About</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="footer-widget pl-lg-90">
                                <h6 class="widget-title mb-4">Help</h6>
                                <ul class="link-list list-unstyled">
                                    <li><a href="#">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="footer-widget ps-lg-3">
                                <h6 class="widget-title mb-4">Get Help</h6>
                                <ul class="link-list list-unstyled">
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom pt-40 pb-40">
                    <div class="d-flex justify-content-between flex-wrap">
                        <p class="wow fadeInRight">Copyright 2021, All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.parallax-scroll.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>