<?php
include('system_general.php');

$modules = array( 'email', 'facebook' );

include($system_root_path.'system/system.php');

//$facebook_app = new facebook_app( $settings->facebook_app_id, $settings->facebook_app_secret );
//$facebook_app->set_permissions( array( 'user_birthday', 'user_location' ) );

header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Access-Control-Allow-Credentials: true');
session_start();
?>
