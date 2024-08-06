<?php

include('includes/dbconnection.php');
$sql = mysqli_query($con, "SELECT * FROM tblproducts WHERE id='10'");

while($product = mysqli_fetch_assoc($sql)){
    $available_qty = $product['Qty'];

    echo $available_qty;
}

?>