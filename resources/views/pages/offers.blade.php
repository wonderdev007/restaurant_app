@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 mx-auto">
                    <h1 class="offers-page__title text-center">Sign Up To Receive Offers</h1>

                    <form>
                        <div class="form-group">
                            <label for="firstnameinput">First Name</label>
                            <input type="text" class="form-control" id="firstnameinput" name="fname" placeholder="Frank">
                        </div>
                        <div class="form-group">
                            <label for="lastnameinput">Last Name</label>
                            <input type="text" class="form-control" id="lastnameinput" name="lname" placeholder="Sinatra">
                        </div>
                        <div class="form-group">
                            <label for="emailinput">Email Address</label>
                            <input type="email" class="form-control" id="emailinput" name="email" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phoneinput">Phone Number</label>
                            <input type="text" class="form-control" id="phoneinput" name="phone" placeholder="7915 215 998">
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn button btn-block">Signup</button>
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
