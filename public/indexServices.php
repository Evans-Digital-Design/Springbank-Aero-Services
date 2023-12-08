<?php


session_start();

include("connection.php");
include("functions.php");


$query = "SELECT * FROM jet_a1_price ORDER BY id DESC LIMIT 1";
$result = mysqli_query($con, $query);
$user_data = mysqli_fetch_assoc($result);

$query2 = "SELECT * FROM av_gas_price ORDER BY id DESC LIMIT 1";
$result2 = mysqli_query($con, $query2);
$user_data2 = mysqli_fetch_assoc($result2);
        
    


?>





<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesServices.css">
    <script src="./index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Springbank Aero Services</title>
</head>
<body>
    <nav>
        <figure>
            <a href="./index1.php"><img id="personal-logo" src="./assets/personal-logo.png" alt=""></a>
        </figure>
        <ul class="nav__link--list">
            <li class="nav__link">
                <a href="./index1.php" class="
                nav__link--anchor
                link__hover-effect
                link__hover-effect--black">Home</a>
            </li>
            <li class="nav__link">
                <a href="./indexAbout.html" class="
                nav__link--anchor
                link__hover-effect
                link__hover-effect--black">About</a>
            </li>
            <li class="nav__link">
                <a href="indexServices.php" class="
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
            <!-- <li class="nav__link">
                <a href="detailing.html" class="
                 nav__link--anchor
                 link__hover-effect
                 link__hover-effect--black">Detailing</a>
            </li> -->
            <li class="nav__link">
                <a href="./indexNews.php" class="
                nav__link--anchor
                link__hover-effect
                link__hover-effect--black">News & Events</a>
            </li>
            <li class="nav__link">
                <a href="./indexContact.html" class="
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
                <li><a href="./index1.php" class="menu__link menu__link--a">Home</a></li>
                <li><a href="./indexAbout.html" class="menu__link menu__link--a">About</a></li>
                <li><a href="./indexServices.php" class="menu__link menu__link--a">Services</a></li>
                <!-- <li><a href="#" class="menu__link menu__link--a">Detailing</a></li> -->
                <li><a href="./indexNews.php" class="menu__link menu__link--a">News & Events</a></li>
                <li><a href="./indexContact.html" class="menu__link menu__link--a">Contact Us</a></li>
                <li><a href="/bookings/create" class="menu__link menu__link--a">Book fuel</a></li>
                <li><a href="./indexLoginPage.php" class="menu__link menu__link--a ">Login</a></li>
            </ul>
        </div>


    </nav>
    <div class="service">
        <section id="services">
            <h2 class="services__title">Services</h2>
        
        <section class="swSec" >
            <div class="container-fluid">
                <div class="service_co row d-flex">
                    <figure class=" sec_img" >
                        <img src="assets/slider/ism/image/slides/plane.jpg" alt="" class="w-100 h-100" >
                        
                    </figure>

                    <div class=" sec_para ">
                        <div class="fwSecCnt" style="width:100; padding: 75px 50px;">
                            <h2 style="color: #0071ba;">General Services</h2>
                            <p style="font-weight: 500; line-height: 2;">Springbank Aero Services is dedicated to deliver all your aviation needs for general, charter, and all other private aviation needs.
                                 These services include</p>
                            <ul class="services__list">
                                <li class="services__list--item">-Fuel: Jet A-1, Jet A-1+, Avgas 100LL</li>
                                <li class="services__list--item">-Parking: Ramp, Hangar</li>
                                <li class="services__list--item">-Aviation Oil</li>
                                <li class="services__list--item">-Aviation Oxygen</li>
                                <li class="services__list--item">-Aircraft Handling</li>
                                <li class="services__list--item">-GPU</li>
                                <li class="services__list--item">-LAV</li>
                                <li class="services__list--item">-Cabin Heat</li>
                            </ul>
                            <a href="/bookings/create"><button class="booking__btn">BOOK FUEL SERVICE</button></a>
                        </div>
                    </div>

                </div>

            </div>

        </section>   


        <section class="swSec" style="padding: 48px;">
            <div class="container-fluid">
                <div class="row d-flex service_co">
                    <figure class="sec_img order-1 order-md-2">
                                <img src="assets/slider/ism/image/slides/landscape1.jpg" alt="" class="w-100 h-100">
                    </figure>
                    

                    <div class="sec_para order-2 order-lg-1">
                        <div class="fwSecCnt" style="width:100; padding: 75px 50px;">
                            <h2 style="color: #0071ba;">Other Services</h2>
                            <p style="font-weight: 500; line-height: 2;">Our team is commited to providing the utmost customer service and seeing to all your customer needs, including:</p>
                            <ul class="services__list">
                                <li class="services__list--item">-Concierge Services</li>
                                <li class="services__list--item">-Catering Services</li>
                                <li class="services__list--item">-Aircraft and Automotive Detailing</li>
                                <li class="services__list--item">-Snow Clearing</li>
                                <li class="services__list--item">-Rental Cars</li>
                            </ul>
                            <p style="font-weight: 500; line-height: 2;">For any other Customer Service needs pleae call our office at 403-247-8833.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </section>
        <section id="fuelPrices">
            <h2 class="fuelPrices__title">Fuel Prices</h2>
            <div class="plans">
                <div class="plan business__plan">
                    <h2 class="plan__title bus">JET A-1 (FSII)</h2>
                    <hr class="business__hr">
                    <h1 class="plan__price bus">$
                        <?php if (isset($user_data['price'])): ?>
                            <?php echo $user_data['price'];?>
                        <?php endif; ?>
                    </h1>
                    </h1>
                    
                </div>

                <div class="plan business__plan">
                    <h2 class="plan__title bus">AV GAS 100LL</h2>
                    <hr class="business__hr">
                    <h1 class="plan__price bus">$
                        <?php if (isset($user_data2['price'])): ?>
                            <?php echo $user_data2['price'];?>
                        <?php endif; ?>
                    </h1>
                    
                </div>
            </div>
        </section>
    </div>
</body>
<footer>
    <div class="container">
        <div class="row footer__row">
            <figure class="footer__logo--img-wrapper">
                <a href="#"><img src="./assets/springbank-white.png" class="footer__logo--img" alt="">
            </a>
            </figure>
            <div class="modal__medias">
                <figure class="modal__media">
                    <a href="https://www.instagram.com/springbankaero/" target="_blank">
                        <img class="modal__media--img" src="./assets/instagram-logo.png" alt="Instagram">
                    </a>
                    
                </figure>
                <figure class="modal__media">
                    <a href="" target="_blank">
                        <img class="modal__media--img" src="./assets/facebook-logo-2019.png" alt="Facebook">
                    </a>
                    
                </figure>
                <figure class="modal__media">
                    <a href="mailto: general@springbankaero.com">
                        <img class="modal__media--img" src="./assets/email.png" alt="Email">
                    </a>
                    
                </figure>
                <figure class="modal__media">
                    <a href="tel:403-247-8833">
                        <img class="modal__media--img" src="./assets/phone.png" alt="Phone">
                    </a>
                    
                </figure>
            </div>
            </div>
            <div class="footer__social--list">
            <div class="footer__booking--wrapper">
                    <a href="indexLoginPage.php" class="
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
                <p class="footer__contact--para">Main Line:
                </p>
                <p class="footer__contact--para">(403) 247-8833
                </p>
                <p class="footer__contact--para">Direct Fuel line:</p>
                <p class="footer__contact--para">(403) 466-8834</p>
                </div>

                <div class="footer__location--wrapper">
                    <h3 class="footer__location--title">Location</h3>
                    <p class="footer__location--para">208A Avro Lane Calgary, Alberta T3Z 3S5</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">© Copyright 2023 | Theme by evansdigitaldesign.ca | All Rights Reserved </div>

</footer>
</html>