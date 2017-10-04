<?php
header("refresh: 1");
require_once('twitteroauth.php');
$write = "line.txt";
$linew = file($write);
$co = $linew[0];
$myFile = "data.txt";
$lines = file($myFile);
$pizza  = $lines[$co];
$pieces = explode(":", $pizza);
$access_token = $pieces[0];
$consumer_key = $pieces[1];
$twitter_name = $pieces[2];
$consumer_secret = $pieces[3];
$access_token_secret1 = $pieces[4];
$access_token_secret = str_replace(array("\n","\r"), '', $access_token_secret1);
echo $twitter_name;
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get('account/verify_credentials');
$id = '915473172908199936';
$connection->post('favorites/create', array('id'=> ''.$id.''));
$ad = $co-1;
$fp = fopen('line.txt', 'w');
fwrite($fp, $ad);
fclose($fp);
?>
