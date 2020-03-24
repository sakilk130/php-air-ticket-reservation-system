<?php

 session_start();
 if(!isset($_SESSION['loggedinuser']))
 {
 header("Location:../Login.php");
 require_once '../../models/database_connect.php';
 }
  

  $err_from = '';
  $from = '';
  $err_to = '';
  $to = '';
  $err_select = '';
  $err_date = '';
  $date = '';
  $has_err=false;
  if (isset($_POST['submit'])) {
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
        header("Location:usearchresult.php");
      }
  }
  if(isset($_POST['submit2'])){
  session_start();
  if (isset($_SESSION['username']))
  {
    unset($_SESSION['username']);
  }
  session_destroy();
  header("location:../Login.php");
  exit();
  }
  ?>