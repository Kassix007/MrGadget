<?php
include('dbconnect.php');
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['pass'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$query = "SELECT * FROM user WHERE email='$email';";
$checkEmail = mysqli_query($con,$query);
if (mysqli_num_rows($checkEmail) > 0)
{
    echo " Email already registered";
}
else
{
    $reg = "INSERT INTO user(email,fname,lname,password,dob,gender,address)
    VALUES ('$email','$fname','$lname','$password','$dob','$gender','$address');";
     mysqli_query($con,$reg);       
}
header('location:http://localhost/Mr%20Gadget/signin.php');
?>