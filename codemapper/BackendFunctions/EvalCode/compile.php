<?php
  if(isset($_POST['code']))
  {
  	compile();
  }
  //function to interact with the API and return json responses
  function compile(){
     //initialize cURL session
     $ch = curl_init();
     //setting postfields
     $dataArray = array(
	 //hidden client id and client secret
         'clientId' => '53c45f6c533639fd6b0d232e885141c6',
         'clientSecret' => '499c2ec1ae286b305a9cd1101942adc11adb7bbf8abdaea971b564ebcd701d7a',
         'script' => $_POST['code'],
         'language' => 'python3',
         'versionIndex' => '0'
      );
     //encoding array to json
     $dataString = json_encode($dataArray);
    //setting some options
	curl_setopt($ch, CURLOPT_URL, "https://api.jdoodle.com/v1/execute");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    //setting request headers
	$headers = array();
	$headers[] = "Content-Type: application/json; charset=UTF-8";
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    //fetching results
	$result = json_encode(curl_exec($ch));
	if (curl_errno($ch)) {
	    echo 'Error:' . curl_error($ch);
	}
    //closing the cURL session
	curl_close ($ch);
	echo $result;
  }
?>
