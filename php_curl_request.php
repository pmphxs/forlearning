<?php
	
	//$url = 'http://10.5.2.80/(tosjwr55te4aagef1ysehwip)/xscj.aspx?xh=1120100437&xm=杨振振&gnmkdm=N121605';
	$url = 'www.baidu.com';
	//$header[] = 'Accept: image/jpeg, application/x-ms-application, image/gif, application/xaml+xml, image/pjpeg, application/x-ms-xbap, application/vnd.ms-excel, application/vnd.ms-powerpoint, application/msword, */*';
	
	// $header[] = 'Content-Type: application/x-www-form-urlencoded';
	// $header[] = 'Accept-Encoding: gzip, deflate';
	// $header[] = 'Connection: Keep-Alive';
	// $header[] = 'DNT: 1';
 //    $header[] = 'Pragma: no-cache';
 //    //$header[] = 'Host: 10.5.2.80';
 //    $header[] = 'Accept-Language: zh-CN';
  	$header[CURLOPT_RETURNTRANSFER] = 1;

	//$post_data = '__VIEWSTATE=dDw3Nzg1Nzk4MDk7dDw7bDxpPDE%2BOz47bDx0PDtsPGk8Mj47aTw5PjtpPDEwPjtpPDE1PjtpPDE3PjtpPDE5PjtpPDIxPjtpPDIyPjtpPDI0PjtpPDI2PjtpPDI4Pjs%2BO2w8dDx0PDt0PGk8MTU%2BO0A8XGU7MjAwMS0yMDAyOzIwMDItMjAwMzsyMDAzLTIwMDQ7MjAwNC0yMDA1OzIwMDUtMjAwNjsyMDA2LTIwMDc7MjAwNy0yMDA4OzIwMDgtMjAwOTsyMDA5LTIwMTA7MjAxMC0yMDExOzIwMTEtMjAxMjsyMDEyLTIwMTM7MjAxMy0yMDE0OzIwMTQtMjAxNTs%2BO0A8XGU7MjAwMS0yMDAyOzIwMDItMjAwMzsyMDAzLTIwMDQ7MjAwNC0yMDA1OzIwMDUtMjAwNjsyMDA2LTIwMDc7MjAwNy0yMDA4OzIwMDgtMjAwOTsyMDA5LTIwMTA7MjAxMC0yMDExOzIwMTEtMjAxMjsyMDEyLTIwMTM7MjAxMy0yMDE0OzIwMTQtMjAxNTs%2BPjs%2BOzs%2BO3Q8cDw7cDxsPG9uY2xpY2s7PjtsPHdpbmRvdy5wcmludCgpXDs7Pj4%2BOzs%2BO3Q8cDw7cDxsPG9uY2xpY2s7PjtsPHdpbmRvdy5jbG9zZSgpXDs7Pj4%2BOzs%2BO3Q8cDxwPGw8VGV4dDs%2BO2w85a2m5Y%2B377yaMTEyMDEwMDQzNzs%2BPjs%2BOzs%2BO3Q8cDxwPGw8VGV4dDs%2BO2w85aeT5ZCN77ya5p2o5oyv5oyvOz4%2BOz47Oz47dDxwPHA8bDxUZXh0Oz47bDzlrabpmaLvvJrmnLrnlLXlrabpmaI7Pj47Pjs7Pjt0PHA8cDxsPFRleHQ7PjtsPOS4k%2BS4mu%2B8mjs%2BPjs%2BOzs%2BO3Q8cDxwPGw8VGV4dDs%2BO2w85o6i5rWL5Yi25a%2B85LiO5o6n5Yi25oqA5pyvOz4%2BOz47Oz47dDxwPHA8bDxUZXh0Oz47bDzooYzmlL%2Fnj63vvJowMjMyMTAwMjs%2BPjs%2BOzs%2BO3Q8QDA8Ozs7Ozs7Ozs7Oz47Oz47dDxwPGw8VmlzaWJsZTs%2BO2w8bzxmPjs%2BPjtsPGk8MT47aTwxMT47aTwxNT47PjtsPHQ8QDA8Ozs7Ozs7Ozs7Oz47Oz47dDxwPHA8bDxUZXh0Oz47bDxCSVQ7Pj47Pjs7Pjt0PEAwPDs7Ozs7Ozs7Ozs%2BOzs%2BOz4%2BOz4%2BOz4%2BOz7sq%2F19J%2Fs2uyzpjIdj94AUU3Vu2A%3D%3D&ddlXN=&ddlXQ=&Button2=%D4%DA%D0%A3%D1%A7%CF%B0%B3%C9%BC%A8%B2%E9%D1%AF';
	
	$yz = curl_init(urlencode($url));
	$options = array(
		CURLOPT_RETURNTRANSFER=>true,
		//CURLOPT_POST=>true,
		//CURLOPT_POSTFIELDS=>$post_data,
		//CURLOPT_USERAGENT=>'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.3; Trident/7.0; .NET4.0E; .NET4.0C; InfoPath.3; .NET CLR 3.5.30729; .NET CLR 2.0.50727; .NET CLR 3.0.30729)',
		//CURLOPT_REFERER=>urlencode('http://10.5.2.80/(tosjwr55te4aagef1ysehwip)/xscj.aspx?xh=1120100437&xm=杨振振&gnmkdm=N121605'),
		//CURLOPT_HTTPHEADER=>$header
	);

	curl_setopt_array($yz,$options);
	$res  = curl_exec($yz);
	var_dump($res);
	//echo $res;
	curl_close($yz);


	class http_request{
		private $method;
		private $_rl;

	}

	function http_request($url,$header){


	}