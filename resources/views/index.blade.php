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
        id="favicon"
        rel="shortcut icon"
        href="{{ asset('assets/images/favicon-dark.png') }}"
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
                                    <a class="page-scroll active" href="#home">Accueil</a>
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
                                    <a class="" href="{{route('tarification')}}">Tarification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="{{route('apropos')}}">À propos</a>
                                </li>
                            </ul>
                        </div>
                        <!-- navbar collapse -->

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <a
                                class="main-btn open-cta-card"
                                data-scroll-nav="0"
                                href="#"
                                rel="nofollow"
                            >
                                Demandez votre démo
                            </a>
                        </div>
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
                            Votre Partenaire pour une Gestion Commerciale Efficace
                        </h3>
                    </div>
                    <!-- header hero content -->
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="header-hero-image text-center rounded wow fadeIn"
                        data-wow-duration="1.3s"
                        data-wow-delay="1.4s"
                    >
                        <div class="img-container position-relative me-auto ms-auto">
                            <img src="{{ asset('assets/images/header/header-hero.jpg') }}" alt="hero"/>
                        </div>
                    </div>
                    <!-- header hero image -->
                </div>
            </div>
            <div class="text-center mt-3">
                <a
                    href="javascript:void(0)"
                    class="main-btn wow fadeInUp open-cta-card"
                    data-wow-duration="1.3s"
                    data-wow-delay="1.1s"
                >
                    Demandez maintenant
                </a>
            </div>

            <!-- row -->
        </div>
        <!-- container -->
        <div id="particles-1" class="particles"></div>
    </div>
    <!-- header hero -->
    <div class="card" id="cta-card">
        <div class="card-header bg-white py-3">
            <h5 class="card-title text-primary text-center m-0 ">DEMANDER UNE DÉMO MAINTENANT</h5>
        </div>
        <div class="card-body">
            <form action="{{route('demo_form')}}" method="POST">
                @csrf
                <div class="form-group mt-3 pb-2">
                    <label for="entreprise" class="form-label">Entreprise</label>
                    <input name="entreprise" type="text" id="entreprise" class="form-control"
                           placeholder="Entrez le nom de votre entreprise">
                </div>
                <div class="form-group mt-3 pb-2">
                    <label for="telephone" class="form-label">Téléphone</label>
                    <input type="tel" name="telephone" id="telephone" class="form-control" im-insert="true"
                           data-inputmask="'mask': '99 99 99 99 99'" placeholder="06 01 02 03 04" minlength="10"
                           maxlength="14">
                </div>
                <div class="form-group mt-3 pb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" im-insert="true"
                           data-inputmask="'alias': 'email'" placeholder="example@email.ma">
                </div>
                <div class="mt-5 text-center mb-4">
                    <button type="submit" class="btn py-2 px-5 main-btn lh-base rounded-pill">Soumettre</button>
                </div>
            </form>
        </div>
    </div>
</header>
<!--====== HEADER PART ENDS ======-->

<section id="about">
    <div class="about-area pt-70">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div
                        class="about-content mt-50 wow fadeInLeftBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">
                                Gérez moins
                                et vendez plus
                            </h3>
                        </div>
                        <!-- section title -->
                        <p class="text">
                            Avec <b>GERO</b>, consacrez moins de temps à la gestion et davantage à vos clients. Notre
                            solution simplifie et optimise tous les aspects de votre gestion commerciale de manière
                            efficace et intuitive

                        </p>
                        <a
                            href="#"
                            class="main-btn wow  open-cta-card"
                            data-wow-duration="1.3s"
                            data-wow-delay="1.1s"
                        >
                            Demandez maintenant
                        </a>
                    </div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div
                        class="about-image text-center mt-50 wow fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <img src="{{ asset('assets/images/about/about0.svg') }}" alt="about"/>
                    </div>
                    <!-- about image -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
            <img src="{{ asset('assets/images/about/about-shape-1.svg') }}" alt="shape"/>
        </div>
    </div>

    <div class="pt-120 d-none d-md-block">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title text-center pb-40 ">
                    <div class="line m-auto"></div>
                    <h3 class="title">
                        Générez tous vos documents directement depuis
                        <span> GERO</span>
                    </h3>
                </div>
                <!-- section title -->
            </div>
        </div>
        <!-- row -->
        <div class="bg-success  ">
            <!-- single services -->
            <div class="d-flex align-items-center  justify-content-center overflow-hidden py-3 gap-5">
                <div
                    class="text-center w-fit  py-3 wow fadeIn h-100"
                    data-wow-duration="1s"
                    data-wow-delay="0.8s"
                >
                    <i class="fa fa-file-invoice fa-3x text-white"></i>
                    <h3 class="text-white mt-2">Devis</h3>
                </div>
                <div
                    class="text-center py-3  w-fit wow fadeIn h-100"
                    data-wow-duration="1s"
                    data-wow-delay="0.8s"
                >
                    <i class="fa fa-file-invoice-dollar fa-3x text-white"></i>
                    <h3 class="text-white mt-2">Facture</h3>
                </div>
                <div
                    class="text-center py-3  w-fit  wow fadeIn h-100"
                    data-wow-duration="1s"
                    data-wow-delay="0.8s"
                >
                    <i class="fa fa-boxes-stacked fa-3x text-white"></i>
                    <h3 class="text-white mt-2">Commande</h3>
                </div>
                <div
                    class="text-center py-3  w-fit  wow fadeIn h-100"
                    data-wow-duration="1s"
                    data-wow-delay="0.8s"
                >
                    <i class="fa fa-shipping-fast fa-3x text-white"></i>
                    <h3 class="text-white mt-2">Livraisons</h3>
                </div>
                <div
                    class="text-center py-3  w-fit  wow fadeIn h-100"
                    data-wow-duration="1s"
                    data-wow-delay="0.8s"
                >
                    <i class="fa fa-redo fa-3x fa-flip-horizontal text-white"></i>
                    <h3 class="text-white mt-2">Retour</h3>
                </div>
                <div
                    class="text-center py-3  w-fit wow fadeIn h-100"
                    data-wow-duration="1s"
                    data-wow-delay="0.8s"
                >
                    <i class="fa fa-receipt fa-3x text-white"></i>
                    <h3 class="text-white mt-2">Avoir</h3>
                </div>
                <div
                    class="text-center py-3  w-fit wow fadeIn h-100"
                    data-wow-duration="1s"
                    data-wow-delay="0.8s"
                >
                    <i class="fa fa-file-alt fa-3x text-white"></i>
                    <h3 class="text-white mt-2">Proforma</h3>
                </div>
                <!-- single services -->
            </div>
        </div>
        <!-- row -->
    </div>

    <!--====== ABOUT PART START ======-->
    <div class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div
                        class="about-content mt-50 wow fadeInLeftBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">
                                Conversion rapide
                                et suivi précis
                            </h3>
                        </div>
                        <!-- section title -->
                        <p class="text">
                            Optimisez votre efficacité grâce à notre fonctionnalité de conversion rapide, vous
                            permettant d'économiser du temps tout en réduisant les erreurs. Avec GERO, suivez en temps
                            réel l'historique des actions effectuées sur tous vos documents, offrant ainsi une
                            visibilité complète sur les tâches accomplies par vos collaborateurs.
                        </p>
                        <a
                            href="#"
                            class="main-btn wow  open-cta-card"
                            data-wow-duration="1.3s"
                            data-wow-delay="1.1s"
                        >
                            Demandez maintenant
                        </a>
                    </div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div
                        class="about-image text-center mt-50 wow fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <img src="{{ asset('assets/images/about/about1.svg') }}" alt="about"/>
                    </div>
                    <!-- about image -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
            <img src="{{ asset('assets/images/about/about-shape-1.svg') }}" alt="shape"/>
        </div>
    </div>
    <!--====== ABOUT PART ENDS ======-->

    <!--====== ABOUT PART START ======-->
    <div class="about-area pt-70">
        <div class="about-shape-2">
            <img src="{{ asset('assets/images/about/about-shape-2.svg') }}" alt="shape"/>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-last">
                    <div
                        class="about-content ms-lg-auto mt-50 wow fadeInLeftBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">
                                Gardez une Vue 360°
                                de vos Finances
                            </h3>
                        </div>
                        <!-- section title -->
                        <p class="text">
                            Obtenez une vision complète et en temps réel de la situation financière de votre entreprise.
                            Grâce à l'option de filtrage, gardez une traçabilité précise de votre trésorerie et accédez
                            directement aux modules Achats/Ventes. Consultez les règlements, les échéances, vos dépenses
                            par catégorie et gérez plusieurs comptes.
                        </p>
                        <a
                            href="#"
                            class="main-btn wow  open-cta-card"
                            data-wow-duration="1.3s"
                            data-wow-delay="1.1s"
                        >
                            Demandez maintenant
                        </a></div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div
                        class="about-image text-center mt-50 wow fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <img src="{{ asset('assets/images/about/about2.svg') }}" alt="about"/>
                    </div>
                    <!-- about image -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!--====== ABOUT PART ENDS ======-->

    <!--====== ABOUT PART START ======-->
    <div class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div
                        class="about-content mt-50 wow fadeInLeftBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">
                                Analysez pour Mieux Décider
                            </h3>
                        </div>
                        <!-- section title -->
                        <p class="text">
                            Accédez à des rapports détaillés sur les mouvements de stock par magasin, les tendances des
                            produits, les bénéfices, les inventaires, la marge bénéficiaire et bien plus encore.
                            Optimisez vos marges grâce à des calculs précis du coût de revient de vos produits. Avec
                            Gero, prenez des décisions éclairées et intuitives.
                        </p>
                        <a
                            href="#"
                            class="main-btn wow  open-cta-card"
                            data-wow-duration="1.3s"
                            data-wow-delay="1.1s"
                        >
                            Demandez maintenant
                        </a></div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div
                        class="about-image text-center mt-50 wow fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <img src="{{ asset('assets/images/about/about3.svg') }}" alt="about"/>
                    </div>
                    <!-- about image -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
            <img src="{{ asset('assets/images/about/about-shape-1.svg') }}" alt="shape"/>
        </div>
    </div>
    <!--====== ABOUT PART ENDS ======-->
</section>

<!--====== FOOTER PART START ======-->
<footer id="footer" class="footer-area pt-120">
    <div class="container">
        <div style="height: 240px"></div>
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
<script>
    $('#cta-card').hide()
    $('#telephone').inputmask()
    $('#email').inputmask()
    $(document).on('click', '.open-cta-card', function () {
        // $('#cta-card').removeClass('d-none')
        $('#cta-card').fadeIn()
    })
    $(document).mouseup(function (e) {
        var container = $("#cta-card");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.fadeOut();
        }
    });
</script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
