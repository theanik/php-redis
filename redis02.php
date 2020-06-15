<?php
require "vendor/autoload.php";
use Predis\Client;
$client = new Client();

//redis Increment
$client->set("viewCount", 1);

$client->incr("viewCount");// 2
$client->incr("viewCount");// 3
$client->incr("viewCount");// 4
$client->incr("viewCount");// 5

$client->incrby("viewCount", 5); // 5+5
$client->incrby("viewCount", 5); // 10 + 5

echo $client->get("viewCount")."\n"; //print 15


//redis Decriement

$client->set("product_stock", 100);

$client->decr("product_stock"); // 99
$client->decr("product_stock"); // 98
$client->decr("product_stock"); // 97
$client->decr("product_stock"); // 96

$client->decrby("product_stock", 2); // 96 - 2 = 94
$client->decrby("product_stock", 2); // 94 - 2 = 92
$client->decrby("product_stock", 2); // 92 - 2 = 90

echo $client->get("product_stock")."\n"; //print 90