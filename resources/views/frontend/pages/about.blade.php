@extends('frontend.layout.app')
@section('content')

<div class="rts-bread-crumb-area bg_image bg-breadcrumb">
    <div class="container ptb--65">
        <div class="row">
            <div class="col-lg-12">
                <div class="con-tent-main">
                    <div class="wrapper">
                        <span class="bg-text-stok">About Us</span>
                        <div class="title skew-up">
                            <a href="#">About Us</a>
                        </div>
                        <div class="slug skew-up">
                            <a href="{{url('/')}}">HOME /</a>
                            <a class="active" href="#">About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts breadcrumb area end -->
<!-- header style two End -->


<!-- rts service details area start -->
<div class="rts-service-details-area mt-2">
    <div class="container">
        <div class="row g-40">
            <div class="col-lg-8">
                <div class="left-service-details-wrapper">
                    <div class="thumbnail-large">
                        <img src="assets/images/italia/about-2.jpg" alt="service-details" style="border-radius: 10px;">
                    </div>
                    <div class="content--sd-top  reveal">
                        <h3 class="title title-g">Story of Us</h3>
                        <p class="disc-1">
                            Gypsum is a rapidly growing market in Kuwait. Due to the flourishing construction
                            activities, our country's gypsum consumption is ascending day by day.
                        </p>
                        <p class="disc-2">
                            Born in 30 October 2015, Italia Gypsum is a trusted name in the gypsum industry. The
                            company has been led by highly experienced professionals in the industry who have redefined
                            the modern building standards. Under their guidance and supervision, the company has set
                            high standards on its manufacturing process, product quality and customer satisfaction. At
                            Italia Gypsum, we make plaster-based products using 100% natural gypsum, keeping in mind
                            that houses built today are an asset for the future and having less impact on the natural
                            resources. For us, each house we built is the beginning of a new relation, a relation for
                            generations. That’s why at Italia Gypsum we say, “use our products and see, they will live
                            to tell a tale and the legacy will travel through lives.”
                        </p>
                        <p>We manufacture and market 100% natural gypsum based products for the construction industry including:</p>

                        

                    </div>
                    {{-- <div class="row g-5 align-items-center reveal mt-3">
                        <div class="col-lg-6">
                            <div class="sm-thumbnail-sd">
                                <img src="assets/images/italia/about-benefit.webp" alt="service"
                                    style="border-radius: 10px;">
                            </div>
                        </div>
                        <div
                            class="sm-sd-content-wrapper col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 mb_md--20 mb_sm--20">
                            <h4 class="title title-g">Customer Benefits</h4>
                            <p class="disc">Catalysts for change before fully tested markets are maintain wireless
                                scenarios after intermandated applications predominate revolutionary.</p>
                            <div class="single-banifits">
                                <i class="far fa-check-circle"></i>
                                <span>We use the latest diagnostic equipment</span>
                            </div>
                            <div class="single-banifits">
                                <i class="far fa-check-circle"></i>
                                <span>We are a member of Professional Service</span>
                            </div>
                            <div class="single-banifits">
                                <i class="far fa-check-circle"></i>
                                <span>Automotive service our clients receive</span>
                            </div>
                        </div>
                    </div> --}}

                </div>






            </div>
            <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                <!-- single wizered start -->
                {{-- <div class="rts-single-wized search">
                    <div class="wized-body mt--0">
                        <div class="rts-search-wrapper">
                            <input class="Search" type="text" placeholder="Enter Keyword">
                            <button><i class="fal fa-search"></i></button>
                        </div>
                    </div>
                </div> --}}
                <!-- single wizered End -->
                <!-- single wizered start -->
                <div class="rts-single-wized Categories">
                    <div class="wized-header">
                        <h5 class="title text-start mt--0">
                            We manufacture and market 100% natural gypsum based products.
                        </h5>
                    </div>
                    <div class="wized-body">
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Plaster Boards <i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Ceiling Tiles<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Plaster Powder<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Jointing Compounds<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        {{-- <ul class="single-categories">
                            <li><a href="#">Renders<i class="far fa-long-arrow-right"></i></a></li>
                        </ul> --}}
                        <!-- single categoris End -->

                        <!-- single categoris -->
                        {{-- <ul class="single-categories">
                            <li><a href="#">BondITs<i class="far fa-long-arrow-right"></i></a></li>
                        </ul> --}}
                        <!-- single categoris End -->
                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Wall Putty<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->


                        <!-- single categoris -->
                        <ul class="single-categories">
                            <li><a href="#">Accessories<i class="far fa-long-arrow-right"></i></a></li>
                        </ul>
                        <!-- single categoris End -->

                    </div>
                </div>
                <!-- single wizered End -->
                <!-- single wizered start -->
                <!-- <div class="rts-single-wized">
                    <div class="card-cta">
                        <div class="thumbnail">
                            <img src="assets/images/italia/call-about.svg" alt="cta">
                        </div>
                        <h5 class="title">+965 555 47948</h5>
                        <p class="opc mt--20">Mon-Fri: 7:00 am-9:00 pm</p>
                        <a href="#" class="rts-btn btn-primary">Call us Now</a>
                    </div>
                </div> -->
                <!-- single wizered End -->

                <!-- single wizered start -->
                <div class="rts-single-wized">
                    <div class="wized-header">
                        <h5 class="title text-start mt--0">
                            Get in Touch
                        </h5>
                    </div>
                    <div class="get-in-touch-single-side">
                        <!-- single get in touch start-->
                        <div class="rts-single--cta">
                            <i class="fa-sharp fa-light fa-envelope"></i>
                            <a href="#">info@Italiagypsum.com</a>
                        </div>
                        <!-- single get in touch end -->
                        <!-- single get in touch start-->
                        <div class="rts-single--cta">
                            <i class="fa-regular fa-phone"></i>
                            <a href="#">+965 555 47948</a>
                        </div>
                        <!-- single get in touch end -->
                        <!-- single get in touch start-->
                        <div class="rts-single--cta">
                            <i class="fa-regular fa-location-dot"></i>
                            <a href="#">9X9Q+P36, Kuwait City,
                                Kuwait</a>
                        </div>
                        <!-- single get in touch end -->
                        <!-- single get in touch start-->
                        <!-- <div class="rts-single--cta">
                            <i class="fa-regular fa-location-dot"></i>
                            <a href="#">Valley Road East USA.</a>
                        </div> -->
                        <!-- single get in touch end -->

                        <!-- single get in touch start-->
                        <!-- <div class="rts-single--cta">
                            <i class="fa-sharp fa-solid fa-timer"></i>
                            <a href="#">Mon - Sat 8.00 - 18.00. Sunday CLOSED</a>
                        </div> -->
                        <!-- single get in touch end -->
                    </div>
                </div>
                <!-- single wizered End -->

            </div>
        </div>
    </div>
</div>
<!-- rts service details area end -->


<div class="container mb-3">
    <div class="text-center mb-5">
        <img src="assets/images/italia/italia-products.png" alt="" srcset="" width="45%">
    </div>
</div>


    <div class="rts-about-area m-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mr-3">
                    <!-- about inner solar energy -->
                   
                            {{-- <img src="http://127.0.0.1:8000/assets/images/italia/chart.svg" alt="solar energy"> --}}
                            <img src="assets/images/italia/italia-offers.svg" alt="" srcset="">
                     
                    <!-- about inner solar energy end -->
                </div>
                <div class="col-lg-7 mt_md--30 mt_sm--40">
                    <!-- about nrighht content area start -->
                    <div class="about-right-content-area-solar-energy">
                        <div class="title-area-left">
                            <p class="pre">
                                <span>Italia Gypsum</span> Offers
                            </p>

                           

                                <h2 class="title skew-up" style="opacity: 1;">
                                    <div class="word-line" style="display: block; text-align: left; width: 100%;">
                                        <div class="word"
                                            style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                            What
    
    
    
                                        </div>
                                        <div class="word"
                                            style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                            Italia</div>
                                        <div class="word"
                                            style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                            Gypsum</div>
                                        <div class="word"
                                            style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                            Offers</div>
                                    </div>
                                    <!-- <div class="word-line"
                                        style="display: block; text-align: left; width: 100%;">
                                        <div class="word"
                                            style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                            Save</div>
                                        <div class="word"
                                            style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                            The</div>
                                        <div class="word"
                                            style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                            Environment</div>
                                    </div> -->
                                </h2>


                            
                            

                          
                        </div>
                        <!-- tab area start about -->
                        <ul class="nav custom-nav-soalr-about nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Unmatched
                                    Quality</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">
                                    Green products</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false"> DIFOT experts
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="pills-4-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4"
                                    aria-selected="false">Step by Step guidance

                                </button>
                            </li>


                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="pills-5-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5"
                                    aria-selected="false">Wide customer base


                                </button>
                            </li>
                        </ul>

                        <!-- nav content start -->
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade  active show" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <!-- single nav content start -->
                                <div class="single-about-content-solar">

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="left-area-wrapper">
                                                    <img src="assets/images/italia/about/uq.svg" alt="about">
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <p class="disc">
                                                    With state of art manufacturing facilitates and best in
                                                    class
                                                    testing laboratory we ensure consistent product quality
                                                    to satisfy
                                                    the customer requirements. Also, through continuous
                                                    customer
                                                    interaction, we are updating ourselves day by day.
                                                </p>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                                <!-- single nav content end -->
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <!-- single nav content start -->
                                <div class="single-about-content-solar">
                                    {{-- <p class="disc">
                                        Ontes mauris eget aliquet fermentum venenatis taciti tempus dignssim
                                        mollis pharetra class habitant congue pulvinar rhoncus proin
                                        bibendum torquent life ultrices penatibus feugiat phasellus.
                                    </p> --}}
                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="left-area-wrapper">
                                                <img src="assets/images/italia/about/gp.svg" alt="about">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <!-- about ncheck wrapper main -->
                                            <div class="single-ckeck-wrapper">
                                                <img src="assets/images/about/dt.png" alt="dotted">
                                                <p>100% natural gypsum based products</p>
                                            </div>
                                            <!-- about ncheck wrapper main end -->
                                            <!-- about ncheck wrapper main -->
                                            <div class="single-ckeck-wrapper">
                                                <img src="assets/images/about/dt.png" alt="dotted">
                                                <p>Completely recyclable</p>
                                            </div>
                                            <!-- about ncheck wrapper main end -->
                                            <!-- about ncheck wrapper main -->
                                            <div class="single-ckeck-wrapper">
                                                <img src="assets/images/about/dt.png" alt="dotted">
                                                <p>Our products environmental friendly</p>
                                            </div>
                                            <!-- about ncheck wrapper main end -->
                                            <!-- about ncheck wrapper main -->
                                            <div class="single-ckeck-wrapper">
                                                <img src="assets/images/about/dt.png" alt="dotted">
                                                <p>No harmful ingredients
                                                </p>
                                            </div>
                                            <!-- about ncheck wrapper main end -->
                                        </div>
                                    </div>
                                    <!-- vedio area start -->

                                    <!-- vedio area end -->
                                </div>
                                <!-- single nav content end -->
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <!-- single nav content start -->
                                <div class="single-about-content-solar">

                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="left-area-wrapper">
                                                <img src="assets/images/italia/about/difot.svg" alt="about">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <!-- about ncheck wrapper main -->
                                            <p class="disc">
                                                Wondering what DIFOT is? Delivery In Full On Time. Through
                                                our uninterrupted and super connected supply chain network,
                                                our extensive product range will reach near to you making
                                                the delivery in a trice.
                                                We are very much excited to continue working hand by hand
                                                with our customers to build your future strong. Our experts
                                                will help you in your need to get the job done right.
                                            </p>
                                            <!-- about ncheck wrapper main end -->
                                        </div>
                                    </div>
                                    <!-- vedio area start -->

                                    <!-- vedio area end -->
                                </div>
                                <!-- single nav content end -->
                            </div>


                            <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                                <!-- single nav content start -->
                                <div class="single-about-content-solar">

                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="left-area-wrapper">
                                                <img src="assets/images/italia/about/st.svg" alt="about">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <!-- about ncheck wrapper main -->
                                            <p class="disc">

                                                Got stuck somewhere? Tired of calculations? We have our
                                                representatives in your area. Take your phone and give them
                                                a call. Your solution will be at your door step. Or just
                                                lodge a query in our website, we will be in touch with you
                                                within no time.

                                            </p>
                                            <!-- about ncheck wrapper main end -->
                                        </div>
                                    </div>
                                    <!-- vedio area start -->

                                    <!-- vedio area end -->
                                </div>
                                <!-- single nav content end -->
                            </div>



                            <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                                <!-- single nav content start -->
                                <div class="single-about-content-solar">

                                    <div class="row align-items-center">
                                        <div class="col-lg-4">
                                            <div class="left-area-wrapper">
                                                <img src="assets/images/italia/about/wc.svg" alt="about">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <!-- about ncheck wrapper main -->
                                            <p class="disc">
                                                Not only housing, we also address a wide variety of sectors
                                                like educational institutions, health care centres, business
                                                units, office spaces and a lot more. Many of the
                                                construction sector’s most noted architects, builders,
                                                contractors, dealers, retailers, pmcs trust our products,
                                                services and technical knowledge to give their business a
                                                competitive edge. Now you are in the list.
                                            </p>
                                            <!-- about ncheck wrapper main end -->
                                        </div>
                                    </div>
                                    <!-- vedio area start -->

                                    <!-- vedio area end -->
                                </div>
                                <!-- single nav content end -->
                            </div>



                        </div>
                        <!-- nav content end -->
                        <!-- tab area start about end -->

                    </div>
                    <!-- about nrighht content area end -->
                </div>
            </div>
        </div>
    </div>




    
<div class="rts-awesome-funfacts-area bg-awesome-feedback mb-5">
    <div class="container-75">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="left-awesome-feedback-wrapper">
                    <!-- single feedback area -->
                    <div class="single-awesome-feedback-area large">
                        <div class="wrapper">
                            <h2>Mission</h2>

                            {{-- <h5 class="title skew-up" style="opacity: 1;">
                                <div class="word-line" style="display: block; text-align: center; width: 100%;">
                                    <div class="word"
                                        style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                        Happy</div>
                                    <div class="word"
                                        style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                        Customers</div>
                                </div>
                            </h5> --}}
                            <p>To provide high-quality, sustainable gypsum products through innovation, efficiency, and exceptional service, enhancing value for our customers and environment.
                            </p>
                        </div>
                    </div>
                    <!-- single feedback area end -->
                    <!-- single feedback area -->
                    <div class="single-awesome-feedback-area small">
                        <div class="wrapper">
                            <h2>Vision</h2>

                            {{-- <h5 class="title skew-up" style="opacity: 1;">
                                <div class="word-line" style="display: block; text-align: center; width: 100%;">
                                    <div class="word"
                                        style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                        Handyman</div>
                                    <div class="word"
                                        style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                        Solution</div>
                                </div>
                            </h5> --}}
                            <p>Innovating with sustainable gypsum solutions for superior quality and a greener future.</p>
                        </div>
                    </div>
                    <!-- single feedback area end -->
                </div>
            </div>
            <div class="col-lg-6 mt_sm--30">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-xl-6 padding-feedback-top-btm">
                        <div class="title-area-left">
                            <p class="pre">
                                <span>Our Customers</span> Testimonial
                            </p>

                            <h3 class="title skew-up animated fadeIn" style="opacity: 1;">
                                <div class="word-line" style="display: block; text-align: left; width: 100%;">
                                    <div class="word"
                                        style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                        Highest</div>
                                    <div class="word"
                                        style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                        Rated</div>
                                    <div class="word"
                                        style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                        Company</div>
                                </div>
                            </h3>
                        </div>
                        <div class="awes-me-fun-f-content">

                            <p class="disc skew-up" style="opacity: 1;">
                            <div class="word-line" style="display: block; text-align: start; width: 100%;">
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    Dui</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    maecenas</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    tempus</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    laoreet</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    nec</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    nullam</div>
                            </div>
                            <div class="word-line" style="display: block; text-align: start; width: 100%;">
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    fringilla</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    luctusoi</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    eros</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    quam</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    pellentesque</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    cras</div>
                            </div>
                            <div class="word-line" style="display: block; text-align: start; width: 100%;">
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    dictum</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    fermentum,</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    conubia</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    eu</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    egestas</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    velit</div>
                            </div>
                            <div class="word-line" style="display: block; text-align: start; width: 100%;">
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    netus</div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    dictumst.</div>
                            </div>
                            </p>
                            <div class="score-rate">
                                <span class="score">4.9/5</span>
                                <div class="info-wrapper">
                                    <p>Trust Score Rated</p>
                                    <span>Rated by over 5000 customers</span>
                                </div>
                            </div>
                            <!-- <a class="btn-under-p" href="#">View All Review</a> -->
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6 pl--control-feedback">
                        <div class="thumbnail">
                            <img src="assets/images/italia/feed.webp" alt="solution">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="rts-team-area rts-section-gapBottom reveal">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-area-center title-g">
                    <p class="pre skew-up">
                        <span> Our</span> Expart team
                    </p>
                    <h2 class="title skew-up">
                        Expert Team Members
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mt--30 g-24">
            <div class="col-lg-3">
                <!-- single team soalr energy -->
                <div class="solar-energy-team">
                    <div class="thumbnail">
                        <img src="assets/images/team/17.png" alt="team">
                        <div class="share-team-h1">
                            <a href="#" class="share-icon">
                                <i class="fa-regular fa-share-nodes"></i>
                            </a>
                            <ul class="share-nav">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-content">
                        <a href="team-details.html">
                            <h5 class="title">Mark Makana</h5>
                        </a>
                        <span> Specialist</span>
                    </div>
                </div>
                <!-- single team soalr energy end -->
            </div>
            <div class="col-lg-3">
                <!-- single team soalr energy -->
                <div class="solar-energy-team">
                    <div class="thumbnail">
                        <img src="assets/images/team/18.png" alt="team">
                        <div class="share-team-h1">
                            <a href="#" class="share-icon">
                                <i class="fa-regular fa-share-nodes"></i>
                            </a>
                            <ul class="share-nav">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="inner-content">
                        <a href="team-details.html">
                            <h5 class="title">John Makana</h5>
                        </a>
                        <span> Specialist</span>
                    </div>
                </div>
                <!-- single team soalr energy end -->
            </div>
            <div class="col-lg-3">
                <!-- single team soalr energy -->
                <div class="solar-energy-team">
                    <div class="thumbnail">
                        <img src="assets/images/team/19.png" alt="team">
                        <div class="share-team-h1">
                            <a href="#" class="share-icon">
                                <i class="fa-regular fa-share-nodes"></i>
                            </a>
                            <ul class="share-nav">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-content">
                        <a href="team-details.html">
                            <h5 class="title">Arvvani Joe</h5>
                        </a>
                        <span> Specialist</span>
                    </div>
                </div>
                <!-- single team soalr energy end -->
            </div>
            <div class="col-lg-3">
                <!-- single team soalr energy -->
                <div class="solar-energy-team">
                    <div class="thumbnail">
                        <img src="assets/images/team/20.png" alt="team">
                        <div class="share-team-h1">
                            <a href="#" class="share-icon">
                                <i class="fa-regular fa-share-nodes"></i>
                            </a>
                            <ul class="share-nav">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-content">
                        <a href="team-details.html">
                            <h5 class="title">Matchine Mue</h5>
                        </a>
                        <span> Specialist</span>
                    </div>
                </div>
                <!-- single team soalr energy end -->
            </div>
        </div>
    </div>
</div>


@endsection