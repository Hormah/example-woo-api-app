<?php
$config  = parse_ini_file( $_SERVER['DOCUMENT_ROOT'] . '/config.ini', true );
ini_set ( "session.save_handler", $config['session']['save_handler'] );
ini_set ( "session.save_path", $config['session']['save_path'] );
session_start();

require_once( $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/functions.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/form.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/database.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/user.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/woocommerce.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/actions.php' );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/notices.php' );

iconic_process_actions();