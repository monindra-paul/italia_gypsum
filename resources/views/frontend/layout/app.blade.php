<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/italiya/favicon.svg">
    <title>Italiya Gypsum</title>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-6.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets/css/plugins/unicons.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel="stylesheet" href="assets/css/plugins/metismenu.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.css">


    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="assets/css/style.css">



 
</head>





@include('frontend.common.header')

@yield('content')

@include('frontend.common.footer')

@yield('customJs')









<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>


<!-- pre loader start -->
<div id="elevate-load">
    <div class="loader-wrapper">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- pre loader end -->


<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>

<div id="anywhere-home" class="">
</div>


<!-- jquery js -->
<script src="assets/js/plugins/jquery.min.js"></script>
<script src="assets/js/vendor/jqueryui.js"></script>
<script src="assets/js/plugins/counter-up.js"></script>
<script src="assets/js/plugins/swiper.js"></script>
<script src="assets/js/plugins/metismenu.js"></script>
<script src="assets/js/vendor/waypoint.js"></script>
<script src="assets/js/vendor/waw.js"></script>
<script src="assets/js/plugins/gsap.min.js"></script>
<script src="assets/js/plugins/scrolltigger.js"></script>
<script src="assets/js/vendor/split-text.js"></script>
<script src="assets/js/vendor/contact.form.js"></script>
<script src="assets/js/vendor/split-type.js"></script>
<script src="assets/js/plugins/jquery-timepicker.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>



<script src="assets/js/main.js"></script>

<!-- header style two End -->
</body>



</html>