@extends('frontend.layout.app')
@section('content')

<div class="rts-bread-crumb-area bg_image bg-breadcrumb-gypsum">
    <div class="container ptb--65">
        <div class="row">
            <div class="col-lg-12">
                <div class="con-tent-main">
                    <div class="wrapper">
                        <span class="bg-text-stok">Why Italia</span>
                        <div class="title skew-up">
                            <a href="#">Why Italia</a>
                        </div>
                        <div class="slug skew-up">
                            <a href="{{url('/')}}">HOME /</a>
                            <a class="active" href="#">WHY ITALIA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- rts breadcrumb area end -->
<!-- header style two End -->



<div class="rts-about rts-section-gap">
    <div class="container">
        <div class="row g-5 mb--50">
            <div class="col-lg-12">
                <div class="section__title">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title-area-center">
                                    <p class="pre skew-up">
                                        <span> Why</span> Gypsum
                                    </p>
                                    <h2 class="title skew-up">
                                        Benefits by using italia products
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="about__images">
                    <img src="{{('assets/images/italia/adv.svg')}}" alt="" style="border-radius: 8px;">
                    {{-- <img src="https://www.thespruce.com/thmb/_wp1miyXLPTOSNHcud3jADzfnCQ=/4781x0/filters:no_upscale():max_bytes(150000):strip_icc()/SPR-how-to-use-gypsum-in-gardening-5079656-hero-d3f45e9a91734ccc9969a31be9d60841.jpg" alt="" style="border-radius: 8px;"> --}}
                </div>
            </div>
            <div class="col-lg-3 col-xl-3">
                <div class="about__feature">
                    <div class="about__feature__list">
                        <div class="about__feature--item">
                            <div class="feature__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path
                                        d="M24 12c0 6.617-5.383 12-12 12-2.971 0-5.817-1.129-8-3.08V24H2v-5c0-1.103.897-2 2-2h5v2H4.877c1.867 1.893 4.435 3 7.123 3 5.514 0 10-4.486 10-10h2ZM12 2c2.688 0 5.255 1.107 7.122 3H15v2h5c1.103 0 2-.897 2-2V0h-2v3.08C17.817 1.129 14.97 0 12 0 5.383 0 0 5.383 0 12h2C2 6.486 6.486 2 12 2Zm5.698 7.872-1.416.816c.129.418.218.853.218 1.313s-.089.895-.218 1.313l1.416.816-.998 1.733-1.411-.813A4.485 4.485 0 0 1 13 16.38v1.621h-2V16.38a4.481 4.481 0 0 1-2.289-1.33l-1.411.813-.998-1.733 1.416-.816c-.129-.418-.218-.853-.218-1.313s.089-.895.218-1.313l-1.416-.816.998-1.733 1.411.813A4.485 4.485 0 0 1 11 7.622V6.001h2v1.621a4.481 4.481 0 0 1 2.289 1.33l1.411-.813.998 1.733ZM14.5 12c0-1.378-1.121-2.5-2.5-2.5S9.5 10.622 9.5 12s1.122 2.5 2.5 2.5 2.5-1.122 2.5-2.5Z"
                                        fill="#02af19" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                            </div>
                            <div class="feature__text">
                                <h5>Quality & Performance</h5>
                                {{-- <span>Installed Capacity</span> --}}
                            </div>
                        </div>
                        <div class="about__feature--item">
                            <div class="feature__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path
                                        d="M2.878 5.771a1 1 0 0 1-.134-1.408C5.033 1.591 8.407 0 12 0s6.967 1.591 9.256 4.363a1 1 0 1 1-1.541 1.274C17.806 3.325 14.995 2 12.001 2S6.195 3.325 4.287 5.637a1 1 0 0 1-1.408.135Zm16.836 12.592C17.805 20.675 14.994 22 12 22s-5.806-1.325-7.714-3.637a1 1 0 1 0-1.542 1.273c2.29 2.772 5.664 4.363 9.256 4.363s6.967-1.591 9.256-4.363a1 1 0 1 0-1.542-1.273ZM7.5 8.019a2.5 2.5 0 0 1 2.5 2.5v3a2.5 2.5 0 1 1-5 0v-3a2.5 2.5 0 0 1 2.5-2.5Zm0 1.6c-.496 0-.9.404-.9.9v3c0 .496.404.9.9.9s.9-.404.9-.9v-3c0-.496-.404-.9-.9-.9Zm6-1.6a2.5 2.5 0 0 1 2.5 2.5v3a2.5 2.5 0 1 1-5 0v-3a2.5 2.5 0 0 1 2.5-2.5Zm0 1.6c-.496 0-.9.404-.9.9v3c0 .496.404.9.9.9s.9-.404.9-.9v-3c0-.496-.404-.9-.9-.9Zm9.25 3.881a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5ZM19.5 9.25a1.25 1.25 0 1 0-2.5 0 1.25 1.25 0 0 0 2.5 0ZM18.344 16a.8.8 0 0 0 .67-.363l4.178-6.4a.8.8 0 1 0-1.34-.874l-4.178 6.4a.8.8 0 0 0 .67 1.237ZM3.2 16.019a.8.8 0 0 0 .8-.8V8.862a.86.86 0 0 0-1.479-.599L.891 9.945a.8.8 0 1 0 1.149 1.113l.36-.372v4.532a.8.8 0 0 0 .8.8Z"
                                        fill="#04c600" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                            </div>
                            <div class="feature__text">
                                <h5>100% Natural Gypsum</h5>
                                {{-- <span>Installed Capacity</span> --}}
                            </div>
                        </div>
                        <div class="about__feature--item">
                            <div class="feature__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M24 2h-1V0h-2v2H3V0H1v2H0v2h1v2h2V4h.974L9 11.311V24h2v-5h2v5h2V11.311L20.026 4H21v2h2V4h1V2ZM11 17v-5h2v5h-2Zm2.474-7h-2.947L6.402 4h11.197l-4.125 6ZM10 7a2 2 0 1 1 3.999-.001A2 2 0 0 1 10 7Z" fill="#04c600" opacity="1" data-original="#000000" class=""></path></g></svg>
                            </div>
                            <div class="feature__text">
                                <h5>Light weight Board</h5>
                                {{-- <span>Save World</span> --}}
                            </div>
                            {{-- <div class="feature__icon text-right">
                                <img src="assets/images/about/icon/09.svg" alt="">
                            </div> --}}
                        </div>
                        
                        <div class="about__feature--item">
                            <div class="feature__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0" y="0"
                                viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path
                                        d="M5.648 5.958c.733.22 1.521.831 2.354 1.478 1.245.967 2.655 2.064 4.323 2.064 1.965 0 3.643-1.242 4.333-2.992.545.343 1.069.79 1.56 1.405a.998.998 0 0 0 1.406.156 1 1 0 0 0 .156-1.405c-.876-1.094-1.831-1.812-2.818-2.283-.185-2.45-2.181-4.391-4.637-4.391-3.825 0-6.504 2.141-7.482 3.406-.331.426-.43.99-.264 1.506.163.509.562.904 1.069 1.056Zm6.677-3.968c1.117 0 2.073.71 2.473 1.713C13.847 3.533 12.9 3.5 12 3.5a1 1 0 1 0 0 2c.96 0 1.902.044 2.808.254-.392 1.02-1.355 1.746-2.483 1.746-.981 0-2.009-.798-3.097-1.643-.783-.609-1.59-1.236-2.468-1.617 1.005-1.017 3.054-2.25 5.564-2.25ZM9.09 14.804a4.74 4.74 0 0 0-2.69-2.511 4.669 4.669 0 0 0-1.99-.267c.176-.48.417-.983.736-1.503a1 1 0 1 0-1.705-1.045c-.726 1.184-1.147 2.31-1.285 3.335a4.839 4.839 0 0 0-1.711 6.006c1.751 3.858 5.895 4.919 7.122 5.152a1.61 1.61 0 0 0 1.483-.481 1.674 1.674 0 0 0 .396-1.575 3.365 3.365 0 0 1-.104-.776c-.008-.585.055-1.19.122-1.83.153-1.472.312-2.995-.374-4.504Zm-1.615 4.297c-.07.669-.143 1.361-.133 2.062.003.239.022.48.06.722-1.341-.344-3.971-1.327-5.136-3.893a2.846 2.846 0 0 1 .242-2.77c.309.689.837 1.536 1.786 2.485a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414c-.978-.978-1.363-1.762-1.516-2.23a2.659 2.659 0 0 1 1.515.106 2.76 2.76 0 0 1 1.563 1.462c.461 1.016.337 2.208.205 3.47Zm15.431-7.166a1.623 1.623 0 0 0-1.214-.915 1.7 1.7 0 0 0-1.496.521c-.556.592-1.321 1.124-2.132 1.686-1.309.908-2.661 1.847-3.455 3.25a4.653 4.653 0 0 0-.431 3.579c.149.528.399 1.006.709 1.44a6.766 6.766 0 0 1-1.99.509 1 1 0 0 0 .102 1.994c1.37-.017 2.537-.543 3.48-1.081a4.759 4.759 0 0 0 2.272.579c1.669 0 3.291-.869 4.162-2.409 1.851-3.27.865-7.292-.008-9.154Zm-1.732 8.169c-.579 1.025-1.732 1.526-2.844 1.353.848-.918 1.428-1.964 1.73-2.963a1 1 0 1 0-1.914-.578 5.691 5.691 0 0 1-1.589 2.496 2.667 2.667 0 0 1-.208-2.95c.569-1.006 1.68-1.776 2.855-2.592.72-.5 1.46-1.014 2.094-1.605.609 1.593 1.181 4.532-.125 6.84Z"
                                        fill="#04c600" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                            </div>
                            <div class="feature__text">
                                <h5>Machine plasters</h5>
                                {{-- <span>Save World</span> --}}
                            </div>
                            {{-- <div class="feature__icon text-right">
                                <img src="assets/images/about/icon/09.svg" alt="">
                            </div> --}}
                        </div>
                    </div>
                    {{-- <a href="#" class="rts-btn btn-primary btn-three">About Us</a> --}}
                </div>
            </div>
            <div class="col-lg-3 col-xl-3">
                <div class="about__feature">
                    <div class="about__feature">
                        <div class="about__feature__list">
                            <div class="about__feature--item">
                                <div class="feature__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M8.5 9.5c0 .551.128 1.073.356 1.537a3.968 3.968 0 0 0-.836 2.256A5.484 5.484 0 0 1 6.5 9.501a5.51 5.51 0 0 1 6.659-5.381c2.082.428 3.769 2.105 4.213 4.184.134.628.159 1.243.091 1.831a.996.996 0 0 1-.997.866h-.045c-.592 0-1.008-.527-.943-1.115a3.486 3.486 0 0 0-2.655-3.79 3.507 3.507 0 0 0-4.324 3.405ZM4.61 8.205a7.426 7.426 0 0 1 2.261-4.178c1.529-1.433 3.531-2.141 5.63-2.011 3.953.256 7.044 3.719 6.998 7.865-.019 1.736-1.473 3.118-3.208 3.118h-2.406a1.994 1.994 0 0 0-3.91.561 2 2 0 0 0 2 2c.538 0 1.025-.215 1.384-.561h2.932c2.819 0 5.168-2.245 5.208-5.063.074-5.221-3.848-9.591-8.869-9.915a9.41 9.41 0 0 0-7.126 2.548 9.54 9.54 0 0 0-2.855 5.266 1 1 0 0 0 .989 1.166c.472 0 .893-.329.972-.795ZM12 17c-3.695 0-6.892 2.292-7.955 5.702a1 1 0 0 0 .657 1.253 1.006 1.006 0 0 0 1.252-.657C6.743 20.768 9.228 19 11.999 19s5.257 1.768 6.045 4.298a1 1 0 0 0 1.91-.596C18.891 19.292 15.694 17 11.999 17Z" fill="#04c600" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </div>
                                <div class="feature__text">
                                    <h5>Customer service</h5>
                                    {{-- <span>Installed Capacity</span> --}}
                                </div>
                            </div>
                            <div class="about__feature--item">
                                <div class="feature__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M12 6a3 3 0 0 0-3 3v12a3 3 0 0 0 6 0V9a3 3 0 0 0-3-3ZM21 0a3 3 0 0 0-3 3v18a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3ZM3 12a3 3 0 0 0-3 3v6a3 3 0 0 0 6 0v-6a3 3 0 0 0-3-3Z" fill="#04c600" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </div>
                                <div class="feature__text">
                                    <h5>Board strength</h5>
                                    {{-- <span>Installed Capacity</span> --}}
                                </div>
                            </div>
                            <div class="about__feature--item">
                                <div class="feature__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M11.001 13h3.535l8.732-8.731a2.503 2.503 0 0 0 0-3.536 2.502 2.502 0 0 0-3.536 0l-8.731 8.732V13ZM20.44 1.439a1.503 1.503 0 0 1 2.122 0 1.502 1.502 0 0 1 0 2.122L21.313 4.81l-2.122-2.122 1.249-1.249Zm-8.438 8.439 6.483-6.483 2.122 2.122L14.124 12h-2.121V9.879Zm8.75 4.204 2.924 1.655-2.464 4.351-2.927-1.657a8.948 8.948 0 0 1-3.783 2.207v3.361h-5v-3.361a8.956 8.956 0 0 1-3.784-2.207l-2.926 1.657-2.465-4.35 2.924-1.656c-.165-.692-.249-1.392-.249-2.082s.084-1.39.249-2.081L.327 8.263l2.465-4.351 2.926 1.657a8.952 8.952 0 0 1 3.784-2.207V0h5v3.137l-1 1V1h-3v3.141l-.383.093A7.966 7.966 0 0 0 6.17 6.536l-.269.287-2.732-1.547-1.479 2.61 2.729 1.546-.106.378c-.207.728-.312 1.465-.312 2.19s.104 1.463.312 2.191l.106.378-2.729 1.546 1.479 2.61 2.732-1.548.27.287a7.954 7.954 0 0 0 3.948 2.303l.383.093V23h3v-3.14l.383-.093a7.948 7.948 0 0 0 3.947-2.303l.27-.287 2.733 1.548 1.478-2.61-2.73-1.546.108-.378a8.001 8.001 0 0 0 .311-2.19V12c0-.49-.065-.984-.16-1.477l.842-.842.067.237c.166.691.25 1.39.25 2.082 0 .691-.084 1.391-.25 2.083ZM11.305 7.07 9.002 9.373l.003.004a3.965 3.965 0 0 0-1.003 2.622c0 2.206 1.794 4 4 4 1.197 0 2.26-.539 2.994-1.374h.006l1.93-1.929c-.343 2.425-2.411 4.303-4.93 4.303-2.757 0-5-2.243-5-5 0-2.518 1.878-4.587 4.303-4.93Z" fill="#04c600" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </div>
                                <div class="feature__text">
                                    <h5>Customised Products</h5>
                                    {{-- <span>Save World</span> --}}
                                </div>
                                {{-- <div class="feature__icon text-right">
                                    <img src="assets/images/about/icon/09.svg" alt="">
                                </div> --}}
                            </div>
                            
                            <div class="about__feature--item">
                                <div class="feature__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M24 6v12.231a3 3 0 0 1-.772 2.01L19.837 24h-2.693l4.599-5.098c.166-.185.258-.423.258-.671V6a1.001 1.001 0 0 0-2 0v8h-.005a2.98 2.98 0 0 1-.696 1.922l-2.578 2.685-1.441-1.387 2.533-2.634a.893.893 0 0 0 .192-.586h-.004v-.074a1.026 1.026 0 0 0-.255-.594.99.99 0 0 0-.687-.33.97.97 0 0 0-.72.253l-2.908 2.675c.366.507.569 1.123.569 1.756V24h-2v-6.314c0-.279-.117-.547-.322-.736l-4.026-3.705a.971.971 0 0 0-.71-.244.99.99 0 0 0-.687.33 1 1 0 0 0-.022 1.305l2.571 2.67-1.441 1.387-2.616-2.721a3.094 3.094 0 0 1-.735-1.973h-.011V6a1.001 1.001 0 0 0-2 0v12.231c0 .248.092.486.258.671L6.859 24H4.166L.775 20.241a3 3 0 0 1-.772-2.01V6c0-1.654 1.346-3 3-3s3 1.346 3 3v5.17a2.998 2.998 0 0 1 2.995.595l3.005 2.765 2.995-2.756a2.996 2.996 0 0 1 3.005-.604V6c0-1.654 1.346-3 3-3s3 1.346 3 3ZM12 9.914 7.086 5 12 .086 16.914 5 12 9.914ZM9.914 5 12 7.086 14.086 5 12 2.914 9.914 5Z" fill="#04c600" opacity="1" data-original="#000000" class=""></path></g></svg>
                                </div>
                                <div class="feature__text">
                                    <h5>Value added plasters</h5>
                                    {{-- <span>Save World</span> --}}
                                </div>
                                {{-- <div class="feature__icon text-right">
                                    <img src="assets/images/about/icon/09.svg" alt="">
                                </div> --}}
                            </div>
                        </div>
                        {{-- <a href="#" class="rts-btn btn-primary btn-three">About Us</a> --}}
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>





<div class="container">
    <div class="row">
        <div class="col-4">
            <h3>GYPSUM TIMELINE</h3>
            <p>Like every other story, the story of gypsum also started long long long ago- approximately since 9000BC. Simple, gypsum is one of the oldest known building materials. 
                <br>
                <br>
                Gypsum- Calcium Sulphate Dihydrate, is one of the most commonly found mineral in the earth crust. It can be mined, processed and converted into various forms for using in construction, decorations and agriculture. Based on scientific evidences we present you the history of gypsum and how various civilisations used this magic rock.
            </p>
        </div>
        <div class="col-8">
            <img src="assets/images/italia/gypsum-timeline.svg" alt="">
        </div>
    </div>
</div>









<div class="container rts-section-gapBottom mt-4">
    <div class="row">
        <div class="title-area-center title-g">
            <p class="pre skew-up">
                <span> Why</span> Italia
            </p>
            <h2 class="title skew-up">
               Why Italia?
            </h2>
        </div>
        <h3 class="text-center" style="color:#19ae05">We Provided 95% Pure & 100% Natural Gypsum</h3>
        <div class="col-2 text-center">
            
            <img src="assets/images/italia/whyitalia.png" alt="" srcset="">
        </div>
        <div class="col-8">

            <p>
                We understand that each customer has unique requirements, and we work hard to consistently deliver the best gypsum products, which become the preferred choice of companies, builders, and interior decorators, etc.
Italia Gypsum takes pride in offering the highest stadard of products according to market requirements. We want to become your preferred supplier of products for partition, wall lining, ceiling, flooring, insulation, and fire protection systems. We are known for our quality, attention to detail, and un- matched industry knowledge.
<br>
<br>
We are well-versed in Gypsum product development, and our products meet your performance requirements. Our ware- house is always stocked with a complete product line for cre- ating partitions, ceilings, wall linings, & interior design solu- tions. All our products are specially selected for their professional quality & reliability
            </p>

        </div>
        <div class="col-2 text-center">
            <img src="assets/images/italia/service.png" alt="" srcset="">
        </div>
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












@endsection