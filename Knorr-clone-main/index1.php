<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="icon" href="logo.png">
  <title>Knorr - Home</title>
</head>

<body>
  <!-- Navbar -->
  <div class="mynav">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/Knor/knorr-clone-main/products/index1.php" style="cursor: pointer;"><img src="/Knor/Knorr-clone-main/logo.png" alt="Knorr Logo"
            width="85px" style="cursor: pointer;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Knor/Knorr-clone-main/index1.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Products
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/Knor/knorr-clone-main/products/noodles.php">Noodles</a></li>
                <li><a class="dropdown-item" href="/Knor/knorr-clone-main/products/sauces.php">Sauces</a></li>
                <li><a class="dropdown-item" href="/Knor/knorr-clone-main/products/soups.php">Soups</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="/Knor/knorr-clone-main/products/products.php">All Products</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/Knor/knorr-clone-main/about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/Knor/knorr-clone-main/contactus.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" class="btn" aria-current="page" href="/Knor/login.php">Login</a>
            </li>
          </ul>

          
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>

  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <a href="/Knor/knorr-clone-main/products/products.php"><img src="/Knor/Knorr-clone-main/images/allbanner.jpg" height="550px" class="d-block w-100" alt="..."></a>

      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <a href="/Knor/knorr-clone-main/products/products.php"><img src="/Knor/Knorr-clone-main/images/allnoodles.png" height="550px" class="d-block w-100" alt="..."></a>
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <a href="/Knor/knorr-clone-main/products/products.php"><img src="/Knor/Knorr-clone-main/images/blazin.jpg" height="550px" class="d-block w-100" alt="..."></a>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="seller">
    <h1>Our Top Sellers</h1>
    <div class="sellers">

      <div class="boxesContainer">
        <div class="cardBox">
          <div class="card">
            <div class="front">
              <img src="tom-chil.jpg" alt="">
            </div>
            <div class="back">
              <h3 class="text-black fs-5">Knorr Ketchups</h3>
              <p class="fs-6 text-black"><b>Flavours:</b> Tomato, Chilli, Green Chilli, Barbeque</p>
              <p><b>Price:</b> 400</p>
              <a href="/Knor/Knorr-clone-main/products/sauces.php">Ketchups</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="boxesContainer">

      <div class="cardBox">
        <div class="card">
          <div class="front">
            <img src="topnoodles.png" alt="">
          </div>
          <div class="back">
            <h3 class="text-black fs-5">Knorr Noodles</h3>
            <p class="fs-6 text-black"><b>Flavours:</b> Chattpata, Chicken, Cheese, Blazin Hot</p>
            <p><b>Price:</b> 80</p>
            <a href="/Knor/Knorr-clone-main/products/noodles.php">Noodles</a>
          </div>
        </div>
      </div>
    </div>

    <div class="boxesContainer">

      <div class="cardBox">
        <div class="card">
          <div class="front">
            <img src="/Knor/Knorr-clone-main/images/blazin.jpg" alt="">
          </div>
          <div class="back">
            <h3 class="text-black fs-5">Knorr Blazin Hot</h3>
            <p class="fs-6 text-black"><b>Flavours:</b> Spicy Chattpata</p>
            <p><b>Price:</b> 150</p>
            <a href="products/noodles.php">Blazin Hot</a>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>


  <div class="pick">
    <h1>Our Top Picks</h1>
    <div class="picks">
     
    </div>
    
    <?php
$con = mysqli_connect('localhost', 'root', '', 'student');
if(!$con){
    die(mysqli_error($con));
}
$query="select * from products";
$products=mysqli_query($con,$query);
$count=0;
while($fetch=mysqli_fetch_assoc($products))
{
  $count=$count+1;
if($count==4)
{
  break;
}
?>
    <div class="boxesContainer">
        <div class="cardBox">
          <div class="card">
            <div class="front">
              <img src="/Knor/uploads/<?php echo $fetch['pimage'] ?>">      
            </div>
            <div class="back">
              <h3 class="text-black fs-5"> <?php echo $fetch['pname'] ?></h3>
             
              <p><b>Price:</b>  <?php echo $fetch['pprice'] ?></p>
              <a href="/Knor/Knorr-clone-main/products/products.php">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      
          </div>
        </div>
      </div>
    </div>


  </div>
  </div>

  </div>
  </div>

  <!-- Footer -->
  <div class="footer-dark" style="background-color: rgb(101, 167, 101); color: black;">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 item">
            <h3><b>Products</b></h3>
            <ul>
              <b>
                <li><a href="#">Noodles</a></li>
                <li><a href="#">Sauces</a></li>
                <li><a href="#">Others</a></li>
              </b>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3>About</h3>
            <ul>
              <b>
                <li><a href="#">Company</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Sponsers</a></li>
              </b>
            </ul>


          </div>
          <div class="col-md-6 item text">
            <h3> <b> Knorr</b></h3>
            <p><b>This website has been brought to you by the company of Knorr. This is a big Project and we are looking
                forward to your help to improve ourselves. Tell Us about you Comments on our Products in the Contact
                Page.</b>
            </p>
          </div>
        </div>
        <p class="copyright" style="font-size: 20px;"><b>Knorr © 2018</b></p>
      </div>
    </footer>
  </div>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
</body>

</html>