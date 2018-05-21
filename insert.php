<?php
    include("connection.php");

    // escape variables for security
    $firstname = mysqli_real_escape_string($conn, $_POST['First_Name']);
    $lastname = mysqli_real_escape_string($conn, $_POST['Last_Name']);
    $dir = mysqli_real_escape_string($conn, $_POST['Address']);
    $cc = mysqli_real_escape_string($conn, $_POST['Credit_Card']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $psswd = mysqli_real_escape_string($conn, $_POST['Confirm_Password']);


    $sql="INSERT INTO mydb.users (nombre, apellido,passwordUser,mail,creditCard,address)
      VALUES ('$firstname', '$lastname', '$psswd','$email','$cc','$dir');";

    if (!mysqli_query($conn,$sql)) {
      die('Error: ' . mysqli_error($conn));
    }
    header('Location: index.php');

    
  ?>