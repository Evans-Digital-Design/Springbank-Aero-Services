
<?php
session_start();

include("connection.php");
include("functions.php");






if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted

    $price = $_POST['jet_gas_price'];
    $price2 = $_POST['av_gas_price'];

    if (!empty($price) && is_numeric($price)) {

        //save to database
        $query = "insert into jet_a1_price (price) values ('$price')";
        mysqli_query($con, $query);
    }


    if (!empty($price2) && is_numeric($price2)) {

        //save to database
        $query = "insert into av_gas_price (price) values ('$price2')";
        mysqli_query($con, $query);
        
    }

}


$user_dat = check_login($con);

        $query = "SELECT * FROM jet_a1_price ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($con, $query);
        $user_data = mysqli_fetch_assoc($result);

        $query2 = "SELECT * FROM av_gas_price ORDER BY id DESC LIMIT 1";
        $result2 = mysqli_query($con, $query2);
        $user_data2 = mysqli_fetch_assoc($result2);







?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Admin Fuel Prices</title>

    <script src="js/jquery.min.js"></script>
    
    

    
    <link rel="stylesheet" href="admin-post-styles.css">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Springbank Aero Services</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="indexLoginPage.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
          <a class="nav-link " aria-current="page" href="admin.php">
              <i class="bi bi-speedometer"></i> 
              Dashboard
            </a>
            <a class="nav-link " aria-current="page" href="posts.php">
            <i class="bi bi-newspaper"></i>
              Posts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
            <i class="bi bi-fuel-pump-fill"></i>
              Fuel Prices
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="admin-products.php">
            <i class="bi bi-bag-dash-fill"></i>
              Products
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>OTHER</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="index1.php">
            <i class="bi bi-house-fill"></i>
              Home Page
            </a>
          </li>
          
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Fuel Prices</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button>
        </div>
      </div>


      
    
    <div class="col-md 6 mt-4 d-flex align-items-center flex-column">
        <form method="post" class="form" id="login">
            <h1 class="form__title">Change Fuel Price</h1>

            <div class="form__input-group d-flex flex-column align-items-center">
                <h2 class="price__title">JET A-1 (FSII)</h2>
                <p class="current__price">Current price: $
                    <?php if (isset($user_data['price'])): ?>
                        <?php echo $user_data['price'];?>
                    <?php endif; ?>
                </p>
                <input type="text" class="form__input"  name="jet_gas_price" autofocus placeholder="JET A-1 (FSII)">
                <div class="form__input-error-message"></div>
            </div>
            <br>
            <div class="form__input-group d-flex flex-column align-items-center">
                <h2 class="price__title">AV GAS 100LL</h2>
                <p class="current__price">Current price: $
                    <?php if (isset($user_data2['price'])): ?>
                        <?php echo $user_data2['price'];?>
                    <?php endif; ?>
                </p>
                <input type="text" class="form__input"  name="av_gas_price" autofocus placeholder="AV GAS 100LL">
                <div class="form__input-error-message"></div>
            </div>
            
            <div class="form__input-group">
            <button class="mt-4 btn btn-primary btn-lg d-flex justify-items-center" type="submit" value="price_button" >Change</button>
            </div>
        </form>
    </div>
    

      


    </main>
  </div>
</div>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>


    

      
  </body>
</html>
