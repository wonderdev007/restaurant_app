@extends('layouts.admin')

@section('site_title', 'Page Title')

@section('content')
    <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-site_title">Edit General Settings</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit General Settings</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->


                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit General Settings</h5>
                                <div class="card-body">
                                    <form method="POST" action="/admin/settings/general">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="inputBusinessName">Business Name</label>
                                            <input id="inputBusinessName" type="text" placeholder="Enter site title" class="form-control @error('site_title') is-invalid @enderror" name="site_title" value="{{ old('site_title', $general_settings->site_title) }}" required autocomplete="site_title" autofocus>
                                            @error('site_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputLogoImageUrl">Logo Image Url</label>
                                            <input id="inputLogoImageUrl" type="text" placeholder="Enter logo image url" class="form-control @error('logo_image_url') is-invalid @enderror" name="logo_image_url" value="{{ old('logo_image_url', $general_settings->logo_image_url) }}" required autocomplete="logo_image_url" autofocus>
                                            @error('logo_image_url')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress1">Address 1</label>
                                            <input id="inputAddress1" type="text" placeholder="Enter address 1" class="form-control @error('address_1') is-invalid @enderror" name="address_1" value="{{ old('address_1', $general_settings->address_1) }}" required autocomplete="address_1" autofocus>
                                            @error('address_1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress2">Address 2</label>
                                            <input id="inputAddress2" type="text" placeholder="Enter address 2" class="form-control @error('address_2') is-invalid @enderror" name="address_2" value="{{ old('address_2', $general_settings->address_2) }}" autocomplete="address_2" autofocus>
                                            @error('address_2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputCity">City</label>
                                            <input id="inputCity" type="text" placeholder="Enter city name" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city', $general_settings->city) }}" required autocomplete="city" autofocus>
                                            @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPostcode">Postcode</label>
                                            <input id="inputPostcode" type="text" placeholder="Enter postcode" class="form-control @error('postcode') is-invalid @enderror" name="postcode" value="{{ old('postcode', $general_settings->postcode) }}" required autocomplete="postcode" autofocus>
                                            @error('postcode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPhoneNumber">Phone Number</label>
                                            <input id="inputPhoneNumber" type="text" placeholder="Enter phone number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $general_settings->phone_number) }}" required autocomplete="phone_number" autofocus>
                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-6 pl-3">
                                                <p class="text-left">
                                                    <button type="submit" class="btn btn-space btn-primary">EDIT SETTINGS</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
@endsection
