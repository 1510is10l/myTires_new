<?php

    if(isset($_POST['add'])) {
        // Grabbing the data
        $userid = $_POST['userid'];
        $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));
        $name = $_POST['name'];
        $dec = $_POST['dec'];
        $price = $_POST['price'];
        $size1 = $_POST['size1'];
        $size2 = $_POST['size2'];
        $ring = $_POST['ring'];
        $qty = $_POST['qty'];


        // Instantiate SignupController class
        include "../models/Db.php";
        include "../controllers/addProductsContr.php";

        $add = new AddProductsContr($userid, $image, $name, $dec, $price, $size1, $size2, $ring, $qty);

        $add->addProduct();

        header("Location: ../company.php");
    }
    
?>