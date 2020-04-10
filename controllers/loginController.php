<?php
session_start();
require_once '../models/database_connect.php';
$err_uname = '';
$uname = '';
$err_pass = '';
$pass = '';
$wrong_pass = "";
$err_invalid = "";
$has_error = false;
$message = "wrong answer";
if (isset($_POST['submit']))
{
    if (empty($_POST['uname']))
    {
        $err_uname = '*Username Required';
        $has_error = true;
    }
    else
    {
        $uname = htmlspecialchars($_POST['uname']);
    }
    if (empty($_POST['pass']))
    {
        $err_pass = '*Password Required';
        $has_erro = true;
    }
    else
    {
        $pass = $_POST['pass'];
    }
    if (!$has_error)
    {
        $query = "SELECT * FROM users WHERE uname='$uname' AND pass='$pass'";
        $result = getU($query);
        if (mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            if ($row["utype"] == "user")
            {
                // $f = $row["fname"];
                // $l = $row["lname"];
                // $_SESSION["loggedinuser"] = $f . " " . $l;
                $name=$row["uname"];
                $_SESSION["loggedinuser"] = $name;
                header("Location:../views/user/udashboard.php");
            }
            elseif ($row["utype"] == "admin")
            {
                $name=$row["uname"];
                $_SESSION["loggedinuser"] = $name;
                header("Location:../views/admin/admin.php");
            }
            elseif (($row["utype"] == "superadmin"))
            {
                $_SESSION["loggedinuser"] = $row["uname"];
                header("Location:../views/superadmin/superadmin.php");
            }
        }
        else
        {
            $err_invalid = "*Invalid Username Password";
        }
    }
}
?>
