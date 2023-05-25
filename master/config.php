<?php
	/*$base_url = "https://motherteresacharities.org/v2.0/";*/
	$base_url = "http://localhost/mtct-v3/";
	//


define('BASE_PATH', dirname(dirname(__FILE__)));
define('APP_FOLDER', 'mtct-v3');
define('CURRENT_PAGE', basename($_SERVER['REQUEST_URI']));
date_default_timezone_set('Asia/Kolkata');

require_once BASE_PATH . '/controller/mtct.php';
	$metaDetails = new Mtct();
	$page_url = ltrim($_SERVER['REQUEST_URI'],'/');
	$pageMetaInformation = $metaDetails->GetMetaDetails($page_url);
	$meta_title = "";
	$meta_description = "";
	$meta_keywords = "";
	
	if($pageMetaInformation){
		$meta_title = $pageMetaInformation->meta_title;
		$meta_description = $pageMetaInformation->meta_description;
		$meta_keywords = $pageMetaInformation->meta_keywords;
	}
?>