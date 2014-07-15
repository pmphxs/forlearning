<?php

	function sql($host,$user,$pass,$db){
		$handle = mysql_connect($host,$user,$pass) or die('连接数据库失败'.mysql_error());
		
		if(!mysql_select_db($db,$handle)){
			mysql_create_db($db,$handle);
			mysql_select_db($db,$handle);
			$sql = 'create table share_link(int id int not null primary key autoincrement,link varchar(255) not null default "",pass varchar(25) not null default ""';
			mysql_query($sql,$handle);
			///echo 
		}

		$sql = 'select * from share_link';
		$res = mysql_query($sql);
		while($arr = mysql_fetch_assoc($res)){
			echo " link ".$arr['link'].' pass '.$arr['pass'].'<br>';
		}
		mysql_close($$handle);
	}
	sql('localhost','root','','share_link');
