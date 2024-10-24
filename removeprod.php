<?php 
session_start();
$code = $_POST['code'];
if(!empty($_SESSION["shopping_cart"])) 
{
    foreach($_SESSION["shopping_cart"] as $key => $value) 
    {
      if($code == $value['code'])
      {
        unset($_SESSION["shopping_cart"][$key]);

      }
      if(empty($_SESSION["shopping_cart"]))
        unset($_SESSION["shopping_cart"]);
    }
      header('location:cart.php');		
}
?>