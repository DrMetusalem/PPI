<?php
    include("connection.php");

    // escape variables for security
    $name = mysqli_real_escape_string($conn, $_POST['Produt_Name']);
    $description = mysqli_real_escape_string($conn, $_POST['Product_Description']);
    $price = mysqli_real_escape_string($conn, $_POST['Product_Price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['Product_Quantity']);
    $brand = mysqli_real_escape_string($conn, $_POST['Product_Brand']);
    $category = mysqli_real_escape_string($conn, $_POST['Product_Category']);
    $image = mysqli_real_escape_string($conn, $_POST['Product_Image']);


    $sql="INSERT INTO mydb.products (nombre, descripcion,precio,cantidad,marca,categoria,imagen)
      VALUES ('$name', '$description', '$price','$quantity','$brand','$category','$image');";

    if (!mysqli_query($conn,$sql)) {
      die('Error: ' . mysqli_error($conn));
    }
    header('Location: admin.php');

    
?>