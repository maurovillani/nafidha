<?php
if(isset($_GET['lang'])) {
	$lang = $_GET['lang'];
} else {
	$lang = "it";
}
if(!file_exists('i18n/'.$lang.'.include.php')) {
	$lang = "it";
}
include('i18n/'.$lang.'.include.php');

if(file_exists('data/'.$page.'_'.$lang.'.json')) {
	$jsonstring = file_get_contents('data/'.$page.'_'.$lang.'.json');
	$jsonpage = json_decode($jsonstring);
} else {
	$jsonpage = null;
}

?>