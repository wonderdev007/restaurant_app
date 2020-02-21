@extends('layouts.landing')

@section('title', 'Page Title')

@section('content')
    <section class="information">
        <div class="information__restaurant-image">
            <img class="information__img-left" src="img/top-down2.jpg">
        </div>
        <div class="information__info">
            <h2 class="information__title">We Started In 2015</h2>
            <div class="information__paragraphs">
                <p>FoodCircle Restaurant & Café Bar opened in 2015 and has established itself as on of the leading restaurants in London.</p>
                <p>All our food is fresh, with a focus on well sourced ingredients, providing simple but quality, seasonal food. Seven is sophisticated casual dining, offering daily specials, handcrafted cocktails and a diverse range of gins.</p>
                <p>Set in a natural, vibrant environment, Seven is open all day for you to relax, eat and meet. Come to a place where you belong.</p>
                <p>We also have two fabulous private dining rooms, each with a capacity of 16 people. There’s plenty of free parking right outside the door.</p>
            </div>
            <a href="#" class="information__about-link">
                <span>Learn more</span><i class="fa fa-chevron-right information__fa-chevron-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>
    <section class="food-preview">
        <h2 class="food-preview__title">All our creations come with unlimited filter coffee!</h2>
        <div class="food-preview__button-rounded">View Our Menu</div>
        <div class="container">
            <div class="food-preview__left-btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div class="food-preview__right-btn">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="food-preview__food-slider">
                <div class="food-preview__sliding-system">
                    <div class="food-preview__slide">
                        <div class="food-preview__background"></div>
                        <div class="food-preview__content">
                            <div class="food-preview__food-title">
                                Starters
                            </div>
                            <p class="food-preview__food-description">
                                A well-chosen dinner starter can set the tone for an entire meal.
                                Kick off your meal in style with our chic selection of starters. From soups and salads to scallops and smoked salmon, these elegant dishes are sure to impress.
                            </p>
                            <div class="food-preview__food-image">
                                <img src="img/menu/starter.png">
                            </div>
                        </div>
                    </div>
                    <div class="food-preview__slide">
                        <div class="food-preview__background"></div>
                        <div class="food-preview__content">
                            <div class="food-preview__food-title">
                                Burgers
                            </div>
                            <p class="food-preview__food-description">
                                At FoodCircle, we believe in ingredient excellence. From our smashed-to-order burgers and artisan buns, to our tender chicken sandwiches, you can count on fresh and high-quality food.
                            </p>
                            <div class="food-preview__food-image">
                                <img src="img/menu/burger.png">
                            </div>
                        </div>
                    </div>
                    <div class="food-preview__slide">
                        <div class="food-preview__background"></div>
                        <div class="food-preview__content">
                            <div class="food-preview__food-title">
                                Entrees
                            </div>
                            <p class="food-preview__food-description">
                                Getting dinner on the table is easy with these main dishes and entrées. Recipes from our kitchens professionals are designed to inspire – whether you are eating at us or cooking at home.
                            </p>
                            <div class="food-preview__food-image">
                                <img src="img/menu/entree.png">
                            </div>
                        </div>

                    </div>
                    <div class="food-preview__slide">
                        <div class="food-preview__background"></div>
                        <div class="food-preview__content">
                            <div class="food-preview__food-title">
                                Sides
                            </div>
                            <p class="food-preview__food-description">
                                Choose from: tossed garden salad, grilled veggies, cole slaw, sweet potato fries, baked potato, mashed potatoes, onion rings, french fries and even our own house-made mac and cheese.
                            </p>
                            <div class="food-preview__food-image">
                                <img src="img/menu/salad.png">
                            </div>
                        </div>

                    </div>
                    <div class="food-preview__slide">
                        <div class="food-preview__background"></div>
                        <div class="food-preview__content">
                            <div class="food-preview__food-title">
                                Deserts
                            </div>
                            <p class="food-preview__food-description">
                                Finish your meal in style with something from the FoodCircle desserts menu; try the new salted caramel arctic slice or the chocolate hazelnut cheesecake, or try an oreo topping, currently very on-trend in desserts
                            </p>
                            <div class="food-preview__food-image">
                                <img src="img/menu/desert.png">
                            </div>
                        </div>
                    </div>
                    <div class="food-preview__slide">
                        <div class="food-preview__background"></div>
                        <div class="food-preview__content">
                            <div class="food-preview__food-title">
                                Beers
                            </div>
                            <p class="food-preview__food-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                                architecto
                                officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                                repellendus natus nihil?
                            </p>
                            <div class="food-preview__food-image">
                                <img
                                src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png">
                            </div>
                        </div>
                    </div>
                    <div class="food-preview__slide">
                        <div class="food-preview__background"></div>
                        <div class="food-preview__content">
                            <div class="food-preview__food-title">
                                Drinks
                            </div>
                            <p class="food-preview__food-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                                architecto
                                officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                                repellendus natus nihil?
                            </p>
                            <div class="food-preview__food-image">
                                <img
                                src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
