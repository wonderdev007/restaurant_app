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
                                    <h3>Welcome to</h3>
                                    <h4>Flavoroso</h4>
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
                                    <h3>Welcome to</h3>
                                    <h4>Flavoroso</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- slider_area_end -->

    <div class="services">
          <div class="container">
             
            <div class="row">
              <div class="col-md-6 col-lg-3">
                <div class="services__feature-icon d-block text-center">
                  <div class="services__icon">
                    <span class="flaticon-soup"></span>
                  </div>
                  <div>
                    <h3>Quality Cuisine</h3>
                    <p class="services__text">Imaginitive, stylish, striking starters and entrées that are packed full of flavour.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="services__feature-icon d-block text-center">
                  <div class="services__icon">
                    <span class="flaticon-vegetables"></span>
                  </div>
                  <div>
                    <h3>Fresh Food</h3>
                    <p class="services__text">A carefully selected and locally-focused supplier base means you can be sure the produce we offer is the very best and freshest available</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="services__feature-icon d-block text-center">
                  <div class="services__icon">
                    <span class="flaticon-pancake"></span>
                  </div>
                  <div>
                    <h3>Friendly Staff</h3>
                    <p class="services__text">In the restaurant industry, good customer service means being friendly, available, attentive and quick to take care of customers' needs.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="services__feature-icon d-block text-center">
                  <div class="services__icon">
                    <span class="flaticon-tray"></span>
                  </div>
                  <div>
                    <h3>Easy Reservation</h3>
                    <p class="services__text">Simple and easy form for reservations within seconds.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- .section -->

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
                    <h2 class="menu-slider__title text-center">Find Your Best Food</h2>
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
