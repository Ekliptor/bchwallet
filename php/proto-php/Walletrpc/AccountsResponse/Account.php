<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Walletrpc\AccountsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.AccountsResponse.Account</code>
 */
class Account extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 account_number = 1;</code>
     */
    protected $account_number = 0;
    /**
     * Generated from protobuf field <code>string account_name = 2;</code>
     */
    protected $account_name = '';
    /**
     * Generated from protobuf field <code>int64 total_balance = 3;</code>
     */
    protected $total_balance = 0;
    /**
     * Generated from protobuf field <code>uint32 external_key_count = 4;</code>
     */
    protected $external_key_count = 0;
    /**
     * Generated from protobuf field <code>uint32 internal_key_count = 5;</code>
     */
    protected $internal_key_count = 0;
    /**
     * Generated from protobuf field <code>uint32 imported_key_count = 6;</code>
     */
    protected $imported_key_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $account_number
     *     @type string $account_name
     *     @type int|string $total_balance
     *     @type int $external_key_count
     *     @type int $internal_key_count
     *     @type int $imported_key_count
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 account_number = 1;</code>
     * @return int
     */
    public function getAccountNumber()
    {
        return $this->account_number;
    }

    /**
     * Generated from protobuf field <code>uint32 account_number = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAccountNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->account_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string account_name = 2;</code>
     * @return string
     */
    public function getAccountName()
    {
        return $this->account_name;
    }

    /**
     * Generated from protobuf field <code>string account_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountName($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 total_balance = 3;</code>
     * @return int|string
     */
    public function getTotalBalance()
    {
        return $this->total_balance;
    }

    /**
     * Generated from protobuf field <code>int64 total_balance = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_balance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 external_key_count = 4;</code>
     * @return int
     */
    public function getExternalKeyCount()
    {
        return $this->external_key_count;
    }

    /**
     * Generated from protobuf field <code>uint32 external_key_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setExternalKeyCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->external_key_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 internal_key_count = 5;</code>
     * @return int
     */
    public function getInternalKeyCount()
    {
        return $this->internal_key_count;
    }

    /**
     * Generated from protobuf field <code>uint32 internal_key_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setInternalKeyCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->internal_key_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 imported_key_count = 6;</code>
     * @return int
     */
    public function getImportedKeyCount()
    {
        return $this->imported_key_count;
    }

    /**
     * Generated from protobuf field <code>uint32 imported_key_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setImportedKeyCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->imported_key_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Account::class, \Walletrpc\AccountsResponse_Account::class);

