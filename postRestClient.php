<?php
$sumber = 'http://localhost:8080/RESTful/webresources/testController/postData';
$ch = curl_init($sumber);
$data = array("id"=>"99","keberangkatan"=>"Palangkaraya","tiba"=>"Lampung","watkuberangkat"=>"17:00","waktutiba"=>"18:00");
$jsonDataEncoded = json_encode($data);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$jsonDataEncoded);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
$result = curl_exec($ch);
?>