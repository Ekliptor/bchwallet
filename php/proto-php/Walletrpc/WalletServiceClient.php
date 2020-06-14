<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Walletrpc;

/**
 */
class WalletServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Queries
     * @param \Walletrpc\PingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\PingResponse
     */
    public function Ping(\Walletrpc\PingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/Ping',
        $argument,
        ['\Walletrpc\PingResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\NetworkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\NetworkResponse
     */
    public function Network(\Walletrpc\NetworkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/Network',
        $argument,
        ['\Walletrpc\NetworkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\AccountNumberRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\AccountNumberResponse
     */
    public function AccountNumber(\Walletrpc\AccountNumberRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/AccountNumber',
        $argument,
        ['\Walletrpc\AccountNumberResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\AccountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\AccountsResponse
     */
    public function Accounts(\Walletrpc\AccountsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/Accounts',
        $argument,
        ['\Walletrpc\AccountsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\BalanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\BalanceResponse
     */
    public function Balance(\Walletrpc\BalanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/Balance',
        $argument,
        ['\Walletrpc\BalanceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\CurrentAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\CurrentAddressResponse
     */
    public function CurrentAddress(\Walletrpc\CurrentAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/CurrentAddress',
        $argument,
        ['\Walletrpc\CurrentAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\GetTransactionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\GetTransactionsResponse
     */
    public function GetTransactions(\Walletrpc\GetTransactionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/GetTransactions',
        $argument,
        ['\Walletrpc\GetTransactionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Notifications
     * @param \Walletrpc\TransactionNotificationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\TransactionNotificationsResponse
     */
    public function TransactionNotifications(\Walletrpc\TransactionNotificationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/walletrpc.WalletService/TransactionNotifications',
        $argument,
        ['\Walletrpc\TransactionNotificationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\SpentnessNotificationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\SpentnessNotificationsResponse
     */
    public function SpentnessNotifications(\Walletrpc\SpentnessNotificationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/walletrpc.WalletService/SpentnessNotifications',
        $argument,
        ['\Walletrpc\SpentnessNotificationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\AccountNotificationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\AccountNotificationsResponse
     */
    public function AccountNotifications(\Walletrpc\AccountNotificationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/walletrpc.WalletService/AccountNotifications',
        $argument,
        ['\Walletrpc\AccountNotificationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\RescanNotificationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\RescanNotificationsResponse
     */
    public function RescanNotifications(\Walletrpc\RescanNotificationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/walletrpc.WalletService/RescanNotifications',
        $argument,
        ['\Walletrpc\RescanNotificationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Control
     * @param \Walletrpc\ChangePassphraseRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\ChangePassphraseResponse
     */
    public function ChangePassphrase(\Walletrpc\ChangePassphraseRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/ChangePassphrase',
        $argument,
        ['\Walletrpc\ChangePassphraseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\RenameAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\RenameAccountResponse
     */
    public function RenameAccount(\Walletrpc\RenameAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/RenameAccount',
        $argument,
        ['\Walletrpc\RenameAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\NextAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\NextAccountResponse
     */
    public function NextAccount(\Walletrpc\NextAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/NextAccount',
        $argument,
        ['\Walletrpc\NextAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\NextAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\NextAddressResponse
     */
    public function NextAddress(\Walletrpc\NextAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/NextAddress',
        $argument,
        ['\Walletrpc\NextAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\ImportPrivateKeyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\ImportPrivateKeyResponse
     */
    public function ImportPrivateKey(\Walletrpc\ImportPrivateKeyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/ImportPrivateKey',
        $argument,
        ['\Walletrpc\ImportPrivateKeyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\FundTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\FundTransactionResponse
     */
    public function FundTransaction(\Walletrpc\FundTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/FundTransaction',
        $argument,
        ['\Walletrpc\FundTransactionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\CreateTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\CreateTransactionResponse
     */
    public function CreateTransaction(\Walletrpc\CreateTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/CreateTransaction',
        $argument,
        ['\Walletrpc\CreateTransactionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\SweepAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\SweepAccountResponse
     */
    public function SweepAccount(\Walletrpc\SweepAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/SweepAccount',
        $argument,
        ['\Walletrpc\SweepAccountResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\SignTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\SignTransactionResponse
     */
    public function SignTransaction(\Walletrpc\SignTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/SignTransaction',
        $argument,
        ['\Walletrpc\SignTransactionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\PublishTransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\PublishTransactionResponse
     */
    public function PublishTransaction(\Walletrpc\PublishTransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/PublishTransaction',
        $argument,
        ['\Walletrpc\PublishTransactionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\RescanRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\RescanResponse
     */
    public function Rescan(\Walletrpc\RescanRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/Rescan',
        $argument,
        ['\Walletrpc\RescanResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Payment Requests
     * @param \Walletrpc\DownloadPaymentRequestRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\DownloadPaymentRequestResponse
     */
    public function DownloadPaymentRequest(\Walletrpc\DownloadPaymentRequestRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/DownloadPaymentRequest',
        $argument,
        ['\Walletrpc\DownloadPaymentRequestResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Walletrpc\PostPaymentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\PostPaymentResponse
     */
    public function PostPayment(\Walletrpc\PostPaymentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/PostPayment',
        $argument,
        ['\Walletrpc\PostPaymentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Utilities
     * @param \Walletrpc\ValidateAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Walletrpc\ValidateAddressResponse
     */
    public function ValidateAddress(\Walletrpc\ValidateAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/walletrpc.WalletService/ValidateAddress',
        $argument,
        ['\Walletrpc\ValidateAddressResponse', 'decode'],
        $metadata, $options);
    }

}
