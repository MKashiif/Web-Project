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
        <h2>Add Products</h2>
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
if (isset($_POST['submit'])) {
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pcode = $_POST['pcode'];
    $pcategory = $_POST['pcategory'];
    $pdiscount = $_POST['pdiscount'];
    $pdetail = $_POST['pdetail'];
    $pstock = $_POST['pstock'];

    // Check if a file was uploaded
    if (isset($_FILES['pimage']) && $_FILES['pimage']['error'] == UPLOAD_ERR_OK) {
        // Define the folder where the uploaded files will be stored
        $upload_dir = 'uploads/';

        // Get the file extension
        $file_ext = strtolower(pathinfo($_FILES['pimage']['name'], PATHINFO_EXTENSION));

        // Generate a unique filename for the uploaded file
        $file_name = uniqid() . '_' . $name . '.' . $file_ext;

        // Check if the file type is allowed
        $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
        if (!in_array($file_ext, $allowed_types)) {
            die('Error: Only JPG, JPEG, PNG and GIF files are allowed.');
        }

        // Move the uploaded file to the folder
        move_uploaded_file($_FILES['pimage']['tmp_name'], $upload_dir . $file_name);

        // Store the file path in the database
        $pimage =  $file_name;
    } else {
        $pimage = null;
    }

    // insertion
    $query = "INSERT INTO products (pid, pname, pprice, pcode, pcategory, pdiscount, pdetail, pstock, pimage) 
    VALUES ('$pid', '$pname', '$pprice', '$pcode', '$pcategory', '$pdiscount', '$pdetail', '$pstock', '" . mysqli_real_escape_string($con, $pimage) . "')";
    $insert = mysqli_query($con, $query);
    if ($insert) {
        echo "Inserted successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}

?>


