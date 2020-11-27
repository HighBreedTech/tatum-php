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
    blockHash: string;
    /**
     * TRUE if the transaction was successful, FALSE, if the EVM reverted the transaction.
* @var boolean
     * @memberof EthTx
     */
    status: boolean;
    /**
     * Block number where this transaction was in.
* @var number
     * @memberof EthTx
     */
    blockNumber: number;
    /**
     * Address of the sender.
* @var string
     * @memberof EthTx
     */
    from: string;
    /**
     * Gas provided by the sender.
* @var number
     * @memberof EthTx
     */
    gas: number;
    /**
     * Gas price provided by the sender in wei.
* @var string
     * @memberof EthTx
     */
    gasPrice: string;
    /**
     * Hash of the transaction.
* @var string
     * @memberof EthTx
     */
    transactionHash: string;
    /**
     * The data sent along with the transaction.
* @var string
     * @memberof EthTx
     */
    input: string;
    /**
     * The number of transactions made by the sender prior to this one.
* @var number
     * @memberof EthTx
     */
    nonce: number;
    /**
     * Address of the receiver. 'null' when its a contract creation transaction.
* @var string
     * @memberof EthTx
     */
    to: string;
    /**
     * Integer of the transactions index position in the block.
* @var number
     * @memberof EthTx
     */
    transactionIndex: number;
    /**
     * Value transferred in wei.
* @var string
     * @memberof EthTx
     */
    value: string;
    /**
     * The amount of gas used by this specific transaction alone.
* @var number
     * @memberof EthTx
     */
    gasUsed: number;
    /**
     * The total amount of gas used when this transaction was executed in the block.
* @var number
     * @memberof EthTx
     */
    cumulativeGasUsed: number;
    /**
     * The contract address created, if the transaction was a contract creation, otherwise null.
* @var string
     * @memberof EthTx
     */
    contractAddress: string;
    /**
     * Log events, that happened in this transaction.
* @var Array
<EthTxLogs>
     * @memberof EthTx
     */
    logs: EthTxLogs[];
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
    address: string;
    /**
     * An array with max 4 32 Byte topics, topic 1-3 contains indexed parameters of the log.
    * @var Array
    <string>
     * @memberof EthTxLogs
     */
    topic: string[];
    /**
     * The data containing non-indexed log parameter.
        * @var string
     * @memberof EthTxLogs
     */
    data: string;
    /**
     * Integer of the event index position in the block.
        * @var number
     * @memberof EthTxLogs
     */
    logIndex: number;
    /**
     * Integer of the transaction’s index position, the event was created in.
        * @var number
     * @memberof EthTxLogs
     */
    transactionIndex: number;
    /**
     * Hash of the transaction this event was created in.
        * @var string
     * @memberof EthTxLogs
     */
    transactionHash: string;
}