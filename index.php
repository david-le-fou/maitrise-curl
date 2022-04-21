<?php 
header("content-type:application/json;charset=utf-8");
$token = "ogc0ykucm0kys6illjvveo5q4969mr2c";//ana
// $token = "8031fadcca45ae687dc4ac8eec71e6cc";
// $url = "https://api.getresponse.com/v3/contacts";
$url = "https://api.getresponse.com/v3/custom-fields/pLeTIt";

$data = array("hidden" => 'false',
              "values" => array("https://www.test24564.com/"));

$data_json = json_encode($data);

$headers = array();
$headers[] = "X-Auth-Token: api-key $token";
$headers[] = 'Content-Type: application/json;charset=utf-8';

$state_ch = curl_init();
    curl_setopt($state_ch, CURLOPT_POST,1);
    curl_setopt($state_ch, CURLOPT_POSTFIELDS, $data_json);
    curl_setopt($state_ch, CURLOPT_URL,$url);
    curl_setopt($state_ch, CURLOPT_HEADER, false);
    curl_setopt($state_ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($state_ch, CURLOPT_HTTPHEADER, $headers);

    $state_result = curl_exec ($state_ch);
echo $state_result;
