@extends('master.index')

@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('img/hero/services_hero.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

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


<!-- Recent Area Start -->
<div class="recent-area section-paddingt2">
    <div class="container">
        <!-- section tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>Our Recent News</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30">
                    <div class="recent-img">
                        <img src="{{asset('img/recent/rcent_1.png')}}" alt="">
                    </div>
                    <div class="recent-cap">
                        <span>Business planing</span>
                        <h4><a href="#">Amazing Places To Visit In Summer</a></h4>
                        <p>Nov 30, 2020</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30">
                    <div class="recent-img">
                        <img src="{{asset('img/recent/rcent_2.png')}}" alt="">
                    </div>
                    <div class="recent-cap">
                        <span>Audit</span>
                        <h4><a href="#">Construction industry as their over draft</a></h4>
                        <p>Nov 30, 2020</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-recent-cap mb-30">
                    <div class="recent-img">
                        <img src="{{asset('img/recent/rcent_3.png')}}" alt="">
                    </div>
                    <div class="recent-cap">
                        <span>Business planing</span>
                        <h4><a href="#">Construction industry as their over draft</a></h4>
                        <p>Nov 30, 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recent Area End-->

<!-- Request Back Start -->

<!-- Request Back End -->
@endsection