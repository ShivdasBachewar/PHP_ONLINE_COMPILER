<?php
	
	$source_program = $_REQUEST["source_program"];
	//echo $source_program;
	
	$ch = curl_init();	

	//curl_setopt($ch, CURLOPT_POST, TRUE); //must be boolean
	$CLIENT_SECRET = "a8385a76ac9c7301591804806ebe60054c4a7698";
	$source_program = urlencode($source_program);
	$data = array(
	'client_secret'=> $CLIENT_SECRET,
    'async' => 0,
    'source' => $source_program,
    'lang' => "PHP",
    'time_limit' => 5,
    'memory_limit' => 262144,
	);
	$data_string ="";
	foreach($data as $key=>$value) { $data_string .= $key.'='.$value.'&'; }

	$data_string = rtrim($data_string, '&');
	//print_r($data_string);

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, "http://api.hackerearth.com/code/run/"); 
	curl_setopt($ch,CURLOPT_POST, count($data));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $data_string);


	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	//  Used to hide the output in the variable

	$result = curl_exec($ch);
	// Variable consist of your OUTPUT
	// print_r($result);


	//$decoded_json = json_decode($result,TRUE); //convert json into array
	$decoded_json = json_decode($result,true);
	//echo $decoded_json->{'errors'};
	//print_r($decoded_json);

	if ($decoded_json['compile_status']=="OK") {
		print_r($decoded_json['run_status']['output_html']);
	}else{
		$status_or_error = find_compilation_output($decoded_json);
		print_r($status_or_error);
	}
	curl_close($ch);
?>

<?php

function find_compilation_output($json_array)
{
	//Retriving data from json
	$SPLIT_USING 	= "/hackerearth/"; 
	$errors 		= $json_array['errors'];
	$code_id 		= $json_array['code_id'];
	$web_link		= $json_array['web_link'];
	$compile_status = $json_array['compile_status'];
	$id 			= $json_array['id'];
	$async 			= $json_array['async'];
	$message 		= $json_array['message'];
	$run_status	 	= $json_array['run_status'];

	$compile_status_temp_array = explode(" ", $compile_status);	
	
	$compile_status = "";
	$matched = 0;
	for ($i=0; $i < count($compile_status_temp_array); $i++) { 
	
		for ($j=0; $j < strlen($compile_status_temp_array[$i]) && $j < strlen($SPLIT_USING); $j++) { 
	
			if ($compile_status_temp_array[$i][$j]==$SPLIT_USING[$j]) {
				$matched = $matched+1;
			}else{
				$j = strlen($SPLIT_USING);
				$matched = 0;
			}

		}
		if ($matched == strlen($SPLIT_USING)) {
			$compile_status .= "current_document.php ";		
		}else{
			$compile_status .= $compile_status_temp_array[$i]." ";
		}
	}

	return($compile_status);
}
?>
