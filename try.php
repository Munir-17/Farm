<?php
include('includes/dbconnection.php');
?>
<div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover table-bordered" id="dataTableHover">
                  <thead>
                    <tr>
                      <th>Product Name</th>
                      <th class="text-center"> Product Category</th>
                      <th class="text-center"> Product Price</th>
                      <th class="text-center"> Qty</th>
                      <th class="text-center">ProducttRemaining</th>

                    </tr>
                  </thead>
                  <tbody>
  <?php

$sql="SELECT tblproducts.ProductName,tblcategory.CategoryName,tblproducts.Qty,tblorders.Quantity 
FROM tblproducts
LEFT JOIN tblcategory ON tblproducts.CategoryName=tblCategory.CategoryName
LEFT JOIN tblorders ON tblproducts.id=tblorders.ProductId ";
$res=mysqli_query($con,$sql);
$suc=mysqli_fetch_array($res);

$inventoryData=array();
$i=1;

while($view=mysqli_fetch_assoc($res)){

    if(!$view['Qty']){$view['Qty']=0;}
    if(!$view['Quantity']){$view['Quantity']=0;}

    $productRemaining=($view['Qty']-$view['Quantity']);
?>
<tr>
 
<td><?php echo $view['ProductName'];?></td>
<td><?php echo $view['CategoryName'];?></td>
<td><?php echo $view['Qty'];?></td>
<td><?php echo $view['Quantity'];?></td>
<td><?php echo $productRemaining;?></td>

   <!-- $viewRow[]=array();
    $viewRow[]=$i++;
    $viewRow[]=$view['ProductName'];
    $viewRow[]=$view['CategoryName'];
    $viewRow[]=$view['Qty'];
    $viewRow[]=$view['Quantity'];
    $viewRow[]=$productRemaining;

    $inventoryData=$viewRow;-->

 <?php 
}
?>
</tr>
</tbody>
</div>
