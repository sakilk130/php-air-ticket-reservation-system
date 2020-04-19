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
    $name3=$_SESSION['loggedinuser'];
    $query ="SELECT fname, lname FROM users WHERE uname='$name3'";
    $userName = getU($query);
    if(mysqli_num_rows($userName) > 0)
    {
        while($rows = mysqli_fetch_assoc($userName))
        {
            $name= $rows["fname"];
            $name1= $rows["lname"];
            $id=$rows["userid"];
        }
    }
    
?>