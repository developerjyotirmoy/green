<?php
include'lib/connection.php';

$up_q = $_POST['up_id'];
$qa = $_POST['qa'];
$lead = $_POST['lead'];



switch ($lead) {
	case 'Validate':
		header ("Location: validate.php");
		break;
	case 'Valid-Has Broker':
	header ("Location:validate_low_aq.php");
		break;
	case 'Valid-Has Broker':
	header ("Location:v_has_broker.php");
		break;
	case 'Valid-Not Sure':
	header ("Location:v_not_sure.php");
		break;
	case 'Valid-Does not have a broker':
	header ("Location:v_doesnt_broker.php");
		break;
	case 'Corporate':
	header ("Location:corporate.php");
		break;
	case Hold:
	header("location:hold.php");
	
	default:
		header ("Location:reject.php");
		break;
}
$sql="update `allagent_input` set `leadstatus`='$lead',`qa_feedback`='$qa' where `id`='$up_q'";
mysqli_query($conn,$sql);



?>