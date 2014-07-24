<?php

function aaaa(&$a='dfafaf'){
	echo $a;
	$a ='ddddddd';
}
aaaa();
echo "\n";
$b  = 'aaaaaaaaaa';
aaaa($b);

aaaa();

aaaa($b);

// $a = array
// (
//     'sec_id' => 'MD5',
//     'v' => '1.0',
//   );
// echo http_build_query($a);



// function fadfa($d){

// 	echo 1;
// 	echo $d;

// }
// $a='fadfa';
// $a(3333333333);
