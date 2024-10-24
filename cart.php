<?php
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["shopping_cart"][$key]);
      $_SESSION['status'] = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["shopping_cart"]))
      unset($_SESSION["shopping_cart"]);
      }		
}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after found - product
    }
}
  	
}
?>
<?php include('php/headertemp.php'); ?>
<!--page content -->

<div id="cart-container">
		<div class="cart-header">
			<h3 class="cart-heading">Shopping Cart</h3>
			<span class="material-icons">shopping_cart</span>
			<button class="action" value="Remove All" align="right" onclick="#">Remove All</button>
		</div>
		
		<table style="width:95%" align="center">
			<tr>
				<th>Product</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Price</th>
			</tr>
			<?php 
			if(isset($_SESSION["shopping_cart"]))
			{
				$total_price = 0;
				foreach ($_SESSION["shopping_cart"] as $product)
			{
				echo "<tr>";
				echo "<td><img class='imgTable' src='admin/phpadmin/".$product['image']."'/></td>";
				echo "<td class='description'>".$product['name']."</br></br>  </td>";
				echo "<form method='post' action=''>";
				echo "<input type='hidden' name='code' value=".$product['code']." />";
				echo "<input type='hidden' name='action' value='change'/>";
				echo "<td class='qty'><input type='number' value='1'onChange='this.form.submit()' name='quantity' class='quantity'/></td>";
				echo "</form>";
				echo "<td class='price'>";
				echo "<div class='prices'>";
				echo "<div class='amount'>".$product['price']."</div>";
				echo "<form method='post' action='removeprod.php'>";
				echo "<input type='hidden' name='code' value='".$product['code']."' />";
				echo "<input type='hidden' name='action' value='remove' />";
				echo "<button type='submit' class='remove'>Remove Item</button>";
				echo "</form>";
				echo "</div>";
				echo "</td>";
				echo "</tr>";
			}
			}
			
			else
			{
				echo "<h3>Your cart is empty!</h3>";
			}
			?>
			
			<tr>
				<td colspan="3">
					<button id="btnProceed" value="proceed" onclick="#">Proceed</button>
				</td>
				<th style="border:0px;background: linear-gradient(to bottom right, #ccf0ec, #FAFCFF);"> 
					 <div class="checkout" style="padding-left:-10px;">
					 <?php 
					 $total_price =0;
					 if (isset($_SESSION["shopping_cart"]))
					 {
						foreach ($_SESSION["shopping_cart"] as $product)
						$total_price += ($product["price"]);
					 }
					 
					 ?>	 						
						<p>Total : <u><?php echo "Rs".$total_price; ?></u></p> 
					</div>
				</th>
			</tr>
			
		</table>
		
		
	</div>
<!--end of page content--> 
<?php  include('php/footertemp.php'); ?>