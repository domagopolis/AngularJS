<?php
include('include/general.php');
include('include/model/user.php');

if( !isset($_SESSION['login']) ) $_SESSION['login'] = false;

if( $_SESSION['login'] AND $_SESSION['user_id'] ){
	$user = new user( $_SESSION['user_id'] );
	$arr = array( 'session' => true, 'user' => array( 'email' => $user->email, 'name' => $user->name ) );
	print json_encode( $arr );
}else{
	print json_encode( array( 'session' => false ) );
}
?>