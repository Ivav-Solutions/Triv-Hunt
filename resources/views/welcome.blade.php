<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>

    <link rel=icon href="{{URL::asset('assets/img/favicon.png')}}" sizes="20x20" type="image/png">

    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/flaticon.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">
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
                        <a href="#contactus" class="boxed-btn btn-brand white">Contact Us</a>
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
                        <h3 class="title">Learn, Earn and Network with Trivhunt</h3>
                        <p class="text-dark">Get paid for taking quiz in any area of your expertise or interest and improve your knowledge, connect with like-minds and attract potential employers to your profile.</p>
                        <div class="btn-wrapper padding-top-30">
                            <a href="#" class="boxed-btn btn-brand">Download Trivhunt App and Start Earning</a>
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
                            <p>Simply create an account with your email address and a unique password.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="how-it-single-item">
                        <div class="icon style-01">
                            <span class="day">2</span>
                        </div>
                        <div class="content">
                            <h4 class="title">Verify Account</h4>
                            <p>You can play a game with an unverified account, but to enter into a live game and earn you need to verify your account with a government
                                issued identification card.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="how-it-single-item">
                        <div class="icon style-01">
                            <span class="day">3</span>
                        </div>
                        <div class="content">
                            <h4 class="title">Play and Network</h4>
                            <p>You learn and earn while playing. Also the platform gives the opportunity to network with like minded users in the community interface of {{config('app.name')}}.</p>
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
                        <div class="call-action-img offset-lg-2">
                            <img src="{{URL::asset('assets/img/action.png')}}" alt="" style="margin-bottom: -5rem;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="call-to-action-content">
                            <h2 class="title">{{config('app.name')}} Made for You</h2>
                            <p class="subtitle">Each time a game is won, you add more money to your wallet and more star to your skill set to become noticeable by potential recruiters.</p>
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

    <div id="faqs" class="accoridions padding-top-310 padding-bottom-90">
        <div class="container">
            <div class="row justify-content-center padding-bottom-50">
                <div class="col-lg-8 col-md-12">
                    <div class="section-title desktop-center">
                        <h2 class="title">Frequently Asked Questions</h2>
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
                                            What is {{config('app.name')}}?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        {{config('app.name')}} is a unique initiative that helps Nigerians and other Africans increase their earning power when they display mastery of their profession by answering career related questions.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOwo">
                                            Why {{config('app.name')}}
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Millions of qualified Nigerians are currently unemployed. Many employed people even feel they deserve more. What's worse? There's no platform for them to swiftly earn better, express their ability and connect with potential employers. {{config('app.name')}} bridges this gap by providing an all-inclusive place for digitally skilled individuals to earn.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseOwo">
                                            Who is {{config('app.name')}} for?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        {{config('app.name')}} accommodates professionals across all levels whether they are employed, underemployed or unemployed. It's also for gamers, quiz enthusiasts and people who love to bet.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Is {{config('app.name')}} relevant to all careers?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        Yes, {{config('app.name')}} is not career-selective. It is appropriate to individuals from different career backgrounds and interests such as Information Technology, Sports, Digital Marketing Music, Education, Food and many more.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            How do I participate in {{config('app.name')}} games?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        It's simple! Create an account and access your dashboard. On your dashboard, start a game and pay the token to start. After that, you will see an instruction and a sample question and immediately you're done you can start answering the main questions.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            How much do I need to pay to access a {{config('app.name')}} game?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">
                                        You need a minimum of N100 in your wallet to access a live game. However, you can enjoy a demo game with no earning potential for free.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            What's the maximum amount I can earn per game?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                    <div class="card-body">
                                        You can earn as much as N50,000 per game.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            How do I withdraw my earnings?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                                    <div class="card-body">
                                        If you satisfy all conditions, withdrawing your money is very easy. Simply click on "My earnings" and indicate the amount you wish to withdraw. After that, choose the payment method from the options listed and follow the prompt. Only note that, your money will be paid into your verified account.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            Is {{config('app.name')}} legit?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                    <div class="card-body">
                                        Yes, it is. The idea is not to extort you but to make you express your knowledge and earn from it. Aside that, we are registered with the Corporate Affairs Commission (CAC) and we have a strong legal backing.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTen">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Is {{config('app.name')}} a betting platform?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                                    <div class="card-body">
                                        No, it isn't a gambling platform. Among other benefits, {{config('app.name')}} helps you earn from your knowledge and referral of other members.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEleven">
                                    <h5 class="mb-0">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            What other benefits will I enjoy as a {{config('app.name')}} member?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                                    <div class="card-body">
                                        Apart from earning directly from your knowledge and new members' referral, you will accumulate points to indicate how proficient you are in your field. In return, your points will facilitate your discovery by potential employers and as a result, you can be employed on a full-time position and if you are a freelancer, you can close deals.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="call-to-action-area bg-image padding-bottom-120" style="background-image: url(assets/img/call-to-action/bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="call-to-action-inner style-02 text-center">
                        <div class="line-area">
                            <span class="line-one"></span>
                            <span class="line-two"></span>
                            <span class="line-three"></span>
                        </div>
                        <span class="bubble"></span>
                        <div class="content">
                            <h2 class="title">Download Trivhunt App and Start Earning</h2>
                            <p class="subtitle">Don’t wait for salary before you make money. Start earning anytime, any day.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contactus" class="contact-inner-area padding-bottom-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="content-area">
                        <div class="section-title padding-bottom-25">
                            <h3 class="title">Let’s start the conversation</h3>
                        </div>
                        <div class="single-contact-item-02">
                            <img src="{{URL::asset('assets/img/contact.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1a">
                    <div class="contact-form style-01">
                        <form action="" class="contact-page-form" novalidate="novalidate">
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
                            <p>{{config('app.name')}} is a unique initiative that helps Nigerians and other Africans increase their earning power when they display mastery of their profession by answering career related questions.
                                The LEN objective alows you to Learn while playing, Earn while play and Network while playing.
                            </p>
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

    <script>
        window.VIDEOASK_EMBED_CONFIG = {
            "kind": "widget",
            "url": "https://bots.person8.ai/fii02z9cs",
            "options": {
                "widgetType": "VideoThumbnailWindowTall",
                "text": "",
                "backgroundColor": "#F17013",
                "position": "bottom-right",
                "dismissible": true
            }
        }
    </script>
    <script src="https://d1yere00agyg9m.cloudfront.net/website_assets/bots.js"></script>

    <script src="{{URL::asset('assets/js/jquery-2.2.4.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/parallax.js')}}"></script>

    <script src="{{URL::asset('assets/js/main.js')}}"></script>
</body>

</html>