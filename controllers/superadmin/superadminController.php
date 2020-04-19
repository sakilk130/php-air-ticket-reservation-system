<?php
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
		header("Location:../../views/Login.php");
    }
?>