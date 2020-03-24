<?php
require_once '../../models/database_connect.php';
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
    header("Location:../Login.php");
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
    function getAllFlights()
      {
          $query ="SELECT * FROM flight";
          $flight = get($query);
          return $flight;	
      }
      function getFlight($fid)
      {
          $query="SELECT * FROM flight WHERE fid=$fid";
          $flight=get($query);
          return $flight[0];
          
      }
?>