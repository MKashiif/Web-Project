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
include 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>CRUD</title>
    <style>
    body {
        background-color: #f1f1f1;
        font-family: Arial, sans-serif;
    }

    form {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        margin: 50px auto;
        max-width: 600px;
        padding: 20px;
        width: 100%;
    }

    h2 {
        text-align: center;
    }

    label {
        display: block;
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="number"] {
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        margin-bottom: 20px;
        padding: 10px;
        width: 100%;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        border: none;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        margin-top: 20px;
        padding: 10px;
        transition: background-color 0.3s ease;
        width: 100%;
    }


</style>
  </head>
  <body>
  <div class="container my-5">
        <h2>Update Product</h2>
    <form method="post" action="" enctype="multipart/form-data">
  <label for="pid">Product ID:</label>
  <input type="number" id="pid" name="pid" autocomplete="off"><br>

  <label for="pname">Name:</label>
  <input type="text" id="pname" name="pname" autocomplete="off"><br>

  <label for="pprice">Price:</label>
  <input type="number" id="pprice" name="pprice" autocomplete="off"><br>

  <label for="pcode">Code:</label>
  <input type="number" id="pcode" name="pcode" autocomplete="off"><br>

  <label for="pcategory">Category:</label>
  <input type="text" id="pcategory" name="pcategory" autocomplete="off"><br>
  
  <label for="pdiscount">Discount:</label>
  <input type="number" id="pdiscount" name="pdiscount" autocomplete="off"><br>

  <label for="pdetail">Detail:</label>
  <input type="text" id="pdetail" name="pdetail" autocomplete="off"><br>

  <label for="pstock">Stock:</label>
  <input type="text" id="pstock" name="pstock" autocomplete="off"><br>

  <label for="pimage">Picture:</label>
  <input type="file" id="pimage" name="pimage" autocomplete="off"><br>

  <input type="submit" name="submit" value="Submit">
</form>

</div>
</body>
</html>

<?php
if(isset($_GET['updateid'])){
    $pid = $_GET['updateid'];
    $sql="SELECT * FROM products WHERE pid=$pid";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $pname=$row['pname'];
    $pprice=$row['pprice'];
    $pcode=$row['pcode'];
    $pcategory=$row['pcategory'];
    $pdiscount=$row['pdiscount'];
    $pdetail=$row['pdetail'];
    $pstock=$row['pstock'];

    if(isset($_POST['submit'])){
        $pname = $_POST['pname'];
        $pprice = $_POST['pprice'];
        $pcode = $_POST['pcode'];
        $pcategory = $_POST['pcategory'];
        $pdiscount = $_POST['pdiscount'];
        $pdetail = $_POST['pdetail'];
        $pstock = $_POST['pstock'];
        $pimage = file_get_contents($_FILES['pimage']['tmp_name']);
        $query = "UPDATE `products` SET pname='$pname', pprice=$pprice, pcode='$pcode', pcategory='$pcategory', pdiscount='$pdiscount', 
        pdetail='$pdetail', pstock='$pstock' WHERE pid=$pid";
        $update = mysqli_query($con, $query);
        if($update){
            echo "Updated successfully";
            header('location: display.php');
            exit;
        }
        else{
            die(mysqli_error($con));
        }
    }
}
?>


