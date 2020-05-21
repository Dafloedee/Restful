<?php
$sumber = 'http://localhost:8080/RESTful/webresources/testController/getdata';
$konten = file_get_contents($sumber);
$data = json_decode($konten,true);
for ($a=0;$a<count($data);$a++){
	print $data[$a]['id']."|";
	print $data[$a]['keberangkatan']."|";
	print $data[$a]['tiba']."|";
	print $data[$a]['watkuberangkat']."|";
	print $data[$a]['waktutiba']."<br>";
}
?>