<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Database.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>database_delete</code>
 */
class database_delete extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string key = 2;</code>
     */
    private $key = '';

    public function __construct() {
        \GPBMetadata\Database::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string key = 2;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

}
