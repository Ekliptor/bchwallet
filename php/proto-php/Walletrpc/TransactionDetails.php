<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.TransactionDetails</code>
 */
class TransactionDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>
     */
    protected $hash = '';
    /**
     * Generated from protobuf field <code>bytes transaction = 2;</code>
     */
    protected $transaction = '';
    /**
     * Generated from protobuf field <code>repeated .walletrpc.TransactionDetails.Input debits = 3;</code>
     */
    private $debits;
    /**
     * Generated from protobuf field <code>repeated .walletrpc.TransactionDetails.Output credits = 4;</code>
     */
    private $credits;
    /**
     * Generated from protobuf field <code>int64 fee = 5;</code>
     */
    protected $fee = 0;
    /**
     * May be earlier than a block timestamp, but never later.
     *
     * Generated from protobuf field <code>int64 timestamp = 6;</code>
     */
    protected $timestamp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hash
     *     @type string $transaction
     *     @type \Walletrpc\TransactionDetails\Input[]|\Google\Protobuf\Internal\RepeatedField $debits
     *     @type \Walletrpc\TransactionDetails\Output[]|\Google\Protobuf\Internal\RepeatedField $credits
     *     @type int|string $fee
     *     @type int|string $timestamp
     *           May be earlier than a block timestamp, but never later.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes transaction = 2;</code>
     * @return string
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * Generated from protobuf field <code>bytes transaction = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .walletrpc.TransactionDetails.Input debits = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDebits()
    {
        return $this->debits;
    }

    /**
     * Generated from protobuf field <code>repeated .walletrpc.TransactionDetails.Input debits = 3;</code>
     * @param \Walletrpc\TransactionDetails\Input[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDebits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Walletrpc\TransactionDetails\Input::class);
        $this->debits = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .walletrpc.TransactionDetails.Output credits = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Generated from protobuf field <code>repeated .walletrpc.TransactionDetails.Output credits = 4;</code>
     * @param \Walletrpc\TransactionDetails\Output[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCredits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Walletrpc\TransactionDetails\Output::class);
        $this->credits = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 5;</code>
     * @return int|string
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Generated from protobuf field <code>int64 fee = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFee($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee = $var;

        return $this;
    }

    /**
     * May be earlier than a block timestamp, but never later.
     *
     * Generated from protobuf field <code>int64 timestamp = 6;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * May be earlier than a block timestamp, but never later.
     *
     * Generated from protobuf field <code>int64 timestamp = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

}

