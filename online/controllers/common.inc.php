<?php
if(!isset($rootFilePath)) $rootFilePath = "";

if(isset($_GET['lang'])) {
	$lang = $_GET['lang'];
} else {
	$lang = "it";
}
if(!file_exists($rootFilePath.'i18n/'.$lang.'.include.php')) {
	$lang = "it";
}
include($rootFilePath.'i18n/'.$lang.'.include.php');

if(file_exists($rootFilePath.'data/'.$page.'_'.$lang.'.json')) {
    $jsonstring = file_get_contents($rootFilePath.'data/'.$page.'_'.$lang.'.json');
	$jsonpage = json_decode($jsonstring);
} else {
	$jsonpage = null;
}

?>