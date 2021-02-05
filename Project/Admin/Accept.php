<?php
 include('../includes/vendorClass.php');
 $x = new vendor();
    $id = $_GET['id'];
    
    $x->active($id,$active);
    header("location:Vendor_Management.php");
    ?>