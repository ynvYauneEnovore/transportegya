@extends('frontend.layouts.main')

@section('head')
<title>Transportegya</title>
@endsection

@section('content')
<style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
<div class="page-wrapper relative z-[1] text-black">
    <!--...::: Header Start :::... -->
    <header class="site-header site-header--absolute is--white py-3" id="sticky-menu">
        <div class="global-container">
            <div class="flex items-center justify-between gap-x-8">
                <!-- Header Logo -->
                <a href="{{ route('backend.landing.index') }}" class="">
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
                                <a href="{{ route('backend.landing.index') }}" class="nav-link-item">Inicio</a>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Servicios
                                    <img class="dropdown-icon" src="assets-frontend/img/icon-black-cheveron-right.svg" alt="cheveron-right" width="16" height="16" /></a>
                                <ul class="sub-menu" id="submenu-1">
                                    <li class="sub-menu--item">
                                        <a href="{{ route('backend.rutas.index') }}">Rutas en vivo</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('backend.contactos.index') }}" class="nav-link-item">Contactos</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link-item">Accesos</a>
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
        <!--...::: Breadcrumb Section Start :::... -->
        <section id="hero-section">
            <div class="relative z-[1] overflow-hidden text-center text-white">
                <!-- Section Spacer -->
                <div class="bg-cover bg-no-repeat pb-20 pt-28 md:pb-[265px] md:pt-40 lg:pt-44 xl:pt-[224px]" style="background-image: url('{{ asset('images/6.jpeg') }}')">
                    <!-- Section Container -->
                    <div class="global-container">
                        <div class="breadcrumb-block">
                            <h1 class="breadcrumb-title">Rutas en vivo</h1>
                            <ul class="breadcrumb-nav">
                                <li><a href="{{ route('backend.landing.index') }}">Inicio</a></li>
                                <li>Rutas en vivo</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Section Container -->
                </div>

                <!-- Background Gradient -->
                <div class="absolute left-1/2 top-[80%] -z-[1] h-[1280px] w-[1280px] -translate-x-1/2 rounded-full bg-gradient-to-t from-[#39FF14] to-[#37ff1467] blur-[250px]">
                </div>
            </div>
            <!-- Section Spacer -->
        </section>s
        <!--...::: Breadcrumb Section End :::... -->
        <br>
        <hr><br>

        <!--...::: Service Section Start :::... -->
        <section id="section-service">
            <!-- Section Spacer -->
            <div class="pb-20 xl:pb-[150px]">
                <!-- Section Container -->
                <div class="global-container">
                    <!-- Section Content Block -->
                    <div class="jos mb-10 text-center lg:mb-16 xl:mb-20">
                        <div class="mx-auto max-w-md lg:max-w-xl xl:max-w-[950px]">
                            <h2>Rutas que estan en moviminetos</h2>
                        </div>
                    </div>
                    <!-- Section Content Block -->
                    <!-- Service List -->
                    <ul class="jos grid grid-cols-1 gap-[2px] overflow-hidden rounded-[10px] border-2 border-black bg-black sm:grid-cols-2 lg:grid-cols-4">
                        <!-- Service Item -->
                        @foreach ($routeLive as $key => $user)

                        <li class="group bg-white p-[30px] transition-all duration-300 ease-in-out hover:bg-black">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="{{\App\Models\User::find($user->user_id)->avatar}}" alt="testimonial-img" width="60" height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <span class="block text-lg font-semibold leading-[1.6]">
                                {{\App\Models\User::find($user->user_id)->name}}
                            </span>
                            <h3 class="mb-4 block text-xl leading-tight -tracking-[0.5px] group-hover:text-white xl:text-2xl xxl:text-[28px]">
                                <a href="service-details.html" class="hover:text-colorOrangyRed">
                                    {{\App\Models\Route::find($user->route_id)->description}}
                                </a>
                            </h3>
                            Hora de salida:

                            <p class="mb-5 duration-300 group-hover:text-white">
                                {{\App\Models\Assist::find($user->assists_id)->hora_entrada}}
                            </p>
                            Estimación de llegada:

                            <p class="mb-5 duration-300 group-hover:text-white">
                                {{\App\Models\Assist::find($user->assists_id)->hora_salida}}
                            </p>
<!-- 
                            <a href="service-details.html" class="relative inline-block h-[30px] w-[30px] duration-300">
                                <img src="assets-frontend/img/th-1/arrow-right-black.svg" alt="arrow-right-black" width="30" height="30" />
                                <img src="assets-frontend/img/th-1/arrow-right-orange.svg" alt="arrow-right-black" width="30" height="30" class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100" />
                            </a> -->
                        </li>
                        @endforeach

                        <!-- Service Item -->
                    </ul>
                    <!-- Service List -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </section>
        <!--...::: Service Section End :::... -->
        <h1>Mapa de la ruta</h1>
    <div id="map"></div>

    </main>
</div>



<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


<script>
        var map = L.map('map').setView([51.505, -0.09], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="#">ynvYauneEnovore</a> contributors'
        }).addTo(map);

        var latlngs = [
            [-10.825844, -65.389669], // San Francisco
            [-11.002913, -66.083929] // Los Angeles
            // Puedes agregar más puntos aquí
        ];

        var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);
        map.fitBounds(polyline.getBounds());
    </script>
@endsection

