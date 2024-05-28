<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>

    <!--====== Title ======-->
    <title>Gero</title>

    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!--====== Favicon Icon ======-->
    <link
        rel="shortcut icon"
        href="{{ asset('assets/images/favicon.png') }}"
        type="image/png"
    />

    <!--====== CSS Files LinkUp ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/lineIcons.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
</head>

<body>
<!--[if IE]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->

<!--====== PRELOADER PART START ======-->
<div class="preloader">
    <div class="loader">
        <div class="spinner">
            <div class="spinner-container">
                <div class="spinner-rotator">
                    <div class="spinner-left">
                        <div class="spinner-circle"></div>
                    </div>
                    <div class="spinner-right">
                        <div class="spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->
<header class="header-area">
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo/logo-light.png') }}" alt="Logo"/>
                        </a>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                            <span class="toggler-icon"> </span>
                        </button>

                        <div
                            class="collapse navbar-collapse sub-menu-bar"
                            id="navbarSupportedContent"
                        >
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="" href="{{ url('/') }}">Accueil</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#modules" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        Modules
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('modules')}}#catalogue">Catalogue</a></li>
                                        <li><a class="dropdown-item" href="{{route('modules')}}#contact">Contacts</a></li>
                                        <li><a class="dropdown-item" href="{{route('modules')}}#vente">Ventes</a></li>
                                        <li><a class="dropdown-item" href="{{route('modules')}}#vente">Achats</a></li>
                                        <li><a class="dropdown-item" href="{{route('modules')}}#tresorie">Trésorerie</a></li>
                                        <li><a class="dropdown-item" href="{{route('modules')}}#rapport">Rapports</a></li>
                                        <li><a class="dropdown-item" href="{{route('modules')}}#import">Autres</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="">Spécial éditions</a>
                                </li>
                                <li class="nav-item">
                                    <a class=" active" href="#">Tarification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="p" href="{{route('apropos')}}">À propos</a>
                                </li>
                            </ul>
                        </div>
                        <!-- navbar collapse -->
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- navbar area -->

    <div
        id="home"
        class="header-hero bg_cover"
        style="background-image: url({{ asset('assets/images/header/banner-bg.svg') }})"
    >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="header-hero-content text-center">
                        <h3
                            class="header-sub-title wow fadeInUp"
                            data-wow-duration="1.3s"
                            data-wow-delay="0.2s"
                        >
                            Tarification
                        </h3>
                    </div>
                    <!-- header hero content -->
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="header-hero-image text-center wow fadeIn"
                        data-wow-duration="1.3s"
                        data-wow-delay="1.4s"
                    >
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="single-services h-100">
                                    <h4><span class="fs-1 text-success">3000</span> DH/an</h4>
                                    <h6>B2B Option Basique</h6>
                                    <hr>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Client & Founisseurs</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Commerciaux & Commission</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Produits & Services</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Ventes</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Achats</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Dépenses et Réglements</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Rapports</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Personalisation</p>
                                    <p class="text-start" > <i class="text-danger fa fa-times me-2" ></i> Trésorerie</p>
                                    <p class="text-start" > <i class="text-danger fa fa-times me-2" ></i> Affaires</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> 2 Utilisateurs</p>
                                </div>
                            </div>
                            <div class="col-xl-3 mt-4 mt-md-0 col-md-6">
                                <div class="single-services h-100">
                                    <h4><span class="fs-1 text-success">4000</span> DH/an</h4>
                                    <h6>B2B Option Affaires</h6>
                                    <hr>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Client & Founisseurs</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Commerciaux & Commission</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Produits & Services</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Ventes</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Achats</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Dépenses et Réglements</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Rapports + 3 Personalisés</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Personalisation</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Trésorerie</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Affaires</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> 2 Utilisateurs</p>
                                </div>
                            </div>
                            <div class="col-xl-3 mt-xl-0 mt-4 col-md-6">
                                <div class="single-services h-100">
                                    <h4><span class="fs-1 text-success">4500</span> DH/an</h4>
                                    <h6>B2B/B2C Option Gestion de Stock</h6>
                                    <hr>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Client & Founisseurs</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Commerciaux & Commission / Cannaux de distributions</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Produits & Services</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Ventes et Achats</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Rapports + 3 Personalisés</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Personalisation</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Trésorerie et Dépenses</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Gestion de Stock</p>
                                    <p class="text-start" > <i class="text-danger fa fa-times me-2" ></i> Facturation</p>
                                    <p class="text-start" > <i class="text-danger fa fa-times me-2" ></i> Gestion des caisses</p>
                                    <p class="text-start" > <i class="text-danger fa fa-times me-2" ></i> Méthodes de livraison</p>
                                    <p class="text-start" > <i class="text-danger fa fa-times me-2" ></i> Points de Vente connectés</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> 2 Utilisateurs</p>
                                </div>
                            </div>
                            <div class="col-xl-3 mt-xl-0 mt-4 col-md-6">
                                <div class="single-services h-100">
                                    <h4><span class="fs-1 text-success">6000</span> DH/an</h4>
                                    <h6>B2B/B2C Option Marque connecté</h6>
                                    <hr>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Client & Founisseurs</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Commerciaux & Commission / Cannaux de distributions</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Produits & Services</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Ventes et Achats</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Rapports + 3 Personalisés</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Personalisation</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Trésorerie et Dépenses</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Gestion de Stock</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Facturation</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Gestion des caisses</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> Méthodes de livraison</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> 2 Points de Vente connectés</p>
                                    <p class="text-start" > <i class="text-success fa fa-check me-2" ></i> 3 Utilisateurs (Admin + 2 Vendeurs)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- header hero image -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <div id="particles-1" class="particles"></div>
    </div>
    <!-- header hero -->
</header>
<div class="container pt-120">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="section-title text-center pb-40">
                <div class="line m-auto"></div>
                <h3 class="title">
                    Besoin de plus ?
                </h3>
            </div>
            <!-- section title -->
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-md-6 mt-2">
            <div class="single-services">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Besoin de plus d'utilisateurs ?</h5>
                    <button class="rounded-circle btn btn-success roll-up-btn" style="width: 42px; height: 42px" > <span class="icon"><i class="fa fa-chevron-left" ></i></span> </button>
                </div>
                <div class=" roll-up closed">
                    <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error numquam tenetur veniam? Asperiores aut dignissimos dolore eligendi error ex itaque placeat quidem temporibus veniam? Blanditiis impedit ipsam maxime provident unde!</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-2">
            <div class="single-services">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Avons-nous une formation ?</h5>
                    <button class="rounded-circle btn btn-success roll-up-btn" style="width: 42px; height: 42px" > <span class="icon"><i class="fa fa-chevron-left" ></i></span>  </button>
                </div>
                <div class="roll-up closed">
                    <p class="pt-3" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error numquam tenetur veniam? Asperiores aut dignissimos dolore eligendi error ex itaque placeat quidem temporibus veniam? Blanditiis impedit ipsam maxime provident unde!</p>
                </div>
            </div>
        </div>
{{--        <div class="col-md-6 mt-2">--}}
{{--            <div class="single-services">--}}
{{--                <div class="d-flex justify-content-between align-items-center">--}}
{{--                    <h5>Avons-nous une formation ?</h5>--}}
{{--                    <button class="rounded-circle btn btn-success roll-up-btn" style="width: 42px; height: 42px" > <span class="icon"><i class="fa fa-chevron-left" ></i></span>  </button>--}}
{{--                </div>--}}
{{--                <div class="roll-up closed">--}}
{{--                    <p class="pt-3" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error numquam tenetur veniam? Asperiores aut dignissimos dolore eligendi error ex itaque placeat quidem temporibus veniam? Blanditiis impedit ipsam maxime provident unde!</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6 mt-2">--}}
{{--            <div class="single-services">--}}
{{--                <div class="d-flex justify-content-between align-items-center">--}}
{{--                    <h5>Avons-nous une formation ?</h5>--}}
{{--                    <button class="rounded-circle btn btn-success roll-up-btn" style="width: 42px; height: 42px" > <span class="icon"><i class="fa fa-chevron-left" ></i></span>  </button>--}}
{{--                </div>--}}
{{--                <div class="roll-up closed">--}}
{{--                    <p class="pt-3" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error numquam tenetur veniam? Asperiores aut dignissimos dolore eligendi error ex itaque placeat quidem temporibus veniam? Blanditiis impedit ipsam maxime provident unde!</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <!-- row -->
</div>

<footer id="footer" class="footer-area pt-120">
    <div class="container">
        <div style="height: 280px"></div>
        <!-- subscribe area -->
        <div class="footer-widget pb-100">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div
                        class="footer-about mt-50 wow fadeIn"
                        data-wow-duration="1s"
                        data-wow-delay="0.2s"
                    >
                        <a class="logo" href="javascript:void(0)">
                            <img src="{{ asset('assets/images/logo/logo-light.png') }}" alt="logo"/>
                        </a>
                        <p class="text">
                            Avec GERO, nous sommes bien plus qu'une simple solution logicielle ; nous sommes vos
                            partenaires dans la réussite.
                        </p>
                        <ul class="social">
                            <li>
                                <a href="https://www.instagram.com/gero.saas" target="_blank">
                                    <i class="lni lni-instagram-filled"> </i>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.linkedin.com/company/gerosaas/">
                                    <i class="lni lni-linkedin-original"> </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- footer about -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-12">
                    <div class="footer-link d-flex mt-50 justify-content-sm-between">
                        <div
                            class="link-wrapper wow fadeIn"
                            data-wow-duration="1s"
                            data-wow-delay="0.4s"
                        >
                            <div class="footer-title">
                                <h4 class="title">Lien rapides</h4>
                            </div>
                            <ul class="link">
                                <li><a href="javascript:void(0)">Confidentialité</a></li>
                                <li><a href="javascript:void(0)">Conditions d'utilisations</a></li>
                                <li><a href="{{route('modules')}}">Modules</a></li>
                                <li><a href="javascript:void(0)">Devenir partenaire</a></li>
                                <li><a href="javascript:void(0)">Déclarer une anomalie</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer link -->
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div
                        class="footer-contact mt-50 wow fadeIn"
                        data-wow-duration="1s"
                        data-wow-delay="0.8s"
                    >
                        <div class="footer-title">
                            <h4 class="title">Contactez-nous</h4>
                        </div>
                        <ul class="contact">
                            <li>06 38 89 81 88</li>
                            <li>contact@gero.ma</li>
                            <li><a class="text-white" href="{{route('index')}}">www.gero.ma</a></li>
                            <li>
                                Av.abderrahmane el youssfi Castilla <br/>
                                Business Center Etage 6 N30, Tanger 90060
                            </li>
                        </ul>
                    </div>
                    <!-- footer contact -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- footer widget -->
        <div class="footer-copyright">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright d-sm-flex justify-content-between">
                        <div class="copyright-content">
                            <p class="text">
                                Designed and Developed by
                                <a href="https://tarmiz.ma" rel="nofollow">Tarmiz</a>
                            </p>
                        </div>
                        <!-- copyright content -->
                    </div>
                    <!-- copyright -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- footer copyright -->
    </div>
    <!-- container -->
    <div id="particles-2"></div>
</footer>
<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->
<a href="#" class="back-to-top"> <i class="lni lni-chevron-up"> </i> </a>
<!--====== BACK TOP TOP PART ENDS ======-->

<!--====== Javascript Files ======-->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/fontawesome.js') }}"></script>

<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/js/count-up.min.js') }}"></script>
<script src="{{ asset('assets/js/particles.min.js') }}"></script>
<script src="{{ asset('assets/js/inputmask/jquery.inputmask.bundle.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    $('.roll-up-btn').click(function () {
        $(this).closest('.single-services').find('.roll-up').toggleClass('closed')
        $(this).find('.icon').toggleClass('open')
    })
</script>
</body>
</html>
