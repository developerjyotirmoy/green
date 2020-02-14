<?php
include 'lib/header.php';
include'lib/connection.php';

	$sql="select * from `allagent_input` where `id`='$_GET[edit]'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);

?>
<form method="post" action="qa_update.php" enctype="multipart/form-data">
<input type="hidden" name ="up_id" value="<?php echo $row['id'];?>">
<table>
	<h1>USER INFORMATION</h1>
	<tr>
		<th>LeadId</th>
		<td><input type="text" name="l_id" value="<?php echo $row['id']?>"></td>
	</tr>
	<tr>
		<th>validatedtype</th>
		<td><input type="text" name="val_type" value="<?php echo $row['validatedtype']?>"></td>
	</tr>
	<tr>
		<th>leaddate</th>
		<td><input type="date" name="lead_date" value="<?php echo $row['leaddate']?>"></td>
	</tr>
	<tr>
		<th>businessname</th>
		<td><input type="text" name="business_name" value="<?php echo $row['businessname']?>"></td>
	</tr>
	<tr>
		<th>businessaddress</th>
		<td><input type="text" name="business_add" value="<?php echo $row['businessaddress']?>"></td>
	</tr>
	<tr>
		<th>businesspostcode</th>
		<td><input type="text" name="business_post" value="<?php echo $row['businesspostcode']?>"></td>
	</tr>
	<tr>
		<th>agentid</th>
		<td><input type="text" name="agent_id" value="<?php echo $row['agentid']?>"></td>
	</tr>
	<tr>
		<th>customername</th>
		<td><input type="text" name="customer_name" value="<?php echo $row['customername']?>"></td>
	</tr>
	<tr>
		<th>billingname</th>
		<td><input type="text" name="biiling_name" value="<?php echo $row['billingname']?>"></td>
	</tr>
	<tr>
		<th>phoneno</th>
		<td><input type="text" name="phone_no" value="<?php echo $row['phoneno']?>"></td>
	</tr>
</table>
</form>
<form method="post" action="qa_update.php" enctype="multipart/form-data">
<input type="hidden" name ="up_id" value="<?php echo $row['id'];?>">
<table>
	<h1>ELECTRIC:</h1>
	<tr>
		<th>current_elec</th>
		<td><input type="text" name="current_elec" value="<?php echo $row['current_elec']?>"></td>
	</tr>
	<tr>
		<th>currentsupplier_elec</th>
		<td><input type="text" name="currentsupplier_elec" value="<?php echo $row['currentsupplier_elec']?>"></td>
	</tr>
	<tr>
		<th>customeraccountno_elec</th>
		<td><input type="text" name="customeraccountno_elec" value="<?php echo $row['customeraccountno_elec']?>"></td>
	</tr>
	<tr>
		<th>monthandyear_elec</th>
		<td><input type="text" name="monthandyear_elec" value="<?php echo $row['monthandyear_elec']?>"></td>
	</tr>
	<tr>
		<th>contractenddate_elec</th>
		<td><input type="text" name="contractenddate_elec" value="<?php echo $row['contractenddate_elec']?>"></td>
	</tr>
	<tr>
		<th>paymentmethod_elec</th>
		<td><input type="text" name="paymentmethod_elec" value="<?php echo $row['paymentmethod_elec']?>"></td>
	</tr>
	<tr>
		<th>metertype_elec</th>
		<td><input type="text" name="metertype_elec" value="<?php echo $row['metertype_elec']?>"></td>
	</tr>
	<tr>
		<th>annualconsumption_elec</th>
		<td><input type="text" name="annualconsumption_elec" value="<?php echo $row['annualconsumption_elec']?>"></td>
	</tr>
	<tr>
		<th>day_elec</th>
		<td><input type="text" name="day_elec" value="<?php echo $row['day_elec']?>"></td>
	</tr>
	<tr>
		<th>night_elec</th>
		<td><input type="text" name="night_elec" value="<?php echo $row['night_elec']?>"></td>
	</tr>
	<tr>
		<th>eveweekends_elec</th>
		<td><input type="text" name="eveweekends_elec" value="<?php echo $row['eveweekends_elec']?>"></td>
	</tr>
	<tr>
		<th>standingcharge_elec</th>
		<td><input type="text" name="standingcharge_elec" value="<?php echo $row['standingcharge_elec']?>"></td>
	</tr>
	<tr>
		<th>supplyno_elec</th>
		<td><input type="text" name="supplyno_elec" value="<?php echo $row['supplyno_elec']?>"></td>
	</tr>
	<tr>
		<th>averagebillamount_elec</th>
		<td><input type="text" name="averagebillamount_elec" value="<?php echo $row['averagebillamount_elec']?>"></td>
	</tr>
	<tr>
		<th>average_elec</th>
		<td><input type="text" name="average_elec" value="<?php echo $row['average_elec']?>"></td>
	</tr> 
	<tr>
		<th>current_gas</th>
		<td><input type="text" name="current_gas" value="<?php echo $row['current_gas']?>"></td>
	</tr>
	<tr>
		<th>currentsupplier_gas</th>
		<td><input type="text" name="currentsupplier_gas" value="<?php echo $row['currentsupplier_gas']?>"></td>
	</tr>
	<tr>
		<th>customeraccountno_gas</th>
		<td><input type="text" name="customeraccountno_gas" value="<?php echo $row['customeraccountno_gas']?>"></td>
	</tr>
	<tr>
		<th>monthandyear_gas</th>
		<td><input type="text" name="monthandyear_gas" value="<?php echo $row['monthandyear_gas']?>"></td>
	</tr>
	<tr>
		<th>contractenddate_gas</th>
		<td><input type="text" name="contractenddate_gas" value="<?php echo $row['contractenddate_gas']?>"></td>
	</tr>
	<tr>
		<th>paymentmethod_gas</th>
		<td><input type="text" name="paymentmethod_gas" value="<?php echo $row['paymentmethod_gas']?>"></td>
	</tr>
	<tr>
		<th>metertype_gas</th>
		<td><input type="text" name="metertype_gas" value="<?php echo $row['metertype_gas']?>"></td>
	</tr>
	<tr>
		<th>annualconsumption_gas</th>
		<td><input type="text" name="annualconsumption_gas" value="<?php echo $row['annualconsumption_gas']?>"></td>
	</tr>
	<tr>
		<th>day_gas</th>
		<td><input type="text" name="day_gas" value="<?php echo $row['day_gas']?>"></td>
	</tr>
	<tr>
		<th>mpr_gas</th>
		<td><input type="text" name="mpr_gas" value="<?php echo $row['mpr_gas']?>"></td>
	</tr>
	<tr>
		<th>standings_gas</th>
		<td><input type="text" name="standings_gas" value="<?php echo $row['standings_gas']?>"></td>
	</tr>
	<tr>
		<th>supply_gas</th>
		<td><input type="text" name="supply_gas" value="<?php echo $row['supply_gas']?>"></td>
	</tr>
	<tr>
		<th>averagebillamount_gas</th>
		<td><input type="text" name="averagebillamount_gas" value="<?php echo $row['averagebillamount_gas']?>"></td>
	</tr>
	<tr>
		<th>average_gas</th>
		<td><input type="text" name="average_gas" value="<?php echo $row['average_gas']?>"></td>
	</tr>4.
	<tr>
		<th>msn_gas</th>
		<td><input type="text" name="msn_gas" value="<?php echo $row['msn_gas']?>"></td>
	</tr>
	<tr>
		<th>email</th>
		<td><input type="text" name="email" value="<?php echo $row['email']?>"></td>
	</tr>
	<tr>
		<th>bankaccount</th>
		<td><input type="text" name="bankaccount" value="<?php echo $row['bankaccount']?>"></td>
	</tr>
	<tr>
		<th>agentfeedback</th>
		<td><input type="text" name="agentfeedback" value="<?php echo $row['agentfeedback']?>"></td>
	</tr>
	<tr>
		<th>callbackdate</th>
		<td><input type="text" name="callbackdate" value="<?php echo $row['callbackdate']?>"></td>
	</tr>
	<tr>
		<th>leadstatus</th>
		<td><select name="lead" >
				<option selected disabled >Please Selected</option>
				<option>Hold</option>
				<option>Reject</option>
				<option>Validated</option>
				<option>Validated Low AQ</option>
				<option>Corporate</option>
				<option>Valid-Has Broker</option>
	      		<option>Valid-Not Sure</option>
	      		<option>Valid-Does not have a broker</option>
		</select></td>
	</tr>
	<tr>
		<th>annualconsumption</th>
		<td><input type="text" name="annualconsumption" value="<?php echo $row['annualconsumption']?>"></td>
	</tr>
	<tr>
		<th>file</th>
		<td>
				 <audio controls>
				 <source src='<?php echo $row[file];?>' type='audio/mpeg' width='10' height='10'>
				 </audio>
		</td>
	</tr>
	<tr>
		<th>QAFeedback</th>
		<td><textarea name="qa" ><?php echo $row['qa_feedback']?></textarea></td>
	</tr>
	<tr>
		<td><input type="submit"  value="Update"></td>
	</tr>
</table>
</form>