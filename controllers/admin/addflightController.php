<?php
require_once '../../models/database_connect.php';
session_start();
if(!isset($_SESSION['loggedinuser']))
{
    header("Location:../../views/Login.php");
}
$err_fid="";
$fid="";
$err_ftime="";
$ftime="";
$err_from="";
$from="";
$err_to="";
$to="";
$err_fdate="";
$fdate="";
$err_fseat="";
$fseat="";
$err_ffare="";
$ffare="";
$has_err=false;
if(isset($_POST['addFlight']))
{
    if(empty($_POST['fid']))
    {
        $err_fid="*Flight ID Required";
        $has_err=true;
    }
    else
    {			
        $fid=htmlspecialchars($_POST['fid']);
    }
    if(empty($_POST['ftime']))
    {
        $err_ftime="*Departing Time Required";
        $has_err=true;
    }
    else
    {
        $ftime=$_POST['ftime'];
    }
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
      if (empty($_POST['fdate'])) 
      {
          $err_fdate = '*Date Required';
          $has_err=true;
      } 
      else 
      {
          $fdate = $_POST['fdate'];
      }

      if (empty($_POST['fseat'])) 
      {
          $err_fseat = '*Seat Required';
          $has_err=true;
      } 
      else 
      {
          $fseat = $_POST['fseat'];
      }

      if (empty($_POST['ffare'])) 
      {
          $err_ffare = '*Fare Required';
          $has_err=true;
      } 
      else 
      {
          $ffare = $_POST['ffare'];
      }
      if(!$has_err)
      {
        $query = "INSERT INTO flight (flightid, ttime, ffrom, tto, ddate, seat, fare) VALUES ('$fid', '$ftime', '$from', '$to', '$fdate', '$fseat', '$ffare')";
        $result=execute($query);
        echo "<script>alert('Flight Added !'); location.href='../../views/admin/addFlight.php';</script>";
        //header("Location:../../views/admin/addFlight.php");
    }

}
?>