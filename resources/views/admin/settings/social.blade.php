@extends('layouts.admin')

@section('description', 'Page Title')

@section('content')
    <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-site_title">Edit Social Settings</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Social Settings</li>
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
                                <h5 class="card-header">Edit Social Settings</h5>
                                <div class="card-body">
                                    <form method="POST" action="/admin/settings/social">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="inputInstagram">Facebook</label>
                                            <input id="inputFacebook" type="text" placeholder="Enter Facebook Url" class="form-control @error('facebook_url') is-invalid @enderror" name="facebook_url" value="{{ old('facebook_url', $social_settings->facebook_url) }}" required autocomplete="facebook_url" autofocus>
                                            @error('facebook_url')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputTwitter">Twitter</label>
                                            <input id="inputTwitter" type="text" placeholder="Enter Twitter Url" class="form-control @error('twitter_url') is-invalid @enderror" name="twitter_url" value="{{ old('twitter_url', $social_settings->twitter_url) }}" required autocomplete="twitter_url" autofocus>
                                            @error('twitter_url')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputFacebook">Instagram</label>
                                            <input id="inputInstagram" type="text" placeholder="Enter Instagram Url" class="form-control @error('instagram_url') is-invalid @enderror" name="instagram_url" value="{{ old('instagram_url', $social_settings->instagram_url) }}" required autocomplete="instagram_url" autofocus>
                                            @error('instagram_url')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-6 pl-3">
                                                <p class="text-left">
                                                    <button type="submit" class="btn btn-space btn-primary">EDIT SOCIAL SETTINGS</button>
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
