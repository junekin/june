<?php
@session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);
ini_set('upload_max_filesize','30M');
ini_set('max_file_uploads','20');
ini_set('post_max_size','35M');
date_default_timezone_set("Asia/Shanghai");
define('ADMIN_CSS_URL','/php/Application/Public/Admin/css/');
define('ADMIN_IMG_URL','/php/Application/Public/Admin/img/');
define('HOME_CSS_URL','/php/Application/Public/Home/css/');
define('HOME_IMG_URL','/php/Application/Public/Home/img/');
define('save_path',getcwd().'/Application/Public/Upload/');
require './Framework/Core/Framework.class.php';
Framework::run();