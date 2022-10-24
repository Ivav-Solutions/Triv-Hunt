<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{URL::asset('img/favicon.png')}}" type="image/x-icon">
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
                    <img class="first_logo sticky_logo" src="{{URL::asset('img/logo.png')}}" srcset="img/logo-2x.png 2x" alt="logo">
                    <img class="white_logo main_logo" src="{{URL::asset('img/logo-w.png')}}" srcset="img/logo-w2x.png 2x" alt="logo">
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
                        <img class="sticky_logo " src="{{URL::asset('img/logo.png')}}" srcset="img/logo-2x.png 2x" alt="logo">
                        <img class="main_logo white_logo" src="{{URL::asset('img/logo-w.png')}}" srcset="img/logo-w2x.png 2x" alt="logo">
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
                        <img class="sticky_logo main_logo" src="{{URL::asset('img/logo.png')}}" srcset="img/logo-2x.png 2x" alt="logo">
                        <img class="white_logo" src="{{URL::asset('img/logo-2.png')}}" srcset="img/logo-w2x.png 2x" alt="logo">
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
                        <p class="banner-text-p">{{config('app.name')}} is a unique initiative that helps Nigerians and other Africans increase their earning 
                            <br>power when they display mastery of their profession by answering career related questions.</p>
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

        <!--================Feature Two Area =================-->
        <!-- <section class="feature-two">
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
        </section> -->
        <!--================End Feature Two Area =================-->

        <sectiom class="feature-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="choose-content mt-5">
                            <div class="section_title text-start">
                                <h2 class="h_title wow fadeInUp">Frequency Asked Questions</h2>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne" >
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What is {{config('app.name')}}?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{config('app.name')}} is a unique initiative that helps Nigerians and other Africans increase their earning 
                                            power when they display mastery of their profession by answering career related questions.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Why {{config('app.name')}}?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Millions of qualified Nigerians are currently unemployed. Many employed people even feel they 
                                            deserve more. What's worse? There's no platform for them to swiftly earn better, express their 
                                            ability and connect with potential employers.
                                            {{config('app.name')}} bridges this gap by providing an all-inclusive place for digitally skilled individuals to 
                                            earn.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Who is {{config('app.name')}} for?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        {{config('app.name')}} is for Nigerians and other Africans who are either unemployed or underemployed. It's also for gamers, quiz enthusiasts and people who love to bet.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Is {{config('app.name')}} relevant to all careers
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{config('app.name')}} mainly caters for some categories which include IT, Digital Marketing and Startups.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            How do I participate in {{config('app.name')}} games?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            It's simple! Create an account and access your dashboard. On your dashboard, start a game and pay the token to start. After that, you will see an instruction and a sample question and immediately you're done you can start answering the main questions.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            How much do I need to pay to access a {{config('app.name')}} game?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A game is just N500.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            What's the maximum amount I can earn per game?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            You can earn as much as N50,000 per game.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            How do I withdraw my earnings?
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            If you satisfy all conditions, withdrawing your money is very easy. Simply click on "My earnings" and indicate the amount you wish to withdraw. After that, choose the payment method from the options listed and follow the prompt. Only note that, your money will be paid into your verified account.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            Is {{config('app.name')}} legit?
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Yes, it is. The idea is not to extort you but to make you express your knowledge and earn from it. Aside that, we are registered with the Corporate Affairs Commission (CAC) and we have a strong legal backing.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTen">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Is {{config('app.name')}} a betting platform?
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            No, it isn't a gambling platform. Among other benefits, {{config('app.name')}} helps you earn from your knowledge and referral of other members.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEleven">
                                        <button style="font-size: 18px; font-weight: 600;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            What other benefits will I enjoy as a Trivhunt member?
                                        </button>
                                    </h2>
                                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Apart from earning directly from your knowledge and new members' referral, you will accumulate points to indicate how proficient you are in your field. In return, your points will facilitate your discovery by potential employers and as a result, you can be employed on a full-time position and if you are a freelancer, you can close deals.
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
                                <a href="/"> <img src="{{URL::asset('img/logo-w.png')}}" alt="logo"></a>
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