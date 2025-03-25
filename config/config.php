<?php

return [
    "enabled" => env('GOIP_ENABLED', false),
    "server" => env('GOIP_SERVER', 'http://192.168.0.1'),
    "login" => env('GOIP_LOGIN', ''),
    "password" => env('GOIP_PASSWORD', ''),
    "channel" => env('GOIP_CHANNEL', 1),
    "priority" => env('GOIP_PRIORITY', 1),
    "prefix" => env('GOIP_PREFIX', "any"),
    "tags" => env('GOIP_TAGS', '#goip'),
    "default" => env('GOIP_DEFAULT', false),
    "devmode" => env('GOIP_DEVMODE', false),
];
