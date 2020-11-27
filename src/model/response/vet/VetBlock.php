<?php

namespace Tatum\model\response\vet;


use Tatum\model\Model;

/**
 *
 * @export
 * @interface VetBlock
 */
class VetBlock extends Model {
    /**
     * block number (height)
* @var number
     * @memberof VetBlock
     */
    number: number;
    /**
     * block identifier
* @var string
     * @memberof VetBlock
     */
    id: string;
    /**
     * RLP encoded block size in bytes
* @var number
     * @memberof VetBlock
     */
    size: number;
    /**
     * parent block ID
* @var string
     * @memberof VetBlock
     */
    parentID: string;
    /**
     * block unix timestamp
* @var number
     * @memberof VetBlock
     */
    timestamp: number;
    /**
     * block gas limit (max allowed accumulative gas usage of transactions)
* @var number
     * @memberof VetBlock
     */
    gasLimit: number;
    /**
     * Address of account to receive block reward
* @var string
     * @memberof VetBlock
     */
    beneficiary: string;
    /**
     * accumulative gas usage of transactions
* @var number
     * @memberof VetBlock
     */
    gasUsed: number;
    /**
     * sum of all ancestral blocks' score
* @var number
     * @memberof VetBlock
     */
    totalScore: number;
    /**
     * root hash of transactions in the block
* @var string
     * @memberof VetBlock
     */
    txsRoot: string;
    /**
     * supported txs features bitset
* @var number
     * @memberof VetBlock
     */
    txsFeatures: number;
    /**
     * root hash of accounts state
* @var string
     * @memberof VetBlock
     */
    stateRoot: string;
    /**
     * root hash of transaction receipts
* @var string
     * @memberof VetBlock
     */
    receiptsRoot: string;
    /**
     * the one who signed this block
* @var string
     * @memberof VetBlock
     */
    signer: string;
    /**
     * transactions IDs
* @var Array
<string>
     * @memberof VetBlock
     */
    transactions: string[];
}