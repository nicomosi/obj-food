<!DOCTYPE html>
<html lang="en">
{{-- Start Head tag --}}
@include('partials._head')
{{-- End Head tag --}}
<body>
    <div class="wrapper">
        @include('partials._header')
        <!-- Start Page Title Section -->
        <div class="page-ttl">
            <div class="layer-stretch">
                <div class="page-ttl-container">
                    <h1>Faqs</h1>
                    <p><a href="#">Home</a> &#8594; <span>Faqs</span></p>
                </div>
            </div>
        </div><!-- End Page Title Section -->
        <!-- Start FAQ Section -->
        <div class="light-background">
            <div class="layer-tablet">
                <div class="layer-wrapper pb-0">
                    <div class="panel panel-default mt-4">
                        <div class="panel-head">
                            <div class="panel-title">Frquently Asked Question</div>
                        </div>
                        <div class="panel-body">
                            <div class="theme-accordion-container">
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> ¿Cuál es el costo de Envio?</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">E</span>
                                                    l costo de envío será mostrado en base al total de la compra y ubicación, en el checkout, en el momento previo a la compra. Podes calcularlo completando el Código Postal.
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> ¿Cómo se realizan los Envios?</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">T</span>
                                                    rabajamos con OCA. Realizamos envios a todo el pais. Retiro por CAPITAL FEDERAL. A traves de la compra te pondras en contacto con nosotros para coordinar la entrega. Cualquier duda podes enviarnos mail a ventas@objetcivdefood.com
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> ¿Cuánto tarda en llegar el pedido?</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">E</span>
                                                    l tiempo de entrega depende de la aprobación del medio de pago, del medio de envío seleccionado y de la distancia del domicilio de recepción. En general la demora se encuentra entre 3 y 7 días hábiles luego de acreditado el pago. Los envíos de OCA serán despachados los días Martes por la mañana. Los días que se indiquen al calcular el costo de envío por OCA son estimativos.
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> ¿Cuáles son los días y horarios de entrega?</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">E</span>
                                                    l pedido sera entregado los días hábiles (L a V) de 8:00 a 18:00 hs. en el domicilio que indiques y deberán ser recibidos por una persona mayor de 18 años exhibiendo DNI, quien deberá firmar el acuse de recibo. OCA realizará dos (2) intentos de entrega. En la segunda visita se dejará un aviso, para que el pedido sea retirado en la sucursal que se encuentra tramitando el envío, dentro de los cinco (5) días hábiles.
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> ¿Cuáles son los días y horarios para retiro?</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">E</span>
                                                    l pedido para retiro por Palermo, se realizara de Lunes a Viernes previamente coordinado via mail. Envianos a ventas@mailempresa.com.ar
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> Políticas de Devolución</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">S</span>
                                                    erá condición para realizar el cambio del producto que el mismo se encuentre en óptimas condiciones (Packaging original, etiquetas, etc) sin haber sido utilizado ni dañado y presentando la etiqueta de cambio correspondiente. Si el producto no cumple con estos requisitos no será autorizado su cambio. NOMBREEMPRESA no se hace responsable por el costo de envío surgido por un cambio, el mismo corre por cuenta del comprador. Nos haremos cargo en el caso del que producto se encuentre fallado o en mal estado. Para hacer cualquier tipo de cambio deberás escribirnos a ventas@mailempresa.com.ar dentro de los diez (10) días de recibido el producto explicándonos el motivo del cambio. Tendrás 10 días desde efectuada la compra para elegir otro modelo o color (previendo stock disponible)
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-accordion">
                                    <div class="theme-accordion-hdr">
                                        <h4 class="text-primary"><span class="icon-question"></span> ¿Cuál es el plazo para realizar un cambio?</h4>
                                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                                    </div>
                                    <div class="theme-accordion-bdy">
                                        <div class="row p-3">
                                            <div class="col-12">
                                                <p class="paragraph-medium paragraph-black">
                                                    <span class="dropcap bg-primary text-white">P</span>
                                                    uedes solicitar un cambio hasta 10 días luego de realizada la compra. Siempre y cuando se encuentre en condiciones y con la tarjeta de la marca.
                                                </p>
                                                {{-- <div class="pull-right">
                                                    <a href="#" class="link-icon"><span>View More</span><i class="ti-angle-double-right"></i></a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End FAQ Section -->
        </div>

        <div class="action">
            <div class="layer-stretch">
                <div class="layer-wrapper text-center">
                    <div class="layer-ttl"><h4>We design <span class="text-primary">delightful</span> digital experiences</h4></div>
                    <div class="action-content">Read more about what we do and our philosophy of design. Judge for yourself The work and results we’ve achieved for other clients, and meet our highly experienced Team who just love to design, develop and deploy. Tell Us Your Story</div>
                    <a href="#" class="btn btn-outline btn-primary btn-pill btn-outline-2x btn-lg mt-3">Tell Us Your Story</a>
                </div>
            </div>
        </div><!-- End Action Section -->
        <!-- Start Footer Section -->
        <footer id="footer">
            <div class="layer-stretch">
                <!-- Start main Footer Section -->
                <div class="row layer-wrapper">
                    <div class="col-md-4 footer-block">
                        <div class="footer-ttl"><p>Basic Info</p></div>
                        <div class="footer-container footer-a">
                            <div class="tbl">
                                <div class="tbl-row">
                                    <div class="tbl-cell"><i class="fa fa-map-marker"></i></div>
                                    <div class="tbl-cell">
                                        <p class="paragraph-medium paragraph-white">
                                            Your office, Building Name<br />
                                            Street name, Area<br />
                                            City, Country Pin Code
                                        </p>
                                    </div>
                                </div>
                                <div class="tbl-row">
                                    <div class="tbl-cell"><i class="fa fa-phone"></i></div>
                                    <div class="tbl-cell">
                                        <p class="paragraph-medium paragraph-white">11122333333</p>
                                    </div>
                                </div>
                                <div class="tbl-row">
                                    <div class="tbl-cell"><i class="fa fa-envelope"></i></div>
                                    <div class="tbl-cell">
                                        <p class="paragraph-medium paragraph-white">hello@yourdomain.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-block">
                        <div class="footer-ttl"><p>Quick Links</p></div>
                        <div class="footer-container footer-b">
                            <div class="tbl">
                                <div class="tbl-row">
                                    <ul class="tbl-cell">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-1.html">About</a></li>
                                        <li><a href="event-1.html">Event</a></li>
                                        <li><a href="contact-1.html">Contact</a></li>
                                        <li><a href="portfolio-1.html">Portfolio</a></li>
                                        <li><a href="#">Link</a></li>
                                    </ul>
                                    <ul class="tbl-cell">
                                        <li><a href="signin.html">Sign In</a></li>
                                        <li><a href="signup.html">Sign Up</a></li>
                                        <li><a href="services-1.html">Services</a></li>
                                        <li><a href="Blogs-1.html">Blogs</a></li>
                                        <li><a href="Blog-1.html">Blog</a></li>
                                        <li><a href="team-1.html">Team</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-block">
                        <div class="footer-ttl"><p>Newsletter</p></div>
                        <div class="footer-container footer-c">
                            <div class="footer-subscribe">
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                    <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="subscribe-email">
                                    <label class="mdl-textfield__label" for="subscribe-email">Your Email</label>
                                    <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                                </div>
                                <div class="footer-subscribe-button">
                                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Submit</button>
                                </div>
                            </div>
                            <ul class="social-list social-list-colored footer-social">
                                <li>
                                    <a href="#" target="_blank" id="footer-facebook" class="fab fa-facebook"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-facebook">Facebook</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-twitter" class="fab fa-twitter"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-twitter">Twitter</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-google" class="fab fa-google"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-google">Google</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-instagram" class="fab fa-instagram"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-instagram">Instagram</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-youtube" class="fab fa-youtube"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-youtube">Youtube</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-linkedin" class="fab fa-linkedin"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-linkedin">Linkedin</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-flickr" class="fab fa-flickr"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-flickr">Flickr</span>
                                </li>
                                <li>
                                    <a href="#" target="_blank" id="footer-rss" class="fab fa-rss"></a>
                                    <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-rss">Rss</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- End main Footer Section -->
            <!-- Start Copyright Section -->
            <div id="copyright">
                <div class="layer-stretch">
                    <div class="paragraph-medium paragraph-white">2017 © Pepdev ALL RIGHTS RESERVED.</div>
                </div>
            </div><!-- End of Copyright Section -->
        </footer><!-- End of Footer Section -->
    </div>

    <!-- **********Included Scripts*********** -->

  
    <!-- Jquery Library 2.1 JavaScript-->
    <script src="{{url('assets/plugin/jquery/jquery-2.1.4.min.js')}}"></script>
    <!-- Popper JavaScript-->
    <script src="{{url('assets/plugin/popper/popper.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="{{url('assets/plugin/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Modernizr Core JavaScript-->
    <script src="{{url('assets/plugin/modernizr/modernizr.js')}}"></script>
    <!-- Animaateheading JavaScript-->
    <script src="{{url('assets/plugin/animateheading/animateheading.js')}}"></script>
    <!-- Material Design Lite JavaScript-->
    <script src="{{url('assets/plugin/material/material.min.js')}}"></script>
    <!-- Material Select Field Script -->
    <script src="{{url('assets/plugin/material/mdl-selectfield.min.js')}}"></script>
    <!-- Flexslider Plugin JavaScript-->
    <script src="{{url('assets/plugin/flexslider/jquery.flexslider.min.js')}}"></script>
    <!-- Owl Carousel Plugin JavaScript-->
    <script src="{{url('assets/plugin/owl_carousel/owl.carousel.min.js')}}"></script>
    <!-- Scrolltofixed Plugin JavaScript-->
    <script src="{{url('assets/plugin/scrolltofixed/jquery-scrolltofixed.min.js')}}"></script>
    <!-- Magnific Popup Plugin JavaScript-->
    <script src="{{url('assets/plugin/magnific_popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- WayPoint Plugin JavaScript-->
    <script src="{{url('assets/plugin/waypoints/jquery.waypoints.min.js')}}"></script>
    <!-- CounterUp Plugin JavaScript-->
    <script src="{{url('assets/plugin/counterup/jquery.counterup.js')}}"></script>
    <!-- masonry Plugin JavaScript-->
    <script src="{{url('assets/plugin/masonry_pkgd/masonry.pkgd.min.js')}}"></script>
    <!-- SmoothScroll Plugin JavaScript-->
    <script src="{{url('assets/plugin/smoothscroll/smoothscroll.min.js')}}"></script>
    <!--Custom JavaScript-->
    {{-- <script src="{{url('dist/js/custom.js')}}"></script> --}}

    
</body>
</html>