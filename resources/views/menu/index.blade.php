@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <!-- Banner -->
    <section class="banner-area banner-area2 menu-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Our Menu</h3>
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
                <div class="col-md-6 col-sm-12">
                    <div class="menu__single-food">
                        <div class="menu__img-wrapper">
                            <img src="img/menu/starter.jpg" class="img-fluid menu__img" alt="">
                        </div>
                        <div class="menu__food-content">
                            <div class="d-flex justify-content-between">
                                <h5 class="menu__category-title">Starters</h5>
                            </div>
                            <p class="menu__text pt-3">A well-chosen dinner starter can set the tone for an entire meal. Kick off your meal in style with our chic selection of starters. From soups and salads to scallops and smoked salmon, these elegant dishes are sure to impress.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="menu__single-food mt-5 mt-md-0">
                        <div class="menu__img-wrapper">
                            <img src="img/menu/hamburger.jpg" class="img-fluid menu__img" alt="">
                        </div>
                        <div class="menu__food-content">
                            <div class="d-flex justify-content-between">
                                <h5 class="menu__category-title">Burgers</h5>
                            </div>
                            <p class="menu__text pt-3">At FoodCircle, we believe in ingredient excellence. From our smashed-to-order burgers and artisan buns, to our tender chicken sandwiches, you can count on fresh and high-quality food.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="menu__single-food mt-5">
                        <div class="menu__img-wrapper">
                            <img src="img/menu/entree.jpg" class="img-fluid menu__img" alt="">
                        </div>
                        <div class="menu__food-content">
                            <div class="d-flex justify-content-between">
                                <h5 class="menu__category-title">Entrees</h5>
                            </div>
                            <p class="menu__text pt-3">Getting dinner on the table is easy with these main dishes and entrées. Recipes from our kitchens professionals are designed to inspire – whether you are eating at us or cooking at home.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="menu__single-food mt-5">
                        <div class="menu__img-wrapper">
                            <img src="img/menu/sides.jpg" class="img-fluid menu__img" alt="">
                        </div>
                        <div class="menu__food-content">
                            <div class="d-flex justify-content-between">
                                <h5 class="menu__category-title">Sides</h5>
                            </div>
                            <p class="menu__text pt-3">Choose from: tossed garden salad, grilled veggies, cole slaw, sweet potato fries, baked potato, mashed potatoes, onion rings, french fries and even our own house-made mac and cheese.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="menu__single-food mt-5">
                        <div class="menu__img-wrapper">
                            <img src="img/menu/deserts.jpg" class="img-fluid menu__img" alt="">
                        </div>
                        <div class="menu__food-content">
                            <div class="d-flex justify-content-between">
                                <h5 class="menu__category-title">Deserts</h5>
                            </div>
                            <p class="menu__text pt-3">Finish your meal in style with something from the FoodCircle desserts menu; try the new salted caramel arctic slice or the chocolate hazelnut cheesecake, or try an oreo topping, currently very on-trend in desserts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="menu__single-food mt-5">
                        <div class="menu__img-wrapper">
                            <img src="img/menu/drinks.jpg" class="img-fluid menu__img" alt="">
                        </div>
                        <div class="menu__food-content">
                            <div class="d-flex justify-content-between">
                                <h5 class="menu__category-title">Drinks</h5>
                            </div>
                            <p class="menu__text pt-3">Explore our drinks menu of handpicked wines, Rosé, Cocktails, Fizz, soft drinks and more. See the full drinks menu available.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Food Area End -->
@endsection
