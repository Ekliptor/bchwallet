<?php

require __DIR__ . '/vendor/autoload.php';

$api = new \Ekliptor\grpc\GrcpHttp("https://localhost:8332/proto", "rpcuser", "rpcpass");
$req = new \Walletrpc\PingRequest(); // bchwallet api.proto definition
$req->setDemoNumber(123); // added properties for this demo
$req->setDemoString("my-foo");

$res = $api->post($req);
print_r("RESPONSE:");
print_r($res->serializeToJsonString()); // type Walletrpc\PingResponse

echo "\nDONE\n";