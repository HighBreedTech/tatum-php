<?php

namespace Tatum\model\response\eth;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface EthBlock
 */
import {EthTx} from './EthTx';

class EthBlock extends Model {
    /**
     * Difficulty for this block.
* @var string
     * @memberof EthBlock
     */
    difficulty: string;
    /**
     * The 'extra data' field of this block.
* @var string
     * @memberof EthBlock
     */
    extraData: string;
    /**
     * The maximum gas allowed in this block.
* @var number
     * @memberof EthBlock
     */
    gasLimit: number;
    /**
     * The total used gas by all transactions in this block.
* @var number
     * @memberof EthBlock
     */
    gasUsed: number;
    /**
     * Hash of the block. 'null' when its pending block.
* @var string
     * @memberof EthBlock
     */
    hash: string;
    /**
     * The bloom filter for the logs of the block. 'null' when its pending block.
* @var string
     * @memberof EthBlock
     */
    logsBloom: string;
    /**
     * The address of the beneficiary to whom the mining rewards were given.
* @var string
     * @memberof EthBlock
     */
    miner: string;
    /**
     *
* @var string
     * @memberof EthBlock
     */
    mixHash: string;
    /**
     * Hash of the generated proof-of-work. 'null' when its pending block.
* @var string
     * @memberof EthBlock
     */
    nonce: string;
    /**
     * The block number. 'null' when its pending block.
* @var number
     * @memberof EthBlock
     */
    number: number;
    /**
     * Hash of the parent block.
* @var string
     * @memberof EthBlock
     */
    parentHash: string;
    /**
     *
* @var string
     * @memberof EthBlock
     */
    receiptsRoot: string;
    /**
     * SHA3 of the uncles data in the block.
* @var string
     * @memberof EthBlock
     */
    sha3Uncles: string;
    /**
     * The size of this block in bytes.
* @var number
     * @memberof EthBlock
     */
    size: number;
    /**
     * The root of the final state trie of the block.
* @var string
     * @memberof EthBlock
     */
    stateRoot: string;
    /**
     * The unix timestamp for when the block was collated.
* @var number
     * @memberof EthBlock
     */
    timestamp: number;
    /**
     * Total difficulty of the chain until this block.
* @var string
     * @memberof EthBlock
     */
    totalDifficulty: string;
    /**
     * Array of transactions.
* @var Array
<EthTx>
     * @memberof EthBlock
     */
    transactions: EthTx[];
    /**
     * The root of the transaction trie of the block.
    * @var string
     * @memberof EthBlock
     */
    transactionsRoot: string;
}