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
    public $number;
    /**
     * block identifier
* @var string
     * @memberof VetBlock
     */
    public $id;
    /**
     * RLP encoded block size in bytes
* @var number
     * @memberof VetBlock
     */
    public $size;
    /**
     * parent block ID
* @var string
     * @memberof VetBlock
     */
    public $parentID;
    /**
     * block unix timestamp
* @var number
     * @memberof VetBlock
     */
    public $timestamp;
    /**
     * block gas limit (max allowed accumulative gas usage of transactions)
* @var number
     * @memberof VetBlock
     */
    public $gasLimit;
    /**
     * Address of account to receive block reward
* @var string
     * @memberof VetBlock
     */
    public $beneficiary;
    /**
     * accumulative gas usage of transactions
* @var number
     * @memberof VetBlock
     */
    public $gasUsed;
    /**
     * sum of all ancestral blocks' score
* @var number
     * @memberof VetBlock
     */
    public $totalScore;
    /**
     * root hash of transactions in the block
* @var string
     * @memberof VetBlock
     */
    public $txsRoot;
    /**
     * supported txs features bitset
* @var number
     * @memberof VetBlock
     */
    public $txsFeatures;
    /**
     * root hash of accounts state
* @var string
     * @memberof VetBlock
     */
    public $stateRoot;
    /**
     * root hash of transaction receipts
* @var string
     * @memberof VetBlock
     */
    public $receiptsRoot;
    /**
     * the one who signed this block
* @var string
     * @memberof VetBlock
     */
    public $signer;
    /**
     * transactions IDs
* @var Array
<string>
     * @memberof VetBlock
     */
public $transactions;
}