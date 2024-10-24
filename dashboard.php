<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mr Gadget-Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="main.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://localhost/Mr%20Gadget/javascript.js"></script>
    
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
        .w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
        .w3-third img:hover{opacity: 1}
        .header-member i{margin-top: -10px;font-size: 40px;color: black;}
        .login-error {margin-left:5%;margin-right:5%;margin-top:-5%;margin-bottom:7%;background-color:#BBBBBB;}
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

<body class="w3-light-grey w3-content" style="max-width:1600px" onload="display('personalDetails')">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
    <h3 class="w3-padding-64 w3-center"><b>Mr Gadget</b></h3>
    
    <span class="header-member"><a href="javascript:void(0);" onclick="displaydrop();" ><i class="material-icons">account_circle</i></a></span>
    <br></br>
    <div id="drop-down" style="display:none;background-color:#E8E8E8;">
            <?php
                if (isset($_SESSION['username'])) 
                {
                    echo "<a class='w3-bar-item w3-button' onclick='w3_close()' href='dashboard.php'>".$_SESSION['username']."</a>";
                }
                else
                {
                    echo "<a href='signin.php' onclick='w3_close()' class='w3-bar-item w3-button'>SIGN IN</a>";
                }
            ?> 
        <a class="w3-bar-item w3-button" href="php/logout.php" style="text-decoration:none;">LOG OUT</a>
    </div>
    <a href="cart.html"><span><i class="material-icons">add_shopping_cart</i></span></a>
    <a href="mainpage.php" onclick="w3_close()" class="w3-bar-item w3-button">HOME</a> 
    <a href="products.php" onclick="w3_close()" class="w3-bar-item w3-button">PRODUCTS</a> 
    <a href="eventts.php" onclick="w3_close()" class="w3-bar-item w3-button">EVENTS</a>
    <a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT US</a>
    <a href="sell.php" onclick="w3_close()" class="w3-bar-item w3-button">SELL WITH US</a>
    <a href="#howtobuy.php" onclick="w3_close()" class="w3-bar-item w3-button">HOW TO BUY</a>
    <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT US</a>
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding">Mr Gadget</span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">
     <!-- Push down content on small screens --> 
    <div class="w3-hide-large" style="margin-top:83px"></div>
<!--User Account Details-->
<h1 class="member-headings" style="font-family:Serif;">User Profile</h1>
	<div class="member-wrapper">
		<div class="link-container">
		<span id="iconLink" class="material-icons">description</span>
			<nav>
				<ul id="linkUL">
					<li class="links">
						<a title="Display Personal details" href="#" onclick="display('personalDetails');return false;">Personal Details</a>
					</li>
					<li class="links">
						<a title="Display Previous Purchases" href="#" onclick="display('purchases');return false;">Previous Purchases</a>
					</li>
					<li class="links">
						<a title="Display Billing Details" href="#" onclick="display('billing');return false;">Billing Details</a>
					</li>
					<li class="links">
						<a title="Display Account Settings" href="#" onclick="display('settings');return false;">Account Settings</a>
					</li>
				</ul>
			</nav>
		</div>
		
		<div id="display-container"></div>	
	</div>
	
	<div id="personalDetails">	
		<div>
			<h2 class="member-headings"><i>Personal Details</i></h2>
			
				<div id="wrapperName">
					<div id="img-container">
						<img class="imgTable" src="images\member.png"/>
					</div>
					
					<div id="name-container">
						<p>
							<span class="member-head">First Name : </span> 
							Kishanlall
						</p>
						<p>
							<span class="member-head">Last Name : </span> 
							Kassinathdoss
						</p>						
					</div>
				</div>
				
				<div id="container2">
					<p>
						<span class="member-head">Email : </span> 
						<a href="mailto:kishanlall.kassinathdoss@umail.uom.ac.mu">kishanlall.kassinathdoss@umail.uom.ac.mu</a></br>
					</p>
					<p>
						<span class="member-head">Date Of Birth : </span>
						<span>04-May-2002</span>
					</p>
					<p>
						<span class="member-head">Age : </span>
						<span>19 Years Old</span>
					</p>
				</div>
				
				<div id="container3">
					<button class="btnProfile" onclick="###">Edit Details</button>
				</div>
			
		</div>
	</div>		
	<div id="purchases">
		<h2 class="member-headings"><i>Previous Purchases</i></h2>
	</div>

	<div id="billing">
		<h2 class="member-headings"><i>Billing Details</i></h2>
		<div id="img-container">
			<img class="imgTable" src="images\card.jpg"/>
		</div>
		
		<div id="container2">
			<p>
				<span class="member-head">Card Number : </span> 
				<span>**** ***** **** 1234</span>
			</p>
			<p>
				<span class="member-head">Expiry Date: </span>
				<span>04-May-2030</span>
			</p>
		</div>
				
		<div id="container3">
			<button class="btnProfile" onclick="###" style="margin-bottom:10px;">Add Payment Method</button>
			<button class="btnProfile" onclick="###">Remove Payment Method</button>
		</div>
		
	</div>	
	<div id="settings">
		<h2 class="member-headings"><i>Account Settings</i></h2>
		<div id="btn-container">
			<ul>
				<li class="linksAcc">
					<a href="#" onclick="#">Change Personal Details</a>
				</li>
				<li class="linksAcc">
					<a href="#" onclick="#">Redeem Coupon</a>
				</li>
				<li class="linksAcc">
					<a  href="#" onclick="#">Payment methods</a>
				</li>
				<li class="linksAcc">
					<a href="#" onclick="#">General settings</a>
				</li>
				<li class="linksAcc">
					<a href="#" onclick="#">Deactivate Account</a>
				</li>
				<li class="linksAcc">
					<a  href="#" onclick="#">Log Out</a>
				</li>

			</ul>
		</div>
	</div>

<!--end of page content--> 
<?php  include('php/footertemp.php'); ?>