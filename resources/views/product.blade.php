<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>springbank Aero - Products</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('styles.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styles.css'])
        <script src="{{ asset('index.js')}}"></script>


        @livewireStyles

        

    </head>
    
    <body class="font-sans text-gray-900 antialiased ">
        
        <div class="landing-page">
            <div class="nav__container">
            <nav>
                <figure>
                    <a href="{{ asset('index1.php') }}"><img id="personal-logo" src="{{asset('assets/personal-logo.png')}}" /></a>
                </figure>
                <ul class="nav__link--list">
                    <li class="nav__link">
                        <a href="{{ asset('index1.php') }}" class="
                        nav__link--anchor
                        link__hover-effect
                        link__hover-effect--black">Home</a>
                    </li>
                    <li class="nav__link">
                        <a href="{{ asset('indexAbout.html') }}" class="
                        nav__link--anchor
                        link__hover-effect
                        link__hover-effect--black">About</a>
                    </li>
                    <li class="nav__link">
                        <a href="{{ asset('indexServices.php') }}" class="
                        nav__link--anchor
                        link__hover-effect
                        link__hover-effect--black">Services</a>
                    </li>
                    <li class="nav__link">
                        <a href="/products" class="
                        nav__link--anchor
                        link__hover-effect
                        link__hover-effect--black">Store</a>
                    </li>
                    {{-- <li class="nav__link">
                        <a href="{{ asset('detailing.html')}}" class="
                         nav__link--anchor
                         link__hover-effect
                         link__hover-effect--black">Detailing</a>
                    </li> --}}
                    <li class="nav__link">
                        <a href="{{ asset('indexNews.php') }}" class="
                        nav__link--anchor
                        link__hover-effect
                        link__hover-effect--black">News & Events</a>
                    </li>
                    <li class="nav__link">
                        <a href="{{ asset('indexContact.html') }}" class="
                        nav__link--anchor
                        link__hover-effect
                        link__hover-effect--black">Contact Us</a>
                    </li>
                    <li class="nav__link">
                        <a href="/bookings/create" class="
                        
    
                        booking-btn">Book fuel</a>
                    </li>
                </ul>
                
                <button class="btn__menu b" onclick="openMenu()">
                    <i class="fa fa-bars"></i>
                </button>
    
                <div class="menu__backdrop">
                    <button class="btn__menu btn__menu--close" onclick="closeMenu()">
                        <i class="fa fa-times"></i>
                    </button>
                    <ul class="menu__links">
                        <li><a href="{{ asset('index1.php') }}" class="menu__link menu__link--a">Home</a></li>
                        <li><a href="{{ asset('indexAbout.html') }}" class="menu__link menu__link--a">About</a></li>
                        <li><a href="{{ asset('indexServices.php') }}" class="menu__link menu__link--a">Services</a></li>
                        {{-- <li><a href="{{ asset('detailing.html')}}" class="menu__link menu__link--a">Detailing</a></li> --}}
                        <li><a href="{{ asset('indexNews.php') }}" class="menu__link menu__link--a">News & Events</a></li>
                        <li><a href="{{ asset('indexContact.html') }}" class="menu__link menu__link--a">Contact Us</a></li>
                        <li><a href="{{ asset('indexLoginPage.php') }}" class="menu__link menu__link--a ">Login</a></li>
                    </ul>
                </div>
    
            </nav>
            </div>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
<div class="py-12"></div>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        @foreach ($products as $product)
            <a href="{{ route('products.show', $product) }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-xl font-semibold mb-2">{{ $product->title }}</h1>
                <figure class="mb-4">
                    <img class="w-full h-56 object-fit" src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->title }}">
                </figure>
                <div class="text-lg font-bold mb-2">@money($product->selling_price, 'CAD')</div>
                <p class="text-sm">{{ $product->description }}</p>
            </a>
        @endforeach
    </div>
</div>
</div>
    </div>
</x-app-layout>
<footer>
    <div class="footer_cant">
        <div class="row footer__row">
            <figure class="footer__logo--img-wrapper">
                <a href="#"><img src="{{ asset('assets/springbank-white.png') }}" class="footer__logo--img" alt="">
            </a>
            </figure>
            <div class="modal__medias">
                <figure class="modal__media">
                    <a href="https://www.instagram.com/springbankaero/" target="_blank">
                        <img class="modal__media--img" src="{{ asset('assets/instagram-logo.png') }}" alt="Instagram">
                    </a>
                    
                </figure>
                <figure class="modal__media">
                    <a href="" target="_blank">
                        <img class="modal__media--img" src="{{ asset('assets/facebook-logo-2019.png') }}" alt="Facebook">
                    </a>
                    
                </figure>
                <figure class="modal__media">
                    <a href="mailto: general@springbankaero.com">
                        <img class="modal__media--img" src="{{ asset('assets/email.png') }}" alt="Email">
                    </a>
                    
                </figure>
                <figure class="modal__media">
                    <a href="">
                        <img class="modal__media--img" src="{{ asset('assets/phone.png') }}" alt="Phone">
                    </a>
                    
                </figure>
            </div>
            </div>
            <div class="footer__social--list">
            <div class="footer__booking--wrapper">
                <a href="{{asset('indexLoginPage.php')}}" class="
                footer__booking--link
                link__hover-effect
                link__hover-effect--white
                ">Admin Login</a>
            </div>
            <div class="footer__booking--wrapper">
                <a href="#" class="
                footer__booking--link
                link__hover-effect
                link__hover-effect--white
                ">Book with Us</a>
            </div>
                <div class="footer__contact--wrapper">
                <h3 class="footer__contact--title">Contact Us</h3>
                <p class="footer__contact--para">Main Line: (403) 247-8833
                </p>
                <p class="footer__contact--para">Direct Fuel line: (403) 466-8834</p>
                </div>
                <div class="footer__location--wrapper">
                    <h3 class="footer__location--title">Location</h3>
                    <p class="footer__location--para">208A Avro Lane Calgary, Alberta T3Z 3S5</p>
                </div>
            </div>
    
        </div>
        <div class="footer__copyright">© Copyright 2023 | Theme by evansdigitaldesign.ca | All Rights Reserved </div>
    </div>
    

</footer>
</html>
