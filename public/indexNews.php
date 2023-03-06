<?php

session_start();

include("connection.php");
include("functions.php");


$query3 = "SELECT * FROM posts ORDER BY id DESC LIMIT 4";
$result3 = mysqli_query($con,$query3);
$post_result = mysqli_num_rows($result3);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="stylesNews.css">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="./index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> News & Events - Springbank Aero Services</title>
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
                <a href="./indexServices.php" class="
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
                <a href="./indexNews.html" class="
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
                <li><a href="./indexNews.html" class="menu__link menu__link--a">News & Events</a></li>
                <li><a href="./indexContact.html" class="menu__link menu__link--a">Contact Us</a></li>
                <li><a href="./indexLoginPage.php" class="menu__link menu__link--a ">Login</a></li>
            </ul>
        </div>

    </nav>
    <div class="newsNEvent">
    <section id="newsAndEvents">
    <h2 class="event__title">News & Events</h2>
    <div class="row mb-2 d-flex align-items-center flex-column ">
            
            <?php

                   for($i=0; $i<$post_result; $i++) {
                    $row = mysqli_fetch_assoc($result3);
                    echo "<div class=\"col-md-6\">
                    <div class=\"row g-0 border 
                    rounded overflow-hidden flex-md-row 
                    m-auto mb-4 shadow-sm h-md-250 position-relative\">
                    <div class=\"col p-4 d-flex flex-column bg-white position-static \">
                    <h3 class=\"mb-0\">". $row['title'] . "</h3>
                    <div class=\"mb-1 text-muted\">" . date("jS M, Y",strtotime($row['date'])) . "</div>
                    <p class=\"mb-auto\">" . $row['content'] . 
                    "</p></div></div></div>";

                   }
          
                    ?>
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