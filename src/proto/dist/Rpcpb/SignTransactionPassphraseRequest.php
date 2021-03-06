<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Rpcpb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rpcpb.SignTransactionPassphraseRequest</code>
 */
class SignTransactionPassphraseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * transaction struct
     *
     * Generated from protobuf field <code>.rpcpb.TransactionRequest transaction = 1;</code>
     */
    private $transaction = null;
    /**
     * from account passphrase
     *
     * Generated from protobuf field <code>string passphrase = 2;</code>
     */
    private $passphrase = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * transaction struct
     *
     * Generated from protobuf field <code>.rpcpb.TransactionRequest transaction = 1;</code>
     * @return \Rpcpb\TransactionRequest
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    /**
     * transaction struct
     *
     * Generated from protobuf field <code>.rpcpb.TransactionRequest transaction = 1;</code>
     * @param \Rpcpb\TransactionRequest $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkMessage($var, \Rpcpb\TransactionRequest::class);
        $this->transaction = $var;

        return $this;
    }

    /**
     * from account passphrase
     *
     * Generated from protobuf field <code>string passphrase = 2;</code>
     * @return string
     */
    public function getPassphrase()
    {
        return $this->passphrase;
    }

    /**
     * from account passphrase
     *
     * Generated from protobuf field <code>string passphrase = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassphrase($var)
    {
        GPBUtil::checkString($var, True);
        $this->passphrase = $var;

        return $this;
    }

}

