<?php
	//en mode desenvolupament
	
	ini_set('display_errors','on');

	echo "<link rel='stylesheet' type='text/css' href='css\style.css'>";

	//cridem al nucli
	require 'application/core.php';
	Core::init();

