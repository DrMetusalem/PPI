<?php
    include("connection.php");
    session_start();

    $id=$_GET['idProd'];
    echo $_GET['idProd'];
    $idProducto = mysqli_real_escape_string($conn,$id);

  
    $idUsuario=mysqli_real_escape_string($conn,$_SESSION['user']);
    
    $sql="INSERT INTO mydb.cart (usuario,producto)
      VALUES ('$idUsuario', '$idProducto');";

    if (!mysqli_query($conn,$sql)) {
      die('Error: ' . mysqli_error($conn));
    }
    header('Location: cart.php');
    
   
  ?>