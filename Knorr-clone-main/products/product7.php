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
    <meta http-equiv="X-UA-Compatible" content="IE=edage">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="product1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href=" logo.png">
    <title>Knorr - Chilli Garlic Sauce</title>

</head>

<body>
    <div class="mynav">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="cursor: pointer;"><img src="/std/Knorr-clone-main/logo.png" alt="Knorr Logo"
                        width="85px" style="cursor: pointer;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/std/Knorr-clone-main/index1.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Products
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/std/knorr-clone-main/products/noodles.php">Noodles</a></li>
                                <li><a class="dropdown-item" href="/std/knorr-clone-main/products/sauces.php">Sauces</a></li>
                                <li><a class="dropdown-item" href="/std/knorr-clone-main/products/soups.php">Soups</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item item-active" href="/std/knorr-clone-main/products/products.php">All Products</a>
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
    <!-- Details -->
    <?php
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
    }
    $query= "SELECT * FROM products WHERE pid=$id";
    $result=mysqli_query($con,$query);
    $row=mysqli_fetch_array($result);
    
?>
    
    <div class="prod d-flex m-5">
        <div class="prod+=--img w-15">
            <img src="/std/uploads/<?php echo $row['pimage'];?>" class="card-img-top/" alt="ChattPata Noodles"
                style="width: 180px; margin-top: 7px; margin-bottom: -7px;">
            <div class="card-body">
                <hr style="margin-top: 5px; margin-bottom: 10px;">
                <p class="card-text" style="font-size: 17px; font-weight: bold; text-align: center;"><?php echo $row['pname'];?>
                </p>
            </div>
        </div>
        <div class="details">
            <h2><?php echo $row['pname'];?></h2>

            <img src="/std/Knorr-clone-main/images/five-stars.png" alt="Five Stars" class="stars">
            <p class="detailspara"><span style="color: darkslategrey; font-weight: bold;">Brand:</span><a
                    href="https://www.knorr.com.pk" style="text-decoration: none;">
                    Knorr</a>
            </p>
            <hr style="width: 385px; color: rgb(155, 154, 154);">
            <h3>Rs. <?php echo $row['pprice'];?></h3>
            <h3 style="margin-top: 7px; margin-bottom: -34px;">Quantity:</h3>
            <br>
            <br>
            <div class="wrapper">
                <span class="minus" style="margin-left: 0px;">-</span>
                <span class="num" style="margin-left: 27px;">01</span>
                <span class="plus" style="margin-left: 25px;">+</span>
            </div>
            <button class="buynow">Buy Now</button>
        </div>
        <div style="color:black;text-align:center; width:25%;margin-top:5%;"> 
        <h2>Discription:</h2>
        <p class="card-text"> <?php echo $row['pdetail']; ?></p></div>
    </div>
    <div>
     <h3>Related products...</h3>
<?php
$cat=$row['pcategory'];
$query="select * from products where pcategory='$cat'";
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
                <div style="width:50px;">
              <img src="/std/uploads/<?php echo $fetch['pimage'] ?>">     
              </div> 
            </div>
            <div class="back">
              <h3 class="text-black fs-5"> <?php echo $fetch['pname'] ?></h3>
             
              <p><b>Price:</b>  <?php echo $fetch['pprice'] ?></p>
              <a href="/std\Knorr-clone-main/products/soups.php"></a>
            </div>
          </div>
        </div>
      <?php } ?>
    
    </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
    <script>
        const plus = document.querySelector(".plus"),
            minus = document.querySelector(".minus");
        num = document.querySelector(".num");

        let a = 1;

        plus.addEventListener("click", () => {
            a++;
            a = (a < 10) ? "0" + a : a;
            num.innerText = a;
        })

        minus.addEventListener("click", () => {
            if (a > 1) {
                a--;
                a = (a < 10) ? "0" + a : a;
                num.innerText = a;
            }
        })
    </script>


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
                        <p><b>This website has been brought to you by the company of Knorr. This is a big Project and we
                                are looking
                                forward to your help to improve ourselves. Tell Us about you Comments on our Products in
                                the Contact
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