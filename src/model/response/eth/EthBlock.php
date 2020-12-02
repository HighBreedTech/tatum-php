<?php

namespace Tatum\model\response\eth;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface EthBlock
 */


class EthBlock extends Model {
    /**
     * Difficulty for this block.
* @var string
     * @memberof EthBlock
     */
    public $difficulty;
    /**
     * The 'extra data' field of this block.
* @var string
     * @memberof EthBlock
     */
    public $extraData;
    /**
     * The maximum gas allowed in this block.
* @var number
     * @memberof EthBlock
     */
    public $gasLimit;
    /**
     * The total used gas by all transactions in this block.
* @var number
     * @memberof EthBlock
     */
    public $gasUsed;
    /**
     * Hash of the block. 'null' when its pending block.
* @var string
     * @memberof EthBlock
     */
    public $hash;
    /**
     * The bloom filter for the logs of the block. 'null' when its pending block.
* @var string
     * @memberof EthBlock
     */
    public $logsBloom;
    /**
     * The address of the beneficiary to whom the mining rewards were given.
* @var string
     * @memberof EthBlock
     */
    public $miner;
    /**
     *
* @var string
     * @memberof EthBlock
     */
    public $mixHash;
    /**
     * Hash of the generated proof-of-work. 'null' when its pending block.
* @var string
     * @memberof EthBlock
     */
    public $nonce;
    /**
     * The block number. 'null' when its pending block.
* @var number
     * @memberof EthBlock
     */
    public $number;
    /**
     * Hash of the parent block.
* @var string
     * @memberof EthBlock
     */
    public $parentHash;
    /**
     *
* @var string
     * @memberof EthBlock
     */
    public $receiptsRoot;
    /**
     * SHA3 of the uncles data in the block.
* @var string
     * @memberof EthBlock
     */
    public $sha3Uncles;
    /**
     * The size of this block in bytes.
* @var number
     * @memberof EthBlock
     */
    public $size;
    /**
     * The root of the final state trie of the block.
* @var string
     * @memberof EthBlock
     */
    public $stateRoot;
    /**
     * The unix timestamp for when the block was collated.
* @var number
     * @memberof EthBlock
     */
    public $timestamp;
    /**
     * Total difficulty of the chain until this block.
* @var string
     * @memberof EthBlock
     */
    public $totalDifficulty;
    /**
     * Array of transactions.
* @var Array
<EthTx>
     * @memberof EthBlock
     */
public $transactions;
    /**
     * The root of the transaction trie of the block.
    * @var string
     * @memberof EthBlock
     */
    public $transactionsRoot;
}