
@extends('frontend.layouts.master')
@section('title') Contact Us @endsection
@section('css')
    <style>

</style>
@endsection
@section('content')

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url({{asset('assets/frontend/images/backgrounds/page-header-bg.jpg')}});">
            </div>
            <div class="page-header__shape-one float-bob-x-2"></div>
            <div class="page-header__shape-2 float-bob-y">
                <img src="{{asset('assets/frontend/images/shapes/page-header-shape-2.png')}}" alt="">
            </div>
            <div class="page-header__shape-3 float-bob-x">
                <img src="{{asset('assets/frontend/images/shapes/page-header-shape-3.png')}}" alt="">
            </div>
            <div class="page-header__shape-4 float-bob-y">
                <img src="{{asset('assets/frontend/images/shapes/page-header-shape-4.png')}}" alt="">
            </div>
            <div class="container">
                <div class="page-header__inner text-left">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        @if(@$setting_data->google_map)
        <!--Google Map Start-->
        <section class="google-map">
            <iframe
                src="{{@$setting_data->google_map}}"
                class="google-map__one" allowfullscreen></iframe>

        </section>
        <!--Google Map End-->
        @endif

        <!--Address Start-->
        <section class="address">
            <div class="container">
                <div class="row">
                    <!--Address Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="address__single">
                            <div class="address__icon">
                                <span class="icon-location"></span>
                            </div>
                            <div class="address__content">
                                <h4 class="address__title">Address</h4>
                                <div class="address__phone-email">
                                    <p>@if(!empty(@$setting_data->address)) {{@$setting_data->address}} @else Kathmandu, Nepal @endif</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Address Single End-->
                    <!--Address Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="address__single">
                            <div class="address__icon">
                                <span class="icon-phone-income"></span>
                            </div>
                            <div class="address__content">
                                <h4 class="address__title">Phone</h4>
                                <div class="address__phone-email">
                                    <p>
                                        <a href="tel:@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif">@if(!empty(@$setting_data->phone)) {{@$setting_data->phone}} @else +9771238798 @endif</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Address Single End-->
                    <!--Address Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="address__single">
                            <div class="address__icon">
                                <span class="icon-email"></span>
                            </div>
                            <div class="address__content">
                                <h4 class="address__title">Email Address</h4>
                                <div class="address__phone-email">
                                    <p>
                                        <a href="mailto:@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif">@if(!empty(@$setting_data->email)) {{@$setting_data->email}} @else example@gmail.com @endif</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Address Single End-->
                </div>
            </div>
        </section>
        <!--Address End-->

        <!--Contact Form Start-->
        <section class="contact-form-box">
            <div class="container">
                <div class="contact-form__title-box">
                    <span>Meesage now !</span>
                    <h3>Feel free to ask questions or share <br> your message with us.</h3>
                </div>
                <form action="{{route('contact.store')}}" id="contactForm" class="contact-form contact-form-validated"
                    novalidate="novalidate">
                    @csrf

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-form__input-box">
                                <p>Name</p>
                                <input type="text"  name="name" placeholder="Michael C. Coleman" required data-error="Please enter your name">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-form__input-box">
                                <p>Email</p>
                                <input type="email" placeholder="support@gmail.com" name="email">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-form__input-box">
                                <p>Phone Number</p>
                                <input type="text" placeholder="+000 (123) 456 88" name="phone">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-form__input-box">
                                <p>Select Requirments</p>
                                <select name="subject" id="subject" class="form-select">
                                    <option value="Trade Inquiry" >Trade Inquiry</option>
                                    <option value="Ask a question" selected>Ask a question</option>
                                    <option value="Share Feedback">Share Feedback</option>
                                    <option value="Career Enquiry">Career Enquiry</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-form__input-box text-message-box">
                                <textarea name="message" placeholder="Type your message"></textarea>
                            </div>
                            <div class="contact-form__btn-box">
                                <button type="submit" class="thm-btn contact-form__btn">Send A Message</button>
                            </div>
                            <div id="msgSubmit" class="hidden"></div>

                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!--Contact Form End-->


        <!-- Contact Us Page Area start -->
        <section class="contact-us-page-area py-130">
            <div class="container">
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-7">
                        <div class="contact-content rmb-65 wow fadeInRight delay-0-2s">
                            <div class="section-title mb-25">
                                <span class="sub-title style-two mb-15">Contact Us</span>
                                <h2>Send Your Message</h2>
                            </div>
                            <form id="contactForm" class="contactForm z-1 rel"  action="{{route('contact.store')}}" name="contactForm" method="post">
                            @csrf
                                <!-- @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <strong class="sent-success">{{ $message }}</strong>
                                    </div>
                                @endif
                                @if ($message = Session::get('error'))
                                    <div class="alert alert-danger alert-block">
                                        <strong class="error-sent">{{ $message }}</strong>
                                    </div>
                                @endif     -->
                            <div class="row pt-15">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Michael C. Coleman" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="support@gmail.com" required data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="+000 (123) 456 88" required data-error="Please enter your phone number">
                                            <div class="help-block with-errors"></div>
                                        
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <div class="form-group">
                                           <label for="subject">Select Requirments</label>
                                           <select name="subject" id="subject">
                                                <option value="Trade Inquiry" >Trade Inquiry</option>
                                                <option value="Ask a question" selected>Ask a question</option>
                                                <option value="Share Feedback">Share Feedback</option>
                                                <option value="Career Enquiry">Career Enquiry</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">Write Message</label>
                                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Message" required data-error="Please enter your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group pt-5 mb-0">
                                            <button type="submit" class="theme-btn w-100">Send Message <i class="fas fa-angle-double-right"></i></button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>
        <!-- Contact Us Page Area end -->
        
   

        
  
@endsection
@section('js')
  <!-- For Contact Form -->
  
@endsection
