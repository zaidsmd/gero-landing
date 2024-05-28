<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>

    <!--====== Title ======-->
    <title>Gero | À propos</title>

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
    <style>
        .navbar-nav .nav-item > a {
            color: #1e2125;
        }
    </style>
    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
</head>

<body>


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
                            <img src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="Logo"/>
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
                                    <a class="" href="{{route('index')}}">Accueil</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle " href="#modules" role="button"
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
                                    <a class="active" href="{{route('apropos')}}">À propos</a>
                                </li>
                            </ul>
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
                            class="header-sub-title wow fadeInUp text-primary"
                            data-wow-duration="1.3s"
                            data-wow-delay="0.2s"
                        >
                            À propos
                        </h3>
                    </div>
                    <!-- header hero content -->
                </div>
            </div>
        </div>
        <!-- container -->
        <div id="particles-1" class="particles"></div>
    </div>
    <!-- header hero -->

</header>
<!--====== HEADER PART ENDS ======-->

<section id="about">
<div class="container">
    <p class="mt-3 text-center fs-5">
        Notre engagement est d'accompagner la réussite de chaque entreprise en offrant une solution logicielle
        à la fois intuitive et robuste. Nous sommes convaincus que la transformation numérique doit être
        accessible à tous, c'est pourquoi nous nous efforçons de fournir des fonctionnalités qui simplifient les
        opérations commerciales et favorisent la croissance.
    </p>
</div>
    <div id="catalogue" class="about-area pt-70">
        <div class="container">
            <div class="row">
               <div class="col-12 d-flex align-items-center justify-content-center">
                   <div class="section-title">
                       <div class="line"></div>
                       <h3 class="title">
                           Nos valeur
                       </h3>
                   </div>
               </div>
                <div class="col-xl-4 mt-xl-0 mt-4 col-md-6 d-flex">
                    <div
                        class="about-content mt-50 wow fadeInLeftBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <div class="single-services h-100">
                            <h4 class="text-center text-success">
                                <i class="fa fa-handshake fa-3x"></i>
                            </h4>
                            <h6 class="text-center mt-3" >Partenariat durable</h6>
                            <hr>
                            <p>Avec GERO, nous considérons nos clients
                                non seulement comme des utilisateurs, mais
                                comme des partenaires essentiels à leur
                                succès. Notre engagement se traduit par
                                des relations durables, où nous collaborons
                                étroitement pour concrétiser leurs objectifs
                                commerciaux.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mt-xl-0 mt-4 col-md-6 d-flex">
                    <div
                        class="about-content mt-50 wow fadeInLeftBig "
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <div class="single-services h-100">
                            <h4 class="text-center text-success">
                                <i class="fa fa-desktop fa-3x"></i>
                            </h4>
                            <h6 class="text-center mt-3" >Accessibilité et simplicité</h6>
                            <hr>
                            <p>Nous croyons en une transformation
                                numérique accessible à tous. Notre
                                logiciel est conçu pour être intuitif et
                                facile à utiliser, afin que chaque
                                entreprise, quelle que soit sa taille ou son
                                domaine d'activité, puisse en tirer
                                pleinement profit.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mt-xl-0 mt-4 col-md-6 d-flex">
                    <div
                        class="about-content mt-50 wow fadeInLeftBig "
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <div class="single-services h-100">
                            <h4 class="text-center text-success">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </h4>
                            <h6 class="text-center mt-3" >Innovation continue</h6>
                            <hr>
                            <p>Nous nous engageons à rester à la
                                pointe de la technologie en proposant
                                des solutions innovantes qui anticipent
                                les besoins changeants du marché.
                                Notre équipe dédiée travaille sans
                                relâche pour offrir des fonctionnalités
                                toujours plus performantes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4 pt-20">
                    <p class="text-center"><b>GERO</b> est un produit développé par <b>TARMIZ SARL
                        </b>, une entreprise marocaine spécialisée dans la digitalisation des métiers et des organismes, ainsi que dans la formation, le conseil et le développement de solutions informatiques sur mesure pour les entreprises marocaines.
                        <br>
                        Nous sommes impatients de vous connaître et de discuter de la façon dont <b>GERO</b> peut soutenir vos
                        objectifs commerciaux. Contactez-nous dès aujourd'hui pour une démo personnalisée gratuite et
                        découvrez comment notre solution peut transformer votre entreprise.</p>
                    <p class="text-center mt-4">
                        <button
                            class="main-btn open-cta-card"
                            rel="nofollow"

                        >
                            Demandez votre démo
                        </button>
                    </p>
                </div>
                <div class="d-flex align-items-cente justify-content-center">
                    <div class="card mt-4 " id="cta-card-apropos" style="max-width: 500px">
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
                </div>

            </div>
            <!-- row -->
        </div>
        <!-- container -->
        <div class="about-shape-1">
            <img src="{{ asset('assets/images/about/about-shape-1.svg') }}" alt="shape"/>
        </div>
    </div>
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

<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    window.onscroll = function () {
        const header_navbar = document.querySelector(".navbar-area");
        const sticky = header_navbar.offsetTop;
        const logo = document.querySelector(".navbar-brand img");

        if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
            logo.src = "assets/images/logo/logo-dark.png";
        } else {
            header_navbar.classList.remove("sticky");
            logo.src = "assets/images/logo/logo-dark.png";
        }

        // show or hide the back-top-top button
        const backToTop = document.querySelector(".back-to-top");
        if (
            document.body.scrollTop > 50 ||
            document.documentElement.scrollTop > 50
        ) {
            backToTop.style.display = "flex";
        } else {
            backToTop.style.display = "none";
        }
    };
    $('#cta-card-apropos').hide()
    $(document).on('click', '.open-cta-card', function () {
        // $('#cta-card').removeClass('d-none')
        $('#cta-card-apropos').fadeIn()
    })
    $(document).mouseup(function (e) {
        var container = $("#cta-card-apropos");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.fadeOut();
        }
    });
</script>

</body>
</html>
