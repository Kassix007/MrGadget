<?php
if (isset($_POST) & !empty($_POST))
{
    $con = mysqli_connect('localhost','root','','mrgadget');
    $category = $_POST['catname'];

        $sqlInsert = "INSERT INTO category(catname)
                        VALUES ('$category');";
        $result = mysqli_query($con,$sqlInsert);
        if ($result)
        {
            header('location:http://localhost/Mr%20Gadget/admin/productVIEW.php');
        }
        else
        {
            header('location:http://localhost/Mr%20Gadget/admin/productADD.php?addcat=0');
        }
}
?>