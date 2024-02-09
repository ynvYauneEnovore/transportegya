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
        <section id="section-breadcrumb" >
            <!-- Section Spacer -->
            <div class="breadcrumb-wrapper" style="background-image: url('{{ asset('images/3.jpeg') }}')">
                <!-- Section Container -->
                <div class="global-container" >
                    <div class="breadcrumb-block">
                        <h1 class="breadcrumb-title">Contact Us</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </section>
        <!--...::: Breadcrumb Section End :::... -->

        <!--...::: Contact Section Start :::... -->
        <section class="contact-section">
            <!-- Section Spacer -->
            <div class="pb-20 xl:pb-[150px]">
                <!-- Section Container -->
                <div class="global-container">
                    <div class="grid grid-cols-1 gap-x-16 gap-y-10 md:grid-cols-2 xl:grid-cols-[minmax(0,_1fr)_1.1fr]">
                        <!-- Contact Left Block -->
                        <div class="order-2 flex flex-col md:order-1">
                            <!-- Section Content Block -->
                            <div class="mb-8 text-left lg:mb-16 xl:mb-6">
                                <div class="mx-auto md:mx-0 md:max-w-none">
                                    <h2>Get in touch with us directly</h2>
                                </div>
                            </div>
                            <!-- Section Content Block -->
                            <div class="text-lg leading-[1.4] lg:text-[21px]">
                                <p class="mb-7 last:mb-0">
                                    We are here to help you! Tell us how we can help & we'll
                                    be in touch with an expert within the next 24 hours.
                                </p>

                                <ul class="mt-12 flex flex-col gap-y-8 lg:gap-y-12">
                                    <li class="flex flex-col gap-y-4 text-2xl font-bold">
                                        Send us an email:
                                        <a href="mailto:yourmail@email.com" class="text-2xl font-normal leading-loose hover:text-colorOrangyRed lg:text-3xl">info@mthemeus.com</a>
                                    </li>
                                    <li class="flex flex-col gap-y-4 text-2xl font-bold">
                                        Give us a call:
                                        <a href="tel:+0123456789" class="text-2xl font-normal leading-loose hover:text-colorOrangyRed lg:text-3xl">+(012)
                                            345 6789</a>
                                    </li>
                                    <li class="flex flex-col gap-y-4 text-2xl font-bold">
                                        Follow us:
                                        <ul class="mt-auto flex gap-x-[15px]">
                                            <li>
                                                <a href="http://www.facebook.com" target="_blank" rel="noopener noreferrer" class="group relative flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-black hover:bg-colorOrangyRed">
                                                    <img src="assets-frontend/img/th-1/facebook-icon-white.svg" alt="facebook" width="14" height="14" class="opacity-100 group-hover:opacity-0" />
                                                    <img src="assets-frontend/img/th-1/facebook-icon-black.svg" alt="facebook" width="14" height="14" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.twitter.com" target="_blank" rel="noopener noreferrer" class="group relative flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-black hover:bg-colorOrangyRed">
                                                    <img src="assets-frontend/img/th-1/twitter-icon-white.svg" alt="twitter" width="14" height="14" class="opacity-100 group-hover:opacity-0" />
                                                    <img src="assets-frontend/img/th-1/twitter-icon-black.svg" alt="twitter" width="14" height="14" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.linkedin.com" target="_blank" rel="noopener noreferrer" class="group relative flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-black hover:bg-colorOrangyRed">
                                                    <img src="assets-frontend/img/th-1/linkedin-icon-white.svg" alt="linkedin" width="14" height="14" class="opacity-100 group-hover:opacity-0" />
                                                    <img src="assets-frontend/img/th-1/linkedin-icon-black.svg" alt="linkedin" width="14" height="14" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.instagram.com" target="_blank" rel="noopener noreferrer" class="group relative flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-black hover:bg-colorOrangyRed">
                                                    <img src="assets-frontend/img/th-1/instagram-icon-white.svg" alt="instagram" width="14" height="14" class="opacity-100 group-hover:opacity-0" />
                                                    <img src="assets-frontend/img/th-1/instagram-icon-black.svg" alt="instagram" width="14" height="14" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100" />
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Contact Left Block -->

                        <!-- Contact Right Block -->
                        <div class="order-1 block rounded-lg bg-white px-[30px] py-[50px] shadow-[0_4px_60px_0_rgba(0,0,0,0.1)] md:order-2">
                            <!-- Contact Form -->
                            <form action="https://formspree.io/f/mlqvzkyx" method="post" class="flex flex-col gap-y-5">
                                <!-- Form Group -->
                                <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">
                                    <!-- Form Single Input -->
                                    <div class="flex flex-col gap-y-[10px]">
                                        <label for="contact-name" class="text-lg font-bold leading-[1.6]">Enter your
                                            name</label>
                                        <input type="text" name="contact-name" id="contact-name" placeholder="Adam Smith" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required />
                                    </div>
                                    <!-- Form Single Input -->
                                    <!-- Form Single Input -->
                                    <div class="flex flex-col gap-y-[10px]">
                                        <label for="contact-email" class="text-lg font-bold leading-[1.6]">Email
                                            address</label>
                                        <input type="email" name="contact-email" id="contact-email" placeholder="example@gmail.com" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required />
                                    </div>
                                    <!-- Form Single Input -->
                                </div>
                                <!-- Form Group -->
                                <!-- Form Group -->
                                <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">
                                    <!-- Form Single Input -->
                                    <div class="flex flex-col gap-y-[10px]">
                                        <label for="contact-phone" class="text-lg font-bold leading-[1.6]">Phone
                                            number</label>
                                        <input type="tel" name="contact-phone" id="contact-phone" placeholder="(123) 456 - 7890" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required />
                                    </div>
                                    <!-- Form Single Input -->
                                    <!-- Form Single Input -->
                                    <div class="flex flex-col gap-y-[10px]">
                                        <label for="contact-company" class="text-lg font-bold leading-[1.6]">Company</label>
                                        <input type="text" name="contact-company" id="contact-company" placeholder="EX Facebook" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required />
                                    </div>
                                    <!-- Form Single Input -->
                                </div>
                                <!-- Form Group -->
                                <!-- Form Group -->
                                <div class="grid grid-cols-1 gap-6">
                                    <!-- Form Single Input -->
                                    <div class="flex flex-col gap-y-[10px]">
                                        <label for="contact-message" class="text-lg font-bold leading-[1.6]">Message</label>
                                        <textarea name="contact-message" id="contact-message" class="min-h-[180px] rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" placeholder="Write your message here..." required>
                                            </textarea>
                                    </div>
                                    <!-- Form Single Input -->
                                </div>

                                <div>
                                    <button type="submit" class="button mt-5 rounded-[50px] border-2 border-black bg-black py-4 text-white after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-white">
                                        Send your message
                                    </button>
                                </div>
                                <!-- Form Group -->
                            </form>
                            <!-- Contact Form -->
                        </div>
                        <!-- Contact Right Block -->
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </section>
        <!--...::: Contact Section End :::... -->

        <!--...::: Map Section Start :::... -->
        <section class="map-section">
            <!-- Section Spacer -->
            <div class="bg-black pb-40 pt-20 xl:pb-[200px] xl:pt-[130px]">
                <!-- Section Container -->
                <div class="global-container">
                    <!-- Section Content Block -->
                    <div class="mb-10 text-center lg:mb-16 xl:mb-20">
                        <div class="mx-auto md:max-w-xs lg:max-w-xl xl:max-w-[950px]">
                            <h2 class="text-white">
                                We always welcome our clients to our office
                            </h2>
                        </div>
                    </div>
                    <!-- Section Content Block -->

                    <!-- Map Block -->
                    <div class="relative">
                        <img src="assets-frontend/img/th-1/mapbase.svg" alt="mapbase" class="h-auto w-full" />
                        <!-- Location 1 -->
                        <div class="group absolute hidden sm:flex gap-2 sm:top-[10%] sm:left-[13%]">
                            <div class="relative w-[50px] h-[50px]">
                                <button class="group flex justify-center items-center w-[50px] h-[50px] relative transition-all duration-300">
                                    <img src="assets-frontend/img/th-1/icon-gray-location-marker.svg" alt="icon-gray-location-marker" width="35" height="35" class="opacity-100 group-hover:opacity-0 transition-all duration-300">
                                    <img src="assets-frontend/img/th-1/icon-orange-location-marker.svg" alt="icon-gray-location-marker" width="50" height="50" class="absolute opacity-0 scale-50 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300">
                                </button>

                                <div class="absolute bg-white rounded-[8px] p-4 text-sm w-[170px] bottom-0 right-0 xl:right-[50px] xxl:right-auto xxl:left-[50px] opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300 xl:translate-y-12 group-hover:translate-y-0">
                                    <div class="flex gap-1 font-bold pb-3">
                                        <img src="assets-frontend/img/th-1/icon-black-location-marker.svg" alt="icon-black-location-marker" width="17" height="17">
                                        Toronto, Canada
                                    </div>
                                    <address class="not-italic font-semibold">
                                        Line 1: House/Flat 208, Venue Street
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!-- Location 1 -->
                        <!-- Location 2 -->
                        <div class="group absolute hidden sm:flex gap-2 sm:top-[65%] sm:left-[18%]">
                            <div class="relative w-[50px] h-[50px]">
                                <button class="group flex justify-center items-center w-[50px] h-[50px] relative transition-all duration-300">
                                    <img src="assets-frontend/img/th-1/icon-gray-location-marker.svg" alt="icon-gray-location-marker" width="35" height="35" class="opacity-100 group-hover:opacity-0 transition-all duration-300">
                                    <img src="assets-frontend/img/th-1/icon-orange-location-marker.svg" alt="icon-gray-location-marker" width="50" height="50" class="absolute opacity-0 scale-50 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300">
                                </button>

                                <div class="absolute bg-white rounded-[8px] p-4 text-sm w-[170px] bottom-0 right-0 xl:right-[50px] xxl:right-auto xxl:left-[50px] opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300 xl:translate-y-12 group-hover:translate-y-0">
                                    <div class="flex gap-1 font-bold pb-3">
                                        <img src="assets-frontend/img/th-1/icon-black-location-marker.svg" alt="icon-black-location-marker" width="17" height="17">
                                        Sao Paulo, Brazil
                                    </div>
                                    <address class="not-italic font-semibold">
                                        Line 1: House/Flat 208, Venue Street
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!-- Location 2 -->
                        <!-- Location 3 -->
                        <div class="group absolute hidden sm:flex gap-2 sm:top-[38%] sm:left-[38%]">
                            <div class="relative w-[50px] h-[50px]">
                                <button class="group flex justify-center items-center w-[50px] h-[50px] relative transition-all duration-300">
                                    <img src="assets-frontend/img/th-1/icon-gray-location-marker.svg" alt="icon-gray-location-marker" width="35" height="35" class="opacity-100 group-hover:opacity-0 transition-all duration-300">
                                    <img src="assets-frontend/img/th-1/icon-orange-location-marker.svg" alt="icon-gray-location-marker" width="50" height="50" class="absolute opacity-0 scale-50 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300">
                                </button>

                                <div class="absolute bg-white rounded-[8px] p-4 text-sm w-[170px] bottom-0 right-0 xl:right-[50px] xxl:right-auto xxl:left-[50px] opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300 xl:translate-y-12 group-hover:translate-y-0">
                                    <div class="flex gap-1 font-bold pb-3">
                                        <img src="assets-frontend/img/th-1/icon-black-location-marker.svg" alt="icon-black-location-marker" width="17" height="17">
                                        Bamako, Mali
                                    </div>
                                    <address class="not-italic font-semibold">
                                        Line 1: House/Flat 208, Venue Street
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!-- Location 3 -->
                        <!-- Location 4 -->
                        <div class="group absolute hidden sm:flex gap-2 sm:top-[5%]  sm:left-[61%]">
                            <div class="relative w-[50px] h-[50px]">
                                <button class="group flex justify-center items-center w-[50px] h-[50px] relative transition-all duration-300">
                                    <img src="assets-frontend/img/th-1/icon-gray-location-marker.svg" alt="icon-gray-location-marker" width="35" height="35" class="opacity-100 group-hover:opacity-0 transition-all duration-300">
                                    <img src="assets-frontend/img/th-1/icon-orange-location-marker.svg" alt="icon-gray-location-marker" width="50" height="50" class="absolute opacity-0 scale-50 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300">
                                </button>

                                <div class="absolute bg-white rounded-[8px] p-4 text-sm w-[170px] bottom-0 right-0 xl:right-[50px] xxl:right-auto xxl:left-[50px] opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300 xl:translate-y-12 group-hover:translate-y-0">
                                    <div class="flex gap-1 font-bold pb-3">
                                        <img src="assets-frontend/img/th-1/icon-black-location-marker.svg" alt="icon-black-location-marker" width="17" height="17">
                                        Noril'sk, Russia
                                    </div>
                                    <address class="not-italic font-semibold">
                                        Line 1: House/Flat 208, Venue Street
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!-- Location 4 -->
                        <!-- Location 5 -->
                        <div class="group absolute hidden sm:flex gap-2 sm:top-[72%] sm:left-[88%]">
                            <div class="relative w-[50px] h-[50px]">
                                <button class="group flex justify-center items-center w-[50px] h-[50px] relative transition-all duration-300">
                                    <img src="assets-frontend/img/th-1/icon-gray-location-marker.svg" alt="icon-gray-location-marker" width="35" height="35" class="opacity-100 group-hover:opacity-0 transition-all duration-300">
                                    <img src="assets-frontend/img/th-1/icon-orange-location-marker.svg" alt="icon-gray-location-marker" width="50" height="50" class="absolute opacity-0 scale-50 group-hover:opacity-100 group-hover:scale-100 transition-all duration-300">
                                </button>

                                <div class="absolute bg-white rounded-[8px] p-4 text-sm w-[170px] bottom-0 right-0 xl:right-[50px] xxl:right-auto xxl:left-[50px] opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-300 xl:translate-y-12 group-hover:translate-y-0">
                                    <div class="flex gap-1 font-bold pb-3">
                                        <img src="assets-frontend/img/th-1/icon-black-location-marker.svg" alt="icon-black-location-marker" width="17" height="17">
                                        Lake Eyre, Australia
                                    </div>
                                    <address class="not-italic font-semibold">
                                        Line 1: House/Flat 208, Venue Street
                                    </address>
                                </div>
                            </div>
                        </div>
                        <!-- Location 5 -->
                    </div>
                    <!-- Map Block -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </section>
        <!--...::: Map Section Start :::... -->
    </main>
</div>
@endsection