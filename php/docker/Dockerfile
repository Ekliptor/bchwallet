FROM debian:jessie-slim
LABEL maintainer="Ekliptor <Ekliptor1@yandex.com>" grpcphp_version="1.0.0"

#WORKDIR /


CMD ["cat", "/etc/issue"]
#RUN echo "Host\n" # doesn't echo

RUN apt-get update

# Install build dependencies
RUN apt-get install build-essential autoconf automake libtool m4 git curl unzip -y

## Clone gRPC repo
RUN git clone --recursive -b v1.30.x https://github.com/grpc/grpc
WORKDIR grpc

# build protocol buffer lib
WORKDIR third_party/protobuf
RUN ./autogen.sh
RUN ./configure
RUN make
RUN make install

WORKDIR ../..

# build gRPC PHP code generator
RUN ldconfig
# RUN export LD_LIBRARY_PATH=/usr/local/lib
RUN make
RUN make grpc_php_plugin

CMD ["echo", "build done"]


WORKDIR /
ADD entrypoint.sh ./
VOLUME ["/out", "/protos"]

ENTRYPOINT ["/entrypoint.sh"]
#CMD ["/protos/*.proto"]
