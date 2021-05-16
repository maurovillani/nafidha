<?php
    $_POST["address"] = "Via Adda, 32";
    $_POST["type"] = 1;
    $_POST["for"] = "sale";
    
    $curl_call = curl_init();
    curl_setopt($curl_call, CURLOPT_HEADER, false);
    curl_setopt($curl_call, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl_call, CURLOPT_USERPWD,  "479656");
    curl_setopt($curl_call, CURLOPT_URL, "https://api.borsinopro.it/rest/standard-v1/getQuotazione/");
    curl_setopt($curl_call, CURLOPT_POST, true);
    curl_setopt($curl_call, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_call, CURLOPT_POSTFIELDS, $_POST);
    curl_setopt($curl_call, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($curl_call);
    print_r($result);
    curl_close($curl_call);
?>