<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.PingRequest</code>
 */
class PingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * TODO remove
     *
     * Generated from protobuf field <code>uint32 demo_number = 1;</code>
     */
    protected $demo_number = 0;
    /**
     * Generated from protobuf field <code>string demo_string = 2;</code>
     */
    protected $demo_string = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $demo_number
     *           TODO remove
     *     @type string $demo_string
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * TODO remove
     *
     * Generated from protobuf field <code>uint32 demo_number = 1;</code>
     * @return int
     */
    public function getDemoNumber()
    {
        return $this->demo_number;
    }

    /**
     * TODO remove
     *
     * Generated from protobuf field <code>uint32 demo_number = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDemoNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->demo_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string demo_string = 2;</code>
     * @return string
     */
    public function getDemoString()
    {
        return $this->demo_string;
    }

    /**
     * Generated from protobuf field <code>string demo_string = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDemoString($var)
    {
        GPBUtil::checkString($var, True);
        $this->demo_string = $var;

        return $this;
    }

}

