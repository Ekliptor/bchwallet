<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Walletrpc;

/**
 */
class WalletLoaderServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Walletrpc\WalletExistsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\WalletExistsResponse
     */
    public function WalletExists(\Walletrpc\WalletExistsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletLoaderService/WalletExists',
        $argument,
        ['\Walletrpc\WalletExistsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\CreateWalletRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\CreateWalletResponse
     */
    public function CreateWallet(\Walletrpc\CreateWalletRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletLoaderService/CreateWallet',
        $argument,
        ['\Walletrpc\CreateWalletResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\OpenWalletRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\OpenWalletResponse
     */
    public function OpenWallet(\Walletrpc\OpenWalletRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletLoaderService/OpenWallet',
        $argument,
        ['\Walletrpc\OpenWalletResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\CloseWalletRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\CloseWalletResponse
     */
    public function CloseWallet(\Walletrpc\CloseWalletRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletLoaderService/CloseWallet',
        $argument,
        ['\Walletrpc\CloseWalletResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\StartConsensusRpcRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\StartConsensusRpcResponse
     */
    public function StartConsensusRPC(\Walletrpc\StartConsensusRpcRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletLoaderService/StartConsensusRPC',
        $argument,
        ['\Walletrpc\StartConsensusRpcResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\GenerateMnemonicSeedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\GenerateMnemonicSeedResponse
     */
    public function GenerateMnemonicSeed(\Walletrpc\GenerateMnemonicSeedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletLoaderService/GenerateMnemonicSeed',
        $argument,
        ['\Walletrpc\GenerateMnemonicSeedResponse', 'decode'],
        $metadata, $options);
    }

}
