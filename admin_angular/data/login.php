<?php
include('include/general.php');
include('include/model/user.php');

$user=json_decode(file_get_contents('php://input')); //get user from json headers

$user_account = new user();
$user_account->where( array( 'email' => $user->mail, 'password' => $user->pass ) )->find();

if( $user_account->user_id ){
	$_SESSION['login'] = true;
	print json_encode( array( 'success' => true ) );
}else{
	print json_encode( array( 'success' => false ) );
}
?>