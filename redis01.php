<?php
require "vendor/autoload.php";

use Predis\Client;

$client = new Client();
$client->set("name","Anik");
$name = $client->get("name")."\n";

// $client->set("name2","Anwar");
// $client->expire("name2",30); // name2 will del after 30 secound

echo $name;
echo $client->get("name2")."\n";

// Store Array in redis

$user1 = [
    'name' => "Anik Anwar",
    'email' => "anik@aa.aa",
    'Address' => "PlanetEarth"
];

$client->set("user1", json_encode($user1));

echo $client->get("user1")."\n";


// Delete from redis


$client->set("temp", "this is tmp data");
echo $client->get("temp");
$client->del("temp"); // data deleted
echo $client->get("temp"); // nouthing print
