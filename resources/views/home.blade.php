@extends('layouts.app')

@section('title')
{{$settings["general"]->site_title}} Restaurant
@endsection

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
            <div class="slider_active owl-carousel">
                <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-9 col-md-9 col-md-12">
                                <div class="slider_text text-center">
                                    <div class="deal_text">
                                        <span>NEW</span>
                                    </div>
                                    <h3>Find Your Favorite</h3>
                                    <h4>Food</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-9 col-md-9 col-md-12">
                                <div class="slider_text text-center">
                                    <div class="deal_text">
                                        <span>NEW</span>
                                    </div>
                                    <h3>Find Your Favorite</h3>
                                    <h4>Food</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- slider_area_end -->

    <section class="about-home">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <h2 class="about-home__title">Who We Are</h2>

                    <p>Grassfed Grill is an all-day dining space and bar in London with a strong ‘natural’ wine focus, serving contemporary European dishes, inspired by the ‘bistronomy’ movement and our favourite eateries in Paris, Copenhagen, Barcelona, Stockholm & Berlin.</p>

                    <button class="btn about-home__btn mt-5">Discover our Story</button>
                </div>
            </div>
        </div>
    </section>

    <div class="menu-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="text-center">OUR MENU</h2>
                    <div class="slider">
                        <div class="food-preview__slide">
                            <div class="food-preview__text">
                                <h3 class="food-preview__food-title">Starters</h3>
                            </div>
                            <img class="food-preview__food-image" src="img/menu/starter.jpg">
                        </div>

                        <div class="food-preview__slide">
                            <div class="food-preview__text">
                                <h3 class="food-preview__food-title">Burgers</h3>
                            </div>
                            <img class="food-preview__food-image" src="img/menu/hamburger.jpg">
                        </div>

                        <div class="food-preview__slide">
                            <div class="food-preview__text">
                                <h3 class="food-preview__food-title">Entrees</h3>
                            </div>
                            <img class="food-preview__food-image" src="img/menu/entrees.jpg">
                        </div>

                        <div class="food-preview__slide">
                            <div class="food-preview__text">
                                <h3 class="food-preview__food-title">Sides</h3>
                            </div>
                            <img class="food-preview__food-image" src="img/menu/sides.jpg">
                        </div>

                        <div class="food-preview__slide">
                            <div class="food-preview__text">
                                <h3 class="food-preview__food-title">Deserts</h3>
                            </div>
                            <img class="food-preview__food-image" src="img/menu/deserts.jpg">
                        </div>

                        <div class="food-preview__slide">
                            <div class="food-preview__text">
                                <h3 class="food-preview__food-title">Drinks</h3>
                            </div>
                            <img class="food-preview__food-image" src="img/menu/drinks.jpg">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
