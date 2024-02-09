@extends('frontend.layouts.main')

@section('head')
<title>Transportegya</title>
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
                                <a href="{{ route('backend.landing.index') }}" class="nav-link-item">Inicio</a>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Servicios
                                    <img class="dropdown-icon" src="assets-frontend/img/icon-black-cheveron-right.svg" alt="cheveron-right" width="16" height="16" /></a>
                                <ul class="sub-menu" id="submenu-1">
                                    <li class="sub-menu--item">
                                        <a href="index.html">Rutas en vivo</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link-item">Contactos</a>
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

</div>
@endsection