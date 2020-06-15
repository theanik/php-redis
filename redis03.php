<?php
require "vendor/autoload.php";
use Predis\Client;
$client = new Client();

// store data as like a array using hash

$client->hset("arr1","name","Anik");
$client->hset("arr1","email","anik@aa.aa");
$client->hset("arr1","token","thisistoken1234");

print($client->hget("arr1","name")."\n");
print($client->hget("arr1","email")."\n");
print($client->hget("arr1","token")."\n");

$client->hdel("arr1","name"); //delete a spicific element
print($client->hget("arr1","name")."\n");

print_r($client->hgetall("arr1"));



// direct set a [php] array

$user1 = [
    'name' => "Mona",
    "email" => "mona@aa.aa",
    "token" => "thisis toekn"
];

$client->hmset("arr2", $user1);

print_r($client->hmget("arr2",['name','email'])); // return spacific
$client->hmset("arr2","name","Mona Update"); // update value
print_r($client->hgetall("arr2"));

//cool