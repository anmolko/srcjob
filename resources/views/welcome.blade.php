@extends('frontend.layouts.master')
@section('title') Home @endsection
@section('css')
<style>
    @media only screen and (min-width:768px){
        .counter-item.style-two {
            height: 400px;
        }

        .feature-item-four {
            height: 215px;
        }
    }

    .author.post-category i {
        font-size: 40px;
        margin-right: 15px;
    }

    .icon-different {
        color: white;
        font-size: 65px;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
        display: inline-block;
        width: 120px;
        height: 120px;
        background: #fc653c;
        line-height: 120px;
        border-radius: 50%;
        text-align: center;
    }

</style>
@endsection
@section('content')

    @if(count($sliders) > 0)
        <!-- Slider Section Start -->
        <section class="main-slider-area bgc-black-with-lighting rel z-1">
            <div class="main-slider-active">
                @foreach(@$sliders as $slider)

                    <div class="slider-item">
                        <div class="container">
                            <div class="slider-content">
                                <span class="sub-title"> {{@$slider->subheading}}</span>
                                <h1> {{@$slider->heading}}</h1>
                                <div class="slider-btns">
                                    @if(@$slider->button)
                                        <a href="{{@$slider->link}}" class="theme-btn">{{@$slider->button}} <i class="fas fa-angle-double-right"></i></a>
                                    @endif
                                   
                                    @if(@$slider->button2)
                                        <a href="{{@$slider->link2}}" class="theme-btn style-three">{{@$slider->button2}} <i class="fas fa-angle-double-right"></i></a>
                                    @endif
                             
                                </div>
                            </div>
                        </div>
                        <div class="slider-video" style="background-image: url({{ asset('/images/sliders/'.$slider->image) }});">
                            @if(@$slider->slider_link)
                                <a href="{{@$slider->slider_link}}" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                            @endif
                            
                            <span class="video-title cd-headline clip">
                                <span class="cd-words-wrapper">
                                    @if(@$slider->caption1)
                                        <b class="is-visible">{{@$slider->caption1}}</b>
                                    @endif
                                    @if(@$slider->caption2)

                                        <b>{{@$slider->caption2}}</b>
                                    @endif

                                </span>
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container"><div class="main-slider-dots"></div></div>
            <div class="slider-shapes">
                <img class="shape dots one" src="{{asset('assets/frontend/images/shapes/slider-dots.png')}}" alt="Shape">
                <img class="shape dots two" src="{{asset('assets/frontend/images/shapes/slider-dots.png')}}" alt="Shape">
                <img class="shape wave-line" src="{{asset('assets/frontend/images/shapes/slider-wave-line.png')}}" alt="Shape">
                <img class="shape circle" src="{{asset('assets/frontend/images/shapes/slider-circle.png')}}" alt="Shape">
            </div>
        </section>
        <!-- Slider Section End -->
    @endif


    @if(!empty($homepage_info->welcome_description))
        <!-- Welcome section -->
        <section class="about-area-one pt-130 pb-125 rel z-1">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    @if(@$homepage_info->welcome_side_image == "left") 

                        <div class="col-lg-5">
                            <div class="about-image-one bg-squire-shape rmb-85 wow fadeInUp delay-0-2s">
                                <img src="<?php if(!empty(@$homepage_info->welcome_image)){ echo '/images/home/welcome/'.@$homepage_info->welcome_image; } ?>" alt="About us">
                                <img class="image-left" src="{{asset('/assets/frontend/images/shapes/image-left.png')}}" alt="shape">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="about-content-one wow fadeInUp delay-0-4s">
                                <div class="section-title mb-45">
                                    @if(@$homepage_info->welcome_subheading)
                                        <span class="sub-title mb-15">{{ucfirst(@$homepage_info->welcome_subheading)}}</span>
                                    @endif
                                    @if(@$homepage_info->welcome_heading)
                                        <h2>{{ucwords(@$homepage_info->welcome_heading)}}</h2>
                                    @endif
                                
                                </div>
                    
                                <div class="content">
                                    <p>
                                    {{ ucfirst(@$homepage_info->welcome_description) }}
                                    </p>
                                    @if(@$homepage_info->welcome_button)

                                        <a href="{{@$homepage_info->welcome_link}}" class="theme-btn mt-15" tabindex="0">{{ucwords(@$homepage_info->welcome_button)}} <i class="fas fa-angle-double-right"></i></a>    
                                    @endif
                                </div>
                                
                            </div>
                        </div>

                    @else
                        <div class="col-xl-6 col-lg-7">
                            <div class="about-content-one wow fadeInUp delay-0-4s">
                                <div class="section-title mb-45">
                                    @if(@$homepage_info->welcome_subheading)
                                        <span class="sub-title mb-15">{{ucfirst(@$homepage_info->welcome_subheading)}}</span>
                                    @endif
                                    @if(@$homepage_info->welcome_heading)
                                        <h2>{{ucwords(@$homepage_info->welcome_heading)}}</h2>
                                    @endif
                                
                                </div>
                    
                                <div class="content">
                                    <p>
                                    {{ ucfirst(@$homepage_info->welcome_description) }}
                                    </p>
                                    @if(@$homepage_info->welcome_button)

                                        <a href="{{@$homepage_info->welcome_link}}" class="theme-btn mt-15" tabindex="0">{{ucwords(@$homepage_info->welcome_button)}} <i class="fas fa-angle-double-right"></i></a>    
                                    @endif
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="about-image-one bg-squire-shape rmb-85 wow fadeInUp delay-0-2s">
                                <img src="<?php if(!empty(@$homepage_info->welcome_image)){ echo '/images/home/welcome/'.@$homepage_info->welcome_image; } ?>" alt="About us">
                                <img class="image-left" src="{{asset('/assets/frontend/images/shapes/image-left.png')}}" alt="shape">
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </section>
        <!-- Welcome end -->
    @endif

    @if(!empty($homepage_info->mv_heading))

        <!-- Mission Vision start -->
        <section class="statistics-area-three bgs-cover pb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-7">
                        <div class="statistics-three-content rmb-65 wow fadeInRight delay-0-2s">
                            <div class="row justify-content-center justify-content-xl-start">
                                <div class="col-xl-9">
                                    <div class="section-title mb-60">
                                        @if(@$homepage_info->mv_subheading)
                                            <span class="sub-title mb-15">{{ucfirst(@$homepage_info->mv_subheading)}}</span>
                                        @endif
                                        @if(@$homepage_info->mv_heading)
                                            <h2>{{ucwords(@$homepage_info->mv_heading)}}</h2>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="counter-item style-two counter-text-wrap wow fadeInRight delay-0-3s">
                                        <i class="flaticon-startup"></i>
                                        <span class="counter-title">Mission</span>
                                        <p>{{ ucfirst(@$homepage_info->mission) }}</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="counter-item style-two counter-text-wrap wow fadeInRight delay-0-5s">
                                        <i class="fas fa-eye"></i>

                                        <span class="counter-title">Vision</span>
                                        <p>{{ ucfirst(@$homepage_info->vision) }}</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="counter-item style-two counter-text-wrap wow fadeInRight delay-0-7s">
                                        <i class="flaticon-global"></i>

                                        <span class="counter-title">Value</span>
                                        <p>{{ ucfirst(@$homepage_info->value) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="statistics-three-image bg-squire-shape mb-30 wow fadeInLeft delay-0-3s">
                            <img src="<?php if(!empty(@$homepage_info->mv_image)){ echo '/images/home/welcome/'.@$homepage_info->mv_image; } ?>" alt="mission vision">
                            <img class="image-right" src="{{asset('/assets/frontend/images/shapes/image-right.png')}}" alt="shape">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Mission Vision end -->
    @endif

    @if(!empty($homepage_info->action_heading))
        <!-- CTA Area start -->
        <section class="call-to-action-area rel z-1">
            <div class="container">
                <div class="cta-inner bgs-cover" style="background-image: url({{asset('/assets/frontend/images/background/cta-bg.jpg')}});">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="cta-item wow fadeInLeft delay-0-2s">
                                <div class="icon"><i class="flaticon-target"></i></div>
                                <h4>{{@$homepage_info->action_heading}}</h4>
                                <a href="{{@$homepage_info->action_link}}" class="details-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="cta-item wow fadeInRight delay-0-2s">
                                <div class="icon"><i class="flaticon-target"></i></div>
                                <h4>{{@$homepage_info->action_heading2}}</h4>
                                <a href="{{@$homepage_info->action_link2}}" class="details-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Area end -->
    @endif

    @if(!empty($homepage_info->core_main_heading))

        <!-- Core value start -->
        <section class="feature-area-four pb-100 pt-200 rel z-1">
            <div class="container">
                <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                    <span class="sub-title style-two mb-15">Amazing  Features</span>
                    <h2>{{ucwords(@$homepage_info->core_main_heading)}}</h2>
                    <p>{{ucfirst(@$homepage_info->core_main_description)}}</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item-four wow fadeInUp delay-0-3s">
                            <h4><i class="fas fa-handshake"></i><a href="">{{ucwords(@$homepage_info->core_heading1)}}</a></h4>
                            <p>{{ucfirst(@$homepage_info->core_description1)}}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item-four wow fadeInUp delay-0-5s">
                            <h4><i class="fas fa-file-contract"></i><a href="">{{ucwords(@$homepage_info->core_heading2)}}</a></h4>
                            <p>{{ucfirst(@$homepage_info->core_description2)}}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item-four wow fadeInUp delay-0-7s">
                            <h4><i class="far fa-eye"></i><a href="">{{ucwords(@$homepage_info->core_heading3)}}</a></h4>
                            <p>{{ucfirst(@$homepage_info->core_description3)}}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item-four wow fadeInUp delay-0-3s">
                            <h4><i class="fas fa-balance-scale"></i><a href="">{{ucwords(@$homepage_info->core_heading4)}}</a></h4>
                            <p>{{ucfirst(@$homepage_info->core_description4)}}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item-four wow fadeInUp delay-0-5s">
                            <h4><i class="fas fa-chart-network"></i><a href="">{{ucwords(@$homepage_info->core_heading5)}}</a></h4>
                            <p>{{ucfirst(@$homepage_info->core_description5)}}</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="feature-item-four wow fadeInUp delay-0-7s">
                            <h4><i class="fas fa-user-shield"></i><a href="">{{ucwords(@$homepage_info->core_heading6)}}</a></h4>
                            <p>{{ucfirst(@$homepage_info->core_description6)}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Core value end -->
    @endif

    @if(count($latestServices) > 2)
        <!-- Services start -->
        <section class="project-area-three pb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg10">
                        <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Recent Services</span>
                            <h2>Look at our latest services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-three-active">
                @foreach(@$latestServices as $service)

                    <div class="project-item style-two wow fadeInUp delay-0-2s">
                        <div class="project-iamge">
                            <img src="<?php if(@$service->banner_image){?>{{asset('/images/service/'.@$service->banner_image)}}<?php }?>" alt="Project">
                            <div class="project-over">
                                <a class="details-btn" href="{{route('service.single',$service->slug)}}"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="project-content">
                            <h4><a href="{{route('service.single',$service->slug)}}">{{ucwords(@$service->title)}}</a></h4>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </section>
        <!-- Services  end -->
    @endif

    @if(!empty($homepage_info->what_heading1))
        <!-- What make us different start -->
        <section class="work-process-area pb-95 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Our Strength</span>
                            <h2>What makes us difference?</h2>
                        </div>
                    </div>
                </div>
                <div class="work-process-wrap rel z-1">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-5 col-sm-6">
                            <div class="work-process-item mt-55 wow fadeInUp delay-0-2s">
                                <div class="icon">
                                    <span class="number">01</span>
                                    <div class="icon-different">
                                        <img src="<?php if(!empty(@$homepage_info->what_image1)){ echo '/images/home/welcome/'.@$homepage_info->what_image1; } ?>" alt="different">
                                    </div>
                                </div>
                                <h4>{{ucwords(@$homepage_info->what_heading1)}}</h4>
                               
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-5 col-sm-6">
                            <div class="work-process-item wow fadeInUp delay-0-4s">
                                <div class="icon">
                                    <span class="number">02</span>
                                    <div class="icon-different">
                                     <img src="<?php if(!empty(@$homepage_info->what_image2)){ echo '/images/home/welcome/'.@$homepage_info->what_image2; } ?>" alt="different">
                                    </div>
                                
                                </div>
                                <h4>{{ucwords(@$homepage_info->what_heading2)}}</h4>
                             
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-5 col-sm-6">
                            <div class="work-process-item my-5 wow fadeInUp delay-0-6s">
                                <div class="icon">
                                    <span class="number">03</span>
                                    <div class="icon-different">
                                        <img src="<?php if(!empty(@$homepage_info->what_image3)){ echo '/images/home/welcome/'.@$homepage_info->what_image3; } ?>" alt="different">
                                    </div>

                                </div>
                                <h4>{{ucwords(@$homepage_info->what_heading3)}}</h4>
                               
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-5 col-sm-6">
                            <div class="work-process-item mt-80 wow fadeInUp delay-0-8s">
                                <div class="icon">
                                    <span class="number">04</span>
                                    <div class="icon-different">
                                    <img src="<?php if(!empty(@$homepage_info->what_image4)){ echo '/images/home/welcome/'.@$homepage_info->what_image4; } ?>" alt="different">
                                    </div>
                                </div>
                                <h4>{{ucwords(@$homepage_info->what_heading4)}}</h4>
                               
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-5 col-sm-6">
                            <div class="work-process-item mt-45 wow fadeInUp delay-0-8s">
                                <div class="icon">
                                    <span class="number">05</span>
                                    <div class="icon-different">
                                    <img src="<?php if(!empty(@$homepage_info->what_image5)){ echo '/images/home/welcome/'.@$homepage_info->what_image5; } ?>" alt="different">
                                    </div>
                                </div>
                                <h4>{{ucwords(@$homepage_info->what_heading5)}}</h4>
                               
                            </div>
                        </div>
                    </div>
                    <div class="work-process-shape">
                        <img src="{{asset('/assets/frontend/images/shapes/worp-process-step.png')}}" alt="Shape">
                    </div>
                </div>
            </div>
        </section>
        <!-- What make us different end -->
    @endif

    @if(!empty($homepage_info->why_heading))
        <!-- Why US start -->
        <section class="statistics-area-two bgc-lighter bgs-cover pt-130 pb-100 rel z-1" style="background-image: url({{asset('/assets/frontend/images/features/support-features-bg.png')}});">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-5">
                        <div class="statistics-two-content mb-30 rmb-35 wow fadeInRight delay-0-2s">
                            <div class="section-title mb-25">
                                <span class="sub-title style-two mb-15">{{ucwords(@$homepage_info->why_subheading)}}</span>
                                <h2>{{ucwords(@$homepage_info->why_heading)}}</h2>
                            </div>
                            <p>{{ucwords(@$homepage_info->why_description)}}</p>
                            @if(@$homepage_info->why_button)
                              
                                <a href="{{@$homepage_info->why_link}}" class="theme-btn mt-15">{{@$homepage_info->why_button}} <i class="fas fa-angle-double-right"></i></a>

                            @endif
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="statistics-two-counters mt-30">
                            <div class="row">
                                <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                                    <div class="counter-item counter-text-wrap wow fadeInLeft delay-0-2s">
                                        <i class="flaticon-startup"></i>
                                        <span class="count-text" data-speed="3000" data-stop="{{@$homepage_info->project_completed}}">0</span>
                                        <span class="counter-title">Projects Completed</span>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                                     <div class="counter-item for-margin counter-text-wrap wow fadeInLeft delay-0-5s">
                                        <i class="fas fa-user-check"></i>
                                        <span class="count-text" data-speed="3000" data-stop="{{@$homepage_info->visa_approved}}">0</span>
                                        <span class="counter-title">Visa Approved</span>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6 offset-xl-1">
                                    <div class="counter-item counter-text-wrap wow fadeInLeft delay-0-2s">
                                        <i class="fal fa-smile"></i>
                                        <span class="count-text" data-speed="3000" data-stop="{{@$homepage_info->happy_clients}}">0</span>
                                        <span class="counter-title">Happy Clients</span>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6 col-md-5 col-sm-6">
                                    <div class="counter-item for-margin counter-text-wrap wow fadeInLeft delay-0-5s">
                                        <i class="fas fa-thumbs-up"></i>
                                        <span class="count-text" data-speed="3000" data-stop="{{@$homepage_info->success_stories}}">0</span>
                                        <span class="counter-title">Success Stories</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why US end -->
    @endif

    @if(count($latestPosts) > 3)
        <!-- Blog Area start -->
        <section class="news-blog-area pt-130 pb-75 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Get Every Updates</span>
                            <h2>Read Latest News & Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row large-gap">
                    @foreach(@$latestPosts as $post)

                        <div class="col-lg-6">
                            <div class="blog-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="<?php if(@$post->image){?>{{asset('/images/blog/'.@$post->image)}}<?php }?>" alt="Blog">
                                </div>
                                <div class="content">
                                    <span class="date"><i class="far fa-calendar-alt"></i> {{date('M j, Y',strtotime(@$post->created_at))}}</span>
                                    <h4><a href="{{route('blog.single',$post->slug)}}">{{ucwords($post->title)}}</a></h4>
                                    <div class="author post-category">
                                        <i class="fas fa-tasks-alt"></i>
                                        <div class="post-by">
                                            <span>Post Category</span>
                                            <a href="{{url('/blog/categories/'.@$post->category->slug)}}">{{ucwords(@$post->category->name)}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
              
                </div>
            </div>
        </section>
        <!-- Blog Area end -->
    @endif


@endsection