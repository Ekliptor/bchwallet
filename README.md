bchwallet with protobuf over HTTP
=========
This is a proof of concept implementation of [bchwallet](https://github.com/gcash/bchwallet)
to connect to bchwallet from PHP using protocol buffers over HTTP.


### Why?
We want to bring BitcoinCash (BCH) to WordPress. About [35% of the web is run on WordPres](https://digital.com/blog/wordpress-stats/) (December 2019).

### Current Problem
This must run on all default PHP installations on common shared hosting platforms.


There are 2 C extensions for PHP to run gRPC (`grpc.so` and `protobuf.so`) and one of them (`grpc.so`) is mandatory to run
gRPC (the `protobuf.so` is optional for better performance).

See: [gRPC with PHP quickstart](https://grpc.io/docs/languages/php/quickstart/#build-and-install-grpc-php-extension)

Neither of these 2 C extensions is bundled with default PHP installations (and will not be anytime soon as done with cURL, Mysql driver, ...).

Furthermore, as of now (June 2020) it seems unlikely there will ever be a native gRPC client implemented in PHP.


### Solution
Use Protocol Buffers over HTTP multipart POST (without gRPC as transport layer).
We get the advantages of sending binary data over the wire without having to wait
for gRPC support on common shared hosting platforms.

As the request + response messages in bchwallet are protocol buffers we can easily integrate
it with the new server `rpcserver/server.go ` (no need to maintain a completely different HTTP JSON API).

See [server_proto.go](rpc/legacyrpc/server_proto.go) for the proof-of-concept.

### Alternative solutions
Keep the bchwallet (and bchd) legacy HTTP JSON API updated - including upcoming SLP support -
and we can use JSON to integrate bchwallet into WordPress.


## Running this proof of concept

### Requirements
```
Go >= 1.13
PHP >= 7.3
```

### Sending protobuf messages
1. start [bchd](https://github.com/gcash/bchd) daemon
2. start this bchwallet daemon
3. `cd php && composer install`
3. run `php/index.php` in the shell or browser

This sends a protobuf test message (PingRequest) as defined in the bchwallet `api.proto` file using 
HTTP multipart POST with the binary protocol buffer data in the request body.

### Compiling .proto files

We created a [Docker image](/php/docker) to generate PHP code of the official bchwallet `api.proto` file.
This will only generate protocol buffer PHP code of all `message` blocks, skipping all gRPC 
`service` blocks and `streams`.

```
cd php/docker
docker build --tag grpc_php:1.0 .
cd ..
docker run --rm   -v $(pwd)/proto-php:/out   -v $(pwd)/../rpc:/protos   grpc_php:1.0
```


## License

bchwallet is licensed under the liberal ISC License.


## Contact
Follow me on [Twitter](https://twitter.com/ekliptor)