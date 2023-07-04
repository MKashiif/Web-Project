<?php
$con = mysqli_connect('localhost', 'root', '', 'student');
if(!$con){
    die(mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="noodles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="logo.png">
    <title>Knorr - Sauces</title>
</head>

<body>
    <!-- Navbar -->
    <div class="mynav">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/index.html" style="cursor: pointer;"><img src="/std/Knorr-clone-main/logo.png"
                        alt="Knorr Logo" width="85px" style="cursor: pointer;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/std/knorr-clone-main/index1.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/std/knorr-clone-main/products/noodles.php">Noodles</a></li>
                                <li><a class="dropdown-item" href="/std/knorr-clone-main/products/sauces.php">Sauces</a></li>
                                <li><a class="dropdown-item item-active" href="/std/knorr-clone-main/products/soups.php">Soups</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/std/knorr-clone-main/products/products.php">All Products</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/std/knorr-clone-main/about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/std/knorr-clone-main/contactus.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" class="btn" aria-current="page" href="/std/login.php">Login</a>
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


    <div class="container py-5">
        <div class="row mt-4">
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        $query="SELECT * FROM products WHERE pcategory='Soup'";
        $res=mysqli_query($con,$query);
        $check_prd=mysqli_num_rows($res) > 0;
        if($check_prd){
            while($row=mysqli_fetch_array($res))
            {
                ?>
                <div class="col-md-3">
                <div class="card">
                <img src="/std/uploads/<?php echo $row['pimage']; ?>" class="card-img-top" alt="Product Images">

                    <div class="card-body">
                         <h4 class="card-title"><?php echo $row['pname']; ?></h4>
                         <h3 class="card-title">Rs.<?php echo $row['pprice']; ?></h3>
                         <p class="card-text">

                         <a href="product7.php?id=<?php echo $row['pid'] ?> " class="btn btn-success">Buy Now</a>
                    </div>
                </div>
                </div>
                <?php
                // echo $row['pname'];
            }
        }
        else{
            echo"No products found.";
        }
        ?> 
        </div>
    </div>

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
                        <p><b>This website has been brought to you by the company of Knorr. This is a big
                                Project and we are looking
                                forward to your help to improve ourselves. Tell Us about you Comments on our
                                Products in the Contact
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