<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contactus</title>
  <link rel="icon" href="logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="contactus.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</head>

<body class="bg-light">
  <!-- Navbar -->
  <div class="mynav">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html" style="cursor: pointer;"><img src="/Knor/Knorr-clone-main/logo.png" alt="Knorr Logo"
            width="85px" style="cursor: pointer;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/Knor/Knorr-clone-main/index1.php">Home</a>
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
              <a class="nav-link active" aria-current="page" href="/Knor/knorr-clone-main/contactus.php">Contact Us</a>
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
  <br>
  <div class="form d-flex justift-content-between">
    <div class="w-50 contact">
      <h3 style="margin-top: 25px; margin-bottom: -25px; margin-left: 10px;">&ensp;&ensp;&nbsp;Please fill the Form...
      </h3>
      <br>
      <br>
      <div class="mb-3 mx-5 input-div" style="width: 60%;" i st="">
        <label for="exampleFormControlInput1" class="form-label">Name:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="John Dalton..">
      </div>
      <div class="mb-3 mx-5 input-div" style="width: 60%;">
        <label for="exampleFormControlInput1" class="form-label">Email Address:</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3 mx-5 input-div" style="width: 60%;">
        <label for="exampleFormControlInput1" class="form-label">Subject:</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Noodles, Sauces...">
      </div>
      <div class="mb-3 mx-5 input-div" style="width: 60%;">
        <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>
    <div class="w-50 mt-5 map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.315975222197!2d67.02975571486823!3d24.853055584057397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e77010959df%3A0x60af91919c0eb83e!2sUnilever%20Pakistan%20Limited!5e0!3m2!1sen!2s!4v1678624576396!5m2!1sen!2s"
        width="80%" height="96%" style="border: 3px solid rgb(71, 179, 98); border-radius: 20px; float: right;"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

</body>

</html>