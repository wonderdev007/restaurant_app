@extends('layouts.app')

@section('title')
 About {{$settings["general"]->site_title}}
@endsection

@section('content')
    <!-- Banner -->
    <section class="banner-area banner-area2 about-bg text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>About</h3>
                    <p>The Perfect Location in the heart of the City</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <div class="about-page">
    <section class="about">
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade">
            <div class="col-md-7 text-center heading-wrap">
              <h2 class="title">The Restaurant</h2>
              <p class="about__text">Flavoroso is an all-day dining space and bar in London with a strong ‘natural’ wine focus, serving contemporary European & Asion dishes, inspired by the ‘bistronomy’ movement and our favourite eateries in Paris, Copenhagen, Barcelona, Stockholm & Berlin.</p>
            </div>
          </div>
        <div class="row align-items-center mb-5">
          <div class="col-lg-4">
            <img src="images/dishes_1.jpg" alt="" class="img-fluid about__img_1" data-aos="fade">
          </div>
          <div class="col-lg-4">
            <img src="images/about_1.jpg" alt="" class="img-fluid about__img_1" data-aos="fade">
            <img src="images/about_2.jpg" alt="" class="img-fluid about__img_1" data-aos="fade">
          </div>
          <div class="col-lg-4">
            <img src="images/dishes_2.jpg" alt="" class="img-fluid about__img_1" data-aos="fade">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 ml-auto">
            <p class="about__text">It is a restaurant for all occasions, popular for breakfast meetings, weekend family lunches, pre-dinner cocktails and exceptional lunches and dinners. We have a long-standing reputation for corporate entertaining and client events.</p>
          </div>
          <div class="col-md-6 ml-auto">
              <p class="about-page__text">We are also a popular venue for weddings, the stunning location in the portico of Borough Market’s famous Floral Hall offers views of the bustling market below and the dome of St Paul’s Cathedral in the distance, making it a breathtaking setting for a memorable occasion.</p>
          </div>
        </div>
      </div>
    </section>

    <!--================ Why-Us Section Start =================-->
    <section class="why-us">
      <div class="container">
            <div class="row justify-content-center mb-5" data-aos="fade-up">
              <div class="col-md-8 text-center">
                <h2 class="title mb-3">Why Choose Us</h2>
                <p class="lead"> Are you looking for delicious food, a relaxed environment and good value? {{$settings["general"]->site_title}} is the perfect place for your next meal, either dine in or take away.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6"  data-aos="fade-up" data-aos-delay="200">
                <img src="images/why-us.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="accordion" id="accordion">
                  <div class="accordion-item">
                    <h3 class="mb-0">
                      <a class="why-us__service btn-block p-3" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">Quality Cuisine <span class="icon"></span></a>
                    </h3>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="p-3">
                        <p>Imaginitive, stylish, striking starters and entrées that are packed full of flavour. All our products are handmade and prepared for your convenience. We only use carefully selected suppliers and have complete confidence in the origin and high standard of all our food.</p>
                      </div>
                    </div>
                  </div> <!-- .accordion-item -->
                  
                  <div class="accordion-item">
                    <h3 class="mb-0">
                      <a class="why-us__service btn-block p-3" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">Fresh Food <span class="icon"></span></a>
                    </h3>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="p-3">
                        <p>A carefully selected and locally-focused supplier base means you can be sure the produce we offer is the very best and freshest available</p>
                      </div>
                    </div>
                  </div> <!-- .accordion-item -->

                  <div class="accordion-item">
                    <h3 class="mb-0">
                      <a class="why-us__service btn-block p-3" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Friendly Staff  <span class="icon"></span></a>
                    </h3>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                      <div class="p-3">
                        <p>Here at {{$settings["general"]->site_title}} in London we pride ourselves on fantastic food and a great selection of wines, spirits and other drinks available for you to pick and choose from. We hope that you enjoy a beautiful meal in a relaxed atmosphere with your guests and our friendly team. </p>
                      </div>
                    </div>
                  </div> <!-- .accordion-item -->

                </div>
              </div>
            </div>
        
      </div>
    </section> 
    <!--================ Why-Us Section End =================-->
    </div>

@endsection
