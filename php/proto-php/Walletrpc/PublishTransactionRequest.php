<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.PublishTransactionRequest</code>
 */
class PublishTransactionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes signed_transaction = 1;</code>
     */
    protected $signed_transaction = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $signed_transaction
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes signed_transaction = 1;</code>
     * @return string
     */
    public function getSignedTransaction()
    {
        return $this->signed_transaction;
    }

    /**
     * Generated from protobuf field <code>bytes signed_transaction = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSignedTransaction($var)
    {
        GPBUtil::checkString($var, False);
        $this->signed_transaction = $var;

        return $this;
    }

}

