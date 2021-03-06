<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Rpcpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message of Call rpc.
 *
 * Generated from protobuf message <code>rpcpb.CallResponse</code>
 */
class CallResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * result of smart contract method call.
     *
     * Generated from protobuf field <code>string result = 1;</code>
     */
    private $result = '';
    /**
     *execute error
     *
     * Generated from protobuf field <code>string execute_err = 2;</code>
     */
    private $execute_err = '';
    /**
     *estimate gas used
     *
     * Generated from protobuf field <code>string estimate_gas = 3;</code>
     */
    private $estimate_gas = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * result of smart contract method call.
     *
     * Generated from protobuf field <code>string result = 1;</code>
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * result of smart contract method call.
     *
     * Generated from protobuf field <code>string result = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkString($var, True);
        $this->result = $var;

        return $this;
    }

    /**
     *execute error
     *
     * Generated from protobuf field <code>string execute_err = 2;</code>
     * @return string
     */
    public function getExecuteErr()
    {
        return $this->execute_err;
    }

    /**
     *execute error
     *
     * Generated from protobuf field <code>string execute_err = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExecuteErr($var)
    {
        GPBUtil::checkString($var, True);
        $this->execute_err = $var;

        return $this;
    }

    /**
     *estimate gas used
     *
     * Generated from protobuf field <code>string estimate_gas = 3;</code>
     * @return string
     */
    public function getEstimateGas()
    {
        return $this->estimate_gas;
    }

    /**
     *estimate gas used
     *
     * Generated from protobuf field <code>string estimate_gas = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEstimateGas($var)
    {
        GPBUtil::checkString($var, True);
        $this->estimate_gas = $var;

        return $this;
    }

}

