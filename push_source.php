<?php 
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header("Access-Control-Allow-Origin: *");

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

echo "retry: 10000".PHP_EOL; // Reconnect every 10sec 
$msg = $redis->lPop('message');
if($msg){
	echo "data: {$msg}".PHP_EOL; //Receive JSON Format 
	echo PHP_EOL;
}

ob_flush();
flush();


