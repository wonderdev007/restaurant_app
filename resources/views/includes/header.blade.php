        <header>
            <div class="header-area ">
                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid p-0">
                        <div class="row align-items-center no-gutters">
                            <div class="col-xl-5 col-lg-5">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
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
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo-img">
                                    <a href="/">
                                        <img src="{{$settings["general"]->logo_image_url}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5 d-none d-lg-block">
                                <div class="call">
                                    <div class="social_links">
                                        <ul>
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
                                    </div>
                                    <div class="call_btn d-none d-xl-block">
                                        <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
