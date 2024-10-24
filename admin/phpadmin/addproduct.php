<!--php code to add product to database-->
<?php
if (isset($_POST) & !empty($_POST))
{
    $con = mysqli_connect('localhost','root','','mrgadget');
    $prodname = $_POST['prodname'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $brand = $_POST['brandname'];

    //image file upload for product
    $targetDir = "images/"; //folder location for image uploads
    if(isset($_FILES) & !empty($_FILES))
    {
        $picname = $_FILES['prodimage']['name'];
        $size = $_FILES['prodimage']['size'];
        $tmp_name = $_FILES['prodimage']['tmp_name']; 
        $max_size = 10000000;
        //check for file type and size
        if (($size<=$max_size ))
        {
        move_uploaded_file($tmp_name, $targetDir.$picname);
        $sqlInsert = "INSERT INTO products(name,brand,price,description,image,categoryid)
                        VALUES ('$prodname','$brand','$price','$desc','$targetDir$picname','$category');";
        $result = mysqli_query($con,$sqlInsert);
        if ($result)
        {
            header('location:http://localhost/Mr%20Gadget/admin/productVIEW.php');
        }
        else
        {
            header('location:productADD.php?add=0');
        }
        }
        else
        {
        header('location:productADD.php?image=0');
        }
    }
}
?>