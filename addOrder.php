<?php
    include("connection.php");
    session_start();

    $idUsuario=mysqli_real_escape_string($conn,$_SESSION['user']);
                        
    $result = mysqli_query($conn,"SELECT * FROM mydb.cart c WHERE c.usuario='$idUsuario' ;");
	while($row = mysqli_fetch_array($result)){
        $idProducto=$row['producto'];
        

        $sql="INSERT INTO mydb.orders (usuario,producto)
        VALUES ('$idUsuario', '$idProducto');";
        if (!mysqli_query($conn,$sql)) {
            die('Error: ' . mysqli_error($conn));
        }

        $updateCant= mysqli_query($conn,"SELECT * FROM mydb.products WHERE idProducts='$idProducto' ;");
        $rowCant = mysqli_fetch_array($updateCant);
        $newCant=$rowCant['cantidad'] - 1;

        $sql="UPDATE mydb.products SET cantidad=$newCant  WHERE idProducts='$idProducto' ;";
        if (!mysqli_query($conn,$sql)) {
            die('Error: ' . mysqli_error($conn));
        }

        $sql=" DELETE FROM mydb.cart WHERE usuario='$idUsuario' ;";

        if (!mysqli_query($conn,$sql)) {
            die('Error: ' . mysqli_error($conn));
        }
       
        

    }
    header('Location: checkout.php');
    
   
  ?>