<?php

// List in redis

require "vendor/autoload.php";
use Predis\Client;
$chatroom = new Client();

// $chatroom->rpush("chatroom","Anik","Anwar"); // add in last
// $chatroom->lpush("chatroom","Mona","Antu"); // add in fisrt


$len =  $chatroom->llen("chatroom");

// $chatroom->lpop("chatroom"); // delete from first
$chatroom->rpop("chatroom"); // delete from last

print_r($chatroom->lrange("chatroom",0,$len));