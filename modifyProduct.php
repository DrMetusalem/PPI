<?php
    include("connection.php");

    // escape variables for security
    $idProducto = mysqli_real_escape_string($conn, $_POST['Product_Id']);
    
    $price = mysqli_real_escape_string($conn, $_POST['Product_Price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['Product_Quantity']);
    
    $update= mysqli_query($conn,"SELECT * FROM mydb.products WHERE idProducts='$idProducto' ;");
    $row = mysqli_fetch_array($updateCant);
    

    $sql="UPDATE mydb.products SET cantidad=$quantity , precio=$price  WHERE idProducts='$idProducto' ;";
    if (!mysqli_query($conn,$sql)) {
        die('Error: ' . mysqli_error($conn));
    }
    
    header('Location: admin.php');

    
?>