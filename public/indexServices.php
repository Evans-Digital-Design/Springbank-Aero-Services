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
                <a href="#" class="
                 nav__link--anchor
                 link__hover-effect
                 link__hover-effect--black">Detailing</a>
            </li>
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
                <li><a href="#" class="menu__link menu__link--a">Detailing</a></li>
                <li><a href="./indexNews.php" class="menu__link menu__link--a">News & Events</a></li>
                <li><a href="./indexContact.html" class="menu__link menu__link--a">Contact Us</a></li>
                <li><a href="./indexLoginPage.php" class="menu__link menu__link--a ">Login</a></li>
            </ul>
        </div>


    </nav>
    <div class="service">
        <section id="services">
            <h2 class="services__title">Services</h2>
            <ul class="services__list">
                <li class="services__list--item">
                    Fuel and Additives (Avgas/ Jet A 1/ FSII) from Mobile Refuellers</li>
                <li class="services__list--item">Various Aviation Oils</li>
                <li class="services__list--item">Oxygen Service</li>
                <li class="services__list--item">Flight Service Station</li>
                <li class="services__list--item">Aircraft Tie Downs</li>
                <li class="services__list--item">Aircraft Hangarage</li>
                <li class="services__list--item">Passenger lounge</li>
                <li class="services__list--item">Rest rooms</li>
                <li class="services__list--item">Car rentals</li>
                <li class="services__list--item">Admin Services, Fax, Telephone, Photocopying</li>
                <li class="services__list--item">Free Wi-Fi access</li>
                <li class="services__list--item">Vending machine</li>
                <li class="services__list--item">On request customs</li>
                <li class="services__list--item">Hours of operation</li>
                <li class="services__list--item">Fuel prices</li>
                <li class="services__list--item">Map Link</li>
            </ul>
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
                    <a href="">
                        <img class="modal__media--img" src="./assets/phone.png" alt="Phone">
                    </a>
                    
                </figure>
            </div>
            </div>
            <div class="footer__social--list">
                <div class="footer__booking--wrapper">
                <a href="#" class="
            footer__booking--link
            link__hover-effect
            link__hover-effect--white
            ">Book with Us !</a>
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
    </div>
    <div class="footer__copyright">© Copyright 2023 | Theme by evansdigitaldesign.ca | All Rights Reserved </div>

</footer>
</html>