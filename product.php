<?php 
    session_start();
    include('sever.php');

        if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "Lets Login first";
        header('location: index.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: index.php');
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- <style>
      html, body {
        overflow-x: hidden;
      }
    </style> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   


    <title>Product</title>
    <link rel="stylesheet" href="product.css?v=9999">
</head>
<body>

<div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#">  Contact for support Tiktokdealer@gmail.com   </a>

  <button class="navbar-toggler" 
  type="button" data-toggle="collapse" 
  data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" 
  aria-expanded="false" 
  aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"></ul>

    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <ul class="navbar-nav ms-auto  mb-2 mb-1g-0" > 
        <li class="nav-item">
            <a class="nav-link" href="cart.html"><i class="bi bi-cart4" >  </i>ตะกร้าสินค้า</a> 
         </li>
    </ul>
    
    <ul class="navbar-nav ms-auto mb-2 mb-1g-0" > 
        <li class="nav-item">
            <a class="nav-link" href=""></a>
         </li>
    </ul>
      |
    <ul class="navbar-nav me-auto mb-2 mb-1g-0" > 
        <li class="nav-item">
            <a class="nav-link" href=""></a>
         </li>       
    </ul>
    <ul class="navbar-nav me-auto mb-2 mb-1g-0" > 
        <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
         </li>       
    </ul>
    
    
  </div>
</nav>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="image/credit2.jpg" class="w-100 d-block" alt="Third slide" height="200px;">
     
    </div>
    <div class="carousel-item">
    <img src="image/ช่องสวย2.jpg" class="w-100 d-block" alt="Third slide" height="200px;">
     
    </div>
    <div class="carousel-item">
    <img src="image/R.jpg" class="w-100 d-block" alt="Third slide" height="200px;">
    
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- <div class="row ">
              <div id="carouselId " class="carousel slide" data-bs-ride="carousel" >
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                  <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                  <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img src="image/credit2.jpg" class="w-100 d-block" alt="First slide" height="200px;">
                  </div>
                  <div class="carousel-item">
                    <img src="image/ช่องสวย2.jpg" class="w-100 d-block" alt="Second slide" height="200px;">
                  </div>
                  <div class="carousel-item">
                    <img src="image/R.jpg" class="w-100 d-block" alt="Third slide" height="200px;">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselId" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                  </button>
          </div>
        </div>
        <div>
          
        </div>
      </div>
    </div> -->

    <div class="header">

<h2>Product</h2>
  
</div>
<br>
<br>
<div class="container">
<br>
  <div class="row ">

    <?php 
        $sql = "SELECT * FROM product ORDER BY pro_id";
        $result = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)) {

       
    ?>
   <div class="text-center  col-sm-3  " >
    <div class = "card   mb-3 mr-2  ">
<img  src="image/<?=$row['image']?>" width="100%" height="250px" class=" p-2  ">
<div class="card-body">
    <h5 class="card-title"> <?=$row['pro_name']?></h5>
    <p class="card-text">
    <b class="text-danger"> ID:<?=$row['pro_id']?> </b><br>
      Price <b class="text-success"> <?=$row['price']?> </b>Baht <br>
    </p>
    <a class="btn btn-outline-info mt-3 w-50" href="product_detail.php?id=<?= $row["pro_id"]; ?>" >Detail</a>
  </div>
</div>
</div>



   <?php
    } mysqli_close($conn);
   ?>

   <center><a href="index2.php">กลับไปหน้าเริ่มต้น</a></center>
   <br>
   <br>
  </div>
</div>
    <div class=" test  ">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">

            <a class="navbar-brand" href="#">  contact us |  </a>
            <i class="bi bi-instagram"> </i>
            <a class="navbar-brand" href="#">     </a>
            <i class="bi bi-facebook"> </i>
            <a class="navbar-brand" href="#">     </a>
            <i class="bi bi-line"></i>
            <a class="navbar-brand" href="#">     </a>
            <i class="bi bi-telephone-fill"></i>s
            <a class="navbar-brand" href="#">     </a>
            <a class="navbar-brand" href="">  Tel.0989438394   </a>
          
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                
                
                
              </ul>
              <ul class="navbar-nav ms-auto mb-2 mb-1g-0" > 
                  
                  
              </ul>
          
              
              
              
              
            </div>
          </nav>
              </div>








 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</script>
</body>
</html>