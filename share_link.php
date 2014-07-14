<?php

	function sql($host,$user,$pass,$db){
		$handle = mysql_connect($host,$ursr,$pass) or die('连接数据库失败'.mysql_error());
		mysql_select_db($db,$handle) or mysql_create_db($db,$handle) && mysql_select_db($db,$handle);
		
	}
	