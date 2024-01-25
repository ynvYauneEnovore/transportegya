@extends('frontend.layouts.main')

@section('head')
<title>Iglesias</title>
@endsection

@section('content')

<div class="page-wrapper relative z-[1] text-black">
    <!--...::: Header Start :::... -->
    <header class="site-header site-header--absolute is--white py-3" id="sticky-menu">
        <div class="global-container">
            <div class="flex items-center justify-between gap-x-8">
                <!-- Header Logo -->
                <a href="index.html" class="">
                    <img src="images/grug.svg" alt="AIMass" width="96" height="24" />
                </a>
                <!-- Header Logo -->

                <!-- Header Navigation -->
                <div class="menu-block-wrapper">
                    <div class="menu-overlay"></div>
                    <nav class="menu-block" id="append-menu-header">
                        <div class="mobile-menu-head">
                            <div class="go-back">
                                <img class="dropdown-icon" src="assets-frontend/img/icon-black-long-arrow-right.svg" alt="cheveron-right" width="16" height="16" />
                            </div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="site-menu-main is-text-white">
                            <li class="nav-item">
                                <a href="about.html" class="nav-link-item">Inicio</a>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Servicios
                                    <img class="dropdown-icon" src="assets-frontend/img/icon-black-cheveron-right.svg" alt="cheveron-right" width="16" height="16" /></a>
                                <ul class="sub-menu" id="submenu-1">
                                    <li class="sub-menu--item">
                                        <a href="index.html">home 01</a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="index-2.html">home 02</a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="index-3.html">home 03</a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="index-4.html"> home 04</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Nosotros
                                    <img class="dropdown-icon" src="assets-frontend/img/icon-black-cheveron-right.svg" alt="cheveron-right" width="16" height="16" /></a>
                                <ul class="sub-menu" id="submenu-2">
                                    <li class="sub-menu--item">
                                        <a href="services.html">Services</a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="service-details.html">Service Details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Politicas
                                    <img class="dropdown-icon" src="assets-frontend/img/icon-black-cheveron-right.svg" alt="cheveron-right" width="16" height="16" /></a>
                                <ul class="sub-menu" id="submenu-3">
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">blogs
                                            <img class="dropdown-icon" src="assets-frontend/img/icon-black-cheveron-right.svg" alt="cheveron-right" width="16" height="16" /></a>
                                        <ul class="sub-menu shape-none" id="submenu-4">
                                            <li class="sub-menu--item">
                                                <a href="blog.html">blogs</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="blog-details.html">blog details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Team
                                            <img class="dropdown-icon" src="assets-frontend/img/icon-black-cheveron-right.svg" alt="cheveron-right" width="16" height="16" />
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-5">
                                            <li class="sub-menu--item">
                                                <a href="teams.html">Teams</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="team-details.html">Teams Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">FAQ
                                            <img class="dropdown-icon" src="assets-frontend/img/icon-black-cheveron-right.svg" alt="cheveron-right" width="16" height="16" />
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-6">
                                            <li class="sub-menu--item">
                                                <a href="faq.html">FAQ-1</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="faq-2.html">FAQ-2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Portfolio
                                            <img class="dropdown-icon" src="assets-frontend/img/icon-black-cheveron-right.svg" alt="cheveron-right" width="16" height="16" />
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-7">
                                            <li class="sub-menu--item">
                                                <a href="portfolio.html">Portfolio</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="portfolio-details.html">Portfolio Details</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="pricing.html" data-menu-get="h3" class="drop-trigger">Pricing
                                        </a>
                                    </li>

                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Utilities
                                            <img class="dropdown-icon" src="assets-frontend/img/icon-black-cheveron-right.svg" alt="cheveron-right" width="16" height="16" />
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-8">
                                            <li class="sub-menu--item">
                                                <a href="error-404.html">Error 404</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="">Login</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="signup.html">Signup</a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="reset-password.html">Reset Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link-item">Contactos</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Header Navigation -->

                <!-- Header User Event -->
                <div class="flex items-center gap-6">
                    <a href="{{ asset('login') }}" class="button hidden h-full rounded border-none bg-verdeBandera py-3 text-base text-black after:border-none after:bg-white lg:inline-block">Acceder</a>
                    <div class="block lg:hidden">
                        <button class="mobile-menu-trigger is-white">
                            <span></span>
                        </button>
                    </div>
                </div>
                <!-- Header User Event -->
            </div>
        </div>
    </header>
    <!--...::: Header End :::... -->

    <main class="main-wrapper relative overflow-hidden">
        <!--...::: Hero Section Start :::... -->
        <section id="hero-section">
            <div class="relative z-[1] overflow-hidden text-center text-white">
                <!-- Section Spacer -->
                <div class="bg-cover bg-no-repeat pb-20 pt-28 md:pb-[265px] md:pt-40 lg:pt-44 xl:pt-[224px]" style="background-image: url('{{ asset('images/3.jpeg') }}')">
                    <!-- Section Container -->
                    <div class="global-container">
                        <h1 class="jos mb-6 font-spaceGrotesk leading-none -tracking-[3px] text-white">
                            Sindicato de Transporte
                        </h1>
                        <div class="mx-auto max-w-[1090px]">
                            <p class="leading-[1.33] lg:text-xl xl:text-2xl bg-colorGreen rounded-full" style="padding: 20px;">
                                Descubre nuestros logros, eventos y noticias del sector del transporte <br>
                                explorando nuestro sitio. Únete a nosotros para fortalecer la comunidad <br>
                                y luchar juntos por un futuro más justo y próspero.
                            </p>
                        </div>
                        <!-- <form action="#" method="post" class="jos mt-11 text-base font-bold">
                            <div class="relative mx-auto h-[60px] max-w-[500px] overflow-hidden rounded">
                                <input type="email" placeholder="Ingresa tu email" class="h-full w-full bg-colorCodGray px-6 pr-[150px]" required />
                                <button type="submit" class="button absolute right-0 top-0 inline-block h-full rounded border-none bg-colorGreen py-0 text-black after:border-none after:bg-white">
                                    Empezar
                                </button>
                            </div>
                        </form> -->
                        <!-- <div class="jos mt-4 flex items-center justify-center gap-x-[10px] text-center text-base">
                            <img src="assets-frontend/img/th-4/icon-green-badge-check.svg" alt="icon-green-badge-check.svg" width="20" height="20" class="inline-block" />
                            <p>
                                Al registrarse, aceptas nuestra
                                <a href="http://www.example.com" target="_blank" rel="noopener noreferrer" class="underline hover:text-colorGreen">Términos y Condiciones.</a>
                            </p>
                        </div> -->
                    </div>
                    <!-- Section Container -->
                </div>

                <!-- Background Gradient -->
                <div class="absolute left-1/2 top-[80%] -z-[1] h-[1280px] w-[1280px] -translate-x-1/2 rounded-full bg-gradient-to-t from-[#39FF14] to-[#37ff1467] blur-[250px]">
                </div>
            </div>
            <!-- Section Spacer -->
        </section>
        <!--...::: Hero Section End :::... -->

        <!--...::: Promo Section Start :::... -->
        <div id="promo-section">
            <div class="relative z-[1] pt-20 md:-mt-[135px] md:pt-0">
                <!-- Section Container -->
                <div class="global-container">
                    <ul class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <li class="jos rounded-[10px] bg-colorGreen p-[30px] text-white" data-jos_delay="0.1">
                            <div class="mb-6 flex items-center gap-x-6">
                                <div class="h-[50px] w-[50px]">
                                    <img src="images/logro.svg" alt="icon-black-promo" width="50" height="50" class="h-full w-auto" />
                                </div>
                                <div class="flex-1 font-spaceGrotesk text-3xl leading-[1.33]">
                                    Logros Laborales
                                </div>
                            </div>
                            <p class="text-[21px] leading-[1.4]">
                                Explora los logros colectivos que hemos alcanzado como sindicato para mejorar las condiciones laborales en el transporte de autos.
                            </p>
                        </li>
                        <li class="jos rounded-[10px] bg-colorGreen p-[30px] text-white" data-jos_delay="0.2">
                            <div class="mb-6 flex items-center gap-x-6">
                                <div class="h-[50px] w-[50px]">
                                    <img src="images/noticia.svg" alt="icon-black-promo" width="50" height="50" class="h-full w-auto" />
                                </div>
                                <div class="flex-1 font-spaceGrotesk text-3xl leading-[1.33]">
                                    Noticias del Transporte
                                </div>
                            </div>
                            <p class="text-[21px] leading-[1.4]">
                                Accede a las últimas noticias del sector del transporte de autos y cómo impactan en nuestros miembros y sus derechos laborales.
                            </p>
                        </li>
                        <li class="jos rounded-[10px] bg-colorGreen p-[30px] text-white" data-jos_delay="0.3">
                            <div class="mb-6 flex items-center gap-x-6">
                                <div class="h-[50px] w-[50px]">
                                    <img src="images/seguridad.svg" alt="icon-black-promo" width="50" height="50" class="h-full w-auto" />
                                </div>
                                <div class="flex-1 font-spaceGrotesk text-3xl leading-[1.33]">
                                    Seguridad y Bienestar
                                </div>
                            </div>
                            <p class="text-[21px] leading-[1.4]">
                                Nuestro compromiso es garantizar la seguridad y el bienestar de los trabajadores en el transporte de autos.
                            </p>
                        </li>
                    </ul>
                </div>
                <!-- Section Container -->
            </div>
        </div>
        <!--...::: Promo Section End :::... -->

        <!--...::: Content Section-1 Start :::... -->
        <section id="section-content-1">
            <!-- Section Spacer -->
            <div class="py-20 xl:py-[130px]">
                <!-- Section Container -->
                <div class="global-container">
                    <div class="grid items-center gap-10 md:grid-cols-[minmax(0,_1fr)_1.3fr] lg:gap-[60px] xl:gap-x-[94px]">
                        <div class="jos" data-jos_animation="fade-left">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="images/2.jpeg" alt="content-img-2" width="550" height="550" class="h-auto w-full" />
                            </div>
                        </div>
                        <div class="jos" data-jos_animation="fade-right">
                            <!-- Section Content Block -->
                            <div class="mb-6">
                                <h2 class="font-spaceGrotesk text-4xl font-medium leading-[1.06] -tracking-[2px] text-black sm:text-[44px] lg:text-[56px] xl:text-[60px]">
                                    Conectando Ciudades, Facilitando Viajes
                                </h2>
                            </div>
                            <!-- Section Content Block -->

                            <div>
                                <p class="mb-8 text-lg leading-[1.42] last:mb-0 lg:text-[21px]">
                                    Empresas de transporte confían en nuestras soluciones para conectar ciudades,
                                    brindando viajes seguros y eficientes a lo largo del país.
                                </p>
                                <p class="mb-8 text-lg leading-[1.42] last:mb-0 lg:text-[21px]">
                                    Nuestra plataforma de transporte utiliza tecnología avanzada para optimizar
                                    rutas, gestionar flotas y garantizar una experiencia sin contratiempos.
                                </p>

                                <!-- <a href="https://www.example.com" target="_blank" rel="noopener noreferrer" class="button inline-block h-full rounded border-none bg-colorGreen py-3 text-base text-black after:border-none after:bg-white">Explore
                                    the Platform</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </section>
        <!--...::: Content Section-1 End :::... -->



        <!-- Separator -->
        <div class="global-container overflow-hidden">
            <div class="h-[1px] w-full bg-colorGreen"></div>
        </div>
        <!-- Separator -->

        <!--...::: Service Section Start :::... -->
        <section id="service-section">
            <!-- Section Spacer -->
            <div class="pb-20 pt-20 xl:pb-[130px] xl:pt-[150px]">
                <!-- Section Container -->
                <div class="global-container">
                    <!-- Section Content Block -->
                    <div class="jos mx-auto mb-10 text-center md:mb-16 md:max-w-xl lg:mb-20 lg:max-w-3xl xl:max-w-[856px]">
                        <h2 class="font-spaceGrotesk text-4xl font-medium leading-[1.06] -tracking-[2px] text-black sm:text-[44px] lg:text-[56px] xl:text-[70px]">
                            Get all the tools to tackle cybersecurity together
                        </h2>
                    </div>
                    <!-- Section Content Block -->

                    <!-- Service List -->
                    <ul class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                        <!-- Service Item -->
                        <li class="jos group rounded-[10px] bg-colorGreen p-[30px]" data-jos_delay="0.1">
                            <div class="mb-8 flex items-center gap-x-6">
                                <div class="h-[50px] w-[50px]">
                                    <img src="assets-frontend/img/th-4/icon-green-service-1.svg" alt="icon-green-service" width="50" height="50" class="h-full w-auto" />
                                </div>
                                <div class="flex-1 font-spaceGrotesk text-3xl leading-[1.33]">
                                    Threat Detection
                                </div>
                            </div>
                            <p class="mb-7 text-[21px] leading-[1.4]">
                                AI can identify patterns & improve the detection of unknown
                                threats.
                            </p>

                            <a href="service-details.html" class="relative flex h-[30px] w-[30px] items-center justify-center overflow-hidden">
                                <img src="assets-frontend/img/th-4/icon-white-arrow-right.svg" alt="icon-white-arrow-right" width="30" height="30" class="relative left-0 transition-all duration-300 group-hover:left-full" />
                                <img src="assets-frontend/img/th-4/icon-green-arrow-right.svg" alt="icon-white-arrow-right" width="30" height="30" class="absolute -left-full transition-all duration-300 group-hover:left-0" />
                            </a>
                        </li>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <li class="jos group rounded-[10px] bg-colorGreen p-[30px]" data-jos_delay="0.2">
                            <div class="mb-8 flex items-center gap-x-6">
                                <div class="h-[50px] w-[50px]">
                                    <img src="assets-frontend/img/th-4/icon-green-service-2.svg" alt="icon-green-service" width="50" height="50" class="h-full w-auto" />
                                </div>
                                <div class="flex-1 font-spaceGrotesk text-3xl leading-[1.33]">
                                    Phishing Detection
                                </div>
                            </div>
                            <p class="mb-7 text-[21px] leading-[1.4]">
                                AI examines email content & sender behavior to identify
                                phishing links.
                            </p>

                            <a href="service-details.html" class="relative flex h-[30px] w-[30px] items-center justify-center overflow-hidden">
                                <img src="assets-frontend/img/th-4/icon-white-arrow-right.svg" alt="icon-white-arrow-right" width="30" height="30" class="relative left-0 transition-all duration-300 group-hover:left-full" />
                                <img src="assets-frontend/img/th-4/icon-green-arrow-right.svg" alt="icon-white-arrow-right" width="30" height="30" class="absolute -left-full transition-all duration-300 group-hover:left-0" />
                            </a>
                        </li>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <li class="jos group rounded-[10px] bg-colorGreen p-[30px]" data-jos_delay="0.3">
                            <div class="mb-8 flex items-center gap-x-6">
                                <div class="h-[50px] w-[50px]">
                                    <img src="assets-frontend/img/th-4/icon-green-service-3.svg" alt="icon-green-service" width="50" height="50" class="h-full w-auto" />
                                </div>
                                <div class="flex-1 font-spaceGrotesk text-3xl leading-[1.33]">
                                    Network Security
                                </div>
                            </div>
                            <p class="mb-7 text-[21px] leading-[1.4]">
                                Network traffic attempts and can take automated actions to
                                block.
                            </p>

                            <a href="service-details.html" class="relative flex h-[30px] w-[30px] items-center justify-center overflow-hidden">
                                <img src="assets-frontend/img/th-4/icon-white-arrow-right.svg" alt="icon-white-arrow-right" width="30" height="30" class="relative left-0 transition-all duration-300 group-hover:left-full" />
                                <img src="assets-frontend/img/th-4/icon-green-arrow-right.svg" alt="icon-white-arrow-right" width="30" height="30" class="absolute -left-full transition-all duration-300 group-hover:left-0" />
                            </a>
                        </li>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <li class="jos group rounded-[10px] bg-colorGreen p-[30px]" data-jos_delay="0.4">
                            <div class="mb-8 flex items-center gap-x-6">
                                <div class="h-[50px] w-[50px]">
                                    <img src="assets-frontend/img/th-4/icon-green-service-4.svg" alt="icon-green-service" width="50" height="50" class="h-full w-auto" />
                                </div>
                                <div class="flex-1 font-spaceGrotesk text-3xl leading-[1.33]">
                                    Encryption Tools
                                </div>
                            </div>
                            <p class="mb-7 text-[21px] leading-[1.4]">
                                Encryption software and hardware protect data by converting
                                it.
                            </p>

                            <a href="service-details.html" class="relative flex h-[30px] w-[30px] items-center justify-center overflow-hidden">
                                <img src="assets-frontend/img/th-4/icon-white-arrow-right.svg" alt="icon-white-arrow-right" width="30" height="30" class="relative left-0 transition-all duration-300 group-hover:left-full" />
                                <img src="assets-frontend/img/th-4/icon-green-arrow-right.svg" alt="icon-white-arrow-right" width="30" height="30" class="absolute -left-full transition-all duration-300 group-hover:left-0" />
                            </a>
                        </li>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <li class="jos group rounded-[10px] bg-colorGreen p-[30px]" data-jos_delay="0.5">
                            <div class="mb-8 flex items-center gap-x-6">
                                <div class="h-[50px] w-[50px]">
                                    <img src="assets-frontend/img/th-4/icon-green-service-5.svg" alt="icon-green-service" width="50" height="50" class="h-full w-auto" />
                                </div>
                                <div class="flex-1 font-spaceGrotesk text-3xl leading-[1.33]">
                                    Password Managers
                                </div>
                            </div>
                            <p class="mb-7 text-[21px] leading-[1.4]">
                                Password managers help users create, store, & unique
                                passwords.
                            </p>

                            <a href="service-details.html" class="relative flex h-[30px] w-[30px] items-center justify-center overflow-hidden">
                                <img src="assets-frontend/img/th-4/icon-white-arrow-right.svg" alt="icon-white-arrow-right" width="30" height="30" class="relative left-0 transition-all duration-300 group-hover:left-full" />
                                <img src="assets-frontend/img/th-4/icon-green-arrow-right.svg" alt="icon-white-arrow-right" width="30" height="30" class="absolute -left-full transition-all duration-300 group-hover:left-0" />
                            </a>
                        </li>
                        <!-- Service Item -->
                        <!-- Service Item -->
                        <li class="jos group rounded-[10px] bg-colorGreen p-[30px]" data-jos_delay="0.6">
                            <div class="mb-8 flex items-center gap-x-6">
                                <div class="h-[50px] w-[50px]">
                                    <img src="assets-frontend/img/th-4/icon-green-service-6.svg" alt="icon-green-service" width="50" height="50" class="h-full w-auto" />
                                </div>
                                <div class="flex-1 font-spaceGrotesk text-3xl leading-[1.33]">
                                    Secure Email
                                </div>
                            </div>
                            <p class="mb-7 text-[21px] leading-[1.4]">
                                These solutions filter and block email-based threats emails,
                                spam.
                            </p>

                            <a href="service-details.html" class="relative flex h-[30px] w-[30px] items-center justify-center overflow-hidden">
                                <img src="assets-frontend/img/th-4/icon-white-arrow-right.svg" alt="icon-white-arrow-right" width="30" height="30" class="relative left-0 transition-all duration-300 group-hover:left-full" />
                                <img src="assets-frontend/img/th-4/icon-green-arrow-right.svg" alt="icon-white-arrow-right" width="30" height="30" class="absolute -left-full transition-all duration-300 group-hover:left-0" />
                            </a>
                        </li>
                        <!-- Service Item -->
                    </ul>
                    <!-- Service List -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </section>
        <!--...::: Service Section End :::... -->

        <!--...::: Text Slide Section Start :::... -->
        <div id="text-slide-section">
            <div class="bg-colorGreen py-5">
                <div class="horizontal-slide-from-left-to-right grid grid-flow-col whitespace-nowrap">
                    <div class="flex text-4xl font-bold uppercase leading-5 text-black">
                        #transporte #viajes #logística #flotadevehículos
                    </div>
                    <div class="flex text-4xl font-bold uppercase leading-5 text-black">
                        #transporte #conexión #ciudades #serviciodecalidad
                    </div>
                    <div class="flex text-4xl font-bold uppercase leading-5 text-black">
                        #logísticaeficiente #seguridad #viajessinpreocupaciones
                    </div>
                </div>
            </div>
        </div>
        <!--...::: Text Slide Section End :::... -->

        <!-- Separator -->
        <div class="global-container overflow-hidden">
            <div class="h-[1px] w-full bg-colorGreen"></div>
        </div>
        <!-- Separator -->

        <!--...::: FAQ Section Start :::... -->
        <section class="faq-section">
            <!-- Section Spacer -->
            <div class="py-20 xl:pb-[150px] xl:pt-[130px]">
                <!-- Section Container -->
                <div class="global-container">
                    <!-- Section Content Block -->
                    <div class="jos mx-auto mb-10 text-center md:mb-16 md:max-w-xl lg:mb-20 lg:max-w-3xl xl:max-w-[856px]">
                        <h2 class="font-spaceGrotesk text-4xl font-medium leading-[1.06] -tracking-[2px] text-black sm:text-[44px] lg:text-[56px] xl:text-[70px]">
                            Our experts are able to answer all your questions
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                    <!-- Accordion-->
                    <ul class="accordion flex flex-col gap-y-6">
                        <!-- Accordion items -->
                        <li class="jos accordion-item is-2 rounded-[10px] bg-colorGreen px-7 py-[30px] active" data-jos_delay="0.1">
                            <div class="accordion-header mb-[10px] flex items-center justify-between text-xl leading-[1.33] -tracking-[1px] lg:text-3xl">
                                <h5 class="font-spaceGrotesk text-white">
                                    What is AI cybersecurity, and how does it differ from
                                    traditional cybersecurity?
                                </h5>
                                <div class="accordion-icon is-outline-green">
                                    <span class="accordion-icon-plus"></span>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    AI refers to the simulation of human intelligence in
                                    machines, enabling them to perform tasks that typically
                                    require human intelligence, such as learning, reasoning,
                                    problem-solving, and decision-making.
                                </p>
                            </div>
                        </li>
                        <!-- Accordion items -->
                        <!-- Accordion items -->
                        <li class="jos accordion-item is-2 rounded-[10px] bg-colorGreen px-7 py-[30px]" data-jos_delay="0.1">
                            <div class="accordion-header mb-[10px] flex items-center justify-between text-xl leading-[1.33] -tracking-[1px] lg:text-3xl">
                                <h5 class="font-spaceGrotesk text-white">
                                    What types of threats can AI cybersecurity protect
                                    against?
                                </h5>
                                <div class="accordion-icon is-outline-green">
                                    <span class="accordion-icon-plus"></span>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    AI refers to the simulation of human intelligence in
                                    machines, enabling them to perform tasks that typically
                                    require human intelligence, such as learning, reasoning,
                                    problem-solving, and decision-making.
                                </p>
                            </div>
                        </li>
                        <!-- Accordion items -->
                        <!-- Accordion items -->
                        <li class="jos accordion-item is-2 rounded-[10px] bg-colorGreen px-7 py-[30px]" data-jos_delay="0.1">
                            <div class="accordion-header mb-[10px] flex items-center justify-between text-xl leading-[1.33] -tracking-[1px] lg:text-3xl">
                                <h5 class="font-spaceGrotesk text-white">
                                    How does AI help in threat detection and prevention?
                                </h5>
                                <div class="accordion-icon is-outline-green">
                                    <span class="accordion-icon-plus"></span>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    AI refers to the simulation of human intelligence in
                                    machines, enabling them to perform tasks that typically
                                    require human intelligence, such as learning, reasoning,
                                    problem-solving, and decision-making.
                                </p>
                            </div>
                        </li>
                        <!-- Accordion items -->
                        <!-- Accordion items -->
                        <li class="jos accordion-item is-2 rounded-[10px] bg-colorGreen px-7 py-[30px]" data-jos_delay="0.1">
                            <div class="accordion-header mb-[10px] flex items-center justify-between text-xl leading-[1.33] -tracking-[1px] lg:text-3xl">
                                <h5 class="font-spaceGrotesk text-white">
                                    Is AI cybersecurity effective against zero-day attacks?
                                </h5>
                                <div class="accordion-icon is-outline-green">
                                    <span class="accordion-icon-plus"></span>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    AI refers to the simulation of human intelligence in
                                    machines, enabling them to perform tasks that typically
                                    require human intelligence, such as learning, reasoning,
                                    problem-solving, and decision-making.
                                </p>
                            </div>
                        </li>
                        <!-- Accordion items -->
                        <!-- Accordion items -->
                        <li class="jos accordion-item is-2 rounded-[10px] bg-colorGreen px-7 py-[30px]" data-jos_delay="0.1">
                            <div class="accordion-header mb-[10px] flex items-center justify-between text-xl leading-[1.33] -tracking-[1px] lg:text-3xl">
                                <h5 class="font-spaceGrotesk text-white">
                                    What is the role of human cybersecurity professionals in
                                    AI cybersecurity?
                                </h5>
                                <div class="accordion-icon is-outline-green">
                                    <span class="accordion-icon-plus"></span>
                                </div>
                            </div>
                            <div class="accordion-content">
                                <p>
                                    AI refers to the simulation of human intelligence in
                                    machines, enabling them to perform tasks that typically
                                    require human intelligence, such as learning, reasoning,
                                    problem-solving, and decision-making.
                                </p>
                            </div>
                        </li>
                        <!-- Accordion items -->
                    </ul>
                    <!-- Accordion-->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </section>
        <!--...::: FAQ Section End :::... -->

        <!--...::: Testimonial Section Start :::... -->
        <section id="testimonial-section">
            <!-- Section Spacer -->
            <div class="pb-20 xl:pb-[150px]">
                <!-- Section Container -->
                <div class="global-container">
                    <div class="mb-10 flex flex-wrap items-center justify-between gap-8 md:mb-16 lg:mb-20">
                        <!-- Section Content Block -->
                        <div class="jos max-w-[480px] lg:max-w-2xl xl:max-w-[840px]">
                            <h2 class="font-spaceGrotesk text-4xl font-medium leading-[1.06] -tracking-[2px] text-black sm:text-[44px] lg:text-[56px] xl:text-[70px]">
                                Rutas en movimiento
                            </h2>
                        </div>
                        <!-- Section Content Block -->
                        <a href="https://www.example.com" target="_blank" rel="noopener noreferrer" class="button inline-block h-full rounded border-none bg-colorGreen py-3 text-base text-black after:border-none after:bg-white">
                            Ver más detalles</a>
                    </div>
                </div>
                <!-- Section Container -->
                <!-- Testimonial List -->
                <div class="horizontal-slide-from-right-to-left grid w-[200%] grid-flow-col gap-6">
                    <!-- Testimonial Item -->
                    <div class="flex w-[415px] flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-black">
                        <div class="block">
                            <img src="assets-frontend/img/th-4/icon-green-rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            “This AI SaaS tool has revolutionized the way we process and
                            analyze data. This is a game-changer for our business.”
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets-frontend/img/th-1/testimonial-img-1.jpg" alt="testimonial-img" width="60" height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Max Weber
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    HR Manager
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="flex w-[415px] flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-black">
                        <div class="block">
                            <img src="assets-frontend/img/th-4/icon-green-rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            "It answers immediately, and we've seen a significant
                            reduction in response time. Our customers love it and so do
                            we!"
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets-frontend/img/th-1/testimonial-img-2.jpg" alt="testimonial-img" width="60" height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Douglas Smith
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    Businessman
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="flex w-[415px] flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-black">
                        <div class="block">
                            <img src="assets-frontend/img/th-4/icon-green-rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            "It is accurate, fast and supports multiple languages support.
                            It is a must for any international business success."
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets-frontend/img/th-1/testimonial-img-3.jpg" alt="testimonial-img" width="60" height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Abraham Maslo
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    Founder @ Marketing Company
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="flex w-[415px] flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-black">
                        <div class="block">
                            <img src="assets-frontend/img/th-4/icon-green-rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            "Security is a top concern for us, and AI SaaS takes it
                            seriously. It's a reassuring layer of protection for our
                            organization."
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets-frontend/img/th-1/testimonial-img-4.jpg" alt="testimonial-img" width="60" height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Jack Fayol
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    HR Manager
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="flex w-[415px] flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-black">
                        <div class="block">
                            <img src="assets-frontend/img/th-4/icon-green-rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            "We were concerned about integrating their APIs were well
                            documented, and their support team was super cool."
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets-frontend/img/th-1/testimonial-img-5.jpg" alt="testimonial-img" width="60" height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Karen Lynn
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    Software Engineer
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="flex w-[415px] flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-black">
                        <div class="block">
                            <img src="assets-frontend/img/th-4/icon-green-rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            "The return on investment has exceeded our expectations. it's
                            an investment in the future of our business."
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets-frontend/img/th-1/testimonial-img-6.jpg" alt="testimonial-img" width="60" height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Henry Ochi
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    Bank Manager
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="flex w-[415px] flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-black">
                        <div class="block">
                            <img src="assets-frontend/img/th-4/icon-green-rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            “This AI SaaS tool has revolutionized the way we process and
                            analyze data. This is a game-changer for our business.”
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets-frontend/img/th-1/testimonial-img-1.jpg" alt="testimonial-img" width="60" height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Max Weber
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    HR Manager
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="flex w-[415px] flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-black">
                        <div class="block">
                            <img src="assets-frontend/img/th-4/icon-green-rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            "It answers immediately, and we've seen a significant
                            reduction in response time. Our customers love it and so do
                            we!"
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets-frontend/img/th-1/testimonial-img-2.jpg" alt="testimonial-img" width="60" height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Douglas Smith
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    Businessman
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="flex w-[415px] flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-black">
                        <div class="block">
                            <img src="assets-frontend/img/th-4/icon-green-rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            "It is accurate, fast and supports multiple languages support.
                            It is a must for any international business success."
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets-frontend/img/th-1/testimonial-img-3.jpg" alt="testimonial-img" width="60" height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Abraham Maslo
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    Founder @ Marketing Company
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                </div>
                <!-- Testimonial List -->
            </div>
        </section>
        <!--...::: Testimonial Section End :::... -->
    </main>
</div>
@endsection