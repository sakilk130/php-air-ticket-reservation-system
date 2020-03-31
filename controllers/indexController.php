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
    if ($_POST['name'] == "") 
      {
          $err_name = '*Name Required';
      } 
      else 
      {
          $name = $_POST['name'];
      }
      if ($_POST['email'] == "") 
      {
          $err_email = '*Email Required';
      } 
      else 
      {
          $email = $_POST['email'];
      }
      if ($_POST['subject'] == "") 
      {
          $err_subject = '*Subject Required';
      } 
      else 
      {
          $subject = $_POST['subject'];
      }
      if ($_POST['description'] == "") 
      {
          $err_description = '*Description Required';
      } 
      else 
      {
          $description = $_POST['description'];
      }
  }

  ?>

  <?php
  $select1 = '';
  $errr_select1 = '';
  if (isset($_POST['select1'])) {
      if ($select1 == '') {
          $errr_select1 = '*You Need To Login First';
      }
  }
  ?>

  <?php
  $select2 = '';
  $errr_select2 = '';
  if (isset($_POST['select2'])) {
      if ($select2 == '') {
          $errr_select2 = '*You Need To Login First';
      }
  }
  ?>
  <?php
  $select3 = '';
  $errr_select3 = '';
  if (isset($_POST['select3'])) {
      if ($select3 == '') {
          $errr_select3 = '*You Need To Login First';
      }
  }
  ?>
  <?php
  $select4 = '';
  $errr_select4 = '';
  if (isset($_POST['select4'])) {
      if ($select4 == '') {
          $errr_select4 = '*You Need To Login First';
      }
  }
  ?>
  <?php
  $select5 = '';
  $errr_select5 = '';
  if (isset($_POST['select5'])) {
      if ($select5 == '') {
          $errr_select5 = '*You Need To Login First';
      }
  }
  ?>
  <?php
  $select6 = '';
  $errr_select6 = '';
  if (isset($_POST['select6'])) {
      if ($select6 == '') {
          $errr_select6 = '*You Need To Login First';
      }
  }
  ?>