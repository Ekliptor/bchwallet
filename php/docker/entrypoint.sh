#!/bin/bash
set -euo pipefail

# Passing protos/*.proto in Docker CMD gets escaped.
# So we add it here to ensure proper wildcard expansion.
args=("$@")
if [ "${#args}" -lt 5 ]; then args=(/protos/*.proto); fi

# generate PHP .proto code and write it to host machine via shared volume
exec protoc --proto_path=/protos --php_out=/out --grpc_out=/out --plugin=protoc-gen-grpc=/grpc/bins/opt/grpc_php_plugin "$args"

