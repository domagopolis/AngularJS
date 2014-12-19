<?php
include('include/general.php');

if( !isset($_SESSION['login']) ) $_SESSION['login'] = false;

if( $_SESSION['login'] ){
	$arr = array( 'session' => true, 'user' => array( 'email' => 'josh@wellcom.com.au', 'name' => 'Josh Domagala' ) );
	print json_encode( $arr );
}else{
	print json_encode( array( 'session' => false ) );
}
?>