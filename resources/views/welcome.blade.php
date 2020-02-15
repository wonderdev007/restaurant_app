<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <section id="welcome">
            <div class="welcome-menu">
            <div class="logo">
                <img src="img/logo.png">
            </div>
            <div class="menu">
                <div class="menu-title">
                    Menu
                </div>
                <ul class="links">
                    <li>
                        <a href="#">Menu</a>
                    </li>
                    <li>
                        <a href="#">Waitlist</a>
                    </li>
                    <li>
                        <a href="#">Offers</a>
                    </li>
                    <li>
                        <a href="#">Giftcards</a>
                    </li>
                </ul>
            </div>
            <div class="social-icons">
                <a href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <div class="location">
                <div class="address">
                23 Change Alley,<br>
               London,EC9V 9AY
                </div>
                <div class="phone-number">
                <a href="tel:020 7946 08002">020 7946 0800</a>
                </div>
            </div>
            </div>
            <div class="welcome-jumbo">
            <div class="status">NEW</div>
            <h1>Beef Burger</h1>
            <img src="img/hamburger-and-fries.png" class="burger-fries">
            </div>
        </section>
        <section id="information">
            <div class="restaurant-image">
            <img src="img/top-down.jpg">
            </div>
            <div class="info">
            <h2>We Started From The Bottom In 2015</h2>
            <div class="paragraphs">
                <p>FoodCircle Restaurant & Café Bar opened in 2015 and has established itself as on of the leading restaurants in London.</p>
                <p>All our food is fresh, with a focus on well sourced ingredients, providing simple but quality, seasonal food. Seven is sophisticated casual dining, offering daily specials, handcrafted cocktails and a diverse range of gins.</p>
                <p>Set in a natural, vibrant environment, Seven is open all day for you to relax, eat and meet. Come to a place where you belong.</p>
                <p>We also have two fabulous private dining rooms, each with a capacity of 16 people. There’s plenty of free parking right outside the door.</p>
            </div>
            <a href="#" class="about-link">
                <span>Learn more about us</span>
                <div class="circle-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
            </a>
            </div>
        </section>
        <section id="food-preview">
            <h2>All our creations come with unlimited filter coffee!</h2>
            <div class="button-rounded">View Our Menu</div>
            <div class="container">
            <div class="left-btn">
                <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </div>
            <div class="right-btn">
                <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </div>
            <div class="food-slider">
                <div class="sliding-system">
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                    <div class="food-title">
                        Starters
                    </div>
                    <p class="food-description">
                        A well-chosen dinner starter can set the tone for an entire meal.
                        Kick off your meal in style with our chic selection of starters. From soups and salads to scallops and smoked salmon, these elegant dishes are sure to impress.
                    </p>
                    <div class="food-image">
                        <img src="img/menu/starter.png">
                    </div>
                    </div>

                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                    <div class="food-title">
                        Burgers
                    </div>
                    <p class="food-description">
                        At FoodCircle, we believe in ingredient excellence. From our smashed-to-order burgers and artisan buns, to our tender chicken sandwiches, you can count on fresh and high-quality food.
                    </p>
                    <div class="food-image">
                        <img src="img/menu/burger.png">
                    </div>
                    </div>

                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                    <div class="food-title">
                        Entrees
                    </div>
                    <p class="food-description">
                        Getting dinner on the table is easy with these main dishes and entrées. Recipes from our kitchens professionals are designed to inspire – whether you are eating at us or cooking at home.
                    </p>
                    <div class="food-image">
                        <img src="https://www.pngkey.com/png/full/342-3422633_pork-entrees-steak-pork-png.png">
                    </div>
                    </div>

                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                    <div class="food-title">
                        Sides
                    </div>
                    <p class="food-description">
                        Choose from: tossed garden salad, grilled veggies, cole slaw, sweet potato fries, baked potato, mashed potatoes, onion rings, french fries and even our own house-made mac and cheese.
                    </p>
                    <div class="food-image">
                        <img src="img/menu/salad.png">
                    </div>
                    </div>

                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                    <div class="food-title">
                        Deserts
                    </div>
                    <p class="food-description">
                        Finish your meal in style with something from the FoodCircle desserts menu; try the new salted caramel arctic slice or the chocolate hazelnut cheesecake, or try an oreo topping, currently very on-trend in desserts
                    </p>
                    <div class="food-image">
                        <img src="img/menu/desert.png">
                    </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                    <div class="food-title">
                        Beers
                    </div>
                    <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                        architecto
                        officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                        repellendus natus nihil?
                    </p>
                    <div class="food-image">
                        <img
                        src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png">
                    </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="background"></div>
                    <div class="content">
                    <div class="food-title">
                        Drinks
                    </div>
                    <p class="food-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi omnis iste ab deleniti cupiditate
                        architecto
                        officia aspernatur nulla iusto delectus doloremque possimus recusandae, reiciendis aliquam vel voluptas
                        repellendus natus nihil?
                    </p>
                    <div class="food-image">
                        <img
                        src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image-420x190.png">
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

        </section>
    </body>
</html>
