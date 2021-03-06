<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.CurrentAddressRequest</code>
 */
class CurrentAddressRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 account = 1;</code>
     */
    protected $account = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $account
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 account = 1;</code>
     * @return int
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Generated from protobuf field <code>uint32 account = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkUint32($var);
        $this->account = $var;

        return $this;
    }

}

