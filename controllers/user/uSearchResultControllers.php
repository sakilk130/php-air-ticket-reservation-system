<?php
require_once '../../models/database_connect.php';
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
    header("Location:../Login.php");
    }


    function getAllFlights($from,$to,$date){

        // $from = $_POST['from'];
        // $to = $_POST['to'];
        // $date = $_POST['date'];
        $query ="SELECT * FROM flight WHERE ffrom='$from' AND tto='$to' AND ddate='$date'";
        $flight = get($query);
        return $flight;	
    }
?>