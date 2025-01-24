@extends('frontend.layout.app')
@section('content')

<div class="rts-bread-crumb-area bg_image bg-breadcrumb ">
    <div class="container ptb--65">
        <div class="row">
            <div class="col-lg-12">
                <div class="con-tent-main">
                    <div class="wrapper">
                        <span class="bg-text-stok">Projects</span>
                        <div class="title skew-up">
                            <a href="#">Projects</a>
                        </div>
                        <div class="slug skew-up">
                            <a href="{{url('/')}}">HOME /</a>
                            <a class="active" href="#">PROJECTS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts breadcrumb area end -->
<!-- header style two End -->

<div class="container mt-4">
    <div class="row text-center">
        <div class="col-12">
            <h3>Italia Installation Projects</h3>
            <p>Italia Installation Project, established in 1994 and based in Kuwait, specializes in premium interior
                installation services. With a dedicated team of 150+ skilled professionals, we deliver expert solutions
                for shopping malls, luxury villas, and commercial spaces. Known for precision and excellence, our
                services transform interiors into sophisticated and functional spaces. Italia Installation Project is your
                trusted partner for high-quality craftsmanship and seamless execution.</p>
        </div>
       
    </div>
</div>
<div class="container mt-4">
    <div class="row text-center">
        
        <div class="col-12">
            <img src="assets/images/italia/ita-projects.png" alt="" srcset="">
        </div>
    </div>
</div>



@endsection