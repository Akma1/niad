@extends('master.index')

@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center" data-background="{{asset('img/hero/h1_hero.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="hero__caption">
                            <p data-animation="fadeInLeft" data-delay=".4s">Welcome to NIAD Dev</p>
                            <h1 data-animation="fadeInLeft" data-delay=".6s" >We help you to improve your  business</h1>
                            <!-- Hero-btn -->
                            <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                <a href="industries.html" class="btn hero-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-height d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.png')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-8">
                        <div class="hero__caption">
                            <p data-animation="fadeInLeft" data-delay=".4s">Welcome to NIAD Dev</p>
                            <h1 data-animation="fadeInLeft" data-delay=".6s" >We help you to improve your  business</h1>
                            <!-- Hero-btn -->
                            <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s">
                                <a href="industries.html" class="btn hero-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- Team-profile Start -->
<div class="team-profile team-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-profile mb-30">
                    <!-- Front -->
                    <div class="single-profile-front">
                        <div class="profile-img">
                            <img src="{{asset('img/team/team_1.jpg')}}" alt="">
                        </div>
                        <div class="profile-caption">
                            <h4><a href="#">Web Developer</a></h4>
                            <p>Kami menyediakan jasa pembuatan Website Company Profile, Toko Online, dan lainnya untuk Personal, Bisnis, Pemerintahan dan lain-lain</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-profile mb-30">
                    <!-- Front -->
                    <div class="single-profile-front">
                        <div class="profile-img">
                            <img src="{{asset('img/team/team_2.jpg')}}" alt="">
                        </div>
                        <div class="profile-caption">
                            <h4><a href="#">Mobile Developer &nbsp (Android/IOS)</a></h4>
                            <p>Kami menyediakan jasa pembuatan aplikasi berbasis mobile (Android/IOS). Untuk memudahkan bisnis anda</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-profile mb-30">
                    <!-- Back -->
                    <div class="single-profile-back-last">
                        <h2>NIAD Developer</h2>
                        <p>Kami fokus pada pembuatan Website dan Aplikasi Android. Kami dapat membantu apa yaaaa?????</p>
                        <a href="#">View profile »</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team-profile End-->

<!-- We Trusted Start-->
<div class="we-trusted-area trusted-padding">
    <div class="container">
        <div class="row d-flex align-items-end">
            <div class="col-xl-7 col-lg-7">
                <div class="trusted-img">
                    <img src="{{asset('img/team/wetrusted.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="trusted-caption">
                   <h2>We are more trusted then 5000 clients</h2>
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru  dolor sit amet, consectetur adipn.</p>
                    <a href="#" class="btn trusted-btn">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- We Trusted End-->

<!-- services Area Start-->
<div class="services-area section-padding2">
    <div class="container">
        <!-- section tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-services text-center mb-30">
                    <div class="services-icon">
                        <span class="flaticon-checklist"></span>
                    </div>
                    <div class="services-caption">
                        <h4>Strategic Planning</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-services text-center mb-30">
                    <div class="services-icon">
                        <span class="flaticon-audit"></span>
                    </div>
                    <div class="services-caption">
                        <h4>Trades & stocks</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-services text-center mb-30">
                    <div class="services-icon">
                        <span class="flaticon-checklist-1"></span>
                    </div>
                    <div class="services-caption">
                        <h4>Audit & Assurance</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- button -->
        <div class="row justify-content-center">
            <div class="room-btn pt-50">
                <a href="services.html" class="border-btn">More Services</a>
            </div>
        </div>
    </div>
</div>
<!-- services Area End-->

<!-- Completed Cases Start -->
<div class="completed-cases section-padding3">
    <div class="container-fluid">
        <div class="row">
            <!-- slider Heading -->
            <div class="col-xl-4 col-lg-4 col-md-8">
                <div class="single-cases-info mb-30">
                    <h3>Completed Cases</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali
                        quUt enim ad minim veniam.
                        quis nostrud exercitation ullamco laboris 
                        nierci si ut.</p>
                    <a href="gallery.html" class="border-btn border-btn2">See more</a>
                </div>
            </div>
            <!-- OwL -->
            <div class="col-xl-8 col-lg-8 col-md-col-md-7">
                <div class=" completed-active owl-carousel"> 
                    <div class="single-cases-img">
                        <img src="{{asset('img/service/completed_case_1.png')}}" alt="">
                        <!-- img hover caption -->
                       <div class="single-cases-cap">
                            <h4><a href="case_details.html">Marketing Strategy</a></h4>
                            <p>Completely impact synergistic mindshare whereas premium services.</p>
                            <span>Advisory</span>
                       </div>
                    </div>
                    <div class="single-cases-img">
                        <img src="{{asset('img/service/completed_case_2.png')}}" alt="">
                        <!-- img hover caption -->
                       <div class="single-cases-cap">
                           <h4><a href="case_details.html">Marketing Strategy</a></h4>
                            <p>Completely impact synergistic mindshare whereas premium services.</p>
                            <span>Advisory</span>
                       </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
<!-- Completed Cases end -->

<!-- Testimonial Start -->
<div class="testimonial-area fix mb-test">
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9 col-md-9">
                <div class="h1-testimonial-active">
                    <!-- Single Testimonial -->
                    <div class="single-testimonial pt-65">
                        <!-- Testimonial tittle -->
                        <div class="testimonial-icon mb-45">
                            <img src="{{asset('img/logo/testimonial.png')}}" class="ani-btn " alt="">
                        </div>
                         <!-- Testimonial Content -->
                        <div class="testimonial-caption text-center">
                            <p>You can’t succeed if you just do what others do and 
                                follow the well-worn path. You need to create a new and 
                                original path for yourself. </p>
                            <!-- Rattion -->
                            <div class="testimonial-ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="rattiong-caption">
                                <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="single-testimonial pt-65">
                        <!-- Testimonial tittle -->
                        <div class="testimonial-icon mb-45">
                            <img src="{{asset('img/logo/testimonial.png')}}"  class="ani-btn" alt="">
                        </div>
                         <!-- Testimonial Content -->
                        <div class="testimonial-caption text-center">
                            <p>You can’t succeed if you just do what others do and 
                                follow the well-worn path. You need to create a new and 
                                original path for yourself. </p>
                            <!-- Rattion -->
                            <div class="testimonial-ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="rattiong-caption">
                                <span>Clifford Frazier<span> - Colorlib Themes</span> </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Recent Area Start -->
<!-- Recent Area End-->

<!-- Request Back Start -->
<!-- Request Back End -->
@endsection