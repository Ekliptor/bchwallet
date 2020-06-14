<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Walletrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>walletrpc.ChangePassphraseRequest</code>
 */
class ChangePassphraseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.walletrpc.ChangePassphraseRequest.Key key = 1;</code>
     */
    protected $key = 0;
    /**
     * Generated from protobuf field <code>bytes old_passphrase = 2;</code>
     */
    protected $old_passphrase = '';
    /**
     * Generated from protobuf field <code>bytes new_passphrase = 3;</code>
     */
    protected $new_passphrase = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $key
     *     @type string $old_passphrase
     *     @type string $new_passphrase
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.walletrpc.ChangePassphraseRequest.Key key = 1;</code>
     * @return int
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>.walletrpc.ChangePassphraseRequest.Key key = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkEnum($var, \Walletrpc\ChangePassphraseRequest_Key::class);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes old_passphrase = 2;</code>
     * @return string
     */
    public function getOldPassphrase()
    {
        return $this->old_passphrase;
    }

    /**
     * Generated from protobuf field <code>bytes old_passphrase = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOldPassphrase($var)
    {
        GPBUtil::checkString($var, False);
        $this->old_passphrase = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes new_passphrase = 3;</code>
     * @return string
     */
    public function getNewPassphrase()
    {
        return $this->new_passphrase;
    }

    /**
     * Generated from protobuf field <code>bytes new_passphrase = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNewPassphrase($var)
    {
        GPBUtil::checkString($var, False);
        $this->new_passphrase = $var;

        return $this;
    }

}

