<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Rpcpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message of node info.
 *
 * Generated from protobuf message <code>rpcpb.NodeInfoResponse</code>
 */
class NodeInfoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * the node ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * the block chainID.
     *
     * Generated from protobuf field <code>uint32 chain_id = 2;</code>
     */
    private $chain_id = 0;
    /**
     * coinbase
     *
     * Generated from protobuf field <code>string coinbase = 3;</code>
     */
    private $coinbase = '';
    /**
     * Number of peers currenly connected.
     *
     * Generated from protobuf field <code>uint32 peer_count = 4;</code>
     */
    private $peer_count = 0;
    /**
     * the node synchronized status.
     *
     * Generated from protobuf field <code>bool synchronized = 5;</code>
     */
    private $synchronized = false;
    /**
     * the node route table bucket size.
     *
     * Generated from protobuf field <code>int32 bucket_size = 6;</code>
     */
    private $bucket_size = 0;
    /**
     * the network protocol version.
     *
     * Generated from protobuf field <code>string protocol_version = 10;</code>
     */
    private $protocol_version = '';
    /**
     * Generated from protobuf field <code>repeated .rpcpb.RouteTable route_table = 11;</code>
     */
    private $route_table;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * the node ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * the node ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * the block chainID.
     *
     * Generated from protobuf field <code>uint32 chain_id = 2;</code>
     * @return int
     */
    public function getChainId()
    {
        return $this->chain_id;
    }

    /**
     * the block chainID.
     *
     * Generated from protobuf field <code>uint32 chain_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setChainId($var)
    {
        GPBUtil::checkUint32($var);
        $this->chain_id = $var;

        return $this;
    }

    /**
     * coinbase
     *
     * Generated from protobuf field <code>string coinbase = 3;</code>
     * @return string
     */
    public function getCoinbase()
    {
        return $this->coinbase;
    }

    /**
     * coinbase
     *
     * Generated from protobuf field <code>string coinbase = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCoinbase($var)
    {
        GPBUtil::checkString($var, True);
        $this->coinbase = $var;

        return $this;
    }

    /**
     * Number of peers currenly connected.
     *
     * Generated from protobuf field <code>uint32 peer_count = 4;</code>
     * @return int
     */
    public function getPeerCount()
    {
        return $this->peer_count;
    }

    /**
     * Number of peers currenly connected.
     *
     * Generated from protobuf field <code>uint32 peer_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPeerCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->peer_count = $var;

        return $this;
    }

    /**
     * the node synchronized status.
     *
     * Generated from protobuf field <code>bool synchronized = 5;</code>
     * @return bool
     */
    public function getSynchronized()
    {
        return $this->synchronized;
    }

    /**
     * the node synchronized status.
     *
     * Generated from protobuf field <code>bool synchronized = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSynchronized($var)
    {
        GPBUtil::checkBool($var);
        $this->synchronized = $var;

        return $this;
    }

    /**
     * the node route table bucket size.
     *
     * Generated from protobuf field <code>int32 bucket_size = 6;</code>
     * @return int
     */
    public function getBucketSize()
    {
        return $this->bucket_size;
    }

    /**
     * the node route table bucket size.
     *
     * Generated from protobuf field <code>int32 bucket_size = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setBucketSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->bucket_size = $var;

        return $this;
    }

    /**
     * the network protocol version.
     *
     * Generated from protobuf field <code>string protocol_version = 10;</code>
     * @return string
     */
    public function getProtocolVersion()
    {
        return $this->protocol_version;
    }

    /**
     * the network protocol version.
     *
     * Generated from protobuf field <code>string protocol_version = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setProtocolVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->protocol_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .rpcpb.RouteTable route_table = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRouteTable()
    {
        return $this->route_table;
    }

    /**
     * Generated from protobuf field <code>repeated .rpcpb.RouteTable route_table = 11;</code>
     * @param \Rpcpb\RouteTable[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRouteTable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Rpcpb\RouteTable::class);
        $this->route_table = $arr;

        return $this;
    }

}
