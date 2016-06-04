<?php
require_once('config.php');
if(!is_dir('../'.RECORD_DIR)) {
	$res = mkdir('../'.RECORD_DIR, 0777);
}
// pull the raw binary data from the POST array
$data = substr($_POST['data'], strpos($_POST['data'], ",") + 1);
// decode it
$decodedData = base64_decode($data);
// print out the raw data,
echo ($decodedData);

$filename = urldecode($_POST['fname']);

// write the data out to the file
$fp = fopen('../'.RECORD_DIR . $filename, 'wb');

if(fwrite($fp, $decodedData)){
	//record to db
	$data = array(
		'audio_file' => $filename,
		'date_created'=>time()
	);
	$db->insert('notes', $data);
}

fclose($fp);