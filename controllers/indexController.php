<?php
require_once '../models/database_connect.php';

  if (isset($_POST['submit'])) {
    $err_from = '';
    $from = '';
    $err_to = '';
    $to = '';
    $err_select = '';
    $err_date = '';
    $ddate = '';
    $has_error=false;
      if ($_POST['from'] == 'NULL') 
      {
          $err_from = '*Please Select';
          $has_error=true;
      } 
      else 
      {
          $from = $_POST['from'];
      }
      if ($_POST['to'] == 'NULL') 
      {
          $err_to = '*Please Select';
          $has_error=true;
      } 
      else 
      {
          if ($_POST['from'] === $_POST['to']) 
          {
              $err_select = '*Error Select';
              $has_error=true;
          } 
          else 
          {
              $to = $_POST['to'];
          }
      }
      if (empty($_POST['ddate'])) 
      {
          $err_date = '*Date Required';
          $has_error=true;
      } 
      else 
      {
          $ddate = $_POST['ddate'];
      }
      if(!$has_error)
      {
        getAllFlights();
      }
      
  }
  function getAllFlights(){

    $from = $_POST['from'];
    $to = $_POST['to'];
    $ddate = $_POST['ddate'];
    $query ="SELECT * FROM flight WHERE ffrom='$from' AND tto='$to' AND ddate='$ddate'";
    $flight = get($query);
    return $flight;	
    }

    function getAllFlight($id)
	{
		$query="SELECT * FROM flight WHERE id=$id";
		$flight=get($query);
		return $flight[0];
		
    }
    
   
  if (isset($_POST['select1'])) {
    echo "<script>alert('You Need to Login First!'); location.href='../views/Login.php';</script>";
  }
      
  if (isset($_POST['submit2']))
  {
    $err_name="";
    $name="";
    $err_email="";
    $email="";
    $err_subject="";
    $subject="";
    $err_description="";
    $description="";
    $has_err=false;
    if ($_POST['name'] == "") 
      {
          $err_name = '*Name Required';
          $has_err=true;
      } 
      else 
      {
          $name = $_POST['name'];
      }
      if ($_POST['email'] == "") 
      {
          $err_email = '*Email Required';
          $has_err=true;
      } 
      else 
      {
          $email = $_POST['email'];
      }
      if ($_POST['subject'] == "") 
      {
          $err_subject = '*Subject Required';
          $has_err=true;
      } 
      else 
      {
          $subject = $_POST['subject'];
      }
      if ($_POST['description'] == "") 
      {
          $err_description = '*Description Required';
          $has_err=true;
      } 
      else 
      {
          $description = $_POST['description'];
      }
      if(!$has_err)
      {
        $query = "INSERT INTO contacts (nname, email, ssubject, ddescription) VALUES ('$name', '$email', '$subject', '$description')";
        $result=execute($query);
        echo "<script>alert('Submited!'); location.href='../index.php';</script>";
        //header("Location:../index.php");
      }
  }
  

?>