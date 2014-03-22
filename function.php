<?php
function nextLetter(&$str) 
{
	$str = ('z' == $str ? 'a' : ++$str);
}

function getNextShortURL($s) 
{
	$a = str_split($s);
	$c = count($a);
	if (preg_match('/^z*$/', $s)) 
	{
	return str_repeat('a', $c + 1);
	}
	while ('z' == $a[--$c]) {
	nextLetter($a[$c]);
	}
	nextLetter($a[$c]);
	return implode($a);
}

function getLast()
{
	include 'config.php';
	$query = $db -> prepare("SELECT * FROM link ORDER BY id DESC LIMIT 1");
	$query -> execute();
	$last = "";
	foreach ($query as $key) 
	{
		$last = $key['short'];
	}
	return getNextShortURL($last);
}

function visitCount($short)
{
	include 'config.php';
	$query = $db -> prepare("UPDATE link SET count=count+1 WHERE short=:short");
	$query -> execute(array(':short' => $short));
}

//getting short url
function get_URL($short)
{
	include 'config.php';
	$query = $db -> prepare("SELECT * FROM link WHERE short=:short LIMIT 1");
	$query -> execute(array(':short' => $short));
	$url = "{$site_url}";
	foreach ($query as $key) 
	{
		$url = $key['url'];
	}
	visitCount($short);
	return $url;
}

//saving url
if(isset($_POST['url']))
{
	include 'config.php';
	$short = getLast();
	$query = $db -> prepare("INSERT INTO link (url, short, count, date) VALUES (:url, :short, :count, :date)");
	$query -> execute(array(':url' => $_POST['url'], ':short' => $short , ':count' => '0', ':date' => date('Y-m-d H:i:s')));
	$count = $query -> rowCount();
	if($count==1){echo "{$site_url}{$short}";}
	else{ echo "{$site_url}";}
}


//api
function api($url)
{
	include 'config.php';
	$short = getLast();
	$query = $db -> prepare("INSERT INTO link (url, short, count, date) VALUES (:url, :short, :count, :date)");
	$query -> execute(array(':url' => $url, ':short' => $short , ':count' => '0', ':date' => date('Y-m-d H:i:s')));
	$count = $query -> rowCount();
	if($count==1)
	{
		
		$response["success"] = 1;
    	$response["message"] = "{$site_url}{$short}";
    	return json_encode($response);
	}
	else
	{ 
		$response["success"] = 0;
    	$response["message"] = "{$site_url}";
    	return json_encode($response);
	}
}
?>