<?php 

include('includes/checklogin.php');
check_login();



if($_POST) {

	$startDate = $_POST['startDate'];
	/*$date = DateTime::createFromFormat('m/d/Y',$startDate);
	$start_date = $date->format("Y-m-d");*/


	$endDate = $_POST['endDate'];
	/*$format = DateTime::createFromFormat('m/d/Y',$endDate);
	$end_date = $format->format("Y-m-d");*/

	$sql = "SELECT * FROM tblorders WHERE InvoiceGenDate >= '$startDate' AND InvoiceGenDate <= '$endDate' ";
	$query = $con->query($sql);

	$table = '
	<table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<th>Order Date</th>
			<th>Client Name</th>
			<th>Contact</th>
			<th>Grand Total</th>
		</tr>

		<tr>';
		$totalAmount = "";
		while ($result = $query->fetch_assoc()) {
			$table .= '<tr>
				<td><center>'.$result['InvoiceGenDate'].'</center></td>
				<td><center>'.$result['CustomerName'].'</center></td>
				<td><center>'.$result['CustomerContactNo'].'</center></td>
				<td><center>'.$result['AmountPaid'].'</center></td>
			</tr>';	
			$totalAmount = $result['AmountPaid'] ;
		}
		$table .= '
		</tr>

		<tr>
			<td colspan="3"><center>Total</center></td>
			<td><center>'.$totalAmount.'</center></td>
		</tr>
	</table>
	';	

	echo $table;

}

?>