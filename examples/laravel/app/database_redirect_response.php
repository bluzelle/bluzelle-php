<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Database.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>database_redirect_response</code>
 */
class database_redirect_response extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string leader_id = 1;</code>
     */
    private $leader_id = '';
    /**
     * Generated from protobuf field <code>string leader_name = 2;</code>
     */
    private $leader_name = '';
    /**
     * Generated from protobuf field <code>string leader_host = 3;</code>
     */
    private $leader_host = '';
    /**
     * Generated from protobuf field <code>uint32 leader_port = 4;</code>
     */
    private $leader_port = 0;

    public function __construct() {
        \GPBMetadata\Database::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string leader_id = 1;</code>
     * @return string
     */
    public function getLeaderId()
    {
        return $this->leader_id;
    }

    /**
     * Generated from protobuf field <code>string leader_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLeaderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->leader_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string leader_name = 2;</code>
     * @return string
     */
    public function getLeaderName()
    {
        return $this->leader_name;
    }

    /**
     * Generated from protobuf field <code>string leader_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLeaderName($var)
    {
        GPBUtil::checkString($var, True);
        $this->leader_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string leader_host = 3;</code>
     * @return string
     */
    public function getLeaderHost()
    {
        return $this->leader_host;
    }

    /**
     * Generated from protobuf field <code>string leader_host = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLeaderHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->leader_host = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 leader_port = 4;</code>
     * @return int
     */
    public function getLeaderPort()
    {
        return $this->leader_port;
    }

    /**
     * Generated from protobuf field <code>uint32 leader_port = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLeaderPort($var)
    {
        GPBUtil::checkUint32($var);
        $this->leader_port = $var;

        return $this;
    }

}
