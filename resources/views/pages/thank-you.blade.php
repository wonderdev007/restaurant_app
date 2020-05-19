@extends('layouts.app')

@section('title')
    {{$settings["general"]->site_title}} Thank You
@endsection

@section('content')
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
