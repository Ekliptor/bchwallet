<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Walletrpc\FundTransactionResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.FundTransactionResponse.PreviousOutput</code>
 */
class PreviousOutput extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes transaction_hash = 1;</code>
     */
    protected $transaction_hash = '';
    /**
     * Generated from protobuf field <code>uint32 output_index = 2;</code>
     */
    protected $output_index = 0;
    /**
     * Generated from protobuf field <code>int64 amount = 3;</code>
     */
    protected $amount = 0;
    /**
     * Generated from protobuf field <code>bytes pk_script = 4;</code>
     */
    protected $pk_script = '';
    /**
     * Generated from protobuf field <code>int64 receive_time = 5;</code>
     */
    protected $receive_time = 0;
    /**
     * Generated from protobuf field <code>bool from_coinbase = 6;</code>
     */
    protected $from_coinbase = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $transaction_hash
     *     @type int $output_index
     *     @type int|string $amount
     *     @type string $pk_script
     *     @type int|string $receive_time
     *     @type bool $from_coinbase
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes transaction_hash = 1;</code>
     * @return string
     */
    public function getTransactionHash()
    {
        return $this->transaction_hash;
    }

    /**
     * Generated from protobuf field <code>bytes transaction_hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 output_index = 2;</code>
     * @return int
     */
    public function getOutputIndex()
    {
        return $this->output_index;
    }

    /**
     * Generated from protobuf field <code>uint32 output_index = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOutputIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->output_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 3;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes pk_script = 4;</code>
     * @return string
     */
    public function getPkScript()
    {
        return $this->pk_script;
    }

    /**
     * Generated from protobuf field <code>bytes pk_script = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPkScript($var)
    {
        GPBUtil::checkString($var, False);
        $this->pk_script = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 receive_time = 5;</code>
     * @return int|string
     */
    public function getReceiveTime()
    {
        return $this->receive_time;
    }

    /**
     * Generated from protobuf field <code>int64 receive_time = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReceiveTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->receive_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool from_coinbase = 6;</code>
     * @return bool
     */
    public function getFromCoinbase()
    {
        return $this->from_coinbase;
    }

    /**
     * Generated from protobuf field <code>bool from_coinbase = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setFromCoinbase($var)
    {
        GPBUtil::checkBool($var);
        $this->from_coinbase = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PreviousOutput::class, \Walletrpc\FundTransactionResponse_PreviousOutput::class);

