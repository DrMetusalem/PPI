<?php
    include("connection.php");
	    if(empty($_POST['Email']))
	    {
	        HandleError("UserName is empty!");
	        return false;
	    }
	    if(empty($_POST['Password']))
	    {
	        HandleError("Password is empty!");
	        return false;
	    }
	    $username = trim($_POST['Email']);
		$password = trim($_POST['Password']);
		
	    if(!CheckLoginInDB($username,$password))
	    {
	        return false;
	    }
	    session_start();
		$_SESSION['user'] = $username;
		$qry = "SELECT * from mydb.Users WHERE mail='$username'  ;";
		$result = mysqli_query($conn,$qry);
		$row = mysqli_fetch_array($result);
		
		if($row['adminStatus']==TRUE){
				header('Location: admin.php');
		}else{
			header('Location: index.php');
		}
		
		
		return true;
		
		
        function CheckLoginInDB($username,$password)
            {
                include("connection.php");
                $qry = "SELECT mail , passwordUser from mydb.Users WHERE mail='$username' AND passwordUser='$password' ;";
                $result = mysqli_query($conn,$qry);
                if(!mysqli_query($conn,$qry))
                {
                    die('Error: ' . mysqli_error($conn));
                    return false;
				}
				
                return true;
            }
?>