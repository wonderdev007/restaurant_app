@extends('layouts.app')

@section('title')
    {{$settings["general"]->site_title}} {{$food_category}}
@endsection

@section('content')
    <!-- Banner -->
    <section class="banner-area banner-area2 menu-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Menu</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->
    <div class="single-menu-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-box single-menu">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <h1 class="single-menu__title text-center">{{$food_category}}</h1>
                            </div>

                            @foreach($food_items as $key => $food_item)
                                <div class="col-md-4">
                                    <div class="single-menu__wrapper">
                                        <div class="single-menu__item">
                                            <h4 class="single-menu__name">{{$food_item->title}}</h4>
                                            <span class="single-menu__price">&pound;{{$food_item->price}}</span>
                                        </div>
                                        <div class="single-menu__description">
                                            <p>{{$food_item->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
