<?php
include 'Mcurl.php';
function QueryScore($stuid,$pass)
{
	$user = array(
		'stuid' => $stuid,
		'pass' => $pass,
	);
	$getter = new Mcurl($user);
	$list = $getter->listScorethis();
	foreach($list as $item)
	{
		echo iconv("UTF-8", "GBK",$item['name'])."  ";
		echo $item['score']."\n";
	}
}

QueryScore('201281084','755213');