<?php 

	session_start();
	
	include 'libs/jmyphp.php';
	
	if($_GET['f']=="")
		@include "pages/".(($_GET['page'] == '') ? 'index':$_GET['page']).".php";
	else
		@include "pages/".$_GET['f']."/".(($_GET['page'] == '') ? 'index':$_GET['page']).".php";
	
?>

