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
                <div class="bg-cover bg-no-repeat pb-20 pt-28 md:pb-[265px] md:pt-40 lg:pt-44 xl:pt-[224px]" style="background-image: url('{{ asset('images/8.jpg') }}')">
                    <!-- Section Container -->
                    <div class="global-container">
                        <div class="breadcrumb-block">
                            <h1 class="breadcrumb-title">Contactanos</h1>
                            <ul class="breadcrumb-nav">
                                <li><a href="{{ route('backend.landing.index') }}">Inicio</a></li>
                                <li>Contactanos</li>
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
        </section>
        <!--...::: Breadcrumb Section End :::... -->
<br><hr><br>
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
    </main>
</div>
@endsection