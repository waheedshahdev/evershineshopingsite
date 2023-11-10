<?php
$conn = new mysqli("localhost","cron","1234","asterisk");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";


$api_key = 'q4lkCzCLYJFP0DFzVTaikWamD8daK7bRk';

$key = $_GET['key'];
$phone = $_GET['phone'];

if($api_key != $key)
{
	echo json_encode(array('status' => 'error',
                                 'errorCode' => 1,
                                 'message' => 'Something went Wrong with API key or Phone Number.'));
}
else{
	$sqlM = 'SELECT phone_number, location FROM `vicidial_list` JOIN recording_log as R on R.lead_id = vicidial_list.lead_id where phone_number = '.$phone.' order by end_time DESC';
	
	$resultM = mysqli_query($conn, $sqlM);


	if(mysqli_num_rows($resultM) == 0){
		echo json_encode(array('status' => 'recording not found',
                                 'errorCode' => 1,
                                 'message' => 'Recording Not Found'));
	}
	else{
		// print_r($resultM);
		$rec = array();
		while ($rowM = mysqli_fetch_assoc($resultM)) 
	{
		$rec['phone_1'] = $rowM['phone_number'];
		$rec['recording_url'] = $rowM['location'];
		$rec_array[] = $rec;
	}
	echo json_encode(array('status' => 'success',
                                 'errorCode' => 0,
                                 'message' => 'Recording Found',
                             	 'data_found' => $rec_array));

	
	}
}





?>