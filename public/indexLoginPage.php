<?php
session_start();

include("connection.php");
include("functions.php");



if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //something was posted
    $_SESSION['errors'] = array();
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

        //read from database
        
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password){
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: admin.php");
                    die;
                    }
                }

                $_SESSION['errors'] = array("Your username or password was incorrect");
                header("Location:indexLoginPage.php");
                $_SESSION['errors'] = array();
                die;
            }
             
    }
    else{
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="stylesloginPage.css">
    <script src="./index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <div class="nav__container">
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
                    <li><a href="indexLoginPage.php" class="menu__link menu__link--a ">Login</a></li>
                </ul>
            </div>
        

        </nav>
    </div>
    <div class="contain">
    <div class="box">
        <form method="post" class="form" id="login">
            <h1 class="form__title">Login</h1>

            <?php if (isset($_SESSION['errors'])): ?>
                <div class="form__message form__message--error">
                    <?php foreach($_SESSION['errors'] as $error): ?>
                        <p class="form__input-error-message"><?php echo $error ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="form__input-group">
                <input type="text" class="form__input"  name="user_name" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input type="password" class="form__input"  name="password" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>

            <button class="form__button" type="submit" value="Login" >Continue</button>

        </form>
    </div>
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


<!-- Need to figure out a way to not raise error when going to home page -->