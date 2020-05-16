<?php
 require_once '../../models/database_connect.php';
    session_start();
    if(!isset($_SESSION['loggedinuser']))
	{
    header("Location:../../views/Login.php");
    }
    function getflightInfo($id)
    {
        $query = "SELECT * FROM flight WHERE fid = $id";
        $flightinfo=get($query);
        return $flightinfo[0];
    }
    function getTicketInfo($id)
    {
        $query = "SELECT * FROM tickets WHERE flightid = $id";
        $ticketinfo=get($query);
        return $ticketinfo[0];
    }
    if (isset($_POST['payNow'])){
        $uname=$_SESSION['loggedinuser'];
        $pnum="";
        $err_pnum="";
        $err_A1="";
        $A1="";
        $err_A2="";
        $A2="";
        $err_A3="";
        $A3="";
        $err_A4="";
        $A4="";

        $err_B1="";
        $B1="";
        $err_B2="";
        $B2="";
        $err_B3="";
        $B3="";
        $err_B4="";
        $B4="";
        
        $err_C1="";
        $C1="";
        $err_C2="";
        $C2="";
        $err_C3="";
        $C3="";
        $err_C4="";
        $C4="";

        $err_D1="";
        $D1="";
        $err_D2="";
        $D2="";
        $err_D3="";
        $D3="";
        $err_D4="";
        $D4="";
        $has_err=false;
        if(empty(($_POST['A1'])))
        {
            $err_A1="**Select Seat";
            $err_pnum="*Phone Number Required";
            $has_err=true;
        }
        else 
        {
            $pnum = $_POST['pnum'];
            $A1 = $_POST['A1'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$A1', '$pnum')";
            //echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";
            // header("Location:upayment.php?id=".$_POST['id']."&A1=".$_POST['A1']);
        }

        if(empty($_POST['A2']))
        {
            
            $err_A2="*Select Seat";
            $err_pnum="*Phone Number Required";
            $has_err=true;
        }
        else 
        {
            $pnum = $_POST['pnum'];
            $A2 = $_POST['A2'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$A2', '$pnum')";
           // echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";
        }
        if(empty($_POST['A3']))
        {
            $err_pnum="*Phone Number Required";
            $err_A3="*Select Seat";
            $has_err=true;
          }
        else 
        {
            $pnum = $_POST['pnum'];
            $A3 = $_POST['A3'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat,phonen) VALUES ('$uname', $id, '$A3','$pnum')";
            //echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";
        }

        if(empty($_POST['A4']))
        {
            $err_pnum="*Phone Number Required";
            $err_A4="*Select Seat";
            $has_err=true;
          }
        else 
        {
            $pnum = $_POST['pnum'];
            $A4 = $_POST['A4'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$A4', '$pnum')";
           // echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";
        }


        if(empty($_POST['B1']))
        {
            $err_pnum="*Phone Number Required";
            $err_B1="*Select Seat";
            $has_err=true;
        }
        else 
        {
            $pnum = $_POST['pnum'];
            $B1 = $_POST['B1'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$B1', '$pnum')";
            // echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";

        }

        if(empty($_POST['B2']))
        {
            $err_pnum="*Phone Number Required";
            $err_B2="*Select Seat";
            $has_err=true;
          }
        else 
        {
            $B2 = $_POST['B2'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$B2', '$pnum')";
            //echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";

        }
        if(empty($_POST['B3']))
        {
            $err_pnum="*Phone Number Required";
            $err_B3="*Select Seat";
            $has_err=true;
          }
        else 
        {
            $B3 = $_POST['B3'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat,phonen) VALUES ('$uname', $id, '$B3', '$pnum')";
            //echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";

        }

        if(empty($_POST['B4']))
        {
            $err_pnum="*Phone Number Required";
            $err_B4="*Select Seat";
            $has_err=true;
          }
        else 
        {
            $B4 = $_POST['B4'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$B4', '$pnum')";
            //echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";
        }

        if(empty($_POST['C1']))
        {
            $err_pnum="*Phone Number Required";
            $err_C1="*Select Seat";
            $has_err=true;
        }
        else 
        {
            $C1 = $_POST['C1'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$C1', '$pnum')";
            // echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";
        }

        if(empty($_POST['C2']))
        {
            $err_pnum="*Phone Number Required";
            $err_C2="*Select Seat";
            $has_err=true;
          }
        else 
        {
            $C2 = $_POST['C2'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$C2', '$pnum')";
            // echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";

        }
        if(empty($_POST['C3']))
        {
            $err_pnum="*Phone Number Required";
            $err_C3="*Select Seat";
            $has_err=true;
          }
        else 
        {
            $C3 = $_POST['C3'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$C3', '$pnum')";
            // echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";

        }

        if(empty($_POST['C4']))
        {
            $err_pnum="*Phone Number Required";
            $err_C4="*Select Seat";
            $has_err=true;
          }
        else 
        {
            $C4 = $_POST['C4'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$C4', '$pnum')";
            // echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";
        }


        if(empty($_POST['D1']))
        {
            $err_pnum="*Phone Number Required";
            $err_D1="*Select Seat";
            $has_err=true;
        }
        else 
        {
            $D1 = $_POST['D1'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$D1', ''$pnum)";
            // echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";

        }

        if(empty($_POST['D2']))
        {
            $err_pnum="*Phone Number Required";
            $err_D2="*Select Seat";
            $has_err=true;
          }
        else 
        {
            $D2 = $_POST['D2'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$D2','$pnum')";
            // echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";
        }
        if(empty($_POST['D3']))
        {
            $err_pnum="*Phone Number Required";
            $err_D3="*Select Seat";
            $has_err=true;
          }
        else 
        {
            $D3 = $_POST['D3'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$D3', '$pnum')";
            // echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";

        }

        if(empty($_POST['D4']))
        {
            $err_pnum="*Phone Number Required";
            $err_AD="*Select Seat";
            $has_err=true;
          }
        else 
        {
            $D4 = $_POST['D4'];
            $id=$_POST["id"];
            $query ="INSERT INTO tickets(uname, flightid, sseat, phonen) VALUES ('$uname', $id, '$D4', '$pnum')";
            // echo $query;
            execute($query);
            echo "<script>alert('Payment Successfull!'); location.href='../../views/user/udashboard.php';</script>";

        }
    }
?>