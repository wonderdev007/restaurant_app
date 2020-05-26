    <!--========================== Header ============================-->
    <header id="header">
      <div class="container-fluid">

        <div id="logo" class="pull-left">
          <a href="/" class="scrollto">
            {{-- <img src="/{{$settings["general"]->logo_image_url}}" alt=""> --}}
            Flavoroso
          </a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/menu">Menu</a>
            </li>
            <li>
                <a href="/reservations">Reservations</a>
            </li>
            <li>
                <a href="/offers">Offers</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/contact">Contact</a>
            </li>
            {{-- <li>
                <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}</a>
            </li> --}}
            <li>
                <a href="{{$settings["social"]->instagram_url}}" target="new">
                    <i class="fa fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="{{$settings["social"]->twitter_url}}" target="new">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="{{$settings["social"]->facebook_url}}" target="new">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
          </ul>
        </nav>
        <!-- #nav-menu-container -->
      </div>
    </header>
    <!-- #header -->