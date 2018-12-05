<!DOCTYPE html>
<html lang="en">
    {{-- Head Section --}}
@include('partials._head')
    {{-- End Head Section --}}

<body>
    <div class="wrapper">
        <!-- Start Header Section -->
        <header class="header-1">
            <div class="hdr-topbar">
                <div class="layer-stretch">
                    <div class="row pt-1 pb-1">
                        <div class="col-md-5">
                            <ul class="social-list social-list-sm">
                                <li>
                                    <a href="#" id="sample-facebook-1"><i class="fab fa-facebook"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-facebook-1">Facebook</span>
                                </li>

                                <li>
                                    <a href="#" id="sample-instagram-1"><i class="fab fa-instagram"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-instagram-1">Instagram
                                    </span>
                                </li>
                                <li>
                                    <a href="#" id="sample-youtube-1"><i class="fab fa-youtube"></i></a>
                                    <span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="sample-youtube-1">Youtube</span>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-7 hdr-link text-right">
                            @guest
                            <a class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-white button-sm m-1" href="{{route('login')}}"><i class="icon-login mr-2"></i>Login</a>
                            {{-- <a href="#" class="btn btn-primary m-3" data-toggle="modal" data-target="#signInPopup">Sign In Popup</a> --}}
                            <div class="separator"></div>
                                @if (Route::has('register'))
                                    <a class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-white button-sm m-1" href="{{route('register')}}"><i class="icon-user-follow mr-2"></i>Registro</a>
                                @endif
                                <div class="separator"></div>
                                @else
                                <a class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect button button-white button-sm m-1" id="my-account"><i class="icon-user-follow mr-2"></i>My Account</a>
                                @endguest
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="my-account">

                                <li class="mdl-menu__item">Mi Perfil</li>
                                <li class="mdl-menu__item">Change Password</li>
                                @guest

                                @else
                                @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('superAdmin'))
                            <li class="mdl-menu__item"> <a href="{{Route('consultas')}}">Back Office</a></li>
                                @endif

                                @endguest
                                <li class="mdl-menu__item">
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                {{-- @endguest --}}

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layer-stretch hdr">
                <div class="tbl">
                    <div class="tbl-row">
                        <!-- Start Header Logo Section -->
                        <div class="tbl-cell hdr-logo">
                            <a href="index.html"><img src="images/logo-black.png" alt=""></a>
                        </div><!-- End Header Logo Section -->
                        <div class="tbl-cell hdr-menu">
                            <!-- Start Menu Section -->
                            <ul class="menu">
                                <li class="menu-megamenu-li">
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="{{url('/')}}">Home</a>
                                </li>
                                <li class="menu-megamenu-li">
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="{{route('productosShow')}}">Viandas</a>
                                </li>
                                {{-- <li>
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect">Feature <i class="fa fa-chevron-down"></i></a>
                                    <ul class="menu-dropdown">
                                        <li>
                                            <a>Property</a>
                                            <ul class="menu-dropdown">
                                                <li><a href="property-1.html">Property Listing 1</a></li>
                                                <li><a href="property-2.html">Property Listing 2</a></li>
                                                <li><a href="property-3.html">Property Listing 3</a></li>
                                                <li><a href="property-page.html">Property Page</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>Page Header</a>
                                            <ul class="menu-dropdown">
                                                <li><a href="page-header-1.html">Page Header 1</a></li>
                                                <li><a href="page-header-2.html">Page Header 2</a></li>
                                                <li><a href="page-header-3.html">Page Header 3</a></li>
                                                <li><a href="page-header-4.html">Page Header 4</a></li>
                                                <li><a href="page-header-5.html">Page Header 5</a></li>
                                                <li><a href="page-header-6.html">Page Header 6</a></li>
                                                <li><a href="page-header-7.html">Page Header 7</a></li>
                                                <li><a href="page-header-8.html">Page Header 8</a></li>
                                                <li><a href="page-header-9.html">Page Header 9</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>Page Footer</a>
                                            <ul class="menu-dropdown menu-dropdown-left">
                                                <li><a href="page-footer-1.html">Page Footer 1</a></li>
                                                <li><a href="page-footer-2.html">Page Footer 2</a></li>
                                                <li><a href="page-footer-3.html">Page Footer 3</a></li>
                                                <li><a href="page-footer-4.html">Page Footer 4</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>Side Panel</a>
                                            <ul class="menu-dropdown">
                                                <li><a href="side-panel-1.html">Light Side Panel</a></li>
                                                <li><a href="side-panel-2.html">Dark Side Panel</a></li>
                                                <li><a href="side-panel-3.html">Colored Side Panel</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="popup.html">Popups</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html">404 Page Not Found</a></li>
                                        <li><a href="503.html">503 Temporarily Unavailable</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li class="menu-megamenu-li">
                                    <a id="menu-pages" class="mdl-button mdl-js-button mdl-js-ripple-effect">Viandas <i class="fa fa-chevron-down"></i></a>
                                    <ul class="menu-megamenu">
                                        <li class="row">
                                            <div class="col-lg-2">
                                                <div class="megamenu-ttl">Viandas Comunes</div>
                                                <ul>
                                                    <li><a href="">Vianda 1</a></li>
                                                    <li><a href="">Vianda 2</a></li>
                                                    <li><a href="">Vianda 3</a></li>
                                                    <li><a href="">Vianda 4</a></li>
                                                    <li><a href="">Vianda 5</a></li>
                                                    <li><a href="">Vianda 6</a></li>
                                                    <li><a href="">Vianda 7</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="megamenu-ttl">Viandas Veggie</div>
                                                <ul>
                                                    <li><a href="">Vianda 1</a></li>
                                                    <li><a href="">Vianda 2</a></li>
                                                    <li><a href="">Vianda 3</a></li>
                                                    <li><a href="">Vianda 4</a></li>
                                                    <li><a href="">Vianda 5</a></li>
                                                    <li><a href="">Vianda 6</a></li>
                                                    <li><a href="">Vianda 7</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="megamenu-ttl">Aumento de Masa Muscular</div>
                                                <ul>
                                                    <li><a href="">Vianda 1</a></li>
                                                    <li><a href="">Vianda 2</a></li>
                                                    <li><a href="">Vianda 3</a></li>
                                                    <li><a href="">Vianda 4</a></li>
                                                    <li><a href="">Vianda 5</a></li>
                                                    <li><a href="">Vianda 6</a></li>
                                                    <li><a href="">Vianda 7</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="megamenu-ttl">Reducción de Peso</div>
                                                <ul>
                                                    <li><a href="">Vianda 1</a></li>
                                                    <li><a href="">Vianda 2</a></li>
                                                    <li><a href="">Vianda 3</a></li>
                                                    <li><a href="">Vianda 4</a></li>
                                                    <li><a href="">Vianda 5</a></li>
                                                    <li><a href="">Vianda 6</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="megamenu-ttl">Info Pages</div>
                                                <ul>
                                                    <li><a href="about-1.html">About Us Style 1</a></li>
                                                    <li><a href="about-2.html">About Us Style 2</a></li>
                                                    <li><a href="about-3.html">About Us Style 3</a></li>
                                                    <li><a href="contact-1.html">Contact Us Style 1</a></li>
                                                    <li><a href="contact-2.html">Contact Us Style 2</a></li>
                                                    <li><a href="gallery-1.html">Gallery Style</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="megamenu-ttl">Other Pages</div>
                                                <ul>
                                                    <li><a href="event-1.html">Event Style 1</a></li>
                                                    <li><a href="event-2.html">Event Style 2</a></li>
                                                    <li><a href="event-3.html">Event Style 3</a></li>
                                                    <li><a href="event-4.html">Event Style 4</a></li>
                                                    <li><a href="event-page-1.html">Event Details Page</a></li>
                                                    <li><a href="signin.html">Sign In or Login</a></li>
                                                    <li><a href="signup.html">Sign Up or Register</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li> --}}
                                {{-- <li>
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect">Blog <i class="fa fa-chevron-down"></i></a>
                                    <ul class="menu-dropdown">
                                        <li>
                                            <a>Visitar Blog</a>
                                            <ul class="menu-dropdown menu-dropdown-left">
                                                <li><a href="">Articulos de Salúd</a></li>
                                                <li><a href="">Articulos de Nutrición</a></li>
                                                <li><a href="">Articulos de Deportes</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>Portfolio Wide</a>
                                            <ul class="menu-dropdown menu-dropdown-left">
                                                <li><a href="portfolio-4.html">Wide Portfolio</a></li>
                                                <li><a href="portfolio-5.html">No Spacing Portfolio</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>Portfolio Masonary</a>
                                            <ul class="menu-dropdown menu-dropdown-left">
                                                <li><a href="portfolio-6.html">3 Column Portfolio</a></li>
                                                <li><a href="portfolio-7.html">4 Column Portfolio</a></li>
                                                <li><a href="portfolio-8.html">Wide Portfolio</a></li>
                                                <li><a href="portfolio-9.html">No Spacing Portfolio</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="portfolio-grid.html">Portfolio Grid</a></li>
                                        <li><a href="portfolio-list.html">Portfolio List</a></li>
                                    </ul>
                                </li> --}}
                                <li class="menu-megamenu-li">
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="{{url('faq')}}">Faq</a>
                                </li>
                                <li class="menu-megamenu-li">
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect btn" href="#" data-toggle="modal" data-target="#contactPopup">Contacto</a>
                                </li>
                                <li class="menu-megamenu-li">
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect hdr-basket" href="#"><i class="fa fa-cart-plus"></i><span class="cart-count">2</span></a>
                                    <ul class="menu-megamenu menu-cart">
                                        <li class="cart-overview">
                                            <a href="#" class="row">
                                                <div class="col-4 pr-0 cart-img">
                                                    <img src="uploads/shop-11.jpg" alt="">
                                                </div>
                                                <div class="col-8 cart-details">
                                                    <span class="title">Canvas Backpack</span>
                                                    <span class="price">$39</span>
                                                    <span class="qty">Quantity - 3</span>
                                                    <div class="cart-remove"><i class="icon-close"></i></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="cart-overview">
                                            <a href="#" class="row">
                                                <div class="col-4 pr-0 cart-img">
                                                    <img src="uploads/shop-31.jpg" alt="">
                                                </div>
                                                <div class="col-8 cart-details">
                                                    <span class="title">Leather Wallet</span>
                                                    <span class="price">$49</span>
                                                    <span class="qty">Quantity - 3</span>
                                                    <div class="cart-remove"><i class="icon-close"></i></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="row align-items-center">
                                            <div class="col-6">
                                                <a href="#" class="btn btn-dark text-white text-center">Checkout</a>
                                            </div>
                                            <div class="col-6 text-right">
                                                <p class="font-dosis font-20 m-0">Total : $98</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect hdr-search" href="#"><i class="fa fa-search"></i></a>
                                </li>
                                <li class="mobile-menu-close"><i class="fa fa-times"></i></li>
                            </ul><!-- End Menu Section -->
                            <div id="menu-bar"><a><i class="fa fa-bars"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="search-bar animated zoomIn">
                    <div class="search-content">
                        <div class="search-input">
                            <input type="text" placeholder="¿Que estás Buscando?">
                            <button class="search-btn"><i class="icon-magnifier"></i></button>
                        </div>
                    </div>
                    <div class="search-close"><i class="icon-close"></i></div>
                </div>
            </div>
            @if (session('success'))
                <div class="col-md-12 alert-success d-flex align-items-center justify-content-center" style="height: 10vh; font-size:1.5em; font-weight:600; ">
                    {{session('message')}}
                </div>
            @endif
        </header><!-- End Header Section -->
        <!-- Start Contact Popup -->
        <div id="contactPopup" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Envianos tu Consulta</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row pb-4">
                            <form action="{{route('nuevaConsulta')}}" method="post" style="width:100%;" class=" d-flex flex-wrap">
                                @csrf
                                <div class="col-md-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                        <input class="mdl-textfield__input" type="text" id="contact-name" name="nombre">
                                        <label class="mdl-textfield__label" for="contact-name">Tu nombre</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                        <input class="mdl-textfield__input" type="text" id="contact-email" name="email">
                                        <label class="mdl-textfield__label" for="contact-email">Tu e-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                        <input class="mdl-textfield__input" type="text" id="contact-phone" name="celular">
                                        <label class="mdl-textfield__label" for="contact-phone">Tu Celular</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                        <textarea class="mdl-textfield__input" rows="3" id="contact-message" name="mensaje"></textarea>
                                        <label class="mdl-textfield__label" for="contact-message">Mensaje</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="mdl-button mdl-js-button mdl-button--colored mdl-js-ripple-effect mdl-button--raised button button-success">Enviar Consulta</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End contact Popup -->

        {{-- Start Login Popup --}}


        {{-- End Login Popup --}}




    <!-- **********Included Scripts*********** -->

   @include('partials._bottomScripts')

</body>
</html>
