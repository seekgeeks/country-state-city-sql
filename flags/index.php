<?php
	$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://hooks.slack.com/services/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",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => "{\"text\": \"Somebody from IP ".$_SERVER['REMOTE_ADDR']." Tried to open http:/".$_SERVER['REQUEST_URI']." page\"}",
			  CURLOPT_HTTPHEADER => array(
			    "cache-control: no-cache"),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);
			
			

	header("location:/");