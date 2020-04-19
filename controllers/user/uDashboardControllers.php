<?php
 session_start();
 if(!isset($_SESSION['loggedinuser']))
 {
 header("Location:../Login.php");
 }
 require_once '../../models/database_connect.php';

  if (isset($_POST['submit'])) {
    $err_from = '';
    $from = '';
    $err_to = '';
    $to = '';
    $err_select = '';
    $err_date = '';
    $date = '';
    $has_err=false;

      if ($_POST['from'] == 'NULL') 
      {
          $err_from = '*Please Select';
          $has_err=true;
      } 
      else 
      {
          $from = $_POST['from'];
      }
      if ($_POST['to'] == 'NULL') 
      {
          $err_to = '*Please Select';
          $has_err=true;

      } 
      else 
      {
          if ($_POST['from'] === $_POST['to']) 
          {
              $err_select = '*Error Select';
              $has_err=true;
          } 
          else 
          {
              $to = $_POST['to'];
          }
      }
      if (empty($_POST['date'])) 
      {
          $err_date = '*Date Required';
          $has_err=true;
      } 
      else 
      {
          $date = $_POST['date'];
      }
      if(!$has_err)
      {
       getAllFlights();
       header("Location:usearchresult.php?from=".$_POST['from']."&to=".$_POST['to']."&date=".$_POST['date']);
    }
  }

  function getAllFlights(){

    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    $query ="SELECT * FROM flight WHERE ffrom='$from' AND tto='$to' AND ddate='$date'";
    $flight = get($query);
    return $flight;	
}
?>