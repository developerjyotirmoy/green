<?php

$validatedtype = filter_input(INPUT_POST, 'validatedtype');
$leaddate  = filter_input(INPUT_POST, 'leaddate');
$businessname  = filter_input(INPUT_POST, 'businessname');
$businessaddress  = filter_input(INPUT_POST, 'businessaddress');
$businesspostcode = filter_input(INPUT_POST, 'businesspostcode');
$agentid  = filter_input(INPUT_POST, 'agentid');
$customername = filter_input(INPUT_POST, 'customername');
$billingname = filter_input(INPUT_POST, 'billingname');
$phoneno = filter_input(INPUT_POST, 'phoneno');
$current_elec  = filter_input(INPUT_POST, 'current_elec');
$currentsupplier_elec  = filter_input(INPUT_POST, 'currentsupplier_elec');
$customeraccountno_elec = filter_input(INPUT_POST, 'customeraccountno_elec');
$monthandyear_elec = filter_input(INPUT_POST, 'monthandyear_elec');
$contractenddate_elec = filter_input(INPUT_POST, 'contractenddate_elec');
$paymentmethod_elec  = filter_input(INPUT_POST, 'paymentmethod_elec');
$metertype_elec = filter_input(INPUT_POST, 'metertype_elec');
$annualconsumption_elec = filter_input(INPUT_POST, 'annualconsumption_elec');
$day_elec = filter_input(INPUT_POST, 'day_elec');
$night_elec = filter_input(INPUT_POST, 'night_elec');
$eveweekends_elec = filter_input(INPUT_POST, 'eveweekends_elec');
$standingcharge_elec = filter_input(INPUT_POST, 'standingcharge_elec');
$supplyno_elec = filter_input(INPUT_POST, 'supplyno_elec');
$averagebillamount_elec = filter_input(INPUT_POST, 'averagebillamount_elec');
$average_elec = filter_input(INPUT_POST, 'average_elec');
$current_gas = filter_input(INPUT_POST, 'current_gas');
$currentsupplier_gas = filter_input(INPUT_POST, 'currentsupplier_gas');
$customeraccountno_gas = filter_input(INPUT_POST, 'customeraccountno_gas');
$monthandyear_gas = filter_input(INPUT_POST, 'monthandyear_gas');
$contractenddate_gas = filter_input(INPUT_POST, 'contractenddate_gas');
$paymentmethod_gas = filter_input(INPUT_POST, 'paymentmethod_gas');
$metertype_gas = filter_input(INPUT_POST, 'metertype_gas');
$annualconsumption_gas = filter_input(INPUT_POST, 'annualconsumption_gas ');
$day_gas = filter_input(INPUT_POST, 'day_gas');
$mpr_gas = filter_input(INPUT_POST, 'mpr_gas');
$standings_gas = filter_input(INPUT_POST, 'standings_gas');
$supply_gas = filter_input(INPUT_POST, 'supply_gas');
$averagebillamount_gas = filter_input(INPUT_POST, 'averagebillamount_gas');
$average_gas = filter_input(INPUT_POST, 'average_gas');
$msn_gas = filter_input(INPUT_POST, 'msn_gas');
$email  = filter_input(INPUT_POST, 'email');
$bankaccount = filter_input(INPUT_POST, 'bankaccount');
$agentfeedback = filter_input(INPUT_POST, 'agentfeedback');
$leadstatus = filter_input(INPUT_POST, 'leadstatus');
$annualconsumption = filter_input(INPUT_POST, 'annualconsumption');
$file  = filter_input(INPUT_POST, 'file');
$qa_feedback = filter_input(INPUT_POST, 'qa_feedback');










include 'lib/connection.php';

$into = "INSERT INTO allagent_input(validatedtype,
	leaddate,
	businessname,
	businessaddress,
	businesspostcode,
	agentid,
	customername,
	billingname,
	phoneno,
	current_elec,
	currentsupplier_elec,
	customeraccountno_elec,
	monthandyear_elec,
	contractenddate_elec,
	paymentmethod_elec,
	metertype_elec,
	annualconsumption_elec,
	day_elec,
	night_elec,
	eveweekends_elec,
	standingcharge_elec,
	supplyno_elec,
	averagebillamount_elec,
	average_elec,
	current_gas,
	currentsupplier_gas,
	customeraccountno_gas,
	monthandyear_gas,
	contractenddate_gas,
	paymentmethod_gas,
	metertype_gas,
	annualconsumption_gas,
	day_gas,
	mpr_gas,
	standings_gas,
	supply_gas,
	averagebillamount_gas,
	average_gas,
	msn_gas,
	email,
	bankaccount,
	agentfeedback,
	callbackdate,
	leadstatus,
	annualconsumption,
	file,
	qa_feedback) VALUES ('$validatedtype',
	'$leaddate',
	'$businessname',
	'$businessaddress',
	'$businesspostcode',
	'$agentid',
	'$customername',
	'$billingname',
	'$phoneno',
	'$current_elec',
	'$currentsupplier_elec',
	'$customeraccountno_elec',
	'$monthandyear_elec',
	'$contractenddate_elec',
	'$paymentmethod_elec',
	'$metertype_elec',
	'$annualconsumption_elec',
	'$day_elec',
	'$night_elec',
	'$eveweekends_elec',
	'$standingcharge_elec',
	'$supplyno_elec',
	'$averagebillamount_elec',
	'$average_elec',
	'$current_gas',
	'$currentsupplier_gas',
	'$customeraccountno_gas',
	'$monthandyear_gas',
	'$contractenddate_gas',
	'$paymentmethod_gas',
	'$metertype_gas',
	'$annualconsumption_gas',
	'$day_gas',
	'$mpr_gas',
	'$standings_gas',
	'$supply_gas',
	'$averagebillamount_gas',
	'$average_gas',
	'$msn_gas',
	'$email',
	'$bankaccount',
	'$agentfeedback',
	'$callbackdate',
	'$leadstatus',
	'$annualconsumption',
	'$file',
	'$qa_feedback')";


if ($conn->query($into)) {
	header('location:index.php');
}
else
{
	echo "error".$sql."".$conn->error;
}
?> 
