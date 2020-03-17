@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <!-- Banner -->
    <section class="banner-area banner-area2 offers-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Offers</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    <div class="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 mx-auto">
                    <h1 class="offers-page__title text-center">Sign Up To Receive Offers</h1>

                    <form method="POST" action="/offers">
                        @csrf
                        <div class="form-group">
                            <label for="firstnameinput">First Name</label>
                            <input id="firstnameinput" type="text" placeholder="Frank" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                            @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="lastnameinput">Last Name</label>
                            <input id="lastnameinput" type="text" placeholder="Sinatra" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                            @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="emailinput">Email Address</label>
                            <input id="emailinput" type="email" placeholder="name@example.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phoneinput">Phone Number</label>
                            <input id="phoneinput" type="phone_number" placeholder="7915 215 998" class="form-control @error('email') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn offers-page__btn btn-block">Signup</button>
                        </div>
                    </form>
                    <div class="mt-5">
                        <p class="text-center">In signing up I acknowledge that I am 18 years of age or older and want to recieve email from FoodCircle</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
