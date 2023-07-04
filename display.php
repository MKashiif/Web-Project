<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) 
{
    // Redirect the user to the login page
    header("Location: login.php");
    exit();
}
?>

<?php
include 'connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="icon" href="logo.png">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="/std/Knorr-clone-main/index1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/std/Knorr-clone-main/index1.php">Products <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/std/knorr-clone-main/about.php">About us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/std/knorr-clone-main/contactus.php">Contact Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/std/logout.php">Logout <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>  


   <div class="container my-5">
    <button class="btn btn-primary"><a href="index.php" class="text-light">Add Products</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Code</th>
      <th scope="col">Category</th>
      <th scope="col">Discount</th>
      <th scope="col">Detail</th>
      <th scope="col">Stock</th>
      <th scope="col">Image</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
$sql = "SELECT * FROM products";
$result = mysqli_query($con, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $pid = $row['pid'];
        $pname = $row['pname'];
        $pprice = $row['pprice'];
        $pcode = $row['pcode'];
        $pcategory = $row['pcategory'];
        $pdiscount = $row['pdiscount'];
        $pdetail = $row['pdetail'];
        $pstock = $row['pstock'];
        $pimage = 'uploads/'. $row['pimage']; // add the correct path to the uploads folder

        echo '<tr>
        <th scope="row">' . $pid . '</th>
        <td>' . $pname . '</td>
        <td>' . $pprice . '</td> 
        <td>' . $pcode . '</td>
        <td>' . $pcategory . '</td>
        <td>' . $pdiscount . '</td>
        <td>' . $pdetail . '</td>
        <td>' . $pstock . '</td>
        <td><img src="'.$pimage . '" width="100" height="100"/></td>
        <td>
        <button class="btn btn-primary"><a href="edit.php?updateid=' . $pid . '" class="text-light">Edit</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid=' . $pid . '" class="text-light">Delete</a></button>
        </td>
        </tr>';
    }
}
?>
  </tbody>
</table>
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

      <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>
</body>
</html>