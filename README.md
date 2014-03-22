URL Shortener in PHP
===========================

Demo: http://s.sajib.im/

Usage
===========================
Fill this Configuration part in config.php.
```
$dbhost=""; //Database Host
$dbname = ""; //Database Name
$dbuser = ""; //Database Username
$dbpass =""; //Database Password
$site_url="http://localhost/short/"; // Use URL Like http://site.com/
```
API Usage
============================
Use GET method to Send data to API (http://yoursite.com/api/.<br>
EX:<br>
GET Method
```
curl_setopt($ch, CURLOPT_URL, 'http://s.sajim.im/api/http://xxxx.com/');
```


Benefits
============================

1.Can shorten over 42 billion unique URLs in 6 or less characters (characters will increase automatically)<br>
2.Super fast — uses ajax and very little server resources<br>
3.Includes an API so you can create your own short URLs on the fly<br>
4.Only uses alphanumeric characters so all browsers can interpret the URL<br>
5.Used PDO to prevent SQL injection hacks<br>





