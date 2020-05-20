@extends('layouts.app')

@section('title')
{{$settings["general"]->site_title}} Menu
@endsection

@section('content')
    <!-- Banner -->
    <section class="banner-area banner-area2 menu-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Our Menus</h3>
                    <p>Re-defining the art of grilling.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Food Area starts -->
    <section class="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="menu__title mb-5">We serve delicious food</h3>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-6 col-sm-12">
                        <div class="menu__single-food">
                            <a href="/menu/{{$category->title}}">
                                <div class="menu__img-wrapper">
                                    <img src="{{$category->image_url}}" class="img-fluid menu__img" alt="">
                                </div>
                            </a>
                            <div class="menu__food-content">
                                <div class="d-flex justify-content-between">
                                    <h3 class="menu__category-title">{{ucfirst($category->title)}}</h3>
                                </div>
                                <p class="menu__text pt-3">{{$category->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Food Area End -->
@endsection
