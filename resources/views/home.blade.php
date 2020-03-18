@extends('layouts.landing')

@section('title')
{{$settings["general"]->site_title}} Restaurant
@endsection

@section('content')
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
                            <img class="food-preview__food-image" src="img/menu/entree.jpg">
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
