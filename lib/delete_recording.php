<?php
require_once('config.php');
/**
 * File: delete_recording.php
 * User: jgmuchiri
 * Date: 12/22/2014
 *
 * http://icoolpix.com
 * info@icoolpix.com
 * Copyright 2014 All Rights Reserved
 */
if($_POST) {
	$id = $_POST['note_id'];

	//get file name
	$db->where('id', $id);
	$q = $db->get('notes');
	foreach($q as $r) {
		$name = $r['audio_file'];
		$file = '../' . RECORD_DIR . $name;

		//try to delete the file
		if(file_exists($file)) {
			if(unlink($file)) {
			}else {
				echo "ERROR! Unable to delete file. Make sure you have permission";
			}
		} else {
			echo "ERROR! File not found!\n";
		}

		//delete from db (either way try it even if the file was not found)
		$db->where('id', $id);
		if($db->delete('notes')) {
			echo "Recording deleted!";
		} else {
			echo "Error deleting file";
		}
	}
}