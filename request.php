<?php

## JSON
// $json = file_get_contents('php://input');
// var_dump($json);

## FILE
$only_file = isset($_FILES['cover']) ? $_FILES['cover'] : null;

## MANY FILES
$files = $_FILES ? $_FILES : null;

if ($files){
	for ($i = 0; $i < count($files); $i++) { 
		$file = $files[$i];
		var_dump($file);
	}
}



































