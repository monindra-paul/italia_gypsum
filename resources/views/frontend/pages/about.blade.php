@extends('frontend.layout.app')
@section('content')

<div class="rts-bread-crumb-area bg_image bg-breadcrumb ">
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
<div class="rts-service-details-area mt-4">
    <div class="container">
        <div class="row g-40">
            <div class="col-lg-8">
                <div class="title-area-center title-g">
                    <p class="pre skew-up">
                        <span> Our</span> Industries
                    </p>
                    <h2 class="title skew-up">
                        Industries we serve
                    </h2>
                </div>
                <div class="left-service-details-wrapper">
                    <div class="thumbnail-large">
                        <img src="assets/images/italia/companies.png" alt="service-details"
                            style="border-radius: 10px;">
                    </div>
                    <div class="content--sd-top  reveal">
                        <h3 class="title title-g">Story of Us</h3>
                        <p class="disc-1">
                            Founded in 1994 by Mr. Ibrahim Alfouzan, Italia Gypsum has grown to become a trusted leader
                            in
                            Kuwait’s Gypsum and building materials industry. With decades of experience, we specialize
                            in
                            manufacturing high-quality gypsum products, including 60 x 60 cm tiles, 60 x 100 cm tiles,
                            moldings,
                            GRG panels, and cornices.
                        </p>
                        <div class="container text-center">

                            <img src="assets/images/italia/tilesabout.png" alt="" srcset="" width="80%">
                        </div>
                        <br>
                        <p class="disc-2">

                            Our expertise extends beyond manufacturing, as we offer comprehensive Design and Execution
                            services through a team of around 150 skilled professionals, ensuring seamless project
                            delivery from
                            concept to completion. Italia Gypsum has played a pivotal role in numerous prestigious
                            projects,
                            including the Royal Palaces, Universities, Luxury Villas, and Malls. Our commitment to
                            innovation,
                            quality, and sustainability drives us to deliver exceptional building solutions that meet
                            the highest
                            industry standards.

                        </p>
                        <p>
                            Building on the legacy of Mr. Ibrahim Alfouzan, his successor, Mr. Fouzan Alfouzan led our
                            expansion
                            into Gypsum-board manufacturing in 2024, further strengthening Italia Gypsum's position as
                            Kuwait's largest Gypsum-board manufacturer by capacity. Looking ahead, we are preparing to
                            expand into Cement-board manufacturing in the coming years, continuing our commitment to
                            growth and innovation in the Gypsum industry
                        </p>
                        <p>We manufacture and market 100% natural gypsum based products for the construction industry
                            including:</p>



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
                            We manufacture 100% natural gypsum based products.
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



<div class="container">
    <div class="row align-items-center">
        <div class="col-4 text-center">
            <img src="assets/images/italia/boardpoints.png" alt="" srcset="" width="130%">
        </div>

        <div class="col-4 text-center">
            <img src="assets/images/italia/mkwt.png" alt="" srcset="" width="80%">
        </div>
        <div class="col-4 text-center">
            <img src="assets/images/italia/plasterpoints.png" alt="" srcset="">
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
                            <p>To provide high-quality, sustainable gypsum products through innovation, efficiency, and
                                exceptional service, enhancing value for our customers and environment.
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
                            <p>Innovating with sustainable gypsum solutions for superior quality and a greener future.
                            </p>
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
                                <span>A Dynamic</span> Well Experienced
                            </p>

                            <h3 class="title skew-up animated fadeIn" style="opacity: 1;">
                                <div class="word-line" style="display: block; text-align: left; width: 100%;">
                                    <div class="word"
                                        style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                        International Team</div>
                                    <div class="word"
                                        style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                        of</div>
                                    <div class="word"
                                        style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                        Professionals</div>
                                </div>
                            </h3>
                        </div>
                        <div class="awes-me-fun-f-content">


                            <div class="container text-center">

                                <img src="assets/images/italia/country.png" alt="" srcset="">
                            </div>
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



<div class="rts-about-area rts-section-gapBottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- about inner solar energy -->
                <div class="rts-about-left-image-area">
                    <div class="thumbnail">
                        <img src="assets/images/italia/whychoose.png" alt="solar energy">
                        <!-- <div class="small-image-area images"
                            style="translate: none; rotate: none; scale: none; transform: translate3d(-115.056px, 0px, 0px);">
                            <img src="assets/images/about/28.png" alt="dsdsd">
                            <p>We Have Experienced <br>
                                More THan 25 Years</p>
                        </div> -->
                    </div>
                </div>
                <!-- about inner solar energy end -->
            </div>
            <div class="col-lg-6 mt_md--30 mt_sm--40">
                <!-- about nrighht content area start -->
                <div class="about-right-content-area-solar-energy">
                    <div class="title-area-left">
                        <p class="pre">
                            <span>Why Choose</span> Italia Gypsum
                        </p>

                        <h2 class="title skew-up" style="opacity: 1;">
                            <div class="word-line" style="display: block; text-align: left; width: 100%;">
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    Why
                                </div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    Choose

                                </div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    Italia
                                </div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                    Gypsum
                                </div>
                            </div>


                            <!-- <div class="word-line" style="display: block; text-align: left; width: 100%;">
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                </div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                </div>
                                <div class="word"
                                    style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0%);">
                                </div>
                            </div> -->
                        </h2>

                        <p>Italia Gypsum stands out in the market for several reasons:
                        </p>
                    </div>
                    <!-- tab area start about -->
                    <ul class="nav custom-nav-soalr-about nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Customizable Solutions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Unmatched Quality</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Prestigious Projects</button>
                        </li>
                    </ul>

                    <!-- nav content start -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <!-- single nav content start -->
                            <div class="single-about-content-solar">
                                <p class="disc">
                                    We tailor our products to meet the specific requirements of our clients, offering
                                    bespoke solutions for diverse construction needs.
                                    We offer unique products like:
                                </p>
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="left-area-wrapper">
                                            <img src="assets/images/italia/cussol.png" alt="about">
                                        </div>
                                    </div>

                                </div>
                                <!-- vedio area start -->

                                <!-- vedio area end -->
                            </div>
                            <!-- single nav content end -->
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <!-- single nav content start -->
                            <div class="single-about-content-solar">
                                <p class="disc">
                                    Our standards rival those of multinational corporations, providing reliable and
                                    durable products.
                                </p>

                                <!-- vedio area end -->
                            </div>
                            <!-- single nav content end -->
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <!-- single nav content start -->
                            <div class="single-about-content-solar">
                                <p class="disc">
                                    We have been entrusted with landmark projects, including the construction of Bayan
                                    Palace, Dar Yamama Palace, Dar Jaber, among other spectacular constructions.
                                </p>

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