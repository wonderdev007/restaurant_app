    <footer class="footer" role="contentinfo">
      <div class="container-fluid">
        <div class="row mb-2 mt-4">
          <div class="col-lg-3 col-md-6 mb-5">
            <div>
              <h3 class="footer__title">Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block">Address:</span>
                  <span class="footer__db-contact">{{$settings["general"]->address_1}}, {{$settings["general"]->city}}, {{$settings["general"]->postcode}}</span></li>
                <li class="d-block"><span class="d-block">Phone:</span><span class="footer__db-contact">{{$settings["general"]->phone_number}}</span></li>
                <li class="d-block"><span class="d-block">Email:</span><span class="footer__db-contact">info@yourdomain.com</span></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5">
            <div class="mb-5">
              <h3 class="footer__title">Opening Hours</h3>
              <p><strong class="d-block font-weight-normal">Monday-Sunday</strong><span class="footer__open-hours">5AM - 10PM</span></p>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5">
            <h3 class="footer__title">Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a class="footer__link" href="#">About</a></li>
              <li><a class="footer__link" href="#">Terms of Use</a></li>
              <li><a class="footer__link" href="#">Disclaimers</a></li>
              <li><a class="footer__link" href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 mb-5">
            <h3 class="footer__title">About Us</h3>
            <p class="mb-5">{{$settings["seo"]->description}}</p>
            <ul class="list-unstyled footer__social-links d-flex">
              <li><a href="{{$settings["social"]->twitter_url}}" class="footer__link p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="{{$settings["social"]->facebook_url}}" class="footer__link p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="{{$settings["social"]->instagram_url}}" class="footer__link p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Laravel App built by <a class="footer__link" href="https://alexticovschi.netlify.app/" target="_blank" >Alex Ticovschi</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->