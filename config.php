<?php
	require('constant.php');
	$connection=mysql_connect(DB_SERVER,DB_USER,DB_PASSWORD);
	if(!$connection)
	{
		die("Connection failed:".mysql_error());
	}
	$db_select=mysql_select_db(DB_NAME,$connection);
	if(!$db_select)
	{
		die("database select failed:".mysql_error());
	}
?>