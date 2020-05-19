@extends('layouts.app')

@section('title')
{{$settings["general"]->site_title}} Thank You
@endsection
@section('content')
{{-- <!-- Banner -->
    <section class="banner-area banner-area2 thankyou-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>About</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End --> --}}
    <div class="thankyou-page">
        <div class="content-box">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 mx-auto">
                    <h1 class="thankyou-page__title text-center">Thank you! You're in.</h1>
                    <p class="thankyou-page__text text-center">We will get back to you.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
