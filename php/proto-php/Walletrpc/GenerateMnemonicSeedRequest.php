<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.GenerateMnemonicSeedRequest</code>
 */
class GenerateMnemonicSeedRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 bit_size = 1;</code>
     */
    protected $bit_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bit_size
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 bit_size = 1;</code>
     * @return int
     */
    public function getBitSize()
    {
        return $this->bit_size;
    }

    /**
     * Generated from protobuf field <code>uint32 bit_size = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBitSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->bit_size = $var;

        return $this;
    }

}
