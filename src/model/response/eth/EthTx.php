<?php

namespace Tatum\model\response\eth;


use Tatum\model\Model;
/**
 *
 * @export
 * @interface EthTx
 */
class EthTx extends Model {
    /**
     * Hash of the block where this transaction was in.
* @var string
     * @memberof EthTx
     */
    public $blockHash;
    /**
     * TRUE if the transaction was successful, FALSE, if the EVM reverted the transaction.
* @var boolean
     * @memberof EthTx
     */
public $status;
    /**
     * Block number where this transaction was in.
* @var number
     * @memberof EthTx
     */
    public $blockNumber;
    /**
     * Address of the sender.
* @var string
     * @memberof EthTx
     */
    public $from;
    /**
     * Gas provided by the sender.
* @var number
     * @memberof EthTx
     */
    public $gas;
    /**
     * Gas price provided by the sender in wei.
* @var string
     * @memberof EthTx
     */
    public $gasPrice;
    /**
     * Hash of the transaction.
* @var string
     * @memberof EthTx
     */
    public $transactionHash;
    /**
     * The data sent along with the transaction.
* @var string
     * @memberof EthTx
     */
    public $input;
    /**
     * The number of transactions made by the sender prior to this one.
* @var number
     * @memberof EthTx
     */
    public $nonce;
    /**
     * Address of the receiver. 'null' when its a contract creation transaction.
* @var string
     * @memberof EthTx
     */
    public $to;
    /**
     * Integer of the transactions index position in the block.
* @var number
     * @memberof EthTx
     */
    public $transactionIndex;
    /**
     * Value transferred in wei.
* @var string
     * @memberof EthTx
     */
    public $value;
    /**
     * The amount of gas used by this specific transaction alone.
* @var number
     * @memberof EthTx
     */
    public $gasUsed;
    /**
     * The total amount of gas used when this transaction was executed in the block.
* @var number
     * @memberof EthTx
     */
    public $cumulativeGasUsed;
    /**
     * The contract address created, if the transaction was a contract creation, otherwise null.
* @var string
     * @memberof EthTx
     */
    public $contractAddress;
    /**
     * Log events, that happened in this transaction.
* @var Array
<EthTxLogs>
     * @memberof EthTx
     */
public $logs;
}

/**
 *
 * @export
 * @interface EthTxLogs
 */
class EthTxLogs extends Model {
    /**
     * From which this event originated from.
    * @var string
     * @memberof EthTxLogs
     */
    public $address;
    /**
     * An array with max 4 32 Byte topics, topic 1-3 contains indexed parameters of the log.
    * @var Array
    <string>
     * @memberof EthTxLogs
     */
public $topic;
    /**
     * The data containing non-indexed log parameter.
        * @var string
     * @memberof EthTxLogs
     */
    public $data;
    /**
     * Integer of the event index position in the block.
        * @var number
     * @memberof EthTxLogs
     */
    public $logIndex;
    /**
     * Integer of the transaction’s index position, the event was created in.
        * @var number
     * @memberof EthTxLogs
     */
    public $transactionIndex;
    /**
     * Hash of the transaction this event was created in.
        * @var string
     * @memberof EthTxLogs
     */
    public $transactionHash;
}