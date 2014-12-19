<?php

include('include/general.php');

$user=json_decode(file_get_contents('php://input')); //get user from json headers

if(session_destroy()){
	print 'success';
}else{
	print 'error';
}
?>