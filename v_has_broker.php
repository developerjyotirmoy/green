<html>

<?php
	include 'lib/header.php';
	include 'lib/connection.php';
	
?>
<h1> Valid Has Broker Infomation Display </h1>
<table border="1">
	<tr>
		<th>Id</th>
		<th>validatedtype</th>
		<th>leaddate</th>
		<th>businessname</th>
		<th>businessaddress</th>
		<th>businesspostcode</th>
		<th>agentid</th>
		<th>customername</th>
		<th>billingname</th>
		<th>phoneno</th>
		<th>current_elec</th>
		<th>currentsupplier_elec</th>
		<th>customeraccountno_elec</th>
		<th>monthandyear_elec</th>
		<th>contractenddate_elec</th>
		<th>paymentmethod_elec</th>
		<th>metertype_elec</th>
		<th>annualconsumption_elec</th>
		<th>day_elec</th>
		<th>night_elec</th>
		<th>eveweekends_elec</th>
		<th>standingcharge_elec</th>
		<th>supplyno_elec</th>
		<th>averagebillamount_elec</th>
		<th>average_elec</th>
		<th>current_gas</th>
		<th>currentsupplier_gas</th>
		<th>customeraccountno_gas</th>
		<th>monthandyear_gas</th>
		<th>contractenddate_gas</th>
		<th>paymentmethod_gas</th>
		<th>metertype_gas</th>
		<th>annualconsumption_gas</th>
		<th>day_gas</th>
		<th>mpr_gas</th>
		<th>standings_gas</th>
		<th>supply_gas</th>
		<th>averagebillamount_gas</th>
		<th>average_gas</th>
		<th>msn_gas</th>
		<th>email</th>
		<th>bankaccount</th>
		<th>agentfeedback</th>
		<th>callbackdate</th>
		<th>leadstatus</th>
		<th>annualconsumption</th>
		<th>file</th>
		<th>QAFeedback</th>
		
		
	</tr>

<?php

	$sql = "select * from `allagent_input` where leadstatus like '%valid has broker%'";
	$res = mysqli_query($conn,$sql);
	 while($row = mysqli_fetch_array($res)){


?>
		<tr>
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['validatedtype'];?></td>
			<td><?php echo $row['leaddate'];?></td>
			<td><?php echo $row['businessname'];?></td>
			<td><?php echo $row['businessaddress'];?></td>
			<td><?php echo $row['businesspostcode'];?></td>
			<td><?php echo $row['agentid'];?></td>
			<td><?php echo $row['customername'];?></td>
			<td><?php echo $row['billingname'];?></td>
			<td><?php echo $row['phoneno'];?></td>
			<td><?php echo $row['current_elec'];?></td>
			<td><?php echo $row['currentsupplier_elec'];?></td>
			<td><?php echo $row['customeraccountno_elec'];?></td>
			<td><?php echo $row['monthandyear_elec'];?></td>
			<td><?php echo $row['contractenddate_elec'];?></td>
			<td><?php echo $row['paymentmethod_elec'];?></td>
			<td><?php echo $row['metertype_elec'];?></td>
			<td><?php echo $row['annualconsumption'];?></td>
			<td><?php echo $row['day_elec'];?></td>
			<td><?php echo $row['night_elec'];?></td>
			<td><?php echo $row['eveweekends_elec'];?></td>
			<td><?php echo $row['standingcharge_elec'];?></td>
			<td><?php echo $row['supplyno_elec'];?></td>
			<td><?php echo $row['averagebillamount_elec'];?></td>
			<td><?php echo $row['average_elec'];?></td>
			<td><?php echo $row['current_gas'];?></td>
			<td><?php echo $row['currentsupplier_gas'];?></td>
			<td><?php echo $row['customeraccountno_gas'];?></td>
			<td><?php echo $row['monthandyear_gas'];?></td>
			<td><?php echo $row['contractenddate_gas'];?></td>
			<td><?php echo $row['paymentmethod_gas'];?></td>
			<td><?php echo $row['metertype_gas'];?></td>
			<td><?php echo $row['annualconsumption_gas'];?></td>
			<td><?php echo $row['day_gas'];?></td>
			<td><?php echo $row['mpr_gas'];?></td>
			<td><?php echo $row['standings_gas'];?></td>
			<td><?php echo $row['supply_gas'];?></td>
			<td><?php echo $row['averagebillamount_gas'];?></td>
			<td><?php echo $row['average_gas'];?></td>
			<td><?php echo $row['msn_gas'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['bankaccount'];?></td>
			<td><?php echo $row['agentfeedback'];?></td>
			<td><?php echo $row['callbackdate'];?></td>
			<td><?php echo $row['leadstatus'];?></td>
			<td><?php echo $row['annualconsumption'];?></td>
			<td>
				 <audio controls>
				 <source src='audio/<?php echo $row[file];?>' type='audio/mpeg'>
				 </audio>
	
			</td>
			<td><?php echo $row['qa_feedback'];?></td>
			
		</tr>


<?php
	};
?>
</table> 
<a href="../index.php">Home</a>

</html>