<?php
session_start();
if (!isset($_SESSION['username']))
{
    header('location:http://localhost/Mr%20Gadget/signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mr Gadget Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/skin.css">
    <link rel="stylesheet" href="product.css">
    <script type="text/javascript" src="http://localhost/Mr%20Gadget/javascript.js"></script>
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
        .w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
        .w3-third img:hover{opacity: 1}
        .header-member i{margin-top: -10px;font-size: 40px;color: black;}
    </style>

    <script>
        function displaydrop() {
            var $links = document.getElementById("drop-down");
            if ($links.style.display === "none") 
            {
                $links.style.display = "inline";
            } 
            else 
            {
                $links.style.display = "none";
            }   
        }
    </script>

</head>

<body class="w3-white w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-light-grey w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
    <h3 class="w3-padding-64 w3-center"><b>Mr Gadget Admin</b></h3>
    <span class="header-member"><a href="javascript:void(0);" onclick="displaydrop();" ><i class="material-icons">account_circle</i></a></span>
    <br></br>
    <div id="drop-down" style="display:none;background-color:#E8E8E8;">
        <a class="w3-bar-item w3-button" href="dashboard.php"><?php echo $_SESSION['username']; ?></a>
        <a class="w3-bar-item w3-button" href="http://localhost/Mr%20Gadget/php/logout.php" style="text-decoration:none;">Log Out</a>
    </div>
    <a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a> 
    <a href="productVIEW.php" onclick="w3_close()" class="w3-bar-item w3-button">PRODUCTS</a> 
    <a href="#events.php" onclick="w3_close()" class="w3-bar-item w3-button">EVENTS</a>
    <a href="users.php" onclick="w3_close()" class="w3-bar-item w3-button">USERS</a>
    <a href="stats.php" onclick="w3_close()" class="w3-bar-item w3-button">STATS</a>
    <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button">INBOX</a>
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button"></a>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">MauCrowd</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
    <!-- Push down content on small screens --> 
    <div class="w3-hide-large" style="margin-top:83px"></div>