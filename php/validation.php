<?php
session_start();
include('dbconnect.php');
if (isset($_POST))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $query = "SELECT * FROM user WHERE email = '$email' && password='$pass'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result)==1)
    {
        $resultArr = mysqli_fetch_assoc($result);
        $username = $resultArr['fname']." ".$resultArr['lname'];
        $_SESSION['username'] = $username;
        header("location:http://localhost/Mr%20Gadget/mainpage.php");

        

    }
    else
    {
        $queryAdmin = "SELECT * FROM admindetails WHERE email = '$email' && password='$pass'";
        $resultAdmin = mysqli_query($con,$queryAdmin);
        if (mysqli_num_rows($resultAdmin)==1)
        {
            $resultArray = mysqli_fetch_assoc($resultAdmin);
            $username = $resultArray['username'];
            $_SESSION['username'] = $username;
            header("location:http://localhost/Mr%20Gadget/admin/home.php");
        }
        else 
        {
            header('location:http://localhost/Mr%20Gadget/signin.php?auth=0');
        }      
    }
}
?>