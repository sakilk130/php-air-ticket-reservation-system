<?php
    require_once '../../models/database_connect.php';
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
    header("Location:../../views/Login.php");
    }
    if(isset($_POST['logout'])){
        session_start();
        if (isset($_SESSION['loggedinuser']))
        {
          unset($_SESSION['loggedinuser']);
        }
        session_destroy();
        header("location:../../views/Login.php");
        exit();
    }
    $uname=$_SESSION['loggedinuser'];
    $query ="SELECT fname, lname, email, phone FROM users WHERE uname='$uname'";
    $userName = getU($query);
    if(mysqli_num_rows($userName) > 0){
        while($rows = mysqli_fetch_assoc($userName)){
            $fname= $rows["fname"];
            $lname= $rows["lname"];
            $email=$rows["email"];
            $phone=$rows["phone"];
        }
    }
    
    
?>