@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="waitlist-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h1 class="waitlist-page__title text-center">Reserve a Table</h1>

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
                            <label for="guestinput">How Many Guests</label>
                            <select class="form-control" id="guestinput" name="guests">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="timeinput">What Time?</label>
                            <select class="form-control" id="timeinput" name="time">
                                <option vlaue="6">6:00 PM</option>
                                <option vlaue="7">7:00 PM</option>
                                <option vlaue="8">8:00 PM</option>
                                <option vlaue="9">9:00 PM</option>
                                <option vlaue="10">10:00 PM</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn button btn-block">Confirm</button>
                        </div>
                    </form>
                    <div class="mt-5">
                        <p class="text-center">Please Note: This is not a reservation. You will be added to the current wait list. You may have a short wait once you arrive while we prepare your table.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
