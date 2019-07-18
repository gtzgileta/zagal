<?php

session_start();
if($_GET['type']=='es')
	$_SESSION['lang'] = 'es';
else
	$_SESSION['lang'] = 'en';

?>