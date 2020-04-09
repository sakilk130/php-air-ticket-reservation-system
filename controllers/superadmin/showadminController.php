<?php
require_once '../../models/database_connect.php';
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:../../views/Login.php");
    }
    function getAllAdmin(){
        $utype="admin";
        $query ="SELECT * FROM users WHERE utype='$utype'";
        $admin = get($query);
        return $admin;	
    }
    if(isset($_POST['submit2'])){
        session_start();
        if (isset($_SESSION['loggedinuser']))
        {
          unset($_SESSION['loggedinuser']);
        }
        session_destroy();
        header("location:../../views/Login.php");
        exit();
        }
?>