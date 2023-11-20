<?php

session_start();
include("connection.php");
include("functions.php");

$product_id = $_GET['id'];

$statusMsg[] = ''; 
$errors[] = "";
// File upload directory 
$targetDir = "storage/"; 


if(isset($_POST["submit"])){ 

    $title = mysqli_real_escape_string($con, $_POST['title']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $selling_price = mysqli_real_escape_string($con, $_POST['selling_price']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);

    if(!empty($_FILES["file"]["name"])){ 
        $image = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $image; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 

        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                    // Insert image file name into database 
                    $insert = $con->query("UPDATE products SET image = '$image' WHERE id = $product_id");
                      
            }
        }
    }

    if(!empty($title)){
        $insert = $con->query("UPDATE products SET title = '$title' WHERE id = $product_id");        
        
    }

    if(!empty($description)){
        $insert = $con->query("UPDATE products SET description = '$description' WHERE id = $product_id");        
        
    }

    if(!empty($selling_price)){
        $insert = $con->query("UPDATE products SET selling_price = '$selling_price' WHERE id = $product_id");        
          
    }

    if(!empty($quantity)){
        $insert = $con->query("UPDATE products SET quantity = '$quantity' WHERE id = $product_id");        
        if($insert){ 
            header("Location: admin-products.php");
            die;
        }else{
            $errors[] = "Upload failed, please try again."; 
        }  
    }

}               


?>
<script>
    calculate = function()
{
    var price = document.getElementById('price').value;

    document.getElementById('price').value = parseFloat(price)*100;

    
}
</script>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    
    <title>Admin Products</title>


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
          <a class="nav-link " aria-current="page" href="#">
          <i class="bi bi-speedometer"></i> 
              Dashboard
            </a>
            <a class="nav-link " aria-current="page" href="posts.php">
            <i class="bi bi-newspaper"></i>
              Posts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="admin-fuel-price.php">
            <i class="bi bi-fuel-pump-fill"></i>
              Fuel Prices
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="admin-products.php">
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
        <h1 class="h2">PRODUCTS</h1>
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
      

    <div class="col-md 6 mt-4 ">
        <form class="" method="post" enctype="multipart/form-data">
        <h1 class=" form__title text-blue text-center mb-10">Edit Product</h1>

        
          <div class="form__message form__message--error">
              <p class="form__input-error-message"><?php echo outputErrors($errors);?></p>
          </div>
          
        

        <div class="form-floating form__input-group ">
            <input type="text" class="form__input w-50 " name="title" autofocus placeholder="Title">
            <div class="form__input-error-message"></div>
        </div>
        

        <div class="form__input-group">
            <textarea type="text" class="form__input  w-50" name="description"  placeholder="Description"></textarea>
            <div class="form__input-error-message"></div>
        </div>

        <div class="form-floating form__input-group ">
            <input id="price" onblur="calculate()" type="text" class="form__input w-50 " name="selling_price" autofocus placeholder="Price ($)">
            <div class="form__input-error-message"></div>
        </div>

        <div class="form-floating form__input-group ">
            <input type="text" class="form__input w-50 " name="quantity" autofocus placeholder="Quantity">
            <div class="form__input-error-message"></div>
        </div>

        <div class="form-floating form__input-group  ">
        <input class="form-image" type="file" id="image" name="file"><br><br>
            <div class="form__input-error-message"></div>
        </div>
        
        <div class="form__input-group">
        <button class="mt-4 btn btn-primary btn-lg d-flex justify-items-center " name="submit" type="submit">Edit</button>
        </div>




      


    </main>
  </div>
</div>

<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>


    
  </body>
</html>
