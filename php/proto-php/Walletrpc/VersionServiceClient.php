<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Walletrpc;

/**
 */
class VersionServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Walletrpc\VersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\VersionResponse
     */
    public function Version(\Walletrpc\VersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.VersionService/Version',
        $argument,
        ['\Walletrpc\VersionResponse', 'decode'],
        $metadata, $options);
    }

}
