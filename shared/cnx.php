<?php 
	$user="root";
	$pass="";
	$host="localhost";
	$bdd="CmsDB";
	mysql_connect($host,$user,$pass)or die(mysql_error());
	mysql_select_db($bdd)or die(mysql_error());
?>