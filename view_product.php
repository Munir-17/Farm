<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

?>
<script type ="text/javascript">
window.history.pushState(null,"",window.location,href);
window.onpopstate=function() {
    window.history.pushState(null, "", window.location.href);
};
</script>
<div class="card-body">
  <?php
  $eid=$_POST['edit_id5'];
  $sql="SELECT tblproducts.id,tblproducts.CategoryName,tblproducts.ProductName,tblproducts.PostingDate,tblproducts.ProductPrice,tblproducts.Qty from tblproducts  where tblproducts.id=:eid";
  $query = $dbh -> prepare($sql);
  $query-> bindParam(':eid', $eid, PDO::PARAM_STR);
  $query->execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount() > 0)
  {
    foreach($results as $row)
      {?>

        <h4 style="color: blue">Product Information</h4>
        <table border="1" class="table table-bordered">
          <tr>
            <th>Product Name</th>
            <td>
              <?php  echo $row->ProductImage;?>
              <?php  echo $row->ProductName;?>
              </td>
          </tr>
          <tr>
            <th>Category Name</th>
            <td><?php  echo $row->CategoryName;?></td>
          </tr>
          <tr>
            <th>Product Price</th>
            <td><b>$</b>&nbsp;<?php  echo $row->ProductPrice;?></td>
          </tr>
          <tr>
          <tr>
            <th>Qty</th>
            <td><b></b>&nbsp;<?php  echo $row->Qty;?></td>
          </tr>
          <tr>
            <th>Posting Date</th>
            <td><?php  echo htmlentities(date("d-m-Y", strtotime($row->PostingDate)));?></td>
          </tr>
        </table> 
        <?php 
      }
    } ?>
  </div>