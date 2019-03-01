<?php
require_once "vendor/autoload.php";

$client = new Predis\Client([
    'scheme' => 'tcp',
    'host'   => 'redis-14650.c1.asia-northeast1-1.gce.cloud.redislabs.com',
    'port'   => 14650,
    'password' => '//',

]);

$client->connect();

if($client->isConnected()){
    echo "connected<br>";
}
else{
    echo "disconeected<br>";
}

$a = $client->set("aku","kamu");
//$client->del("aku");
$b = $client->get("aku");
//print_r($a);
if($b){
    echo $b;
}
else{
    echo "key tidak ditemukan";
}
