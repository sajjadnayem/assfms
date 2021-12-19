<!DOCTYPE html>
<html lang="en">


<head>
    <title>AsSunnah Foundation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" > --}}
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&amp;family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('frontend/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/6.0.0//ionicons.min.css"> --}}
    <link rel="stylesheet" href="{{url('frontend/css/A.animate.css%2bflaticon.css%2btiny-slider.css%2bglightbox.min.css%2baos.css%2bstyle.css%2cMcc.pspPrgu1V6.css.pagespeed.cf.7vWlD0LWBe.css')}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    
    
</head>
<body style="position: relative;">
    {{-- style="position: static; --}}
    <nav class="navbar navbar-expand-lg  ftco-navbar-light" style=" top:0px;">
        @include('website.fixed.header')
    </nav>
    
    <!--header goes here -->
    
    
    
    <!--content goes here-->
    
    
    
    @yield('content')
    
    
    
    
    
    
    {{-- <section class="hero-wrap rellax" data-rellax-speed="-5" data-rellax-min="-120" data-rellax-max="0" style="background-image:url(frontend/images/xbg_1.jpg.pagespeed.ic.jUle2vgdPp.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-lg-6">
                    <span class="subheading">Raising Hope</span>
                    <h1 class="mb-4">To the Homeless &amp; Hopeless People</h1>
                    <p><a href="#" class="btn btn-primary p-4 py-3">Join Us <span class="ion-ios-arrow-round-forward"></span></a> <a href="#" class="btn">Watch the Video <span class="ion-ios-play"></span></a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-intro-wrap">
        <div class="container-xl">
            <div class="row g-lg-5">
                <div class="col-md-5 order-lg-last d-flex align-items-stretch">
                    <div class="fund-wrap">
                        <div class="fund-raised d-flex align-items-center">
                            <div class="icon">
                                <span class="flaticon-heart"></span>
                            </div>
                            <div class="text section-counter-2">
                                <h4 class="countup">$1,850,000</h4>
                                <span>Funds raised by 1200 people</span>
                            </div>
                        </div>
                        <form action="#" class="appointment">
                            <span class="subheading">Donate Now</span>
                            <h2 class="mb-4 appointment-head">Giving is the greatest act of grace</h2>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Your Full Name</label>
                                        <input type="text" class="form-control" placeholder="Your Full Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subject">Select Causes</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Food</option>
                                                    <option value="">Medical Health</option>
                                                    <option value="">Education</option>
                                                    <option value="">Environment</option>
                                                    <option value="">Shelter/Home</option>
                                                    <option value="">Clothes</option>
                                                    <option value="">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="amount">Amount to Give</label>
                                        <input type="text" class="form-control" placeholder="Amount">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group d-flex">
                                        <div class="form-check d-flex">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">Paypal</label>
                                        </div>
                                        <div class="form-check d-flex ms-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">Credit Card</label>
                                        </div>
                                        <div class="form-check d-flex ms-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                            <label class="form-check-label" for="flexRadioDefault3">Payoneer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" value="Donate Now" class="btn btn-primary py-3 px-4 rounded">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-7 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="mt-0 about-wrap">
                        <span class="subheading">Welcome to Lovecare Charity</span>
                        <h2 class="mb-4">We Help Thousands of Children to Get Their Education</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <div class="row mt-5 g-md-3">
                            <div class="col-md-6 col-lg-4 mb-2 mb-md-0 d-flex align-items-stretch">
                                <a href="#" class="services-2">
                                    <div class="icon"><span class="flaticon-donation"></span></div>
                                    <div class="text">
                                        <h2>Start Donating</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-2 mb-md-0 d-flex align-items-stretch">
                                <a href="#" class="services-2 color-2">
                                    <div class="icon"><span class="flaticon-ecosystem"></span></div>
                                    <div class="text">
                                        <h2>Join Our Community</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-2 mb-md-0 d-flex align-items-stretch">
                                <a href="#" class="services-2 color-3">
                                    <div class="icon"><span class="flaticon-charity"></span></div>
                                    <div class="text">
                                        <h2>Be A Volunteer</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section-counter img" style="background-image:url(frontend/images/xbg_3.jpg.pagespeed.ic.Da1TsKlqXt.jpg)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-section heading-section-white mb-5" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Great Reviews for our services</span>
                    <h2 class="mb-0">Technical Statistics</h2>
                </div>
            </div>
            <div class="row section-counter">
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-heart"></span>
                        </div>
                        <h2 class="number"><small>$</small><span class="countup">60</span><small>M</small></h2>
                        <span class="caption">Fund Raised</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-ecosystem"></span>
                        </div>
                        <h2 class="number"><span class="countup">9200</span></h2>
                        <span class="caption">Completed Projects </span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-donation"></span>
                        </div>
                        <h2 class="number"><span class="countup">5800</span></h2>
                        <span class="caption">Donation</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="counter-wrap-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                        <div class="icon">
                            <span class="flaticon-charity"></span>
                        </div>
                        <h2 class="number"><span class="countup">2750</span></h2>
                        <span class="caption">Volunteer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-causes ftco-section bg-light">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-lg-5 heading-section text-center mb-4" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Our Causes</span>
                    <h2 class="mb-4">Our Causes &amp; Help Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-causes">
                        <div class="item">
                            <div class="causes-wrap">
                                <a href="images/cause-1.jpg" class="img d-flex align-items-end justify-content-center glightbox" style="background-image:url(frontend/images/xcause-1.jpg.pagespeed.ic.fItOPS5x_l.jpg)">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                                    <span class="sub">Education</span>
                                </a>
                                <div class="text">
                                    <div class="desc">
                                        <h2 class="mb-3">Give Food to Homeless Children</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                    </div>
                                    <div class="progress-desc">
                                        <div class="progress-wrap">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    <span>70%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex raised-goal justify-content-between">
                                            <span>Raised: <strong>$9,800</strong></span>
                                            <span class="goal">Goal: <strong>15,000</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="causes-wrap">
                                <a href="images/cause-1.jpg" class="img d-flex align-items-end justify-content-center glightbox" style="background-image:url(frontend/images/xcause-2.jpg.pagespeed.ic.1Y8D_qtPsP.jpg)">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                                    <span class="sub">Education</span>
                                </a>
                                <div class="text">
                                    <div class="desc">
                                        <h2 class="mb-3">Give Food to Homeless Children</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                    </div>
                                    <div class="progress-desc">
                                        <div class="progress-wrap">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    <span>70%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex raised-goal justify-content-between">
                                            <span>Raised: <strong>$9,800</strong></span>
                                            <span class="goal">Goal: <strong>15,000</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="causes-wrap">
                                <a href="images/cause-1.jpg" class="img d-flex align-items-end justify-content-center glightbox" style="background-image:url(frontend/images/xcause-3.jpg.pagespeed.ic.nsBN7aliGb.jpg)">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                                    <span class="sub">Education</span>
                                </a>
                                <div class="text">
                                    <div class="desc">
                                        <h2 class="mb-3">Give Food to Homeless Children</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                    </div>
                                    <div class="progress-desc">
                                        <div class="progress-wrap">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    <span>70%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex raised-goal justify-content-between">
                                            <span>Raised: <strong>$9,800</strong></span>
                                            <span class="goal">Goal: <strong>15,000</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="causes-wrap">
                                <a href="images/cause-1.jpg" class="img d-flex align-items-end justify-content-center glightbox" style="background-image:url(frontend/images/xcause-4.jpg.pagespeed.ic.S8A7vW7P8W.jpg)">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-search"></span></div>
                                    <span class="sub">Education</span>
                                </a>
                                <div class="text">
                                    <div class="desc">
                                        <h2 class="mb-3">Give Food to Homeless Children</h2>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                                    </div>
                                    <div class="progress-desc">
                                        <div class="progress-wrap">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                    <span>70%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex raised-goal justify-content-between">
                                            <span>Raised: <strong>$9,800</strong></span>
                                            <span class="goal">Goal: <strong>15,000</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-image img" style="background-image: url(frontend/images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 heading-section heading-section-white mb-5 text-center" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Lovecare Charity</span>
                    <h2 class="mb-4">The Smallest Act of Kindness is Worth More Than the Grandest Intention</h2>
                    <p><a href="#" class="btn btn-primary py-3 px-4">Donate Now!</a> <a href="#" class="btn btn-secondary py-3 px-4">Become A Volunteer</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container-fluid">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Meet Our Volunteer</span>
                    <h2 class="mb-5">Our Volunteer</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(frontend/images/staff-1.jpg);"></div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Jason Smith</h3>
                            <span class="position mb-2">Volunteer</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(frontend/images/staff-2.jpg);"></div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Anne Hayes</h3>
                            <span class="position mb-2">Volunteer</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(frontend/images/staff-3.jpg);"></div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Martha Smith</h3>
                            <span class="position mb-2">Volunteer</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="flip-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="staff">
                        <div class="img-wrap d-flex align-items-stretch">
                            <div class="img align-self-stretch" style="background-image: url(frontend/images/staff-4.jpg);"></div>
                        </div>
                        <div class="text text-center">
                            <h3 class="mb-2">Mike Tyson</h3>
                            <span class="position mb-2">Volunteer</span>
                            <div class="faded">
                                <ul class="ftco-social text-center">
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
                                    <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
                                </ul>
                                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section img" style="background-image: url(frontend/images/bg_4.jpg);">
        <div class="overlay"></div>
        <div class="container-xl">
            <div class="row justify-content-center pb-4">
                <div class="col-lg-7 text-center heading-section heading-section-white" data-aos="fade-up" data-aos-duration="1000">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-5">What People Says</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-testimony">
                        <div class="item">
                            <div class="testimony-wrap">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                    <div class="text">
                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url(frontend/images/person_1.jpg)"></div>
                                            <div class="ps-3">
                                                <p class="name">Roger Scott</p>
                                                <span class="position">Marketing Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                        <div class="text">
                                            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <div class="d-flex align-items-center">
                                                <div class="user-img" style="background-image: url(frontend/images/person_2.jpg)"></div>
                                                <div class="ps-3">
                                                    <p class="name">Roger Scott</p>
                                                    <span class="position">Marketing Manager</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimony-wrap">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                            <div class="text">
                                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                                <div class="d-flex align-items-center">
                                                    <div class="user-img" style="background-image: url(frontend/images/person_3.jpg)"></div>
                                                    <div class="ps-3">
                                                        <p class="name">Roger Scott</p>
                                                        <span class="position">Marketing Manager</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-wrap">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                                <div class="text">
                                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                                    <div class="d-flex align-items-center">
                                                        <div class="user-img" style="background-image: url(frontend/images/person_4.jpg)"></div>
                                                        <div class="ps-3">
                                                            <p class="name">Roger Scott</p>
                                                            <span class="position">Marketing Manager</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimony-wrap">
                                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                                    <div class="text">
                                                        <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                                        <div class="d-flex align-items-center">
                                                            <div class="user-img" style="background-image: url(frontend/images/person_2.jpg)"></div>
                                                            <div class="ps-3">
                                                                <p class="name">Roger Scott</p>
                                                                <span class="position">Marketing Manager</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="ftco-section ftco-no-pt ftco-no-pb">
                            <div class="container-xl">
                                <div class="row g-lg-5">
                                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                        <div class="img img-2 w-100" style="background-image: url(frontend/images/about.jpg);">
                                        </div>
                                    </div>
                                    <div class="col-md-6 heading-section d-flex align-items-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                                        <div class="mt-0 my-lg-5 py-5">
                                            <span class="subheading">Welcome to LoveCare Non-Profit Charity</span>
                                            <h2 class="mb-4">Do You Care Our Children?</h2>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                                            <p><a href="#" class="btn btn-secondary py-3 px-4">Be A Volunteer</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="ftco-section">
                            <div class="container-xl">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-lg-7 heading-section text-center" data-aos="fade-up" data-aos-duration="1000">
                                        <span class="subheading">Our Blog</span>
                                        <h2>Recent From Blog</h2>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-md-6 col-lg-4 d-flex">
                                        <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                            <a href="blog-single.html" class="block-20 img" style="background-image: url('frontend/images/image_1.jpg');">
                                            </a>
                                            <div class="text text-center">
                                                <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i class="fa fa-calendar me-1"></i>Feb. 22, 2021</span> <span><a href="#"><i class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                                                <h3 class="heading mb-3"><a href="#">Give Hope to the People Need Most</a></h3>
                                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                <p><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward me-2"></span></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 d-flex">
                                        <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                            <a href="blog-single.html" class="block-20 img" style="background-image: url('frontend/images/image_2.jpg');">
                                            </a>
                                            <div class="text text-center">
                                                <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i class="fa fa-calendar me-1"></i>Feb. 22, 2021</span> <span><a href="#"><i class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                                                <h3 class="heading mb-3"><a href="#">Give Hope to the People Need Most</a></h3>
                                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                <p><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward me-2"></span></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 d-flex">
                                        <div class="blog-entry justify-content-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                            <a href="blog-single.html" class="block-20 img" style="background-image: url('frontend/images/image_3.jpg');">
                                            </a>
                                            <div class="text text-center">
                                                <p class="meta"><span><i class="fa fa-user me-1"></i>Admin</span> <span><i class="fa fa-calendar me-1"></i>Feb. 22, 2021</span> <span><a href="#"><i class="fa fa-comment me-1"></i> 3 Comments</a></span></p>
                                                <h3 class="heading mb-3"><a href="#">Give Hope to the People Need Most</a></h3>
                                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                <p><a href="#" class="btn btn-secondary">Read More <span class="ion-ios-arrow-round-forward me-2"></span></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> --}}
                        <!--footer goes here-->
                        
                        <!--footer goes here-->
                        {{-- <footer class="ftco-footer img">
                            <div class="overlay"></div>
                            <div class="container-xl">
                                <div class="row mb-5 pb-lg-4 justify-content-between">
                                    <div class="col-md-6 col-lg">
                                        <div class="ftco-footer-widget mb-4">
                                            <h2 class="ftco-heading-2 logo d-flex">
                                                <a class="navbar-brand align-items-center" href="index-2.html">
                                                    Love<small>Care</small>
                                                    <span>Charity Theme</span>
                                                </a>
                                            </h2>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                            <ul class="ftco-footer-social mt-4">
                                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg">
                                        <div class="ftco-footer-widget mb-4">
                                            <h2 class="ftco-heading-2">Recent Posts</h2>
                                            <div class="block-21 mb-4 d-flex">
                                                <a class="blog-img img rounded" style="background-image: url(frontend/images/image_1.jpg);"></a>
                                                <div class="text">
                                                    <div class="meta">
                                                        <div><a href="#"><span class="fa fa-calendar"></span> Feb. 22, 2021</a></div>
                                                        <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                                    </div>
                                                    <h3 class="heading"><a href="#">Ecological System Responsible for Green Energy</a></h3>
                                                </div>
                                            </div>
                                            <div class="block-21 mb-4 d-flex">
                                                <a class="blog-img img rounded" style="background-image: url(frontend/images/image_2.jpg);"></a>
                                                <div class="text">
                                                    <div class="meta">
                                                        <div><a href="#"><span class="fa fa-calendar"></span> Feb. 22, 2021</a></div>
                                                        <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                                    </div>
                                                    <h3 class="heading"><a href="#">Ecological System Responsible for Green Energy</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg">
                                        <div class="ftco-footer-widget mb-4">
                                            <h2 class="ftco-heading-2">Have a Questions?</h2>
                                            <div class="block-23 mb-3">
                                                <ul>
                                                    <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                                                    <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                                                    <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text"><span class="__cf_email__" data-cfemail="e58c8b838aa59c8a9097818a88848c8bcb868a88">[email&#160;protected]</span></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid px-0 py-5 bg-darken">
                                <div class="container-xl">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="mb-0" style="font-size: 14px;">Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer> --}}
                        @include('website.fixed.footer')
                        <script src="{{url('frontend/js/bootstrap.bundle.min.js')}}"></script>
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                        <script src="{{url('frontend/js/tiny-slider.js')}}"></script>
                        <script src="{{url('frontend/js/glightbox.min.js%2baos.js%2brellax.min.js%2bgoogle-map.js%2bmain.js.pagespeed.jc.QJgafDP000.js')}}"></script><script>eval(mod_pagespeed_A$aEujBpjM);</script>
                        <script>eval(mod_pagespeed_ieg8uNb8v3);</script>
                        <script>eval(mod_pagespeed_OZXYkmNFRK);</script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
                        <script>eval(mod_pagespeed_1JWoZ54p1U);</script>
                        <script>eval(mod_pagespeed_in_g07lve2);</script>
                        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
                        <script>
                            window.dataLayer = window.dataLayer || [];
                            function gtag(){dataLayer.push(arguments);}
                            gtag('js', new Date());
                            
                            gtag('config', 'UA-23581568-13');
                        </script>
                        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b7132206b574834","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>
                        
                    </body>
                    
                    <!-- Mirrored from preview.colorlib.com/theme/lovecare/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Dec 2021 02:41:35 GMT -->
                    </html>