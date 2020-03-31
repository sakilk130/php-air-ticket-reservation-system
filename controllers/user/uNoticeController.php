<?php
require_once '../../models/database_connect.php';
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
        header("Location:../../views/Login.php");
    }
    if(isset($_POST['submit2'])){
        session_start();
        if (isset($_SESSION['username']))
        {
          unset($_SESSION['username']);
        }
        session_destroy();
        header("location:Login.php");
        exit();
    }
    function getAllNotice()
	{
		$query ="SELECT * FROM notice WHERE type='user'";
		$notices = get($query);
		return $notices;	
	}
?>