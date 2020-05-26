@extends('layouts.app')

@section('title')
{{$settings["general"]->site_title}} Reservations
@endsection

@section('content')
    <!-- Banner -->
    <section class="banner-area banner-area2 reservations-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Reservations</h3>
                    <p>Breakfast, lunch, and dinner reservations of 4 or more guests Monday to Saturday</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    <div class="reservations-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mx-auto">
                    <h1 class="title text-center">Book a Table</h1>

                    <form method="POST" action="/reservations">
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
                            <input id="phoneinput" type="tel" placeholder="Enter phone number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="guestinput">How Many Guests</label>
                            <select class="form-control @error('guests_total') is-invalid @enderror" id="guestinput" name="guests_total">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            @error('guests_total')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="timeinput">What Time?</label>
                            <select class="form-control @error('reservation_time') is-invalid @enderror" id="timeinput" name="reservation_time">
                                <option vlaue="6">6:00 PM</option>
                                <option vlaue="7">7:00 PM</option>
                                <option vlaue="8">8:00 PM</option>
                                <option vlaue="9">9:00 PM</option>
                                <option vlaue="10">10:00 PM</option>
                            </select>
                            @error('reservation_time')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn reservations-page__btn btn-block">Confirm</button>
                        </div>
                    </form>
                    {{-- <div class="mt-5">
                        <p class="text-center">Please Note: This is not a reservation. You will be added to the current wait list. You may have a short wait once you arrive while we prepare your table.</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
