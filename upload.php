<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Accept, Authorization, X-Requested-With, X-Auth-Token, Origin, Application");
// print_r($_FILES);
$input = $_FILES['audio_data']['tmp_name']; //temporary name that PHP gave to the uploaded file
$output = $_FILES['audio_data']['name']; //letting the client control the filename is a rather bad idea

//move the file from temp name to local folder using $output name
// move_uploaded_file($input, 'recordings/'.$output) ;
// move_uploaded_file($input, '../streaming/media/'.$output) ;



$data = file_get_contents($_FILES['audio_data']['tmp_name']);    

$fp = fopen('recordings/'.$output, 'wb');
// $fp = fopen('recordings/rec1.txt', 'wb');

// $fp = fopen('../streaming/media/'.$output, 'wb');



fwrite($fp, $data);
fclose($fp);

