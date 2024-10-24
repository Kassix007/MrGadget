<?php
$q = intval($_GET['q']);
$con = mysqli_connect('localhost','root','','mrgadget');
$sql = "SELECT * FROM products WHERE categoryid = '$q';";
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result))
{
    echo "<div class='product-content-col'>";
        echo "<div class='product'>";
        echo "<div class='product-content-image'>";
        echo "<img src='admin/phpadmin/".$row['image']."'>";
        echo "</div>";
        echo "<div class='product-name'>";
        echo "<span>".$row['name']."<h4> ".$row['brand']."</h4></span>";
        echo "</div>";
        echo "<div class='product-description'>".$row['description']."</div>";
        echo "<div class='product-price'>";
        echo "<span>Rs ".$row['price']."<p> ".($row['price']+300)."</p></span>";
        echo "</div>";
        echo "<div class='product-cartbtn'>";
        echo "<button>Add to Cart</button>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<br></br>";
}
?>