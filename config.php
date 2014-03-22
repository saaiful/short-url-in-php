<?php
/*========================================================================*/
/*								Config Part					   			  */
/*========================================================================*/
$dbhost=""; //Database Host
$dbname = ""; //Database Name
$dbuser = ""; //Database Username
$dbpass =""; //Database Password
$site_url="http://localhost/short/"; // Use URL Like http://site.com/
/*========================================================================*/
date_default_timezone_set('Asia/Dhaka');
try
{
	$db=new PDO("mysql:host={$dbhost};dbname={$dbname};charset=utf8", $dbuser, $dbpass);
}
catch(Exception $e)
{
  echo 'Error: ' .$e->getMessage();
} 
?>