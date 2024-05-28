<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>

    <!--====== Title ======-->
    <title>Gero | Modules</title>

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
                                    <a class="nav-link dropdown-toggle active" href="#modules" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        Modules
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#catalogue">Catalogue</a></li>
                                        <li><a class="dropdown-item" href="#contact">Contacts</a></li>
                                        <li><a class="dropdown-item" href="#vente">Ventes</a></li>
                                        <li><a class="dropdown-item" href="#vente">Achats</a></li>
                                        <li><a class="dropdown-item" href="#tresorie">Trésorerie</a></li>
                                        <li><a class="dropdown-item" href="#rapport">Rapports</a></li>
                                        <li><a class="dropdown-item" href="#import">Autres</a></li>
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
                            Modules
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
    <div id="catalogue" class="about-area pt-70">
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
                                Catalogue
                            </h3>
                        </div>
                        <!-- section title -->
                        <ul class="mt-3">
                            <li><i class="fa fa-check me-2 text-success"></i> Création et importation facile des
                                articles
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Gestion optimale des produits et services
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Organisation des familles et marques</li>
                            <li><i class="fa fa-check me-2 text-success"></i> Ajout d'images aux produits</li>
                            <li><i class="fa fa-check me-2 text-success"></i> Saisie des quantités d’alerte et prix de
                                revient
                            </li>
                        </ul>
                    </div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div
                        class="about-image text-center overflow-hidden wow rounded fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                        style="width: 90%"
                    >
                        <img src="{{ asset('assets/images/modules/catalog.png') }}" alt="catalog"/>
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

    <div id="contact" class="about-area pt-120">
        <div class="container">
            <div class="about-shape-2">
                <img src="{{ asset('assets/images/about/about-shape-2.svg') }}" alt="shape"/>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div
                        class="about-image text-center overflow-hidden wow rounded fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                        style="width: 90%"
                    >
                        <img src="{{ asset('assets/images/modules/contact.png') }}" alt="catalog"/>
                    </div>
                    <!-- about image -->
                </div>
                <div class="col-lg-6">
                    <div
                        class="about-content mt-50 wow fadeInLeftBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">
                                Contacts
                            </h3>
                        </div>
                        <!-- section title -->
                        <ul class="mt-3">
                            <li><i class="fa fa-check me-2 text-success"></i> Gestion centralisée des clients et
                                fournisseurs
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Vision 360 du client avec son CA, ses
                                factures, des devis et commandes, ...
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Suivi des commerciaux
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Gestion des commissions des commerciaux
                                (interne et externe)
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Gestion des ventes impayés par clients
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Filtrage et recherche avancés
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Exportation des contact clients et
                                fournisseurs
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Suivi des règlements clients et des
                                relances
                            </li>

                        </ul>
                    </div>
                    <!-- about content -->
                </div>

            </div>
            <!-- row -->
        </div>
    </div>

    <!--====== ABOUT PART START ======-->
    <div id="vente" class="about-area pt-70">
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
                                Ventes / Achats
                            </h3>
                        </div>
                        <!-- section title -->
                        <ul class="mt-3">
                            <li><i class="fa fa-check me-2 text-success"></i> Numérotation automatique des documents
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Création et conversion des documents en un
                                clic : devis, commande, bon de
                                livraison, facture, avoir, facture proforma
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Conversion en masse des documents
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Remises par article
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Dévalidation des documents
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Dupliquer en un seul clic un document déjà
                                créé pour générer une nouvelle
                                copie, sans avoir à l’éditer à nouveau
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Traçabilité des modifications et
                                changements de statut
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Calcul automatique de la marge profit
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Affichage des coordonnées bancaires et
                                modes de paiement
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Téléchargements des documents en un clic
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Rapports des ventes ca par jour, semaine,
                                mois, année
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Suive en temps réel l'historique des
                                actions effectuées sur tous vos
                                documents
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Filtrage et recherche avancés
                            </li>

                        </ul>
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
    <div id="depense" class="about-area pt-70">
        <div class="about-shape-2">
            <img src="{{ asset('assets/images/about/about-shape-2.svg') }}" alt="shape"/>
        </div>
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-6 order-lg-last">
                    <div
                        class="about-content ms-lg-auto mt-50 wow fadeInLeftBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">
                                Dépenses
                            </h3>
                        </div>
                        <!-- section title -->
                        <ul class="mt-3">
                            <li><i class="fa fa-check me-2 text-success"></i> Gestion des dépenses par catégories
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Suivi du statut de paiement
                            </li>
                        </ul>
                    <!-- about content -->
                </div>
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div
                        class="about-image text-center mt-50 rounded overflow-hidden wow fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                        style="width: 90%"
                    >
                        <img src="{{ asset('assets/images/modules/depense.png') }}" alt="about"/>
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
    <div id="stock" class="about-area pt-70">
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
                                Stock
                            </h3>
                        </div>
                        <!-- section title -->
                        <ul class="mt-3">
                            <li><i class="fa fa-check me-2 text-success"></i>Visibilité transparente des transferts multi-dépôts
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Demandes des transferts</li>
                            <li><i class="fa fa-check me-2 text-success"></i> Exportation d’inventaire par magasin
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Importation d’inventaire ordinaire ou extraordinaire
                            </li>
                        </ul>
                    </div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div
                        class="about-image text-center mt-50 wow rounded overflow-hidden fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                        style="width: 90%"
                    >
                        <img src="{{ asset('assets/images/modules/stock.png') }}" alt="about"/>
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
    <div id="tresorie" class="about-area pt-70">
        <div class="about-shape-2">
            <img src="{{ asset('assets/images/about/about-shape-2.svg') }}" alt="shape"/>
        </div>
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-6 order-lg-last">
                    <div
                        class="about-content ms-lg-auto mt-50 wow fadeInLeftBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">
                                Trésorerie
                            </h3>
                        </div>
                        <!-- section title -->
                        <ul class="mt-3">
                            <li><i class="fa fa-check me-2 text-success"></i> Gestion des comptes bancaires
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Définir les comptes principaux
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Exportation des comptes bancaires
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Organisation et suive des paiements
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Consultation des règlements et échéances
                            </li>

                        </ul>
                        <!-- about content -->
                    </div>
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div
                        class="about-image text-center mt-50 rounded overflow-hidden wow fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                        style="width: 90%"
                    >
                        <img src="{{ asset('assets/images/modules/tresorie.png') }}" alt="about"/>
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
    <div id="rapport" class="about-area pt-70">
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
                                Rapport
                            </h3>
                        </div>
                        <!-- section title -->
                        <ul class="mt-3">
                            <li><i class="fa fa-check me-2 text-success"></i>Rapport d'achat et vente
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Rapport des achats et ventes de produit
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Rapport de stock
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Calcul de bénéfice potentiel et profit margin
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Rapport de mouvement de stock
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Rapport de clients
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Rapport des commerciaux
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Rapport de tendance des produits
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i>Sessions des caisses
                            </li>
                        </ul>
                    </div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div
                        class="about-image text-center mt-50 wow rounded overflow-hidden fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                        style="width: 90%"
                    >
                        <img src="{{ asset('assets/images/modules/rapport.png') }}" alt="about"/>
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
    <div id="import" class="about-area pt-70">
        <div class="about-shape-2">
            <img src="{{ asset('assets/images/about/about-shape-2.svg') }}" alt="shape"/>
        </div>
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-6 order-lg-last">
                    <div
                        class="about-content ms-lg-auto mt-50 wow fadeInLeftBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">
                                Import /Export
                            </h3>
                        </div>
                        <!-- section title -->
                        <ul class="mt-3">
                            <li><i class="fa fa-check me-2 text-success"></i> Importation et exportation des clients et fournisseurs
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Importation et exportation des produits et services
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Importation et exportation de stock
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Importation et exportation des ventes et achats
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Importation et exportation des paiements
                            </li>

                        </ul>
                        <!-- about content -->
                    </div>
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div
                        class="about-image text-center mt-50 rounded overflow-hidden wow fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                        style="width: 90%"
                    >
                        <img src="{{ asset('assets/images/modules/import.png') }}" alt="about"/>
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
    <div id="users" class="about-area pt-70">
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
                                Utilisateurs
                            </h3>
                        </div>
                        <!-- section title -->
                        <ul class="mt-3">
                            <li><i class="fa fa-check me-2 text-success"></i> Multi-utilisateurs</li>
                            <li><i class="fa fa-check me-2 text-success"></i> Gestion des rôles et permissions</li>

                        </ul>
                    </div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div
                        class="about-image text-center mt-50 wow rounded overflow-hidden fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                        style="width: 90%"
                    >
                        <img src="{{ asset('assets/images/modules/users.png') }}" alt="about"/>
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
    <div class="about-area pt-70" id="affairs">
        <div class="about-shape-2">
            <img src="{{ asset('assets/images/about/about-shape-2.svg') }}" alt="shape"/>
        </div>
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-6 order-lg-last">
                    <div
                        class="about-content ms-lg-auto mt-50 wow fadeInLeftBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                    >
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">
                                Affaires
                            </h3>
                        </div>
                        <!-- section title -->
                        <ul class="mt-3">
                            <li><i class="fa fa-check me-2 text-success"></i> Création des affaires par client</li>
                        </ul>
                        <!-- about content -->
                    </div>
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div
                        class="about-image text-center rounded overflow-hidden wow fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                        style="width: 90%"
                    >
                        <img src="{{ asset('assets/images/modules/affaires.png') }}" alt="affaires"/>
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
    <div class="about-area pt-70" id="personalisation">
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
                                Personnalisation
                            </h3>
                        </div>
                        <!-- section title -->
                        <ul class="mt-3">
                            <li><i class="fa fa-check me-2 text-success"></i> Des modèles de documents professionnels et personnalisables (logo,
                                couleurs, entête ...)</li>
                            <li><i class="fa fa-check me-2 text-success"></i> Gestion des taxes applicables
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Option de modification de référence et compteurs des documents
                            </li>
                            <li><i class="fa fa-check me-2 text-success"></i> Activation ou désactivation de formes juridique </li>
                        </ul>
                    </div>
                    <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div
                        class="about-image text-center  wow rounded overflow-hidden fadeInRightBig"
                        data-wow-duration="1s"
                        data-wow-delay="0.5s"
                        style="width: 90%"
                    >
                        <img src="{{ asset('assets/images/modules/personalisation.png') }}" alt="about"/>
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
</script>

</body>
</html>
