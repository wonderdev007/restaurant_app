@extends('layouts.app')

@section('title')
{{$settings["general"]->site_title}} Contact
@endsection

@section('content')
    <!-- Banner -->
    <section class="banner-area banner-area2 contact-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Contact</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 mx-auto">
                    <h1 class="title text-center">Get in Touch</h1>
                </div>

                <iframe class="contact-page__iframe mt-2" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=London/23+Change+Alley" height="450" frameborder="0" style="border:0" allowfullscreen="allowfullscreen"></iframe>

                <div class="row mt-5">

                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message'></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name' required="required">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div id="success"></div>
                            <div class="alert-msg"></div>
                            <div class="formMessages">
                                <div class="success"></div>
                                <div class="error"></div>

                                <h5 id="success_message"></h5>
                                <h5 id="error_message"></h5>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit " class="btn contact-btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="media contact-info">
                            <span class="contact-info__icon">
                                <i class="fa fa-home"></i>
                            </span>
                            <div class="media-body">
                                <h3>London, UK</h3>
                                <p>{{$settings["general"]->address_1}}, {{$settings["general"]->postcode}}</p>
                            </div>
                            </div>
                            <div class="media contact-info">
                            <span class="contact-info__icon">
                                <i class="fa fa-phone"></i>
                            </span>
                            <div class="media-body">
                                <h3>
                                    <a href="tel:{{$settings["general"]->phone_number}}">
                                        {{$settings["general"]->phone_number}}
                                    </a>
                                </h3>
                            </div>
                            </div>
                            <div class="media contact-info">
                            <span class="contact-info__icon">
                                <i class="fa fa-envelope-o"></i>
                            </span>
                            <div class="media-body">
                                <h3>
                                    <a href="mailto:flavoroso@gmail.com">flavoroso@gmail.com</a>
                                </h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
