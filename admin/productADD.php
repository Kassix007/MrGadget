<?php include('adminheader.php') ?>
<!--page-content-->
<div class="addevent-title">
	<h2 style="text-align:center;">ADD NEW PRODUCT</h2>
</div>

<div class="container">
  <form class="addprod-form" name="contactform" action="phpadmin/addproduct.php" method="POST" enctype="multipart/form-data">
      <label for="prodname">Product Name</label><br>
      <input type="text" name="prodname" required /><br>

      <label for="brandname">Brand Name</label><br>
      <input type="text" name="brandname" required /><br>

      <label for="description">Description</label><br>
      <textarea  name="description" required placeholder="Desc" style='padding: 14px 20px;margin: 8px 0;cursor: pointer;width: 98%;'></textarea></br><br>

      <label for="price">Price</label><br>
      <input type="text" name="price" required /><br>

      <label for="category">Category</label><br>
      <?php
      $con = mysqli_connect('localhost','root','','mrgadget');
      $getCategory = "SELECT * FROM category;";
      $result = mysqli_query($con,$getCategory);
      echo "<select id='category' style='padding: 14px 20px;margin: 8px 0;cursor: pointer;width: 100%;'>";
      while ($row = mysqli_fetch_array($result))
      {
        echo "<option value='".$row['categoryid']."'>".$row['catname']."</option>";
      }
      echo "</select><br>";
      mysqli_close($con);
      ?>
      <label for="prodimage">Product Image</label><br>
      <input type="file" class="file" name="prodimage" required /><br>

      <input type="submit" class="file-submit" value="Submit"/>
  </form>
</div>
<br>
<!-- add category-->
<div class="addevent-title">
	<h2 style="text-align:center;">ADD NEW CATEGORY</h2>
</div>

<div class="container">
  <form class="addprod-form" name="contactform" action="phpadmin/addcategory.php" method="POST" enctype="multipart/form-data">
      <label for="catname">Category Name</label><br>
      <input type="text" name="catname" required /><br>

      <input type="submit" class="file-submit" value="Submit"/>
  </form>
</div>
<!--end of page content-->
<?php include('adminfooter.php') ?>

