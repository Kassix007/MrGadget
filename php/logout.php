<?php
session_start();
session_destroy();
header('location:http://localhost/Mr%20Gadget/signin.php');
?>